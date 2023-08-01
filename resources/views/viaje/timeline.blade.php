<!-- Código de la vista timeline.blade.php -->
@extends('adminlte::page')

@section('title', 'Trazabilidad de Estado del Viaje')

@section('content_header')
    <h1>Trazabilidad de Estado del Viaje</h1>
@stop

@section('content')
    <!-- Código de la vista... -->
    <div class="card">
        <!-- ... -->
    </div>
    <!-- ... -->
    <div class="timeline">
        @foreach ($timeline as $evento)
            <div class="timeline-item">
                <div class="timeline-date">
                    {{ $evento['fecha'] }}
                </div>
                <div class="timeline-content">
                    <h4>{{ $evento['estado'] }}</h4>
                </div>
            </div>
        @endforeach
    </div>
    <!-- ... -->
@endsection

<!-- CSS y estilos del timeline... -->

<!-- CSS y estilos del timeline... -->

@section('css')
    <style>
        /* Estilos del timeline... */

        /* Opcional: Puedes agregar estilos adicionales específicos para cada estado */
        .timeline-content h4 {
            color: #007bff; /* Azul para "Programado" */
        }

        .timeline-content h4:after {
            content: " - En progreso"; /* Texto adicional para "En progreso" */
            color: #ffc107; /* Amarillo para "En progreso" */
        }

        .timeline-content h4:after {
            content: " - Completado"; /* Texto adicional para "Completado" */
            color: #28a745; /* Verde para "Completado" */
        }
    </style>
@endsection

