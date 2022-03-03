<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, Billable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'full_name',
        'card_brand',
        'card_last_four',
        'trial_ends_at',
        'facebook_id',
        'google_id',
    ];

//You can also use below statement

    protected $guarded = ['*'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Método que obtiene el perfil asociado al un usuario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo User
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Método que obtiene el vendedor asociado al un usuario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo User
     */
    public function seller()
    {
        return $this->hasOne(Seller::class);
    }

    /**
     * Método que obtiene los me gusta que hizo un usuario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo User
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    /**
     * Método que obtiene los comentarios que hizo un usuario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo User
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Método que obtiene las compras que realizo un usuario
     *
     * @author  Paúl Rojas <paul.rojase@gmail.com>
     * @return object Objeto con los registros relacionados al modelo User
     */
    public function buys()
    {
        return $this->hasMany(Buy::class)->with('artwork');
    }
}
