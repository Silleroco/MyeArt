<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\Attribute;
use App\Models\Category;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /** @var array Ciudades asociadas a un Estado */
        $categories_attributes = [
            "1" => [ //Libro
                "Temática", //1
                "Idioma",   //2
                "Material"  //3
            ],
            "2" => [//Pintura
                "Temática", //4
                "Estilo",   //5
                "Técnica"   //6
            ],
            "3" => [//Escultura
                "Temática", //7
                "Estilo",   //8
                "Material"  //9
            ],
            "4" => [//Dibujo
                "Temática", //10
                "Estilo",   //11
                "Técnica"   //12
            ],           
            "5" => [//Fotografía
                "Temática", //13
                "Estilo",   //14
                "Técnica"   //15
            ],

        ];

        DB::transaction(function () use ($categories_attributes) {
            foreach ($categories_attributes as $category_id => $attributes) {
                /** @var object Almacena información del Estado */
                $cat = Category::find($category_id);
                foreach ($attributes as $attribute) {
                    Attribute::updateOrCreate(['name' => $attribute, 'category_id' => $cat->id], []);
                }
            }
        });

    }
}
