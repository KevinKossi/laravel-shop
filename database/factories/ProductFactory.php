<?php

namespace Database\Factories;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()),
            'name' => $this->faker->name,
            'weight' => $this->faker->numberBetween($min = 0, $max = 100),
            'meat' => $this->faker->name,
            'small_description'=> implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()),
            'description'=> implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()) . implode('\n',$this->faker->paragraphs()),
            'original_price'=> $this->faker->numberBetween($min = 0, $max = 200),
            'selling_price'=> $this->faker->numberBetween($min = 0, $max = 200),
            'quantity'=> $this->faker->numberBetween($min = 1, $max = 100),
            'status' => $this->faker->numberBetween($min = 0, $max = 1),
            'trending'=> $this->faker->numberBetween($min = 0, $max = 1),
            'meta_title'=>  $this->faker->company,
            'meta_keyword'=>  $this->faker->company,
            'meta_description'=>  $this->faker->company,
        ];
    }
}
