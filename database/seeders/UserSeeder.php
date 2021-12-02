<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('123'),
                'role' => "0",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'shop keeper',
                'email' => 'shopkeeper@mail.com',
                'password' => Hash::make('123'),
                'role' => "1",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'customer',
                'email' => 'customer@mail.com',
                'password' => Hash::make('123'),
                'role' => "2",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        $count = count($users);

        for ($i=0; $i < $count; $i++) { 
            User::create($users[$i]);
        }

    }
}
