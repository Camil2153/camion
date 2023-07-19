<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $cod_ser
 * @property $tip_ser_ser
 * @property $cam_ser
 * @property $desc_ser
 * @property $fec_ser
 * @property $kil_ser
 * @property $ace_mot_ser
 * @property $fil_ace_air_com_ser
 * @property $pas_fre_ser
 * @property $des_dis_tam_ser
 * @property $niv_cal_liq_fre_ser
 * @property $aju_lub_com_sus_ser
 * @property $ali_rue_ser
 * @property $cre_dir_ser
 * @property $lub_com_nec_ser
 * @property $exa_sis_esc_ser
 * @property $fun_luc_ser
 * @property $ins_cab_ser
 * @property $con_ele_ser
 * @property $rot_neu_ser
 * @property $ree_neu_ser
 * @property $niv_cal_liq_ref_ser
 * @property $ins_rad_man_ser
 * @property $liq_tra_ser
 * @property $rev_emb_ser
 * @property $niv_cal_liq_tra_ser
 * @property $cos_ser
 * @property $res_ser
 * @property $tal_ser
 * @property $emp_ser
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione $camione
 * @property Empresa $empresa
 * @property Tallere $tallere
 * @property TiposServicio $tiposServicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    protected $primaryKey = 'cod_ser';
    public $incrementing = false;

    static $rules = [
		'cod_ser' => 'required|unique:servicios',
		'tip_ser_ser' => 'required',
		'cam_ser' => 'required',
		'desc_ser' => 'required',
		'fec_ser' => 'required',
		'kil_ser' => 'required',
		'ace_mot_ser' => 'required',
		'fil_ace_air_com_ser' => 'required',
		'pas_fre_ser' => 'required',
		'des_dis_tam_ser' => 'required',
		'niv_cal_liq_fre_ser' => 'required',
		'aju_lub_com_sus_ser' => 'required',
		'ali_rue_ser' => 'required',
		'cre_dir_ser' => 'required',
		'lub_com_nec_ser' => 'required',
		'exa_sis_esc_ser' => 'required',
		'fun_luc_ser' => 'required',
		'ins_cab_ser' => 'required',
		'con_ele_ser' => 'required',
		'rot_neu_ser' => 'required',
		'ree_neu_ser' => 'required',
		'niv_cal_liq_ref_ser' => 'required',
		'ins_rad_man_ser' => 'required',
		'liq_tra_ser' => 'required',
		'rev_emb_ser' => 'required',
		'niv_cal_liq_tra_ser' => 'required',
		'cos_ser' => 'required',
		'res_ser' => 'required',
		'tal_ser' => 'required',
		'emp_ser' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_ser','tip_ser_ser','cam_ser','desc_ser','fec_ser','kil_ser','ace_mot_ser','fil_ace_air_com_ser','pas_fre_ser','des_dis_tam_ser','niv_cal_liq_fre_ser','aju_lub_com_sus_ser','ali_rue_ser','cre_dir_ser','lub_com_nec_ser','exa_sis_esc_ser','fun_luc_ser','ins_cab_ser','con_ele_ser','rot_neu_ser','ree_neu_ser','niv_cal_liq_ref_ser','ins_rad_man_ser','liq_tra_ser','rev_emb_ser','niv_cal_liq_tra_ser','cos_ser','res_ser','tal_ser','emp_ser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function camione()
    {
        return $this->hasOne('App\Models\Camione', 'pla_cam', 'cam_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tallere()
    {
        return $this->hasOne('App\Models\Tallere', 'nit_tal', 'tal_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiposServicio()
    {
        return $this->hasOne('App\Models\TiposServicio', 'cod_tip_ser', 'tip_ser_ser');
    }
    

}
