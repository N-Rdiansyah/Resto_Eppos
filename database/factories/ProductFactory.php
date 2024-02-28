<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>  */
class ProductFactory extends Factory
{
    /** Define the model's default state *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //name
            'name' => $this->faker->name,
            //Description
            'description' => $this->faker->text,
            //Image
            'image' => $this->faker->imageUrl(),
            //Price
            'price' => $this->faker->randomFloat(2, 1, 100),
            //Stock
            'stock' => $this->faker->numberBetween(1, 100),
            //status
            'status' => $this->faker->boolean,
            //IsFavorite
            'is_favorite' => $this->faker->boolean,
            //category_id
            'category_id' => $this->faker->numberBetween(1, 4),
        ];
    }
}
