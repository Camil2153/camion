<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TiposServicio
 *
 * @property $cod_tip_ser
 * @property $nom_tip_ser
 * @property $desc_tip_ser
 * @property $int_tie_tip_ser
 * @property $int_kil_tip_ser
 * @property $emp_tip_ser
 * @property $created_at
 * @property $updated_at
 *
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TiposServicio extends Model
{
    
    protected $primaryKey = 'cod_tip_ser';
    public $incrementing = false;

    static $rules = [
		'cod_tip_ser' => 'required',
		'nom_tip_ser' => 'required',
		'desc_tip_ser' => 'required',
		'int_tie_tip_ser' => 'required',
		'int_kil_tip_ser' => 'required',
		'emp_tip_ser' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_tip_ser','nom_tip_ser','desc_tip_ser','int_tie_tip_ser','int_kil_tip_ser','emp_tip_ser'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_tip_ser');
    }
    

}
