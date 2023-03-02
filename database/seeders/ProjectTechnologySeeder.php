<?php

namespace Database\Seeders;

use App\Models\project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $projects= project::all(); 

        $technologyIds= Technology::all()->pluck('id');

        foreach ( $projects as  $project) {
         $project->technologies()->attach($faker->randomElements($technologyIds, 4));
        }
    }
}
