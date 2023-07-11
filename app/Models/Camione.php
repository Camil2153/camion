<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Camione
 *
 * @property $pla_cam
 * @property $mar_cam
 * @property $mod_cam
 * @property $tip_cam
 * @property $est_cam
 * @property $kil_cam
 * @property $cap_cam
 * @property $cont_cam
 * @property $con_cam
 * @property $emp_cam
 * @property $created_at
 * @property $updated_at
 *
 * @property Conductore $conductore
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Camione extends Model
{
    
    protected $primaryKey = 'pla_cam';
    public $incrementing = false;
<<<<<<< HEAD

static $rules = [
    'pla_cam' => ['required','unique:camiones', 'regex:/^[A-Z]{3}\d{3}$/'],
    'mar_cam' => 'required',
    'mod_cam' => 'required',
    'tip_cam' => 'required',
    'est_cam' => 'required',
    'kil_cam' => 'required',
    'cap_cam' => 'required',
    'cont_cam' => 'required',
    'con_cam' => 'required',
    'emp_cam' => 'required',
];
=======
>>>>>>> 20a3738512bd45630406ad9c2cae8c3df14848d5


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pla_cam','mar_cam','mod_cam','tip_cam','est_cam','kil_cam','cap_cam','cont_cam','con_cam','emp_cam'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function conductore()
    {
        return $this->hasOne('App\Models\Conductore', 'dni_con', 'con_cam');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_cam');
    }
    

}
