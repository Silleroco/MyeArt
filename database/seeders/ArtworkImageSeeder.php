<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Artwork;
use App\Models\ArtworkImage;

class ArtworkImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Artwork::all() as $artwork) {
            for ($i=0; $i < 3; $i++) {
                $i == 0 ? $principal = 1 :  $principal = 0;
                ArtworkImage::factory()->create(['artwork_id' => $artwork->id, 'principal' => $principal]);
            }
        }
    }
}
