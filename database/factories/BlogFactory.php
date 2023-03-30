<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ja_JP');

        return [
            'title' => $faker->word,
            'content' => $faker->realText
        ];
    }
}
