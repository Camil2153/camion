<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sistema
 *
 * @property $cod_sis
 * @property $nom_sis
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sistema extends Model
{

    protected $primaryKey = 'cod_sis';
    public $incrementing = false;
    
    static $rules = [
		'cod_sis' => 'required',
		'nom_sis' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_sis','nom_sis'];



}
