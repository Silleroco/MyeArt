<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        $user = User::with(['profile', 'roles', 'unreadNotifications', 'seller.tags'])
            ->find(Auth::id());

        // if(Cookie::get('shopping_cart')) {
        //     $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        //     $shopping_cart = json_decode($cookie_data, true);
        // }
        //dd($user);

        return array_merge(parent::share($request), [

            // Synchronously
            'appName' => config('app.name'),

            // Lazily
            'auth.user' => $user,

            //'shopping_cart' => $shopping_cart ? $shopping_cart : null
        ]);
    }
}
