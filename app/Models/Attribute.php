<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name'
    ];

    /**
     * Método que obtiene  la categoria a la que pertenece un atributo
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Attribute
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Método que obtiene los elementos de un atributo
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Attribute
     */
    public function elements()
    {
        return $this->hasMany(Element::class);
    }
}
