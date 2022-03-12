<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Redirect;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginWithGoogleController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();
 
         try {
            $finduser = User::where('name', $user->name)->first();
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
