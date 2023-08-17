<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\FAQ; 
use app\Models\FAQCategory; 

class Faq_FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Populate questions
      \App\Models\FAQ::factory(50)->create();

       // Populate categories
       \App\Models\FAQCategory::factory(5)->create();

      // Get all the questions 
      $questions = \App\Models\FAQ::all();

      // Populate the pivot table
      \App\Models\FAQCategory::all()->each(function ($category) use ($questions) { 
        $category->questions()->attach(
            $questions->random(rand(1, $questions->count()))->pluck('id')->toArray()
        ); 
      });
    }
}
