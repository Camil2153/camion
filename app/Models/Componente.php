<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Componente
 *
 * @property $num_ser_com
 * @property $nom_com
 * @property $mar_com
 * @property $desc_com
 * @property $cos_com
 * @property $sis_com
 * @property $emp_com
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property Sistema $sistema
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Componente extends Model
{

    protected $primaryKey = 'num_ser_com';
    public $incrementing = false;
    
    static $rules = [
		'num_ser_com' => 'required|unique:componentes',
		'nom_com' => 'required',
		'mar_com' => 'required',
		'desc_com' => 'required',
		'cos_com' => 'required',
		'sis_com' => 'required',
		'emp_com' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['num_ser_com','nom_com','mar_com','desc_com','cos_com','sis_com','emp_com'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_com');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sistema()
    {
        return $this->hasOne('App\Models\Sistema', 'cod_sis', 'sis_com');
    }
    

}
