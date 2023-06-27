<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => "",
            'modelo' => "",
            'color' => "",
            'matricula' => Str::random(10),
            'puertas' => 4,
            'vendedor_id' => ""

        ];
    }
}
