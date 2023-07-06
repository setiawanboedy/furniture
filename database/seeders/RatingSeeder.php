<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductRating;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductRating::factory()->count(50)->create();
    }
}
