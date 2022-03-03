<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'artwork_id',
        'content',
        'comment_id',
    ];

    /**
     * Método que obtiene el usuario al que realiza el comentario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Comment
     */
    public function user()
    {
        return $this->belongsTo(User::class)->with('profile');
    }

    /**
     * Método que obtiene la obra a la que se realiza el comentario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Comment
     */
    public function artwork()
    {
        return $this->belongsTo(Artwork::class);
    }

    /**
     * Método que obtiene el comentario al que responde el comentario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Comment
     */
    public function parent()
    {
        return $this->belongsTo(Comment::class);
    }

    /**
     * Método que obtiene las respuestas de un comentario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Comment
     */
    public function answers()
    {
        return $this->hasMany(Comment::class);
    }
}
