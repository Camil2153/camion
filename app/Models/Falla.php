<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Falla
 *
 * @property $cod_fal
 * @property $desc_fal
 * @property $fec_fal
 * @property $kil_fal
 * @property $gra_fal
 * @property $est_act_fal
 * @property $res_det_fal
 * @property $sis_fal
 * @property $cam_fal
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione $camione
 * @property Servicio[] $servicios
 * @property Sistema $sistema
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Falla extends Model
{
    
    protected $primaryKey = 'cod_fal';
    public $incrementing = false;

    static $rules = [
		'cod_fal' => 'required|unique:fallas',
		'desc_fal' => 'required',
		'fec_fal' => 'required',
		'kil_fal' => 'required',
		'gra_fal' => 'required',
		'est_act_fal' => 'sometimes',
		'res_det_fal' => 'required',
		'sis_fal' => 'required',
		'cam_fal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_fal','desc_fal','fec_fal','kil_fal','gra_fal','est_act_fal','res_det_fal','sis_fal','cam_fal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function camione()
    {
        return $this->hasOne('App\Models\Camione', 'pla_cam', 'cam_fal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'fal_ser', 'cod_fal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sistema()
    {
        return $this->hasOne('App\Models\Sistema', 'cod_sis', 'sis_fal');
    }
    

}
