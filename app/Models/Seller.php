<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'has_gallery'
    ];

    /**
     * Método que obtiene el usuario al que pertenece el vendedor
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Seller
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Método que obtiene la galeria del vendedor
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Seller
     */
    public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }

    /**
     * Método que obtiene el artista asociado al un vendedor
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Seller
     */
    public function artist()
    {
        return $this->hasOne(Artist::class);
    }

    /**
     * Método que obtiene las obras que pertenecen a un vendedor
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Seller
     */
    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }

    /**
     * Método que obtiene las etiquetas que se asignan a un vendedor
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Seller
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'seller_tag')
            ->withPivot('seller_id');
    }

    /**
     * Método que obtiene las ventas de obras que tiene un vendedor
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Seller
     */
    public function sales()
    {
        return $this->hasManyThrough(
            Buy::class,
            Artwork::class,
            'seller_id',
            'artwork_id',
            'id',
            'id'
        )->with('artwork');
    }
}
