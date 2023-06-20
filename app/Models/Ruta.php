<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruta
 *
 * @property $nom_rut
 * @property $ori_rut
 * @property $des_rut
 * @property $dis_rut
 * @property $dur_est_rut
 * @property $desc_rut
 * @property $cos_rut
 * @property $com_rut
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ruta extends Model
{
    
    static $rules = [
		'nom_rut' => 'required',
		'ori_rut' => 'required',
		'des_rut' => 'required',
		'dis_rut' => 'required',
		'dur_est_rut' => 'required',
		'desc_rut' => 'required',
		'cos_rut' => 'required',
		'com_rut' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_rut','ori_rut','des_rut','dis_rut','dur_est_rut','desc_rut','cos_rut','com_rut'];



}
