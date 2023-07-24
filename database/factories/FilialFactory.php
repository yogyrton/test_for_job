<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilialFactory extends Factory
{

    private function name(): string
    {
        return fake()->company;
    }

    public function definition(): array
    {
        return [
            'name' => $this->name()
        ];
    }
}
