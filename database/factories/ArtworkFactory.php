<?php

namespace Database\Factories;

use App\Models\Artwork;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtworkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artwork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = $this->faker->numberBetween(100, 1000);
        $offer = $this->faker->numberBetween(100, $price);


        return [
        'name' => $this->faker->catchPhrase(),
        'description'=> $this->faker->paragraph(),
        'price' => $price,
        'offer' => $offer,
        'weight' => $this->faker->numberBetween(10, 100),
        'width'=> $this->faker->numberBetween(10, 100),
        'height' => $this->faker->numberBetween(10, 100),
        ];
    }
}
