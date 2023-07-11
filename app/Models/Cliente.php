<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $cod_cli
 * @property $nom_cli
 * @property $nom_com_cli
 * @property $col_cli
 * @property $dir_cli
 * @property $rfc_cli
 * @property $ciu_cli
 * @property $emp_cli
 * @property $created_at
 * @property $updated_at
 *
 * @property Ciudade $ciudade
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{

    protected $primaryKey = 'cod_cli';
    public $incrementing = false;

    static $rules = [
		'cod_cli' => 'required|unique:clientes',
		'nom_cli' => 'required',
		'nom_com_cli' => 'required',
		'col_cli' => 'required',
		'dir_cli' => 'required',
		'rfc_cli' => 'required',
		'ciu_cli' => 'required',
		'emp_cli' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_cli','nom_cli','nom_com_cli','col_cli','dir_cli','rfc_cli','ciu_cli','emp_cli'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'cod_ciu', 'ciu_cli');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_cli');
    }
    

}
