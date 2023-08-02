<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $cod_ser
 * @property $fec_ser
 * @property $sis_ser
 * @property $act_ser
 * @property $est_ser
 * @property $tip_ser
 * @property $fal_ser
 * @property $det_ser
 * @property $cam_ser
 * @property $tal_ser
 * @property $res_ser
 * @property $tip_int_ser
 * @property $int_ser
 * @property $int_ale_ser
 * @property $ale_ser
 * @property $cos_ser
 * @property $alm_ser
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividade $actividade
 * @property Almacene $almacene
 * @property Camione $camione
 * @property Falla $falla
 * @property Sistema $sistema
 * @property Tallere $tallere
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    protected $primaryKey = 'cod_ser';
    public $incrementing = false;

    static $rules = [
		'cod_ser' => ['required','unique:servicios'],
		'fec_ser' => 'required',
		'sis_ser' => 'required',
		'act_ser' => 'required',
		'est_ser' => 'required',
		'tip_ser' => 'required|in:preventivo,correctivo',
		'det_ser' => 'required',
		'cam_ser' => 'required',
		'res_ser' => 'required',
		'tip_int_ser' => 'required|in:dias,kilometros',
		'int_ser' => 'required',
		'int_ale_ser' => 'required',
		'ale_ser' => 'required',
		'cos_ser' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_ser','fec_ser','sis_ser','act_ser','est_ser','tip_ser','fal_ser','det_ser','cam_ser','tal_ser','res_ser','tip_int_ser','int_ser','int_ale_ser','ale_ser','cos_ser','alm_ser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actividade()
    {
        return $this->hasOne('App\Models\Actividade', 'cod_act', 'act_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function almacene()
    {
        return $this->hasOne('App\Models\Almacene', 'cod_alm', 'alm_ser');
    }
    
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
    public function falla()
    {
        return $this->hasOne('App\Models\Falla', 'cod_fal', 'fal_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sistema()
    {
        return $this->hasOne('App\Models\Sistema', 'cod_sis', 'sis_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tallere()
    {
        return $this->hasOne('App\Models\Tallere', 'nit_tal', 'tal_ser');
    }
    

}
