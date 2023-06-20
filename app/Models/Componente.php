<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Componente
 *
 * @property $num_ser_com
 * @property $nom_com
 * @property $mar_com
 * @property $des_com
 * @property $sis_com
 * @property $cos_com
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Componente extends Model
{
/**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'num_ser_com';
    
    static $rules = [
		'num_ser_com' => 'required',
		'nom_com' => 'required',
		'mar_com' => 'required',
		'des_com' => 'required',
		'sis_com' => 'required',
		'cos_com' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['num_ser_com','nom_com','mar_com','des_com','sis_com','cos_com'];



}
