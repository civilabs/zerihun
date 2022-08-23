<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MemberRole;

class MemberRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['Project Manager','Manager of a specific project.'],
            ['Office Engineer','Office engineer of the project.'],
            ['Site Engineer','Site engineer of the project.'],
            ['Material Engineer','Material engineer of the project.'],
            ['Pavement Engineer','Pavement engineer of the project.'],
            ['Geotechnical Engineer','Geotechnical engineer of the project.'],
            ['Structural Engineer','Structural engineer of the project.'],
            ['Sanitary Engineer','Sanitary engineer of the project.'],
            ['Foreman','Foreman of the project.'],
            ['Mason','Mason of the project.'],
            ['Carpenter','Carpenter of the project.'],
            ['Bar Bender','Bar bender of the project.'],
            ['Electrician','Electrician of the project.'],
            ['Labourer','Labourer of the project.'],
            ['Other','Other members of the project.'],
        ];
        
        foreach ($roles as $key => $value) {
            $role = new MemberRole();
            $role->name = $value[0];
            $role->description = $value[1];
            $role->save();
        }
    }
}
