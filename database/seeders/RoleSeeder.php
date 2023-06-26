<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Coordinador']);
        $role3 = Role::create(['name' => 'Operario']);

        Permission::create(['name' => 'home'])->syncRoles([$role1,$role2,$role3]);

        
        Permission::create(['name' => 'users.index'])->syncRoles([$role1]); 
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1]); 
        Permission::create(['name' => 'users.update'])->syncRoles([$role1]);

        Permission::create(['name' => 'conductores.index'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'conductores.create'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'conductores.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'conductores.destroy'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'conductores.show'])->syncRoles([$role1,$role2]);
        
        Permission::create(['name' => 'componentes.index'])->syncRoles([$role3]);
        Permission::create(['name' => 'componentes.create'])->syncRoles([$role3]); 
        Permission::create(['name' => 'componentes.edit'])->syncRoles([$role3]);
        Permission::create(['name' => 'componentes.destroy'])->syncRoles([$role3]);
        Permission::create(['name' => 'componentes.show'])->syncRoles([$role3]);
    }
} 