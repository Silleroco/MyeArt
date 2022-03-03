<?php

namespace App\Http\Controllers;

use App\Models\ArtworkImage;
use Illuminate\Http\Request;

class ArtworkImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArtworkImage  $artworkImage
     * @return \Illuminate\Http\Response
     */
    public function show(ArtworkImage $artworkImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtworkImage  $artworkImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtworkImage $artworkImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArtworkImage  $artworkImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtworkImage $artworkImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtworkImage  $artworkImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artworkImage =  ArtworkImage::find($id);
        return $artworkImage->delete();
    }
}
