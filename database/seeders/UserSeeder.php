<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use APP\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([

            'name' => 'Sanuja',
            'email' => 'sanuja@gmail.com'

        ]);

        \App\Models\User::factory()->create([

            'name' => 'Ushan',
            'email' => 'ushan@gmail.com'

        ]);

        \App\Models\User::factory()->create([

            'name' => 'jayarathna',
            'email' => 'jayarathna@gmail.com',
            'role' => 'instructor'

        ]);

        \App\Models\User::factory()->create([

            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin'

        ]);

        \App\Models\User::factory()->count(10)->create();


        \App\Models\User::factory()->count(10)->create([
            'role' => 'instructor'
        ]);
    }
}
