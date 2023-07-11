<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $nit_emp
 * @property $nom_emp
 * @property $dir_emp
 * @property $pai_emp
 * @property $created_at
 * @property $updated_at
 *
 * @property Paise $paise
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
		'dir_emp' => 'required',
		'pai_emp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nit_emp','nom_emp','dir_emp','pai_emp'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paise()
    {
        return $this->hasOne('App\Models\Paise', 'cod_pai', 'pai_emp');
    }
    

}
