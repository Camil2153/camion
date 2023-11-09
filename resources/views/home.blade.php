@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@if($esAdmin || $esCoordinador)
<h1>Dashboard</h1>
@endif
@stop

@section('content')
@if($esAdmin || $esCoordinador)
<section class="content">
    <div class="container-fluid">

        @if($gastosPendientes)
        <div class="alert alert-info alert-dismissible">
            <h5><i class="icon fas fa-info"></i> Alerta!</h5>
            Hay gastos pendientes por aprobación en la tabla de gastos.
        </div>
        @endif
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalCamiones }}</h3>
                        <p>Camiones</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-truck"></i>
                    </div>
                    <a href="camiones" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div><br>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>
                            @if($cantidadNuevosCamionesFueraDeServicio > 0)
                                <i class="fas fa-exclamation-triangle" id="icono-camiones"></i>
                            @endif
                            {{ $camionesFueraDeServicio }}
                        </h3>
                        <p>Fuera de servicio</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                    </div>
                    <a href="{{ route('mostrar_camiones_fuera_de_servicio') }}" class="small-box-footer">Más info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div><br>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $totalViajes }}</h3>
                        <p>Viajes</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-route"></i>
                    </div>
                    <a href="viajes" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div><br>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $totalFallas }}</h3>
                        <p>Fallas</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-bug"></i>
                    </div>
                    <a href="{{ route('mostrar_fallas_pendientes_en_proceso') }}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div><br>
        </div>

        <div class="row">
            <section class="col-lg-4 connectedSortable ui-sortable">
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Estados de Fallas por Sistema</h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="chart tab-pane active" id="area-chart"
                                style="position: relative;">
                                <canvas id="estados-falla-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Conductores por Años de Experiencia</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="conductoresPorExperienciaChart"></canvas>
                    </div>
                </div>
            </section>

            <section class="col-lg-4 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">Fallas por Ruta</h3>
                </div>
                <div class="card-body">
                    <canvas id="fallas-por-ruta-chart"></canvas>
                </div>
            </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Servicios por Sistema</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="porcentaje-servicios-chart" style="width: 300px; height: 176px;"></canvas>
                    </div>
                </div>
            </section>
            <section class="col-lg-4 connectedSortable ui-sortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tiempo de Inactividad por Camión</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="tiempo-inactividad-chart" style="width: 300px; height: 176px;"></canvas>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Evolución de Gastos a lo Largo del Tiempo</h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="chart tab-pane active" id="area-chart"
                                style="position: relative;">
                                <canvas id="evolucion-gastos-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</section>
@else
<section class="content">
    <div class="container-fluid">
        <div style="position: relative; width: 100%; height: 650px;">
            <img src="{{ asset('vendor/adminlte/dist/img/robson-hatsukami-morgan-NKr0qBAkU4s-unsplash.jpg') }}" alt="Imagen" style="width: 100%; height: 100%;">
            <div style="position: absolute; top: 20px; right: 20px; background-color: white; padding: 10px; opacity: 0.8;">
                <p>Nombre: {{ auth()->user()->name }}</p>
                <p>Email: {{ auth()->user()->email }}</p>
                <p>Roles:</p>
                <ul>
                    @foreach (auth()->user()->roles as $role)
                        <li>{{ $role->name }}</li>
                    @endforeach
                </ul>
                
                @if (auth()->user()->hasRole('Conductor') && auth()->user()->conductor)
                    <p>Información del Conductor:</p>
                    <ul>
                        <li>DNI: {{ auth()->user()->conductor->dni_con }}</li>
                        <li>Número de Licencia: {{ auth()->user()->conductor->num_lic_con }}</li>
                        <li>Fecha de Vencimiento de Licencia: {{ auth()->user()->conductor->fec_ven_lic_con }}</li>
                        <li>Fecha de Contratación: {{ auth()->user()->conductor->fec_con_con }}</li>
                        <li>Estado: {{ auth()->user()->conductor->est_con }}</li>
                        <li>Fecha de Nacimiento: {{ auth()->user()->conductor->fec_nac_con }}</li>
                        <li>Dirección: {{ auth()->user()->conductor->dir_con }}</li>
                        <li>Número de Teléfono: {{ auth()->user()->conductor->num_tel_con }}</li>
                        <li>Años de Experiencia: {{ auth()->user()->conductor->año_exp_con }}</li>
                        <li>EPS: {{ auth()->user()->conductor->eps_con }}</li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</section>
@endif
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
var conductoresPorExperiencia = @json($conductoresPorExperiencia);

var labels = [];
var data = [];

conductoresPorExperiencia.forEach(function(item) {
    labels.push(item.año_exp_con + ' años');
    data.push(item.total);
});

var ctx = document.getElementById('conductoresPorExperienciaChart').getContext('2d');

var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Número de Conductores',
            data: data,
            backgroundColor: 'rgba(75, 192, 192)',
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                stepSize: 1
            }
        }
    }
});
</script>

<script>
    var fallasPorRuta = @json($fallasPorRuta);

    var labels = [];
    var data = [];

    fallasPorRuta.forEach(function(item) {
        labels.push(item.nom_rut);
        data.push(item.total);
    });

    var ctx = document.getElementById('fallas-por-ruta-chart').getContext('2d');

    var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Número de Fallas',
                data: data,
                backgroundColor: 'rgba(75, 192, 192)',
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    stepSize: 1
                }
            }
        }
    });
</script>

<script>
var evolucionGastosData = @json($evolucionGastosData);

var meses = evolucionGastosData.map(function(item) {
    return item.mes;
});

var totalGastos = evolucionGastosData.map(function(item) {
    return item.total_gastos;
});

var ctx = document.getElementById('evolucion-gastos-chart').getContext('2d');
var areaChart = new Chart(ctx, {
    type: 'line', // Cambiar a 'line' para el gráfico de área
    data: {
        labels: meses,
        datasets: [{
            label: 'Evolución de Gastos',
            data: totalGastos,
            backgroundColor: 'rgba(75, 192, 192)',
            borderColor: 'rgba(0, 0, 0)',
            borderWidth: 1,
            fill: true // Agregar esta línea para rellenar el área bajo la línea
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Monto de Gastos'
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Meses'
                }
            }
        }
    }
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
var estadosFallaPorSistema = @json($estadosFallaPorSistema);

var sistemas = estadosFallaPorSistema.map(function(item) {
    return item.nom_sis;
});

var pendientes = estadosFallaPorSistema.map(function(item) {
    return item.pendiente;
});

var enProceso = estadosFallaPorSistema.map(function(item) {
    return item.proceso;
});

var reparadas = estadosFallaPorSistema.map(function(item) {
    return item.reparada;
});

var ctx = document.getElementById('estados-falla-chart').getContext('2d');
var stackedBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: sistemas,
        datasets: [{
                label: 'Pendiente',
                data: pendientes,
                backgroundColor: 'rgba(220, 53, 69, 0.9)',
            },
            {
                label: 'En Proceso',
                data: enProceso,
                backgroundColor: 'rgba(255, 193, 7, 0.8)',
            },
            {
                label: 'Reparada',
                data: reparadas,
                backgroundColor: 'rgba(40, 167, 69, 0.9)',
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true,
            }
        }
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var porcentajesServicios = @json($porcentajesServicios);

var labels = [];
var data = [];

porcentajesServicios.forEach(function(item) {
    labels.push(item.nom_sis + ' (' + item.porcentaje + '%)');
    data.push(item.porcentaje);
});

var ctx = document.getElementById('porcentaje-servicios-chart').getContext('2d');

var pieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: data,
            backgroundColor: [
                'rgba(40, 167, 69, 0.9)',
                'rgba(75, 192, 192)',
                'rgba(220, 53, 69, 0.9)',
                'rgba(255, 193, 7, 0.8)',
                'rgba(0, 0, 255, 0.6)',
                // ... otros colores para más sistemas
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                position: 'right',
                labels: {
                    boxWidth: 20, // Puedes ajustar el ancho de la caja de los labels
                }
            }
        }
    }
});
</script>

<script>
var tiempoInactividadData = @json($tiempoInactividadPorCamion);

var labels = [];
var data = [];

tiempoInactividadData.forEach(function(item) {
    labels.push(item.pla_cam);
    data.push(item.tiempo_inactividad);
});

var ctx = document.getElementById('tiempo-inactividad-chart').getContext('2d');

var doughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: labels,
        datasets: [{
            data: data,
            backgroundColor: [
                'rgba(220, 53, 69, 0.9)',
                'rgba(40, 167, 69, 0.9)',
                'rgba(0, 0, 255, 0.6)',
                // Puedes agregar más colores aquí para más camiones
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
                position: 'right',
                labels: {
                    boxWidth: 20, // Puedes ajustar el ancho de la caja de los labels
                }
            }
        }
    }
});
</script>

@stop
