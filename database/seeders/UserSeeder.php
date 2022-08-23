<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->role_id = 1;
        $user->first_name = 'Ayenew';
        $user->middle_name = 'Yihune';
        $user->last_name = 'Demeke';
        $user->phone = '0911280520';
        $user->email = 'ayennew@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
    }
}
