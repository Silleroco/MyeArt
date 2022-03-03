<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtworkImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'artwork_id',
        'location',
        'principal'
    ];

    /**
     * Método que obtiene la obra a la que pertenece la imagen
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artwork
     */
    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
}
