<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Filial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filial::factory()
            ->count(3)
            ->has(Employee::factory()
                ->count(10))
            ->create();
    }
}
