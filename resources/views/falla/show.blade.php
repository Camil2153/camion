@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Falla</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Falla</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fallas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Fal:</strong>
                            {{ $falla->cod_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Com Fal:</strong>
                            {{ $falla->com_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Des Fal:</strong>
                            {{ $falla->des_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Fal:</strong>
                            {{ $falla->fec_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Kil Fal:</strong>
                            {{ $falla->kil_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Tie Ina Fal:</strong>
                            {{ $falla->tie_ina_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Gra Fal:</strong>
                            {{ $falla->gra_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Est Act Fal:</strong>
                            {{ $falla->est_act_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Res Det Fal:</strong>
                            {{ $falla->res_det_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Res Rep Fal:</strong>
                            {{ $falla->res_rep_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Acc Fal:</strong>
                            {{ $falla->acc_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Cos Fal:</strong>
                            {{ $falla->cos_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Cam Fal:</strong>
                            {{ $falla->cam_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Tal Fal:</strong>
                            {{ $falla->tal_fal }}
                        </div>
                        <div class="form-group">
                            <strong>Emp Fal:</strong>
                            {{ $falla->emp_fal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
