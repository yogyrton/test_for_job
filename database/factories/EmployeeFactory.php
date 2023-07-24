<?php

namespace Database\Factories;

use App\Enums\EmployeeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    private function name(): string
    {
        return fake()->name;
    }

    private function position(): int
    {
        return mt_rand(EmployeeEnum::Private, EmployeeEnum::Engineer);
    }

    public function definition(): array
    {
        return [
            'name' => $this->name(),
            'position' => $this->position(),
        ];
    }
}
