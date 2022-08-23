<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectType;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            ['Building','Building project.'],
            ['Road','Road project.'],
            ['Water Works','Water works project.'],
            ['Mixed or Other','Projects having mixed works or works different from the listed ones.'],
        ];
        
        foreach ($projects as $key => $value) {
            $type = new ProjectType();
            $type->name = $value[0];
            $type->description = $value[1];
            $type->save();
        }
    }
}
