<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $nit_emp
 * @property $nom_emp
 * @property $pai_emp
 * @property $reg_emp
 * @property $cod_pos_emp
 * @property $dir_emp
 * @property $created_at
 * @property $updated_at
 *
 * @property Viaje[] $viajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{

  protected $primaryKey = 'nit_emp';
  public $incrementing = false;

  static $rules = [
  'nit_emp' => 'required|unique:empresas',
		'nom_emp' => 'required',
		'pai_emp' => 'required',
		'reg_emp' => 'required',
		'cod_pos_emp' => 'required',
		'dir_emp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nit_emp','nom_emp','pai_emp','reg_emp','cod_pos_emp','dir_emp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'emp_via', 'nit_emp');
    }
    

}
