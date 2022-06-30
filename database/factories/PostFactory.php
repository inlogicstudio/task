<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'site_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence,
            'body' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
