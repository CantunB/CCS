<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador  = User::create([
            'name' => 'Jeni Barragan',
            'email' => 'jeni280597@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('tamalitos2')
        ]);
    }
}
