<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conductore
 *
 * @property $ced_con
 * @property $nom_con
 * @property $dir_con
 * @property $num_tel_con
 * @property $cor_ele_con
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conductore extends Model
{
  /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ced_con';
    
    static $rules = [
		'ced_con' => 'required',
		'nom_con' => 'required',
		'dir_con' => 'required',
		'num_tel_con' => 'required',
		'cor_ele_con' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ced_con','nom_con','dir_con','num_tel_con','cor_ele_con'];



}