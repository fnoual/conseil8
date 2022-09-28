<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'username' => 'fnoual',
            'phone' => '0540705747',
            'email' => 'fouzi.noual@gmail.com',
            'password' => bcrypt('fnoual123'),
        ]);
    }
}
