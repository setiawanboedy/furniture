<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;
    public function definition()
    {

        return [

            'name'=> $this->faker->name(),
            'slug'=>$this->faker->name(),
            'image'=>'assets/gallery/6I7Bu6Ui7AVOLzvymmIwuV9qT3LxAf7bmrAlBQFq.webp',
            'category'=> $this->faker->randomElement(['Meja', 'Kursi', 'Lainnya']),
            'desc'=> $this->faker->text(),
            'price'=>random_int(200000,5000000),
        ];
    }
}
