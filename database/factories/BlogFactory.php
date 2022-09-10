<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titre1"=> $this->faker->title(),
            "description"=> $this->faker->text(),
            "titre2"=> $this->faker->title(),
            "category"=> $this->faker->text(),
        ];
    }
}
