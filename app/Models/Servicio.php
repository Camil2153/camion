<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $cod_ser
 * @property $tip_ser_ser
 * @property $cam_ser
 * @property $des_tip_ser
 * @property $fec_ser
 * @property $kil_ser
 * @property $cos_ser
 * @property $res_ser
 * @property $tal_ser
 * @property $emp_ser
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione $camione
 * @property Empresa $empresa
 * @property Tallere $tallere
 * @property TiposServicio $tiposServicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{

    protected $primaryKey = 'cod_ser';
    
    static $rules = [
		'cod_ser' => 'required',
		'tip_ser_ser' => 'required',
		'cam_ser' => 'required',
		'des_tip_ser' => 'required',
		'fec_ser' => 'required',
		'kil_ser' => 'required',
		'cos_ser' => 'required',
		'res_ser' => 'required',
		'tal_ser' => 'required',
		'emp_ser' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_ser','tip_ser_ser','cam_ser','des_tip_ser','fec_ser','kil_ser','cos_ser','res_ser','tal_ser','emp_ser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function camione()
    {
        return $this->hasOne('App\Models\Camione', 'pla_cam', 'cam_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tallere()
    {
        return $this->hasOne('App\Models\Tallere', 'nit_tal', 'tal_ser');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiposServicio()
    {
        return $this->hasOne('App\Models\TiposServicio', 'cod_tip_ser', 'tip_ser_ser');
    }
    

}
