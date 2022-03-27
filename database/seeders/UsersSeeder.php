<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Evaldo Expedito',
            'email' => 'eesantosap@hotmail.com',
            'password' => bcrypt('teste123'),
        ]);
    }
}
