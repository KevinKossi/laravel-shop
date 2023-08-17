<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        {
            return [
                'title' => $this->faker->sentence(),
                'content' => implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()),
                'img_url' => 'https://source.unsplash.com/random',
            ];
        }
    }
}
