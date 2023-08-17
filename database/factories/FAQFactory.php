<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FAQ>
 */
class FAQFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'question_name' => $this->faker->sentence(),
            'question_answer' => implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()),
        ];
    }
}
