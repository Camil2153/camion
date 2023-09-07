<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruta
 *
 * @property $cod_rut
 * @property $nom_rut
 * @property $ori_rut
 * @property $des_rut
 * @property $dis_rut
 * @property $dur_rut
 * @property $est_rut
 * @property $created_at
 * @property $updated_at
 *
 * @property Tallere[] $talleres
 * @property Viaje[] $viajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ruta extends Model
{

    protected $primaryKey = 'cod_rut';
    public $incrementing = false;
    
    static $rules = [
		'cod_rut' => 'required|unique:rutas',
		'nom_rut' => 'required',
		'ori_rut' => 'required',
		'des_rut' => 'required',
		'dis_rut' => 'required',
		'dur_rut' => 'required',
		'est_rut' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_rut','nom_rut','ori_rut','des_rut','dis_rut','dur_rut','est_rut'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function talleres()
    {
        return $this->hasMany('App\Models\Tallere', 'rut_tal', 'cod_rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'rut_via', 'cod_rut');
    }
    public function falla()
    {
        return $this->hasMany('App\Models\Falla', 'rut_fal', 'cod_rut');
    }


}
