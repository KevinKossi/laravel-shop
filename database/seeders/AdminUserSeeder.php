<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'admin',
            'username' => 'ehbAdmin',
            'birthday' => '09/09/200',
            'about me ' => 'ik ben degene die de aarde op het spel zal zetten ',
            'avatar' => 'jsp',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'role_as' => '1',
            // Add other fields as necessary
        ]);
    }
}
