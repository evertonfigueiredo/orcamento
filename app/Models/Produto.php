<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produto
 *
 * @property $id
 * @property $nome
 * @property $categoria_id
 * @property $cor_id
 * @property $valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Core $core
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Produto extends Model
{
    
    static $rules = [
		'nome' => 'required',
		'categoria_id' => 'required',
		'cor_id' => 'required',
		'valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','categoria_id','cor_id','valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function core()
    {
        return $this->hasOne('App\Models\Core', 'id', 'cor_id');
    }
    

}
