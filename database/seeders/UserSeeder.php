<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::Create([
            'name' => 'sofyan',
            'level' => 'admin',
            'email' => 'sofyan@gmail.com',
            'password' => bcrypt('123'),
            'remember_token' => Str::random(60),
        ]);

    }
}
