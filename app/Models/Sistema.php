<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sistema
 *
 * @property $cod_sis
 * @property $nom_sis
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividade[] $actividades
 * @property Componente[] $componentes
 * @property Falla[] $fallas
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sistema extends Model
{

    protected $primaryKey = 'cod_sis';
    public $incrementing = false;
    
    static $rules = [
		'cod_sis' => 'required|unique:sistemas',
		'nom_sis' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_sis','nom_sis'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function actividades()
    {
        return $this->hasMany('App\Models\Actividade', 'act_sis', 'cod_sis');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function componentes()
    {
        return $this->hasMany('App\Models\Componente', 'sis_com', 'cod_sis');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fallas()
    {
        return $this->hasMany('App\Models\Falla', 'sis_fal', 'cod_sis');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'sis_ser', 'cod_sis');
    }
    

}
