<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "text"=>$this->faker->text(),
            "date"=>$this->faker->date(),
            "image"=>$this->faker->imageUrl(),
        ];
    }
}
