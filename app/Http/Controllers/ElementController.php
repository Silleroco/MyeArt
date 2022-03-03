<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Element;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($attribute_id)
    {
        $attribute = Attribute::find($attribute_id);

        $elements = $attribute->elements;

        return Inertia::render('dashboard/elements/Index', [
            'elements' => $elements
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('dashboard/elements/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $element = new Element();

        $element->attribute_id = $request->attribute_id;

        $element->name = $request->name;

        $element->save();

        return redirect()->route('elements.index', $element->$attribute_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('dashboard/elements/Show', [
         'element' => Element::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Inertia::render('dashboard/elements/Edit', [
            'element' => Element::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $element = Element::find($id);

        $element->update($request->all());

        return redirect()->route('elements.index', $element->attribute_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Element::find($id);

        $attribute_id = $element->attribute_id;

        $element->delete();

        return redirect()->route('elements.index', $attribute_id);
    }
}
