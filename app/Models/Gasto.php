<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gasto
 *
 * @property $id
 * @property $fec_gas
 * @property $mon_gas
 * @property $des_gas
 * @property $categoriagastos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoriagasto $categoriagasto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gasto extends Model
{
    
    static $rules = [
		'fec_gas' => 'required',
		'mon_gas' => 'required',
		'des_gas' => 'required',
		'categoriagastos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fec_gas','mon_gas','des_gas','categoriagastos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoriagasto()
    {
      return $this->belongsTo(Categoriagasto::class, 'categoriagastos_id');
    }
    

}


