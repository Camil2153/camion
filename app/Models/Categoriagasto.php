<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoriagasto
 *
 * @property $id
 * @property $nom_cat_gas
 * @property $des_cat_gas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoriagasto extends Model
{
    
    static $rules = [
		'nom_cat_gas' => 'required',
		'des_cat_gas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_cat_gas','des_cat_gas'];



}
