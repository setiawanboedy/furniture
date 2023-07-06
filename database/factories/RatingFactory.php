<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProductRating;
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = ProductRating::class;
    public function definition()
    {
        return [
            'product_id'=>random_int(1,50),
            'users_id'=>random_int(1,20),
            'rating'=>random_int(1,5),
            'username' => $this->faker->username(),
            'comment' => Str::random(20),
        ];
    }
}
