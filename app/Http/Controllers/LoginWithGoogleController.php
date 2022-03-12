<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
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
        // try {
            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => Hash::make('Test123456'),
                ]);
                Auth::login($newUser);
                return redirect()->intended('dashboard');
            }
        // } catch (Exception $e) {
        //     dd($e->getMessage());
        // }
    }
}
