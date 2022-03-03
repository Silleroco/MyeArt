<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'artwork_id',
        'finished',
        'comment',
        'rating',
        'transaction_id',
        'name',
        'lastname',
        'country',
        'address',
        'zip_code',
        'city',
        'region',
        'phone',
        'email',
        'total'
    ];

    /**
     * Método que obtiene el usuario que realizo la compra
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Buy
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Método que obtiene la obra comprada
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Buy
     */
    public function artwork()
    {
        return $this->belongsTo(Artwork::class)->with('artworkImages');
    }
}
