<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriasGasto
 *
 * @property $cod_cat_gas
 * @property $nom_cat_gas
 * @property $desc_cat_gas
 * @property $emp_cat_gas
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CategoriasGasto extends Model
{
    
    protected $primaryKey = 'cod_cat_gas';

    static $rules = [
		'cod_cat_gas' => 'required',
		'nom_cat_gas' => 'required',
		'desc_cat_gas' => 'required',
		'emp_cat_gas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_cat_gas','nom_cat_gas','desc_cat_gas','emp_cat_gas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_cat_gas');
    }
    

}
