<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trazabilidad
 *
 * @property $cod_tra
 * @property $dat_pro_tra 
 * @property $tim_pro_tra
 * @property $dat_enp_tra
 * @property $tim_enp_tra
 * @property $dat_com_tra
 * @property $tim_com_tra
 * @property $dat_can_tra
 * @property $tim_can_tra
 * @property $via_tra
 *
 * @property Viaje $viaje
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Trazabilidad extends Model
{
  protected $table = 'trazabilidad';
  protected $primaryKey = 'cod_tra'; 
    
    static $rules = [
		'cod_tra' => 'required',
		'via_tra' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_tra','dat_pro_tra','tim_pro_tra','dat_enp_tra','tim_enp_tra','dat_com_tra','tim_com_tra','dat_can_tra','tim_can_tra','via_tra'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function viaje()
    {
        return $this->hasOne('App\Models\Viaje', 'cod_via', 'via_tra');
    }
    

}
