<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()),
            'status' => '1',
            'description'=> implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()),
            'meta_title'=>  $this->faker->company,
            'meta_keyword'=>  $this->faker->company,
            'meta_description'=>  $this->faker->company,
            'image' => 'https://source.unsplash.com/random',

        ];
    }
}

