<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'name'=> 'Admin',
            'email'=> 'admin@gmail.com',
            'password'=> hash::make('111'),
            'role_id'=> 1,
        ],
        [
            'name'=> 'User',
            'email'=> 'user@gmail.com',
            'password'=> hash::make('111'),
            'role_id'=> 2,
        ]]
    );
    }
}
