<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            ['user_name' => "Afaq",'email' =>'afaqahmad@gmail.com', 'password'=> 'afaq1212' ,'created_at' => now(), 'updated_at' => now()],
            ['user_name' => "Hasnat",'email' =>'hasnatahmad@gmail.com', 'password'=> 'hasnat1212','created_at' => now(), 'updated_at' => now()],
            ['user_name' => "Ahmad",'email' =>'ahmad@gmail.com', 'password'=> 'ahmad1212','created_at' => now(), 'updated_at' => now()],
            ['user_name' => "Khan",'email' =>'khan@gmail.com', 'password'=> 'khan1212','created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
