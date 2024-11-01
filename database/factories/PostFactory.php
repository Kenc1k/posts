<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'=>rand(1,20),
            'title'=>$this->faker->lastName(),
            'description'=>$this->faker->text(),
            'text'=>$this->faker->text(),
            'image'=>$this->faker->imageUrl(),
            'like'=>rand(1,50),
            'dislike'=>rand(1,50),
            'view'=>rand(1,100),
        ];
    }
}
