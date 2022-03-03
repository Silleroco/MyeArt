<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Artist;
use Inertia\Inertia;
use App\Models\Seller;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::query()->with([
            'seller.user',
            'seller.user.profile',
            'seller',
            'seller.artworks'
        ])->get();

        dd($galleries);

        return Inertia::render('dashboard/galleries/Index', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $galleries = Gallery::query()->with([
            'seller.user',
            'seller.user.profile',
            'seller',
            'seller.artworks'
        ])->get();

        dd($galleries);

        return Inertia::render('galleries/Index', [
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return Inertia::render('galleries/Create', [
            'tags' => $tags
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //El usuario autenticado se crea sus datos como artista
        $user = auth()->user();

        //Creando vendedor
        $seller = new Seller();
        $seller->user_id = $user->id;
        $seller->has_gallery = 1;
        $seller->save();

        //Se Asigna role de vendedor
        $user->assignRole('seller');

        //Creando datos Galeria del vendedor
        $gallery = new Gallery();
        $gallery->seller_id = $seller->id;
        $gallery->name = $request->artistic_name;
        $gallery->save();

        foreach ($request->tags as $tag) {
            //reviso luego esta parte
            $seller->tags()->attach($tag);
        }

        return Redirect::route('account-profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::where('id', $id)->with('seller.pivot.tags')->first();
        $tags = Tag::all();
        return Inertia::render('galleries/Edit', [
            'gallery' => $gallery,
            'tags' => $tags,
            'entity' => "gallery"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $seller = $gallery->seller;

        $gallery->name = $request->name;
        $gallery->save();

        foreach ($seller->tags as $tag0) {
            //elimina cada tag
            $seller->tags()->dettach($tag0);
        }

        foreach ($request->tags as $tag) {
            //agrega tags
            $seller->tags()->attach($tag);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
