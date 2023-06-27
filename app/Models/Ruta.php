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
 * @property $res_rut
 * @property $com_rut
 * @property $est_rut
 * @property $emp_rut
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade $ciudade
 * @property Ciudade $ciudade
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ruta extends Model
{

    protected $primaryKey = 'cod_rut';
    
    static $rules = [
		'cod_rut' => 'required',
		'nom_rut' => 'required',
		'ori_rut' => 'required',
		'des_rut' => 'required',
		'dis_rut' => 'required',
		'dur_rut' => 'required',
		'res_rut' => 'required',
		'com_rut' => 'required',
		'est_rut' => 'required',
		'emp_rut' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_rut','nom_rut','ori_rut','des_rut','dis_rut','dur_rut','res_rut','com_rut','est_rut','emp_rut'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function origenCiudad()
    {
        return $this->hasOne('App\Models\Ciudade', 'cod_ciu', 'ori_rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function destinoCiudad()
    {
        return $this->hasOne('App\Models\Ciudade', 'cod_ciu', 'des_rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_rut');
    }
    

}
