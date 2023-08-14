<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentosCamione
 *
 * @property $cod_doc_cam
 * @property $nom_doc_cam
 * @property $est_doc_cam
 * @property $vig_doc_cam
 * @property $cam_doc_cam
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione $camione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DocumentosCamione extends Model
{
    
    protected $primaryKey = 'cod_doc_cam';
    public $incrementing = false;

    static $rules = [
    'cod_doc_cam' => 'required|unique:documentos_camiones',
		'nom_doc_cam' => 'required',
		'est_doc_cam' => 'sometimes',
		'vig_doc_cam' => 'required',
		'cam_doc_cam' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_doc_cam','nom_doc_cam','est_doc_cam','vig_doc_cam','cam_doc_cam'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function camione()
    {
        return $this->hasOne('App\Models\Camione', 'pla_cam', 'cam_doc_cam');
    }
    

}
