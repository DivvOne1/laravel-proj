<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    protected $model = State::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'likes'=> $this->faker->numberBetween($min=1,$max = 20),
            'views'=> $this->faker->numberBetween($min=1,$max = 100),
        ];
    }
}
