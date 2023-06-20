<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nom_cli
 * @property $nom_com_cli
 * @property $dir_cli
 * @property $col_cli
 * @property $rfc_cli
 * @property $ciu_cli
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nom_cli' => 'required',
		'nom_com_cli' => 'required',
		'dir_cli' => 'required',
		'col_cli' => 'required',
		'rfc_cli' => 'required',
		'ciu_cli' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_cli','nom_com_cli','dir_cli','col_cli','rfc_cli','ciu_cli'];



}
