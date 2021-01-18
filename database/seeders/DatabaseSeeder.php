<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory([
            'email' => 'hnin7@gmail.com',
            'name'  => 'Hnin'
        ])->create();
        \App\Models\User::factory([
            'email' => 'titi@gmail.com',
            'name'  => 'TiTi'
        ])->create();
        \App\Models\User::factory([
            'email' => 'pisi@gmail.com',
            'name'  => 'PiSi'
        ])->create();
    }
}
