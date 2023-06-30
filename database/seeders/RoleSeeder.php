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
        
        Permission::create(['name' => 'users.index'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'users.create'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'users.show'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'viajes.index'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'viajes.create'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'viajes.show'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'viajes.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'viajes.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'paises.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'paises.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'paises.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'paises.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'paises.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'empresas.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'empresas.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'empresas.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'empresas.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'empresas.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'conductores.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'conductores.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'conductores.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'conductores.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'conductores.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'sistemas.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'sistemas.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'sistemas.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'sistemas.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'sistemas.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'componentes.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'componentes.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'componentes.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'componentes.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'componentes.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'ciudades.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'ciudades.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'ciudades.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'ciudades.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'ciudades.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'clientes.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'clientes.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'clientes.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'clientes.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'clientes.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'camiones.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'camiones.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'camiones.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'camiones.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'camiones.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'tipos-servicios.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'tipos-servicios.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'tipos-servicios.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'tipos-servicios.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'tipos-servicios.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'almacenes.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'almacenes.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'almacenes.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'almacenes.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'almacenes.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'categorias-gastos.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'categorias-gastos.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'categorias-gastos.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'categorias-gastos.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'categorias-gastos.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'rutas.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'rutas.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'rutas.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'rutas.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'rutas.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'gastos.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'gastos.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'gastos.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'gastos.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'gastos.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'talleres.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'talleres.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'talleres.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'talleres.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'talleres.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'documentos-conductores.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'documentos-conductores.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'documentos-conductores.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'documentos-conductores.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'documentos-conductores.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'servicios.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'servicios.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'servicios.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'servicios.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'servicios.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'fallas.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'fallas.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'fallas.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'fallas.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'fallas.destroy'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'documentos-camiones.index'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'documentos-camiones.create'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'documentos-camiones.show'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'documentos-camiones.edit'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'documentos-camiones.destroy'])->syncRoles([$role1,$role2,$role3]);
    }
} 