<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MemberStatus;

class MemberStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            ['Active','Active project team member.'],
            ['Previous','Previous project team member.'],
        ];
        
        foreach ($members as $key => $value) {
            $status = new MemberStatus();
            $status->name = $value[0];
            $status->description = $value[1];
            $status->save();
        }
    }
}
