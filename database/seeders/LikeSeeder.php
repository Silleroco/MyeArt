<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artwork;
use App\Models\Like;
use App\Models\User;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Artwork::all() as $artwork) {
            foreach (User::all() as $key => $user) {
                $like = rand(0, 1);
                if ($like == 1) {
                    Like::create([
                        'artwork_id' => $artwork->id,
                        'user_id' => $user->id
                    ]);
                }
            }
        }
    }
}
