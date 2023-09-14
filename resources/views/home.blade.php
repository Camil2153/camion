@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
@if($esAdmin)
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
                    <a href="fallas" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
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
            borderColor: 'rgba(75, 192, 192)',
            borderWidth: 1
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
                borderColor: 'rgba(75, 192, 192)',
                borderWidth: 1
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

var fechas = evolucionGastosData.map(function(item) {
    return item.fec_gas;
});

var montosGastos = evolucionGastosData.map(function(item) {
    return item.mon_gas;
});


var ctx = document.getElementById('evolucion-gastos-chart').getContext('2d');
var areaChart = new Chart(ctx, {
    type: 'line', // Cambiar a 'line' para el gráfico de área
    data: {
        labels: fechas,
        datasets: [{
            label: 'Evolución de Gastos',
            data: montosGastos,
            backgroundColor: 'rgba(75, 192, 192)',
            borderColor: 'rgba(75, 192, 192)',
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
                    text: 'Fechas'
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
                // ... otros colores para más sistemas
            ],
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
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
    }
});
</script>

@stop
