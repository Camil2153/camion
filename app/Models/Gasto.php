<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gasto
 *
 * @property $cod_gas
 * @property $mon_gas
 * @property $fec_gas
 * @property $cat_gas
 * @property $via_gas
 * @property $created_at
 * @property $updated_at
 *
 * @property CategoriasGasto $categoriasGasto
 * @property Viaje $viaje
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gasto extends Model
{
    
    protected $primaryKey = 'cod_gas';
    public $incrementing = false;

    static $rules = [
		'cod_gas' => 'required|unique:gastos',
		'mon_gas' => 'required',
		'fec_gas' => 'required',
		'cat_gas' => 'required',
		'via_gas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_gas','mon_gas','fec_gas','cat_gas','via_gas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoriasGasto()
    {
        return $this->hasOne('App\Models\CategoriasGasto', 'cod_cat_gas', 'cat_gas');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function viaje()
    {
        return $this->hasOne('App\Models\Viaje', 'cod_via', 'via_gas');
    }
    

}
