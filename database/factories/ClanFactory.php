<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imePrezime' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'password' => $this->faker->password(),
            'email' => $this->faker->unique()->safeEmail(),
            'forum_id' => $this->faker->numberBetween($min = 1, $max = 20)
        ];
    }
}
