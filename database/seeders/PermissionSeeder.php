<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear Categoría',
        ]);

        Permission::create([
            'name' => 'Listar Categoría',
        ]);

        Permission::create([
            'name' => 'Editar Categoría',
        ]);

        Permission::create([
            'name' => 'Eliminar Categoría',
        ]);

        Permission::create([
            'name' => 'Crear Producto',
        ]);

        Permission::create([
            'name' => 'Listar Producto',
        ]);

        Permission::create([
            'name' => 'Editar Producto',
        ]);

        Permission::create([
            'name' => 'Eliminar Producto',
        ]);
    }
}