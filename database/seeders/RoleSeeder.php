<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravel\Jetstream\Rules\Role as RulesRole;
use PhpParser\Node\Expr\Assign;
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

        Permission::create(['name' => 'admin.inicio'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.asociacion.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.asociacion.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.asociacion.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.asociacion.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.producto.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.producto.create'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.producto.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.producto.destroy'])->syncRoles([$role1, $role2]);  

        Permission::create(['name' => 'admin.categorias.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categorias.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categorias.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categorias.destroy'])->syncRoles([$role1]); 
        
    }
}
