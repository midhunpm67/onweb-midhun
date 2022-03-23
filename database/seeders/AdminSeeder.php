<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  =>  'Admin',
            'email' =>  'nidhin@gmail.com',
            'mobile'    =>  '1234567890',
            'username'  =>  'nidhin',
            'password'  => Hash::make('pass')
        ]);
    }
}
