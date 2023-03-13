<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->words(3, true);
        return [
            'name' =>$name ,
            'slug' => Str::slug($name) ,
            'desc' => $this->faker->text,
            'smalldesc' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'featured' => $this->faker->boolean,
            'quantity' => $this->faker->randomNumber(2),
            'category_id' => $this->faker->randomNumber(2),
        ];
    }
}
