<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectStatus;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            ['New','New project, construction yet to start.'],
            ['In Progress','Project in progress.'],
            ['Completed','Completed project.'],
        ];
        
        foreach ($projects as $key => $value) {
            $status = new ProjectStatus();
            $status->name = $value[0];
            $status->description = $value[1];
            $status->save();
        }
    }
}
