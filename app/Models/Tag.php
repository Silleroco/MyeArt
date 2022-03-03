<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Método que obtiene los vendedores que pertenecen a una etiqueta
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Tag
     */
    public function sellers()
    {
        return $this->belongsToMany(Seller::class, 'seller_tag')
        ->withPivot('tag_id');
    }
}
