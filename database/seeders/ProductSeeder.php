<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(12)->create(['category_id' => 10]);
        \App\Models\Product::factory(12)->create(['category_id' => 12]);
        \App\Models\Product::factory(12)->create(['category_id' => 13]);
        \App\Models\Product::factory(12)->create(['category_id' => 14]);
        \App\Models\Product::factory(12)->create(['category_id' => 15]);
        \App\Models\Product::factory(12)->create(['category_id' => 16]);
        \App\Models\Product::factory(12)->create(['category_id' => 17]);

    }
}
