<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            "value_goods" => rand(2000, 43000),
            'value_service' => rand(2000, 43000),
            "date" => now()->subDays(rand(1, 7))
        ];
    }
}
