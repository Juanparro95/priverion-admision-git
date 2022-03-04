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
        $user = User::create([
            'name' => 'Usuario Administrador',
            'email' => 'admin@gmail.com',
            'photo' => env('URL_IMAGE') . "Usuario Administrador",
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('Administrador');
    }
}