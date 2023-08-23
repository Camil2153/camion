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
                        <h3>{{ $camionesFueraDeServicio }}</h3>
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
                        <h3>{{ $totalRutas }}</h3>
                        <p>Rutas</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-route"></i>
                    </div>
                    <a href="rutas" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
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

            <section class="col-lg-6 connectedSortable ui-sortable">
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Distribución de Estados de Fallas por Sistema</h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="chart tab-pane active" id="area-chart"
                                style="position: relative; height: 305px;">
                                <canvas id="estados-falla-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Evolución de Gastos a lo Largo del Tiempo</h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="chart tab-pane active" id="area-chart"
                                style="position: relative; height: 305px;">
                                <canvas id="evolucion-gastos-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Viajes: Consumo de Combustible vs. Duración vs. Peso de Carga</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="bubbleChart"></canvas>
                    </div>
                </div>
            </section>

            <section class="col-lg-6 connectedSortable ui-sortable">
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Relación entre Peso de Carga y Consumo de Combustible en Viajes</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="scatter-chart"></canvas>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Distribución de Servicios por Sistema</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="porcentaje-servicios-chart"></canvas>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Distribución de Conductores por Años de Experiencia</h3>
                    </div>
                    <div class="card-body">
                        <canvas id="conductoresPorExperienciaChart"></canvas>
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
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
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
var viajes = @json($viajes); // Reemplaza con tus datos de viajes

var pesosCarga = viajes.map(function(viaje) {
    return viaje.pes_via;
});

var consumosCombustible = viajes.map(function(viaje) {
    return viaje.com_via;
});

var ctx = document.getElementById('scatter-chart').getContext('2d');
var scatterChart = new Chart(ctx, {
    type: 'scatter',
    data: {
        datasets: [{
            label: 'Relación entre Peso de Carga y Consumo de Combustible',
            data: viajes.map(function(viaje) {
                return {
                    x: viaje.pes_via,
                    y: viaje.com_via
                };
            }),
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            pointRadius: 5,
            pointHoverRadius: 8
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                type: 'linear',
                position: 'bottom',
                title: {
                    display: true,
                    text: 'Peso de Carga'
                }
            },
            y: {
                type: 'linear',
                title: {
                    display: true,
                    text: 'Consumo de Combustible'
                }
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
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var bubbleData = @json($viajesData);

// Crear el gráfico de burbujas
var ctx = document.getElementById('bubbleChart').getContext('2d');
var bubbleChart = new Chart(ctx, {
    type: 'bubble',
    data: {
        datasets: [{
            label: 'Viajes',
            data: bubbleData.map(viaje => ({
                x: viaje.duracion, // Duración en minutos
                y: viaje.com_via, // Consumo de Combustible
                r: viaje.pes_via, // Peso de Carga
                backgroundColor: getColorForState(viaje
                .est_via), // Color basado en el estado
                label: viaje.est_via // Etiqueta del estado
            })),
        }]
    },
    options: {
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Duración del Viaje (minutos)'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Consumo de Combustible'
                }
            }
        }
    }
});

// Función para obtener color basado en el estado del viaje
function getColorForState(state) {
    // Definir colores según los estados
    var colors = {
        'programado': 'rgba(54, 162, 235, 0.6)',
        'en progreso': 'rgba(255, 206, 86, 0.6)',
        'completado': 'rgba(99, 224, 99, 0.6)',
        'cancelado': 'rgba(255, 99, 132, 0.6)',
        // ... agregar más colores para otros estados
    };

    return colors[state];
}
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
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
            },
            {
                label: 'En Proceso',
                data: enProceso,
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
            },
            {
                label: 'Reparada',
                data: reparadas,
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
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
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(75, 192, 192, 0.6)',
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
@stop