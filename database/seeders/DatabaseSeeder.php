<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name'     => 'Mbarep ganteng',
            'email'    => 'leo@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        User::factory(9)->create();

        Country::factory(20)->create();
        State::factory(40)->create();
        City::factory(80)->create();
        Department::factory(20)->create();
    }
}
