<?php

namespace Database\Seeders;

use App\Models\Diet;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diet::factory()
            ->times(10)
            ->create();

        foreach (Product::all() as $product) {
            $diets = Diet::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $product->diets()->attach($diets);
        }
    }
}
