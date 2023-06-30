<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conductore
 *
 * @property $dni_con
 * @property $nom_con
 * @property $fec_nac_con
 * @property $dir_con
 * @property $num_tel_con
 * @property $cor_ele_con
 * @property $emp_con
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conductore extends Model
{

    protected $primaryKey = 'dni_con';
    public $incrementing = false;
    
    static $rules = [
		'dni_con' => 'required',
		'nom_con' => 'required',
		'fec_nac_con' => 'required',
		'dir_con' => 'required',
		'num_tel_con' => 'required',
		'cor_ele_con' => 'required',
		'emp_con' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dni_con','nom_con','fec_nac_con','dir_con','num_tel_con','cor_ele_con','emp_con'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_con');
    }
    

}
