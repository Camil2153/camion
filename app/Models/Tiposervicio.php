<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tiposervicio
 *
 * @property $id
 * @property $nom_tip_ser
 * @property $int_tie_tip_ser
 * @property $int_kil_tip_ser
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tiposervicio extends Model
{
    
    static $rules = [
		'nom_tip_ser' => 'required',
    'des_tip_ser' => 'required',
		'int_tie_tip_ser' => 'required',
		'int_kil_tip_ser' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_tip_ser','des_tip_ser','int_tie_tip_ser','int_kil_tip_ser'];



}
