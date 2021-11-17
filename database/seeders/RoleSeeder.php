<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravel\Jetstream\Rules\Role as RulesRole;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=> 'Admin']);
        $role2 = Role::create(['name'=> 'Artesano']);

        Permission::create(['name' => 'admin.inicio']);

        Permission::create(['name' => 'admin.producto.index']);
        Permission::create(['name' => 'admin.produto.create']);
        Permission::create(['name' => 'admin.producto.edit']);
        Permission::create(['name' => 'admin.producto.destroy']);

    }
}
