<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Technology;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            TypeSeeder::class,
            TechnologySeeder::class,
            ProjectSeeder::class,
            ProjectTechnologySeeder::class,
            Role::class,
            User::class,
        ]);
    }
}
