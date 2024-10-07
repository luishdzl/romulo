<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Luis Jose Hernandez',
            'email' => 'luisjose@gmail.com',
            'cedula' => '30344565',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');
        
        User::factory(9)->create();
    }
}
