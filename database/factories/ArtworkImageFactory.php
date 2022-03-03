<?php

namespace Database\Factories;

use App\Models\ArtworkImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtworkImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArtworkImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => '/artwork_images/default.jpg',
        ];
    }
}
