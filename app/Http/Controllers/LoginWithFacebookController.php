<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use Redirect;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginWithFacebookController extends Controller
{
    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        try {
            $finduser = User::where('email', $user->email)->first();
            if ($finduser) {
                Auth::login($finduser);
                return Redirect::route('home');;
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make('Test123456'),
                ]);
                //Agregando Perfil
                $profile = Profile::create([
                    'user_id' => $newUser->id,
                    'firstName' => $user->name,
                ]);
                //Asignamos el rol de comprador a todos los usuarios creados
                $newUser->assignRole('buyer');
                Auth::login($newUser);
                return Redirect::route('home');;
            }
         } catch (Exception $e) {
             dd($e->getMessage());
         }
    }
}
