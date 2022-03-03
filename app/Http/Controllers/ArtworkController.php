<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use App\Models\ArtworkImage;
use App\Models\Artist;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = Artwork::where('seller_id', auth()->user()->seller->id)->with([
            'seller.user.profile',
            'artworkImages',
            'elements',
            'comments',
            'likes',
            'category'
        ])->orderBy('created_at', 'desc')->get();


        return Inertia::render('artworks/Index', [
            'artworks' => $artworks
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDashboard()
    {
        $artworks = Artwork::with([
            'buy',
            'seller',
            'seller.user',
            'artworkImages',
            'elements',
            'comments',
            'likes'
        ])->orderBy('created_at', 'desc')->get();


        return Inertia::render('dashboard/artworks/Index', [
            'artworks' => $artworks
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        //dd($request->all());
        $categories = Category::with('attributes', 'attributes.elements')->get();
        $minPrice = $request->minPrice;
        $maxPrice = $request->maxPrice;
        $elements = $request->elements;
        $category = $request->category;
        $artworks = Artwork::query()
        ->withCount('buy')
        ->having('buy_count', '=', 0)
        ->with([
            'seller.user',
            'artworkImages',
            'elements',
            'likes'
        ])->minPrice($minPrice)
        ->maxPrice($maxPrice)
        ->elements($elements)
        ->withCategory($category)
        ->get();

        return Inertia::render('Search/index', [
            'artworks' => $artworks,
            'categories' => $categories,
        ]);
    }

    /**
     * Busqueda de obras
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function searchArtworks(Artist $artist)
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->with(['attributes', 'attributes.elements'])->get();

        // dd($categories);

        return Inertia::render('artworks/Create', [
            'categories' => $categories
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
        // dd($request->all());

        $artwork = Artwork::create([
            'seller_id' => auth()->user()->seller->id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'offer' => $request->offer,
            'weight' => $request->weight,
            'width' => $request->width,
            'height' => $request->height
        ]);

        foreach ($request->elements as $key => $element_id) {
            $artwork->elements()->attach($element_id);
        }

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $key => $image) {
                $destinationPath = 'artwork_images/';

                $format = $image->extension();

                $fileName = 'artwork'.$artwork->id.'_'.$key.'.'.$format;
                $image->move($destinationPath, $fileName);

                $artwork_image = ArtworkImage::create([
                    'artwork_id' => $artwork->id,
                    'location'  => '/'.$destinationPath.$fileName,
                    'principal' => $key === 0 ? 1 : 0
                ]);
            }
        }
        return redirect()->route('my-artworks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artwork = Artwork::where('id', $id)->with([
            'seller.user.profile',
            'seller.gallery',
            'seller.artist',
            'artworkImages',
            'elements.attribute',
            'comments',
            'likes'])->first();

        //dd($artwork->seller->artist->artistic_name);

        //return response()->json(['artwork' => $artwork]);

        return Inertia::render('artworks/Show', [
            'artwork' => $artwork,
            // 'seller' => $seller
        ]);
    }

    public function showDashboard($id)
    {
        $artwork = Artwork::where('id', $id)->with([
            'seller.user.profile',
            'artworkImages',
            'elements.attribute',
            'comments',
            'likes'])->first();

        //return response()->json(['artwork' => $artwork]);

        return Inertia::render('dashboard/artworks/Show', [
            'artwork' => $artwork,
            // 'seller' => $seller
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $categories = Category::query()->with(['attributes', 'attributes.elements'])->get();

        //$id = $request->id;

        $artwork = Artwork::where('id', $id)->with([
            'seller.user.profile',
            'artworkImages',
            'elements.attribute',
            'comments',
            'likes'
        ])->first();

        // dd($artwork);

        return Inertia::render('artworks/Create', [
            'artwork' => $artwork,
            'categories' => $categories
        ]);
    }

    public function editDashboard($id)
    {
        $artwork = Artwork::find($id);

        return Inertia::render('dashboard/artworks/Edit', [
            'artwork' => $artwork
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $artwork = Artwork::find($id);

        if ($artwork->category->id != $request->category) {
            foreach ($artwork->elements as $key => $element) {
                $artwork->elements()->detach($element->element_id);
            }

            foreach ($request->elements as $key => $element_id) {
                $artwork->elements()->attach($element_id);
            }
        }

        $artwork->update($request->all());




        if ($request->hasFile('image')) {
            // dd('tiene imagenes');
            foreach ($artwork->artworkImages as $key => $artworkImage) {
                $this->deleteImage($artworkImage);
                $artworkImage->delete();
            }

            foreach ($request->file('image') as $key => $image) {
                $destinationPath = 'artwork_images/';

                $format = $image->extension();

                $fileName = 'artwork'.$artwork->id.'_'.$key.'.'.$format;
                $image->move($destinationPath, $fileName);

                $artwork_image = ArtworkImage::create([
                    'artwork_id' => $artwork->id,
                    'location'  => '/'.$destinationPath.$fileName,
                    'principal' => $key === 0 ? 1 : 0
                ]);
            }
        }

        return redirect()->route('my-artworks.index');
    }

    public function updateDashboard(Request $request, $id)
    {
        $artwork = Artwork::find($id);

        $artwork->update($request->all());

        return redirect()->route('artworks.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$id = $request->id;
        $artwork = Artwork::find($id);

        $artwork->delete();

        return back();
    }

    public function destroyDashboard($id)
    {
        $artwork = Artwork::find($id);
        foreach ($artwork->artworkImages as $key => $artworkImage) {
            $this->deleteImage($artworkImage);
            $artworkImage->delete();
        }
        $artwork->delete();

        $artworks = Artwork::with([
            'buy',
            'seller',
            'seller.user',
            'artworkImages',
            'elements',
            'comments',
            'likes'
        ])->orderBy('created_at', 'desc')->where('id', '<>', $id)->get();



        return Inertia::render('dashboard/artworks/Index', [
            'artworks' => $artworks
        ]);


        return back();
        return redirect()->route('artworks.index');
    }

    public function deleteImage($image)
    {
        $originalPath = public_path('artwork_images');

        if ($image != 'default.jpg') {
            if (\File::exists($originalPath.'/'.$image)) {
                \File::delete($originalPath.'/'.$image);
            }
        }
    }
}
