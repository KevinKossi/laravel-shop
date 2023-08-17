<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => "admin",
            'email' => "admin@ehb.be",
            'password' => Hash::make(123456),
            'isAdmin' => true,
        ]);
 
        \App\Models\User::factory(10)->create();
    }
}
