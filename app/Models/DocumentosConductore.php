<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentosConductore
 *
 * @property $num_lic_doc_con
 * @property $fec_ven_lic_doc_con
 * @property $cat_lic_doc_con
 * @property $eps_doc_con
 * @property $con_doc_con
 * @property $emp_doc_con
 * @property $created_at
 * @property $updated_at
 *
 * @property Conductore $conductore
 * @property Empresa $empresa
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DocumentosConductore extends Model
{

    protected $primaryKey = 'num_lic_doc_con';
    public $incrementing = false;
    
    static $rules = [
		'num_lic_doc_con' => 'required|unique:documentos_conductores',
		'fec_ven_lic_doc_con' => 'required',
		'cat_lic_doc_con' => 'required',
		'eps_doc_con' => 'required',
		'con_doc_con' => 'required',
		'emp_doc_con' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['num_lic_doc_con','fec_ven_lic_doc_con','cat_lic_doc_con','eps_doc_con','con_doc_con','emp_doc_con'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function conductore()
    {
        return $this->hasOne('App\Models\Conductore', 'dni_con', 'con_doc_con');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'nit_emp', 'emp_doc_con');
    }
    

}
