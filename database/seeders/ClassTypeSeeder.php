<?php

namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\ClassType::create([
            'name' => 'Yoga',
            'description' => fake()->text(),
            'minutes' => 60
        ]);

        \App\Models\ClassType::create([
            'name' => 'Dance Fitness',
            'description' => fake()->text(),
            'minutes' => 45
        ]);

        \App\Models\ClassType::create([
            'name' => 'Pilates',
            'description' => fake()->text(),
            'minutes' => 60
        ]);

        \App\Models\ClassType::create([
            'name' => 'Boxing',
            'description' => fake()->text(),
            'minutes' => 50
        ]);
    }
}
