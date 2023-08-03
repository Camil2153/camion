@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
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
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop