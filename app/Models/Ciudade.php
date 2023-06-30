<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudade
 *
 * @property $cod_ciu
 * @property $nom_ciu
 * @property $pai_ciu
 * @property $created_at
 * @property $updated_at
 *
 * @property Paise $paise
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ciudade extends Model
{

    protected $primaryKey = 'cod_ciu';
    public $incrementing = false;
    
    static $rules = [
		'cod_ciu' => 'required',
		'nom_ciu' => 'required',
		'pai_ciu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_ciu','nom_ciu','pai_ciu'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paise()
    {
        return $this->hasOne('App\Models\Paise', 'cod_pai', 'pai_ciu');
    }
    

}
