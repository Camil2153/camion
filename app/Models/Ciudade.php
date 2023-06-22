<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudade
 *
 * @property $cod_ciu
 * @property $nom_ciu
 * @property $dep_ciu
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ciudade extends Model
{
    protected $primaryKey = 'cod_ciu';

    static $rules = [
		'cod_ciu' => 'required',
		'nom_ciu' => 'required',
		'dep_ciu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_ciu','nom_ciu','dep_ciu'];



}
