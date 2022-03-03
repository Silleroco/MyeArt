<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Artwork;
use App\Models\Category;
use App\Models\Seller;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Seller::all() as $seller) {
            $category = Category::all()->random();
            Artwork::factory()->create(['seller_id' => $seller->id, 'category_id' => $category->id]);
        }
    }
}
