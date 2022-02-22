<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => 1,
            'user_id' => 1,
            'title' => 'yangpeng',
            'payload' => 'hi',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
