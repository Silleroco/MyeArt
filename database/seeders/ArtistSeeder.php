<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Seller;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Seller::all() as $seller) {
            if ($seller->has_gallery == 0) {
                Artist::factory()->create(['seller_id' => $seller->id]);
            }
        }
    }
}
