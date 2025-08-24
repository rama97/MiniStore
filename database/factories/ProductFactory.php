<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition() : array
    {
        return [
            'name' => $this->faker->sentence,
            'qty' => $this->faker->randomDigit,
            'price' => $this->faker->randomDigit,
        ];
    }

}
