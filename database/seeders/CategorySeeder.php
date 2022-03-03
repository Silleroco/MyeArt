<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
        
        $categories = [
            "1" => "Libro",
            "2" => "Pintura",
            "3" => "Escultura",
            "4" => "Dibujo",
            "5" => "Fotrografía",
        ];

        DB::transaction(function () use ($categories) {
            foreach ($categories as $code => $category) {
                Category::updateOrCreate(
                    ['name' => $category]
                );
            }
        });

    }
}
