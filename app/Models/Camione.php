<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Camione
 *
 * @property $pla_cam
 * @property $mar_cam
 * @property $mod_cam
 * @property $tip_cam
 * @property $num_eje_cam
 * @property $est_cam
 * @property $kil_cam
 * @property $cap_cam
 * @property $cont_cam
 * @property $con_cam
 * @property $created_at
 * @property $updated_at
 *
 * @property Conductore $conductore
 * @property DocumentosCamione[] $documentosCamiones
 * @property Falla[] $fallas
 * @property Servicio[] $servicios
 * @property Viaje[] $viajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Camione extends Model
{
    
    protected $primaryKey = 'pla_cam';
    public $incrementing = false;

    static $rules = [
        'pla_cam' => ['required','unique:camiones'],
		'mar_cam' => 'required',
		'mod_cam' => 'required',
		'tip_cam' => 'required',
		'num_eje_cam' => 'required',
		'est_cam' => 'sometimes',
		'kil_cam' => 'required',
		'cap_cam' => 'required',
		'con_cam' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pla_cam','mar_cam','mod_cam','tip_cam','num_eje_cam','est_cam','kil_cam','cap_cam','cont_cam','con_cam','est_cam_anterior'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function conductore()
    {
        return $this->hasOne('App\Models\Conductore', 'dni_con', 'con_cam');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentosCamiones()
    {
        return $this->hasMany('App\Models\DocumentosCamione', 'cam_doc_cam', 'pla_cam');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fallas()
    {
        return $this->hasMany('App\Models\Falla', 'cam_fal', 'pla_cam');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'cam_ser', 'pla_cam');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'cam_via', 'pla_cam');
    }
    

}
