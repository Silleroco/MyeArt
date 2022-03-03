<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Artwork;
use App\Models\Element;

class ArtworkElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Artwork::all() as $artwork) {
            $category = $artwork->category;
            foreach ($category->attributes as $attribute) {
                $element = Element::where('attribute_id', $attribute->id)->get();
                $element = $element->random();
                $artwork->elements()->attach($element->id);
            }
        }
    }
}
