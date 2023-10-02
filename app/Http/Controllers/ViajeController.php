<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use App\Models\Viaje;
use Illuminate\Http\Request;
use App\Models\Camione;
use App\Models\Cliente;
use App\Models\Ruta;
use App\Models\Empresa;
use App\Models\Servicio;
use App\Models\Trazabilidad;

/**
 * Class ViajeController
 * @package App\Http\Controllers
 */
class ViajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:viajes.index')->only('index');
        $this->middleware('can:viajes.create')->only('create', 'store');
        $this->middleware('can:viajes.show')->only('show');
        $this->middleware('can:viajes.edit')->only('edit', 'update');
        $this->middleware('can:viajes.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viajes = Viaje::paginate(1000);

        return view('viaje.index', compact('viajes'))
            ->with('i', (request()->input('page', 1) - 1) * $viajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $viaje = new Viaje();

        $camionesDisponibles = Camione::where('est_cam', 'disponible')->get();

        $camiones = $camionesDisponibles->pluck('pla_cam', 'pla_cam');
        $clientes = Cliente::pluck('nom_cli', 'cod_cli');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $rutasDuraciones = Ruta::pluck('dur_rut', 'cod_rut')->toArray();
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');

        return view('viaje.create', compact('viaje', 'camiones', 'clientes', 'rutas', 'empresas', 'camionesDisponibles', 'rutasDuraciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['est_via' => 'programado']);
        $request->validate([
            'cod_via' => 'required',
            'car_via' => 'required',
            'pes_via' => 'required',
            'est_via' => 'required',
            'fec_sal_via' => 'required',
            'hor_sal_via' => 'required',
            'fec_lle_via' => 'required',
            'hor_lle_via' => 'required',
            'cam_via' => 'required',
            'cli_via' => 'required',
            'rut_via' => 'required',
            'emp_via' => 'required',
        ]);

        $viaje = Viaje::create($request->all());
        $trazabilidad = new Trazabilidad();
        $trazabilidad->cod_tra = $viaje->cod_via; // Incrementar el código autoincremental
        $trazabilidad->dat_pro_tra = now()->format('Y-m-d'); // Fecha de creación del viaje
        $trazabilidad->tim_pro_tra = now()->format('H:i:s'); // Hora de creación del viaje
        $trazabilidad->via_tra = $viaje->cod_via; // Código del viaje recién creado
        $trazabilidad->save();

        $estadoViaje = $request->input('est_via');

        if ($estadoViaje === 'programado' || $estadoViaje === 'en progreso') {
            $camione = Camione::findOrFail($request->input('cam_via'));
            $camione->est_cam = 'en viaje';
            $camione->save();
        } elseif ($estadoViaje === 'completado' || $estadoViaje === 'cancelado') {
            $camione = Camione::findOrFail($request->input('cam_via'));
            $camione->est_cam = 'disponible';
            $camione->save();
        }

        return redirect()->route('viajes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Viaje creado exitosamente.
                                </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $cod_via
     * @return \Illuminate\Http\Response
     */
    public function show($cod_via)
    {
        $viaje = Viaje::find($cod_via);

        // Obtener el camión asociado al viaje
        $camion = $viaje->camione;

        // Obtener todos los servicios asociados al camión
        $servicios = $camion->servicios;

        // Convertir la fecha de llegada del viaje a un objeto Carbon
        $fechaLlegada = Carbon::parse($viaje->fec_lle_via);

        // Variable para almacenar las alertas
        $alertas = [];

        // Variable para controlar si ya se asignó una alerta para el servicio actual
        $alertaAsignada = false;

        // Obtener el conductor asociado al camión
        $conductor = $camion->conductore;

        $serviciosEnAlerta = [];

        if ($conductor) {
            // Convertir la fecha de vencimiento de la licencia a un objeto Carbon
            $fechaVencimientoLicencia = Carbon::parse($conductor->fec_ven_lic_con);
            
            // Calcular la diferencia de días entre la fecha de vencimiento de la licencia y la fecha actual
            $diasRestantesLicencia = now()->diffInDays($fechaVencimientoLicencia, false);
            
            // Verificar si los días restantes son menores a 0 (la licencia está vencida)
            if ($diasRestantesLicencia < 0) {
                // Si los días restantes son menores a 0, significa que la licencia está vencida
                $diasVencida = abs($diasRestantesLicencia); // Obtener el valor absoluto para mostrar el número positivo
                $alertas[] = [
                    'mensaje' => 'La licencia del conductor venció. Hace ' . $diasVencida . ' días.',
                    'color' => 'red', // Podemos asignar un color rojo para indicar que está vencida
                ];
            
                // Poner el estado del conductor en "Bloqueado" ya que la licencia está vencida
                $conductor->est_con = 'bloqueado';
                $conductor->save();
            } elseif ($diasRestantesLicencia <= 30) {
                // Si los días restantes son mayores o iguales a 0 y menores o iguales a 30
                // Verificar si la licencia está próxima a vencerse (30 días o menos)
                if ($diasRestantesLicencia <= 9) {
                    $colorAlertaLicencia = 'red';
                } elseif ($diasRestantesLicencia <= 16) {
                    $colorAlertaLicencia = 'orange';
                } elseif ($diasRestantesLicencia <= 23) {
                    $colorAlertaLicencia = 'yellow';
                } elseif ($diasRestantesLicencia <= 30) {
                    $colorAlertaLicencia = 'blue';
                } else {
                    // Los días restantes son mayores a 30, por lo que la licencia esta activa
                    $conductor->est_con = 'activo';
                    $conductor->save();
                }
            
                // Agregar la alerta de licencia al array de alertas, pero solo si la licencia no vence hoy
                if ($diasRestantesLicencia != 0) {
                    $alertas[] = [
                        'mensaje' => 'La licencia del conductor está próxima a vencerse. Quedan ' . $diasRestantesLicencia . ' días.',
                        'color' => $colorAlertaLicencia,
                    ];
                } else {
                    // Si la licencia vence hoy, mostramos una alerta especial en rojo
                    $alertas[] = [
                        'mensaje' => 'La licencia del conductor vence hoy.',
                        'color' => 'red',
                    ];
                    // Poner el estado del conductor en "Bloqueado" ya que la licencia está vencida
                    $conductor->est_con = 'bloqueado';
                    $conductor->save();
                }
            }
        }
        
        // Obtener el registro de documentos del camión
        $documentosCamion = $camion->documentosCamiones;
        
        foreach ($documentosCamion as $documento) {
            // Verificar si el documento está vigente
            if ($documento->vig_doc_cam !== null) {
                $fechaVencimientoDocumentoCamion = Carbon::parse($documento->vig_doc_cam);
                $diasRestantes = now()->diffInDays($fechaVencimientoDocumentoCamion, false);
        
                // Verificar si los días restantes son mayores a 30
                if ($diasRestantes > 30) {
                    // Poner el estado del documento del camion en "válido"
                    $documento->est_doc_cam = 'válido';
                    $documento->save();
                    // Poner el estado del camión en "Disponible" ya que el documento es válido
                    $camion->est_cam = 'disponible';
                    $camion->save();
                    continue; // No se cumple la condición, no se agrega alerta y se pasa al siguiente documento
                }
        
                // Verificar si los días restantes son mayores o iguales a 0
                if ($diasRestantes >= 0) {
                    // Verificar si el documento está próximo a vencerse (30 días o menos)
                    if ($diasRestantes == 0) {
                        // El documento vence hoy
                        $alertas[] = [
                            'mensaje' => 'El documento ' . $documento->nom_doc_cam . ' vence hoy.',
                            'color' => 'red',
                        ];
                        // Poner el estado del documento del camion en "vencido"
                        $documento->est_doc_cam = 'vencido';
                        $documento->save();
                        // Poner el estado del camión en "Fuera de servicio" si el documento está vencido
                        $camion->est_cam = 'fuera de servicio';
                        $camion->save();
                    } elseif ($diasRestantes <= 9) {
                        $colorAlertaDocumento = 'red';
                    } elseif ($diasRestantes <= 16) {
                        $colorAlertaDocumento = 'orange';
                    } elseif ($diasRestantes <= 23) {
                        $colorAlertaDocumento = 'yellow';
                    } else {
                        $colorAlertaDocumento = 'blue';
                    }
        
                    // Agregar la alerta del documento al array de alertas, pero solo si el documento no vence hoy
                    if ($diasRestantes != 0) {
                        $alertas[] = [
                            'mensaje' => 'El documento ' . $documento->nom_doc_cam . ' está próximo a vencerse. Quedan ' . $diasRestantes . ' días.',
                            'color' => $colorAlertaDocumento,
                        ];
                    }
                } else {
                    // Si los días restantes son menores a 0, significa que el documento está vencido
                    $diasVencido = abs($diasRestantes); // Obtener el valor absoluto para mostrar el número positivo
                    $alertas[] = [
                        'mensaje' => 'El documento ' . $documento->nom_doc_cam . ' venció. Hace ' . $diasVencido . ' días.',
                        'color' => 'red', // Podemos asignar un color rojo para indicar que está vencido
                    ];
            
                    // Poner el estado del camión en "Fuera de servicio" ya que el documento está vencido
                    $camion->est_cam = 'fuera de servicio';
                    $camion->save();
                    // Poner el estado del documento del camion en "vencido"
                    $documento->est_doc_cam = 'vencido';
                    $documento->save();
                }
            }   
        }                
    
        // Agrupar los servicios por los primeros 4 dígitos del código
        $gruposServicios = [];
        foreach ($servicios as $servicio) {
            $codigoGrupo = substr($servicio->cod_ser, 0, 4);
            if (!isset($gruposServicios[$codigoGrupo])) {
                $gruposServicios[$codigoGrupo] = [];
            }
            $gruposServicios[$codigoGrupo][] = $servicio;
        }

        // Iterar sobre los grupos de servicios
        foreach ($gruposServicios as $grupo) {
            // Encontrar el servicio más reciente dentro del grupo
            $servicioReciente = null;
            foreach ($grupo as $servicio) {
                if ($servicioReciente === null || $servicio->fec_ser > $servicioReciente->fec_ser) {
                    $servicioReciente = $servicio;
                }
            }
            
            // Reestablecer la variable $alertaAsignada para el nuevo servicio
            $alertaAsignada = false;
            // Convertir la fecha del servicio a un objeto Carbon
            $fechaServicio = Carbon::parse($servicioReciente->fec_ser);

            // Verificar el tipo de intervalo seleccionado (días o kilómetros)
            if ($servicioReciente->tip_int_ser === 'dias') {
                // Calcular la fecha límite (fecha del servicio + intervalo de tiempo en días)
                $intervalo = $servicioReciente->int_ser;
                $fechaLimite = $fechaServicio->copy()->addDays($intervalo);
            } elseif ($servicioReciente->tip_int_ser === 'kilometros') {
                // Calcular el kilometraje límite (kilometraje del camión + intervalo de kilometraje del servicio)
                $intervalo = $servicioReciente->int_ser;
                $kilometrajeLimite = $camion->kil_cam + $intervalo;
            }

            // Calcular el kilometraje esperado (kilometraje del camión + distancia de la ruta)
            $kilometrajeEsperado = $camion->kil_cam + $viaje->ruta->dis_rut;

            // intervalo dias/kilometros previos para mostrar la alerta
            $intervaloPrevio = $servicioReciente->int_ale_ser;

            // Verificar si se cumple el intervalo de tiempo y no se ha asignado una alerta para el servicio actual
            if (isset($fechaLimite) && $fechaLimite->lte($fechaLlegada) && !$alertaAsignada) {
                // Rojo si la fecha de llegada excede la fecha limite
                $colorAlerta = 'red';
                // Poner el estado del camión en "Fuera de servicio" si la fecha de llegada excede la fecha limite
                $camion->est_cam = 'fuera de servicio';
                $camion->save();
                $alertaAsignada = true; // Se asigna la alerta y se marca como asignada
            } elseif (isset($fechaLimite) && $fechaLimite->diffInDays($fechaLlegada) <= round($intervaloPrevio * 0.33) && !$alertaAsignada) {
                // Naranja si la fecha de llegada está al 33% o menos dias de la fecha limite
                $colorAlerta = 'orange';
                $alertaAsignada = true; // Se asigna la alerta y se marca como asignada
            } elseif (isset($fechaLimite) && $fechaLimite->diffInDays($fechaLlegada) <= round($intervaloPrevio * 0.66) && !$alertaAsignada) {
                // Amarillo si la fecha de llegada está al 66% o menos dias de la fecha limite
                $colorAlerta = 'yellow';
                $alertaAsignada = true; // Se asigna la alerta y se marca como asignada
            } elseif (isset($fechaLimite) && $fechaLimite->diffInDays($fechaLlegada) <= round($intervaloPrevio * 0.99) && !$alertaAsignada) {
                // Verde si la fecha de llegada está al 66% o menos dias de la fecha limite
                $colorAlerta = 'blue';
                $alertaAsignada = true; // Se asigna la alerta y se marca como asignada
            } elseif (isset($kilometrajeLimite) && $kilometrajeLimite <= $kilometrajeEsperado && !$alertaAsignada) {
                // Rojo si el kilometraje esperado excede el kilometraje límite
                $colorAlerta = 'red';
                // Poner el estado del camión en "Fuera de servicio" si el kilometraje esperado excede el kilometraje límite
                $camion->est_cam = 'fuera de servicio';
                $camion->save();
                $alertaAsignada = true; // Se asigna la alerta y se marca como asignada
            } elseif (isset($kilometrajeLimite) && ($kilometrajeLimite - $kilometrajeEsperado) <= round($intervaloPrevio * 0.33) && !$alertaAsignada) {
                // Naranja si el kilometraje esperado está al 33% o menos kilometros del kilometraje límite
                $colorAlerta = 'orange';
                $alertaAsignada = true; // Se asigna la alerta y se marca como asignada
            } elseif (isset($kilometrajeLimite) && ($kilometrajeLimite - $kilometrajeEsperado) <= round($intervaloPrevio * 0.66) && !$alertaAsignada) {
                // Amarillo si el kilometraje esperado está al 66% o menos kilometros del kilometraje límite
                $colorAlerta = 'yellow';
                $alertaAsignada = true; // Se asigna la alerta y se marca como asignada
            } elseif (isset($kilometrajeLimite) && ($kilometrajeLimite - $kilometrajeEsperado) <= round($intervaloPrevio * 0.99) && !$alertaAsignada) {
                // Verde si el kilometraje esperado está al 99% o menos kilometros del kilometraje límite
                $colorAlerta = 'blue';
                $alertaAsignada = true; // Se asigna la alerta y se marca como asignada
            } else {
                // Si no se cumple ninguna condición, resetear el valor de $alertaAsignada para el siguiente servicio
                $alertaAsignada = false;
            }

            // Verificar si se cumple alguna de las condiciones, agregar la alerta al array de alertas con su color
            if ($alertaAsignada) {
                $diasRestantesAlerta = isset($fechaLimite) ? now()->diffInDays($fechaLimite, false) : null;
                $diasVencidosAlerta = isset($fechaLimite) ? abs($diasRestantesAlerta) : null;

                // Calcular los kilómetros restantes o excedidos para la alerta
                $kilometrosRestantesAlerta = isset($kilometrajeLimite) ? $kilometrajeLimite - $kilometrajeEsperado : null;
                $kilometrosExcedidosAlerta = isset($kilometrajeLimite) && $kilometrajeEsperado > $kilometrajeLimite ? $kilometrajeEsperado - $kilometrajeLimite : null;

                $mensajePrincipal = $servicioReciente->ale_ser;
                $mensajeAdicional = '';

                if ($servicioReciente->tip_int_ser === 'dias') {
                    if ($diasRestantesAlerta !== null) {
                        if ($diasRestantesAlerta > 0) {
                            $mensajeAdicional = 'Quedan ' . $diasRestantesAlerta . ' días.';
                        } elseif ($diasRestantesAlerta === 0) {
                            $mensajeAdicional = 'Vence hoy.';
                        } else {
                            $mensajeAdicional = 'Se excedió hace ' . abs($diasVencidosAlerta) . ' días.';
                        }
                    } elseif ($diasVencidosAlerta !== null) {
                        $mensajeAdicional = 'Se excedió hace ' . $diasVencidosAlerta . ' días.';
                    }
                } elseif ($servicioReciente->tip_int_ser === 'kilometros') {
                    if ($kilometrosRestantesAlerta !== null) {
                        if ($kilometrosRestantesAlerta >= 0) {
                            $mensajeAdicional = 'Quedan ' . number_format($kilometrosRestantesAlerta, 2) . ' kilómetros.';
                        } else {
                            $mensajeAdicional = 'Se excedió hace ' . number_format(abs($kilometrosRestantesAlerta), 2) . ' kilómetros.';
                        }
                    } elseif ($kilometrosExcedidosAlerta !== null) {
                        $mensajeAdicional = 'Se excedió hace ' . number_format($kilometrosExcedidosAlerta, 2) . ' kilómetros.';
                    }
                }
                
                // Agregar la condición para vencimiento hoy solo si no hay otro mensaje adicional
                if (isset($fechaLimite) && $fechaLimite->isToday() && $mensajeAdicional === '') {
                    $mensajeAdicional = 'Vence hoy.';
                }
                
                // Agregar los enunciados al arreglo de la alerta
                $alerta = [
                    'mensaje' => $mensajePrincipal,
                    'color' => $colorAlerta,
                    'mensaje_adicional' => $mensajeAdicional,
                ];
                
                $alertas[] = $alerta;

            // Verificar si el servicio actual está en alerta y agregarlo a la lista de servicios en alerta
            $servicioEnAlerta = [
                'codigo' => $servicioReciente->cod_ser,
                'fecha' => isset($fechaLimite) ? $fechaLimite->format('Y-m-d') : null,
                'categoria' => $servicioReciente->tip_ser,
                'monto' => $servicioReciente->cos_ser,
            ];

            $serviciosEnAlerta[] = $servicioEnAlerta;
        
            }
        }

        // Retornar la vista con los datos del viaje y las alertas
        return view('viaje.show', compact('viaje', 'alertas', 'serviciosEnAlerta'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_via
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_via)
    {
        $viaje = Viaje::find($cod_via);
        $camiones = Camione::where('est_cam', 'disponible')->pluck('pla_cam', 'pla_cam');
        $clientes = Cliente::pluck('nom_cli', 'cod_cli');
        $rutas = Ruta::pluck('nom_rut', 'cod_rut');
        $rutasDuraciones = Ruta::pluck('dur_rut', 'cod_rut')->toArray();
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
    
        // Obtén todos los camiones disponibles
        $camionesDisponibles = Camione::where('est_cam', 'disponible')->get();
    
        // Pluck solo los camiones disponibles para usar en el formulario de edición
        $camiones = $camionesDisponibles->pluck('pla_cam', 'pla_cam')->toArray();
    
        // Agrega el camión asignado al viaje actual a la lista de camiones disponibles
        // Esto asegura que el camión asignado siempre aparezca en el formulario
        if (!in_array($viaje->cam_via, $camiones)) {
            $camiones[$viaje->cam_via] = $viaje->cam_via;
        }
    
        return view('viaje.edit', compact('viaje', 'camiones', 'clientes', 'rutas', 'empresas', 'rutasDuraciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Viaje $viaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viaje $viaje)
    {
        // Validar los campos del formulario, excepto 'cod_via'
        $request->validate(Arr::except(Viaje::$rules, 'cod_via'));

        // Verificar si el valor de 'cod_via' ha cambiado
        if ($request->input('cod_via') !== $viaje->cod_via) {
            // Validar 'cod_via' como único en la tabla 'viajes'
            $request->validate([
                'cod_via' => 'required|unique:viajes,cod_via',
                'car_via' => 'required',
                'pes_via' => 'required',
                'est_via' => 'required',
                'fec_sal_via' => 'required',
                'hor_sal_via' => 'required',
                'fec_lle_via' => 'required',
                'hor_lle_via' => 'required',
                'cam_via' => 'required',
                'cli_via' => 'required',
                'rut_via' => 'required',
                'emp_via' => 'required',
            ]);
        }

        // Actualizar los atributos del modelo Viaje
        $viaje->update($request->all());
        

        $estadoViaje = $request->input('est_via');

        if ($estadoViaje === 'en progreso') {
            // Buscar la trazabilidad asociada al viaje
            $trazabilidad = Trazabilidad::where('via_tra', $viaje->cod_via)->first();
    
            // Verificar si se encontró la trazabilidad
            if ($trazabilidad) {
                // Actualizar la fecha y hora en campos dat_enp_tra y tim_enp_tra
                $trazabilidad->dat_enp_tra = now()->toDateString();
                $trazabilidad->tim_enp_tra = now()->toTimeString();
                $trazabilidad->save();
            }
        } elseif($estadoViaje === 'completado'){

            // Obtener la distancia de la ruta asociada al viaje
            $distanciaRuta = $viaje->ruta->dis_rut;
            
            // Obtener el camión asociado al viaje
            $camion = Camione::findOrFail($viaje->cam_via);
            
            // Sumar la distancia de la ruta al kilometraje del camión
            $camion->kil_cam += $distanciaRuta;
            
            // Guardar los cambios en el camión
            $camion->save();
        
            // Buscar la trazabilidad asociada al viaje
            $trazabilidad = Trazabilidad::where('via_tra', $viaje->cod_via)->first();
                
            // Verificar si se encontró la trazabilidad
            if ($trazabilidad) {
                // Actualizar la fecha y hora en campos dat_enp_tra y tim_enp_tra
                $trazabilidad->dat_com_tra = now()->toDateString();
                $trazabilidad->tim_com_tra = now()->toTimeString();
                $trazabilidad->save();
            }
        } else{
              // Buscar la trazabilidad asociada al viaje
              $trazabilidad = Trazabilidad::where('via_tra', $viaje->cod_via)->first();
                    
              // Verificar si se encontró la trazabilidad
              if ($trazabilidad) {
                  // Actualizar la fecha y hora en campos dat_enp_tra y tim_enp_tra
                  $trazabilidad->dat_can_tra = now()->toDateString();
                  $trazabilidad->tim_can_tra = now()->toTimeString();
                  $trazabilidad->save();
              }
        }
        if ($estadoViaje === 'programado' || $estadoViaje === 'en progreso') {
            $camione = Camione::findOrFail($request->input('cam_via'));
            $camione->est_cam = 'en viaje';
            $camione->save();
        } elseif ($estadoViaje === 'completado' || $estadoViaje === 'cancelado') {
            $camione = Camione::findOrFail($request->input('cam_via'));
            $camione->est_cam = 'disponible';
            $camione->save();
        }

        return redirect()->route('viajes.index')
            ->with('success', '<div class="alert alert-success alert-dismissible">
                                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                    Viaje actualizado exitosamente.
                                </div>');
    }

    /**
     * @param string $cod_via
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_via)
    {
        try {
            // Intenta eliminar el registro del camión
            $viaje = Viaje::find($cod_via);
            if (!$viaje) {
                return redirect()->route('viajes.index')
                    ->with('error', '<div class="alert alert-danger alert-dismissible">
                                      <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                      El viaje no existe.
                                    </div>');
            }
    
            $viaje->delete();
    
            return redirect()->route('viajes.index')
                ->with('success', '<div class="alert alert-success alert-dismissible">
                                      <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                                      Viaje eliminado exitosamente.
                                    </div>');
        } catch (\PDOException $e) {
            $errorMessage = '';
            if ($e->getCode() == "23000" && strpos($e->getMessage(), "Cannot delete or update a parent row") !== false) {
                $errorMessage = 'Estás tratando de realizar una acción que viola las restricciones de integridad referencial.';
            } else {
                $errorMessage = 'Ha ocurrido un error al intentar eliminar el viaje: ' . $e->getMessage();
            }
    
            return redirect()->route('viajes.index')
                ->with('error', '<div class="alert alert-danger alert-dismissible">
                                  <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                  ' . $errorMessage . '
                                </div>');
        }
    }
}