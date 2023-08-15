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
                            <a href="{{ route('mostrar_camiones_fuera_de_servicio') }}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
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
                <section class="col-lg-7 connectedSortable ui-sortable">
                    <div class="card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Numero de fallas por mes
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 305px;">
                                    <canvas id="fallas-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
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

<!-- ... (código previo) ... -->

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        var fallasPorMes = @json($fallasPorMes);

        var months = [];
        var data = [];

        var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        fallasPorMes.forEach(function(item) {
            months.push(monthNames[item.mes - 1]);
            data.push(item.total);
        });

        var ctx = document.getElementById('fallas-chart').getContext('2d');

        var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: months,
        datasets: [{
            label: 'Número de Fallas por Mes',
            data: data,
            backgroundColor: 'rgba(192, 42, 75, 0.2)',
            borderColor: 'rgba(192, 42, 75, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                ticks: {
                    stepSize: 1,
                    precision: 0,
                    max: 20,
                    min: 1
                }
            },
            x: {
                beginAtZero: true
            }
        }
    }
});

        window.addEventListener('resize', function() {
            chart.resize();
        });
    </script>
@stop