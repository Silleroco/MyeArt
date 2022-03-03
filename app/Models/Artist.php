<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'artistic_name'
    ];

    /**
     * Método que obtiene los datos del vendedor que es artista
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Artist
     */
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
