<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Almacene
 *
 * @property $cod_alm
 * @property $com_alm
 * @property $cat_alm
 * @property $can_alm
 * @property $ubi_alm
 * @property $pro_alm
 * @property $fec_adq_alm
 * @property $fec_ven_alm
 * @property $est_alm
 * @property $created_at
 * @property $updated_at
 *
 * @property Componente $componente
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Almacene extends Model
{

    protected $primaryKey = 'cod_alm';
    public $incrementing = false;
    
    static $rules = [
		'cod_alm' => 'required|unique:almacenes',
		'com_alm' => 'required',
		'cat_alm' => 'required',
		'can_alm' => 'required',
		'ubi_alm' => 'required',
		'pro_alm' => 'required',
		'fec_adq_alm' => 'required',
		'fec_ven_alm' => 'required',
		'est_alm' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_alm','com_alm','cat_alm','can_alm','ubi_alm','pro_alm','fec_adq_alm','fec_ven_alm','est_alm'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function componente()
    {
        return $this->hasOne('App\Models\Componente', 'num_ser_com', 'com_alm');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'alm_ser', 'cod_alm');
    }
    
 // Evento que se dispara antes de guardar el modelo
 protected static function boot()
 {
     parent::boot();

     // Definimos el evento "saving" que se ejecuta antes de guardar el modelo
     static::saving(function ($almacene) {
         if ($almacene->can_alm == 0) {
             $almacene->est_alm = 'agotado';
         }
         else{
            $almacene->est_alm = 'disponible';
         }
     });
 }
 
}
