<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Artwork;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sellers = Seller::query()->with(['user', 'artist', 'gallery'])->get();
        dd($sellers);

        return Inertia::render('dashboard/sellers/Index', [
            'sellers' => $sellers
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {

        $sellers = Seller::query()->with(['user', 'artist', 'gallery'])->get();
        dd($sellers);

        return Inertia::render('sellers/Index', [
            'sellers' => $sellers
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('sellers/Create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller = Seller::where('id', $id)->with([
            'user',
            'user.profile',
            'gallery',
            'artist',
            'artworks',
            'sales'
        ])->first();


        //$popular_artworks = $seller->artworks->orderByLikes()->limit(6)->get();

        dd($seller);

        return Inertia::render('sellers/Show', [
            'seller' => $seller
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }

    /**
     * Muestra las ventas del vendedor.
     *
     * @param
     * @return \Illuminate\Http\Response
     */

    public function mySales()
    {

        $sales = auth()->user()->seller->sales;

        return Inertia::render('Account/MySales', [
            'sales' => $sales
        ]);
    }
}
