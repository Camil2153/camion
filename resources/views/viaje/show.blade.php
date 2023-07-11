@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Viaje</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
<<<<<<< HEAD
                    <div class="float-left">
                            <span class="card-title"> Orden de Trabajo para el vehiculo <strong>{{ $viaje->cam_via }}</strong> Orden numero: <strong><span style="color: red;">{{ $viaje->cod_via }}</span></strong></span>
                        </div>
=======
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('viajes.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
<<<<<<< HEAD
                         
                                <div class="form-group">
                                    <strong>Fecha de Salida:</strong>
                                    {{ $viaje->fec_sal_via }}, {{ $viaje->hor_sal_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Fecha de Llegada:</strong>
                                    {{ $viaje->fec_lle_via }}, {{ $viaje->hor_lle_via }}
                                </div>
                               
=======
                                <div class="form-group">
                                    <strong>Código:</strong>
                                    {{ $viaje->cod_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Fecha de Salida:</strong>
                                    {{ $viaje->fec_sal_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Hora de Salida:</strong>
                                    {{ $viaje->hor_sal_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Camion:</strong>
                                    {{ $viaje->cam_via }}
                                </div>
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
                                <div class="form-group">
                                    <strong>Cliente:</strong>
                                    {{ $viaje->cliente->nom_cli }}
                                </div>
                                <div class="form-group">
                                    <strong>Ruta:</strong>
                                    {{ $viaje->ruta->nom_rut }}
                                </div>
                                <div class="form-group">
                                    <strong>Empresa:</strong>
                                    {{ $viaje->empresa->nom_emp }}
                                </div>
                            </div>
                            <div class="col-md-6">
<<<<<<< HEAD
                            <div class="form-group">
    <strong>Estado:</strong>
    @php
        $estadoClass = '';
        switch($viaje->est_via) {
            case 'programado':
                $estadoClass = 'text-primary';
                break;
            case 'en progreso':
                $estadoClass = 'text-warning';
                break;
            case 'completado':
                $estadoClass = 'text-success';
                break;
            case 'cancelado':
                $estadoClass = 'text-danger';
                break;
        }
    @endphp
    <span class="{{ $estadoClass }}"><strong>{{ $viaje->est_via }}</strong></span>
</div>

=======
                                <div class="form-group">
                                    <strong>Estado:</strong>
                                    {{ $viaje->est_via }}
                                </div>
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
                                <div class="form-group">
                                    <strong>Carga:</strong>
                                    {{ $viaje->car_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Peso:</strong>
                                    {{ $viaje->pes_via }}
                                </div>
<<<<<<< HEAD
                              
=======
                                <div class="form-group">
                                    <strong>Fecha de Llegada:</strong>
                                    {{ $viaje->fec_lle_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Hora de Llegada:</strong>
                                    {{ $viaje->hor_lle_via }}
                                </div>
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
                                <div class="form-group">
                                    <strong>Kilometraje:</strong>
                                    {{ $viaje->kil_via }}
                                </div>
                                <div class="form-group">
                                    <strong>Combustible:</strong>
                                    {{ $viaje->com_via }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
<<<<<<< HEAD
                        <details>
                            <summary>Gastos</summary>
                            <div class="card-body">
                                <table class="table">
=======
                        <h3 class="card-title">Tabla de gastos</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Fecha</th>
                                    <th>Categoría</th>
                                    <th>Monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalMonto = 0;
                                @endphp
                                @if ($viaje && $viaje->gastos)
                                    @foreach ($viaje->gastos as $gasto)
                                        <tr>
                                            <td>{{ $gasto->cod_gas }}</td>
                                            <td>{{ $gasto->fec_gas }}</td>
                                            <td>{{ $gasto->categoriasGasto->nom_cat_gas }}</td>
                                            <td>{{ $gasto->mon_gas }}</td>
                                        </tr>
                                        @php
                                            $totalMonto += $gasto->mon_gas;
                                        @endphp
                                    @endforeach
                                    <tr>
                                        <td colspan="3"><strong>Total</strong></td>
                                        <td>{{ number_format($totalMonto, 2, '.', ',') }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD

    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <details>
                <summary>Informacion del Camion</summary>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Placa del Camion:</strong>
                                {{ $viaje->camione->pla_cam }}
                            </div>
                            <div class="form-group">
                                <strong>Marca:</strong>
                                {{ $viaje->camione->mar_cam }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Modelo:</strong>
                                {{ $viaje->camione->mod_cam }}
                            </div>
                            <div class="form-group">
                                <strong>Tipo:</strong>
                                {{ $viaje->camione->tip_cam }}
                            </div>
                        </div>
                    </div>
                    <!-- Agrega aquí los demás campos del camión que deseas mostrar -->
                </div>
            </details>
        </div>
    </div>
</div>


    </section>
=======
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
