<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paise
 *
 * @property $cod_pai
 * @property $nom_pai
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paise extends Model
{
    
    protected $primaryKey = 'cod_pai';

    static $rules = [
		'cod_pai' => 'required',
		'nom_pai' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_pai','nom_pai'];



}
