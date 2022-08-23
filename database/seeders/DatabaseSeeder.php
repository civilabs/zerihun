<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            RoleSeeder::class,
            UserSeeder::class,
            ProjectTypeSeeder::class,
            ProjectStatusSeeder::class,
            MemberRoleSeeder::class,
            MemberStatusSeeder::class,
            EmploymentTypeSeeder::class,
            AssetTypeSeeder::class,
            DocumentTypeSeeder::class,
            ActionTypeSeeder::class,
        ]);
    }
}
