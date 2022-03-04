<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(["name" => 'Administrador']);

        $role->permissions()->attach([1, 2, 3, 4, 5, 7, 8]);

        $role = Role::create(["name" => 'Operador']);

        $role->permissions()->attach([1, 2, 3, 5, 7]);
    }
}