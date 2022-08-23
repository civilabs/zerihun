<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['Super Admin','Developer of the system.'],
            ['Owner','Owner of the firm.'],
            ['Admin','IT staff working on the system.'],
            ['Manager','Supervisors and managers of the firm.'],
            ['Employee','Other employees of the firm.'],
            ['Client','Client of the firm.'],
            ['Sub Contractor','Sub contractor of the firm.'],
            ['Consultant','Consultant of the firm.'],
        ];
        
        foreach ($roles as $key => $value) {
            $role = new Role();
            $role->name = $value[0];
            $role->description = $value[1];
            $role->save();
        }
    }
}
