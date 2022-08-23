<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ActionType;

class ActionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actions = [
            ['Project Created','Project created by an authorized personnel.'],
            ['Project Deleted','Project deleted by an authorized personnel.'],
        ];
        
        foreach ($actions as $key => $value) {
            $type = new ActionType();
            $type->name = $value[0];
            $type->description = $value[1];
            $type->save();
        }
    }
}
