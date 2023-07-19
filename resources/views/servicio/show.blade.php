@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ver Servicio</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-secundary border border-secondary btn-sm" href="{{ route('servicios.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $servicio->cod_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Servicio:</strong>
                            {{ $servicio->tiposServicio->nom_tip_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Camion:</strong>
                            {{ $servicio->cam_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $servicio->desc_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $servicio->fec_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $servicio->kil_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Se cambió el aceite del motor:</strong>
                            @if ($servicio->ace_mot_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se reemplazaron los filtros de aceite, aire y combustible:</strong>
                            @if ($servicio->fil_ace_air_com_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se ajustaron las pastillas de freno:</strong>
                            @if ($servicio->pas_fre_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se verificó el desgaste de los discos y tambores:</strong>
                            @if ($servicio->des_dis_tam_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se comprobó el nivel y la calidad del líquido de frenos:</strong>
                            @if ($servicio->niv_cal_liq_fre_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se ajustaron y lubricaron los componentes de la suspensión:</strong>
                            @if ($servicio->aju_lub_com_sus_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se alinearon las ruedas:</strong>
                            @if ($servicio->ali_rue_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se ajustó la cremallera de dirección:</strong>
                            @if ($servicio->cre_dir_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se lubricaron los componentes de la dirección:</strong>
                            @if ($servicio->lub_com_nec_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se examinó el sistema de escape:</strong>
                            @if ($servicio->exa_sis_esc_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se verificó el funcionamiento de las luces:</strong>
                            @if ($servicio->fun_luc_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se inspeccionó el cableado:</strong>
                            @if ($servicio->ins_cab_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se revisaron los conectores eléctricos:</strong>
                            @if ($servicio->con_ele_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se rotaron los neumáticos:</strong>
                            @if ($servicio->rot_neu_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se reemplazaron los neumáticos:</strong>
                            @if ($servicio->ree_neu_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se verificó el nivel y la calidad del líquido refrigerante:</strong>
                            @if ($servicio->niv_cal_liq_ref_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se inspeccionó el radiador y las mangueras:</strong>
                            @if ($servicio->ins_rad_man_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se cambió el líquido de la transmisión:</strong>
                            @if ($servicio->liq_tra_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se revisó el embrague:</strong>
                            @if ($servicio->rev_emb_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Se verificó el nivel y la calidad del líquido de la transmisión:</strong>
                            @if ($servicio->niv_cal_liq_tra_ser)
                                Sí
                            @else
                                No
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $servicio->cos_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Responsable:</strong>
                            {{ $servicio->res_ser }}
                        </div>
                        <div class="form-group">
                            <strong>Taller:</strong>
                            {{ $servicio->tallere->nom_tal }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $servicio->empresa->nom_emp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop