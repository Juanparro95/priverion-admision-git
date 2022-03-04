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
            'name' => 'Juan David Parroquiano Vargas',
            'email' => 'juan.parroquiano95@gmail.com',
            'photo' => env('URL_IMAGE') . "Juan David Parroquiano Vargas",
            'password' => Hash::make('Parro9512$$'),
        ]);

        $user->assignRole('Administrador');
    }
}