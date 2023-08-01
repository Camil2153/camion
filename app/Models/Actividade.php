<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividade
 *
 * @property $cod_act
 * @property $nom_act
 * @property $act_sis
 * @property $created_at
 * @property $updated_at
 *
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Actividade extends Model
{

    protected $primaryKey = 'cod_act';
    public $incrementing = false;
    
    static $rules = [
        'cod_act' => 'required|unique:actividades',
        'nom_act' => 'required',
        'act_sis' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_act','nom_act','act_sis'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'act_ser', 'cod_act');
    }
    
    public function sistema()
    {
        return $this->hasOne('App\Models\Sistema', 'cod_sis', 'act_sis');
    }
}
