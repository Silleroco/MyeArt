<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'avatar',
        'firstName',
        'lastName',
        'biography',
        'address',
        'country',
        'city',
        'region',
        'zip_code',
        'facebook',
        'twitter',
        'google',
    ];
    /**
     * Método que obtiene el usuario del perfil
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo Profile
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
