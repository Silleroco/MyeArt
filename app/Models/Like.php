<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'artwork_id'
    ];

    /**
     * Método que obtiene el usuario que dió Me gusta
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Like
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Método que obtiene la obra a la que se le dió Me gusta
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Like
     */
    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
}
