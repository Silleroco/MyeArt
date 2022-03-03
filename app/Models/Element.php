<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    protected $fillable = [
        'attribute_id',
        'name'
    ];


    /**
     * Método que obtiene el atributo a la que pertenece un elemento
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Element
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    /**
     * Método que obtiene las obras a las que pertenece un elemento
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Element
     */
    public function artworks()
    {
        return $this->belongsToMany(Artwork::class, 'artwork_element')
                    ->withPivot('element_id');
    }
}
