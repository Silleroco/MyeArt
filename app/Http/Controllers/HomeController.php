<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Artist;
use App\Models\Artwork;
use App\Models\Category;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::with([
            'artworks',
            'artworks.ArtworkImages',
            'attributes',
            'attributes.elements'
            ])->get();

        $latest_artworks = Artwork::latest()
                                ->withCount('buy')
                                ->having('buy_count', '=', 0)
                                ->with(['artworkImages', 'seller.user', 'likes'])->take(6)->get();
        //$popular_artworks = Artwork::latest()->with(['artworkImages', 'seller.user'])->take(6)->get();
        $popular_artworks = Artwork::withCount('likes')
                                ->withCount('buy')
                                ->having('buy_count', '=', 0)
                                ->with(['likes', 'artworkImages', 'seller.user'])
                                ->orderByDesc('likes_count')->take(6)->get();

        $artists = Artist::latest()->with(['seller', 'seller.user', 'seller.user.profile'])
                                    ->take(3)->get()->sortByDesc('created_at');

        $galleries = Gallery::latest()
                            ->with([
                                'seller',
                                'seller.user',
                                'seller.user',
                                'seller.artworks.likes',
                                'seller.artworks.artworkImages'
                            ])->take(6)->get();

        return Inertia::render('Home/Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'latest_artworks' => $latest_artworks,
            'popular_artworks' => $popular_artworks,
            'artists' => $artists,
            'galleries' => $galleries,
            'categories' => $categories
        ]);
    }

    public function artworks()
    {
        return Inertia::render('artworks/Index');
    }

    public function artist(Request $request)
    {
        $artist = Artist::where('id', $request->id)->with('seller.user.profile')->first();
        $artworks = Artwork::where('seller_id', $artist->seller->id)
        ->with(['artworkImages', 'seller.user'])->take(6)->get();

        return Inertia::render('artists/Index', [
            'artist' => $artist,
            'artworks' => $artworks
        ]);
    }

    public function events()
    {
        return Inertia::render('events/Index');
    }

    public function selectArtistOrGallery()
    {
        return Inertia::render('users/ArtistOrGallery');
    }

    // public function shoppingCart()
    // {
    //     if(Cookie::get('shopping_cart')) {
    //     $cookie_data = stripslashes(Cookie::get('shopping_cart'));
    //     $cart_data = json_decode($cookie_data, true);
    //
    //     $artwork_ids = Arr::pluck($cart_data, 'artwork_id');
    //
    //     $artworks = Artwork::find($artwork_ids);
    //
    //     $total = 0;
    //     foreach ($artworks as $key => $artwork) {
    //         if ($artwork->offer != null) {
    //         $total += $artwork->offer;
    //         } else {
    //             $total += $artwork->price;
    //         }
    //     }
    //
    //     dd($total);
    //     //dd($artworks);
    //
    //     //return Inertia::render('');
    //
    //     }
    // }
    //
    // public function cleanShoppingCart()
    // {
    //     return Cookie::forget('shopping_cart');
    //
    //     return back()->with('success', 'El carrito de compras se ha limpiado');
    // }
    //
    //
    // public function addToCart($artwork_id)
    // {
    //     if (Cookie::get('shopping_cart'))
    //     {
    //         $cookie_data = stripslashes(Cookie::get('shopping_cart'));
    //         $cart_data = json_decode($cookie_data, true);
    //     }
    //     else
    //     {
    //         $cart_data = array();
    //     }
    //
    //     $artwork_id_list = array_column($cart_data, 'artwork_id');
    //     $prod_id_is_there = $artwork_id;
    //
    //     if(in_array($prod_id_is_there, $artwork_id_list))
    //     {
    //         foreach($cart_data as $keys => $values)
    //         {
    //             if($cart_data[$keys]["artwork_id"] == $artwork_id)
    //             {
    //                 //$cart_data[$keys]["artwork_quantity"] = $request->input('quantity');
    //                 $artwork_data = json_encode($cart_data);
    //                 //$minutes = 60;
    //                 Cookie::queue(Cookie::make('shopping_cart', $artwork_data));
    //                 return response()->json(['status'=>'"'.$cart_data[$keys]["artwork_name"].'" agregado al carrito','status2'=>'2']);
    //             }
    //         }
    //     }
    //     else
    //     {
    //         $artwork = Artwork::find($artwork_id);
    //         $artwork_name = $artwork->name;
    //         $artwork_image = $artwork->artworkImages->where('principal')->first();
    //         $artwork_price = $artwork->price;
    //         $artwork_offer = $artwork->offer;
    //
    //         if($artwork)
    //         {
    //             $artwork_array = array(
    //                 'artwork_id' => $artwork_id,
    //                 'artwork_name' => $artwork_name,
    //                 'artwork_price' => $artwork_price,
    //                 'artwork_offer' => $artwork_offer,
    //                 'artwork_image' => $artwork_image
    //             );
    //             $cart_data[] = $artwork_array;
    //
    //             $artwork_data = json_encode($cart_data);
    //             //$minutes = 60;
    //             Cookie::queue(Cookie::make('shopping_cart', $artwork_data));
    //             return response()->json(['status'=>'"'.$artwork_name.'" agregado al carrito']);
    //         }
    //     }
    // }
}
