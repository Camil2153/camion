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
    public $incrementing = false;

    static $rules = [
      'cod_pai' => 'required|unique:paises|max:3|regex:/^[0-9]{1,3}$/',
      'nom_pai' => 'required|unique:paises',
  ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_pai','nom_pai'];



}
