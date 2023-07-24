<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $cod_cli
 * @property $nom_cli
 * @property $nom_com_cli
 * @property $col_cli
 * @property $dir_cli
 * @property $rfc_cli
 * @property $ciu_cli
 * @property $created_at
 * @property $updated_at
 *
 * @property Viaje[] $viajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{

    protected $primaryKey = 'cod_cli';
    public $incrementing = false;

    static $rules = [
        'cod_cli' => 'required|unique:clientes',
        'nom_cli' => 'required',
        'nom_com_cli' => 'required',
        'col_cli' => 'required',
        'dir_cli' => 'required',
        'rfc_cli' => 'required',
        'ciu_cli' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_cli','nom_cli','nom_com_cli','col_cli','dir_cli','rfc_cli','ciu_cli'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'cli_via', 'cod_cli');
    }
    

}
