<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

use App\Models\Artwork;
use App\Models\Buy;
use App\Models\Seller;
use App\Models\Tag;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::query()->with(['seller', 'seller.user', 'seller.user.profile'])->get();

        // dd($artists);

        return Inertia::render('artists/index', [
            'artists' => $artists
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {

        $artists = Artist::query()->with(['seller', 'seller.user', 'seller.user.profile'])->get();

        // dd($artists);

        return Inertia::render('artists/index', [
            'artists' => $artists
        ]);
    }

    public function api_endpoint()
    {

        $artists = Artist::query()->with(['seller', 'seller.user', 'seller.user.profile'])->paginate(3);

        // dd($artists);

        return $artists;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return Inertia::render('artists/Create', [
            'tags' => $tags,
            'entity' => "artista"
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
        $seller->has_gallery = 0;
        $seller->save();

        //Se Asigna role de vendedor
        $user->assignRole('seller');

        //Creando datos artista del vendedor
        $artist = new Artist();
        $artist->seller_id = $seller->id;
        $artist->artistic_name = $request->artistic_name;
        $artist->save();

        foreach ($request->tags as $tag_id) {
            //reviso luego esta parte
            $seller->tags()->attach($tag_id);
        }

        return Redirect::route('account-profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::where('seller_id', $id)->with([
            'seller.user',
            'seller.user.profile',
            'seller.user.comments',
            'seller.artworks',
            'seller.artworks.artworkImages',
            'seller.sales'
        ])->first();

        $popular_artworks = Artwork::where('seller_id', $artist->seller_id)
        ->withCount('likes')
        ->with(['likes', 'artworkImages', 'seller.user'])
        ->orderByDesc('likes_count')
        ->take(6)->get();

        $array_ids =  json_encode(array_values($artist->seller->artworks->pluck('id')->toArray()));
        $array_ids =  $artist->seller->artworks->keyBy('id');

        $sales_finished = Buy::whereIn('artwork_id', $artist->seller->artworks->modelKeys())
        ->where('finished', 1)->get();

        return Inertia::render('artists/show', [
            'artist' => $artist,
            'popular_artworks' => $popular_artworks,
            'sales_finished' => $sales_finished
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Artist::where('id', $id)->with('seller.pivot.tags')->first();
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
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artist = Artist::find($id);
        $seller = $artist->seller;

        $artist->artistic_name = $request->artistic_name;
        $artist->save();

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
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
