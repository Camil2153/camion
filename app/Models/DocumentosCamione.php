<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentosCamione
 *
 * @property $cod_doc
 * @property $nom_doc
 * @property $est_doc
 * @property $vig_doc
 * @property $cam_doc_cam
 *
 * @property Camione $camione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DocumentosCamione extends Model
{
    
  protected $primaryKey = 'cod_doc';

    static $rules = [
		'cod_doc' => 'required',
		'nom_doc' => 'required',
		'est_doc' => 'required',
		'vig_doc' => 'required',
		'cam_doc_cam' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_doc','nom_doc','est_doc','vig_doc','cam_doc_cam'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function camione()
    {
        return $this->hasOne('App\Models\Camione', 'pla_cam', 'cam_doc_cam');
    }
    

}
