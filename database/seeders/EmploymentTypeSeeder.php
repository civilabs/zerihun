<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EmploymentType;

class EmploymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employments = [
            ['Permanent','Permanent employee.'],
            ['Contract','Temporary employee.'],
        ];
        
        foreach ($employments as $key => $value) {
            $type = new EmploymentType();
            $type->name = $value[0];
            $type->description = $value[1];
            $type->save();
        }
    }
}
