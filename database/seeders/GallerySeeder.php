<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use App\Models\Seller;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Seller::all() as $seller) {
            if ($seller->has_gallery == 1) {
                Gallery::factory()->create(['seller_id' => $seller->id]);
            }
        }
    }
}
