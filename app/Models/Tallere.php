<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tallere
 *
 * @property $nit_tal
 * @property $nom_tal
 * @property $dir_tal
 * @property $ser_tal
 * @property $hor_tal
 * @property $num_con_tal
 * @property $rut_tal
 * @property $emp_tal
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @property Ruta $ruta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tallere extends Model
{

    protected $primaryKey = 'nit_tal';
    public $incrementing = false;
    
    static $rules = [
		'nit_tal' => 'required|unique:talleres',
		'nom_tal' => 'required',
		'dir_tal' => 'required',
		'ser_tal' => 'required',
		'hor_tal' => 'required',
		'num_con_tal' => 'required',
		'rut_tal' => 'required',
		'emp_tal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nit_tal','nom_tal','dir_tal','ser_tal','hor_tal','num_con_tal','rut_tal','emp_tal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_tal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Models\Ruta', 'cod_rut', 'rut_tal');
    }
    

}
