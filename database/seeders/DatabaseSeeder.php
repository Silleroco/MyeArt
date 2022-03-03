<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(ElementSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(ProfileSeeder::class);
        // $this->call(SellerSeeder::class);
        // $this->call(GallerySeeder::class);
        // $this->call(ArtistSeeder::class);
        // $this->call(ArtworkSeeder::class);
        // $this->call(ArtworkImageSeeder::class);
        // $this->call(ArtworkElementSeeder::class);
        // $this->call(LikeSeeder::class);
        // $this->call(CommentSeeder::class);
    }
}
