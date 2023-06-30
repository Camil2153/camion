<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Falla
 *
 * @property $cod_fal
 * @property $com_fal
 * @property $desc_fal
 * @property $fec_fal
 * @property $kil_fal
 * @property $tie_ina_fal
 * @property $gra_fal
 * @property $est_act_fal
 * @property $res_det_fal
 * @property $res_rep_fal
 * @property $acc_fal
 * @property $cos_fal
 * @property $cam_fal
 * @property $tal_fal
 * @property $emp_fal
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione $camione
 * @property Componente $componente
 * @property Empresa $empresa
 * @property Tallere $tallere
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Falla extends Model
{
    
    protected $primaryKey = 'cod_fal';

    static $rules = [
		'cod_fal' => 'required',
		'desc_fal' => 'required',
		'fec_fal' => 'required',
		'kil_fal' => 'required',
		'tie_ina_fal' => 'required',
		'gra_fal' => 'required',
		'est_act_fal' => 'required',
		'res_det_fal' => 'required',
		'res_rep_fal' => 'required',
		'acc_fal' => 'required',
		'cos_fal' => 'required',
		'cam_fal' => 'required',
		'tal_fal' => 'required',
		'emp_fal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_fal','com_fal','desc_fal','fec_fal','kil_fal','tie_ina_fal','gra_fal','est_act_fal','res_det_fal','res_rep_fal','acc_fal','cos_fal','cam_fal','tal_fal','emp_fal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function camione()
    {
        return $this->hasOne('App\Models\Camione', 'pla_cam', 'cam_fal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function componente()
    {
        return $this->hasOne('App\Models\Componente', 'num_ser_com', 'com_fal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_fal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tallere()
    {
        return $this->hasOne('App\Models\Tallere', 'nit_tal', 'tal_fal');
    }
    

}
