<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Str;
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
        $title = $this->faker->sentence(15);
        return [
            'title'       => $title,
            'slug'        => Str::slug($title),
            'content'     => $this->faker->sentence(215),
            'category_id' => Category::factory()->create(),
            'author_id'   => Author::factory()->create(),
        ];
    }
}
