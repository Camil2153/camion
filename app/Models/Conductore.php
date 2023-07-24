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
 * @property $num_lic_con
 * @property $fec_exp_lic_con
 * @property $fec_ven_lic_con
 * @property $cat_lic_con
 * @property $eps_con
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione[] $camiones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conductore extends Model
{

    protected $primaryKey = 'dni_con';
    public $incrementing = false;
    
    static $rules = [
      'dni_con' => 'required|unique:conductores',
		'nom_con' => 'required',
		'fec_nac_con' => 'required',
		'dir_con' => 'required',
		'num_tel_con' => 'required',
		'cor_ele_con' => 'required',
		'num_lic_con' => 'required',
		'fec_exp_lic_con' => 'required',
		'fec_ven_lic_con' => 'required',
		'cat_lic_con' => 'required',
		'eps_con' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dni_con','nom_con','fec_nac_con','dir_con','num_tel_con','cor_ele_con','num_lic_con','fec_exp_lic_con','fec_ven_lic_con','cat_lic_con','eps_con'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function camiones()
    {
        return $this->hasMany('App\Models\Camione', 'con_cam', 'dni_con');
    }
    

}
