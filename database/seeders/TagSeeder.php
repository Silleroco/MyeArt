<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();

        $tags = [
            "1" => "Libro",
            "2" => "Pintura",
            "3" => "Escultura",
            "4" => "Dibujo",
            "5" => "Fotografía",
        ];

        DB::transaction(function () use ($tags) {
            foreach ($tags as $code => $tag) {
                Tag::updateOrCreate(
                    ['name' => $tag]
                );
            }
        });
    }
}
