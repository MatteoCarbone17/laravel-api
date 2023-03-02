<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $technologies=['HTML5','CSS3','SCSS','Bootstrap','Java','Python','C','C++','JS','Vue','Vite','PHP','TS','Laravel','Angular.JS'];

        foreach ($technologies as  $technologyName) {
        $technology = new Technology();
        $technology->name =  $technologyName;
        $technology->save();
        }
    }
}
