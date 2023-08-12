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
        $role4 = Role::create(['name' => 'Conductor']);

        Permission::create(['name' => 'home', 'description' => 'Ver dashboard'])->syncRoles([$role1,$role2,$role3,$role4]);
        
        Permission::create(['name' => 'users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'users.edit', 'description' => 'Asignar un rol'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'roles.index', 'description' => 'Ver listado de roles'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'roles.create', 'description' => 'Registrar nuevo rol'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'roles.show', 'description' => 'Ver rol'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'roles.edit', 'description' => 'Editar rol'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'roles.destroy', 'description' => 'Eliminar rol'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'viajes.index', 'description' => 'Ver listado de viajes'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'viajes.create', 'description' => 'Registrar nuevo viaje'])->syncRoles([$role1,$role2]); 
        Permission::create(['name' => 'viajes.show', 'description' => 'Ver viaje'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'viajes.edit', 'description' => 'Editar viaje'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'viajes.destroy', 'description' => 'Eliminar viaje'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'empresas.index', 'description' => 'Ver listado de empresas'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'empresas.create', 'description' => 'Registrar nueva empresa'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'empresas.show', 'description' => 'Ver empresa'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'empresas.edit', 'description' => 'Editar empresa'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'empresas.destroy', 'description' => 'Eliminar empresa'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'conductores.index', 'description' => 'Ver listado de conductores'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'conductores.create', 'description' => 'Registrar nuevo conductor'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'conductores.show', 'description' => 'Ver conductor'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'conductores.edit', 'description' => 'Editar conductor'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'conductores.destroy', 'description' => 'Eliminar conductor'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'sistemas.index', 'description' => 'Ver listado de sistemas'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'sistemas.create', 'description' => 'Registrar nuevo sistema'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'sistemas.show', 'description' => 'Ver sistema'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'sistemas.edit', 'description' => 'Editar sistema'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'sistemas.destroy', 'description' => 'Elimina sistema'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'componentes.index', 'description' => 'Ver listado de componentes'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'componentes.create', 'description' => 'Registrar nuevo componente'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'componentes.show', 'description' => 'Ver componente'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'componentes.edit', 'description' => 'Editar componente'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'componentes.destroy', 'description' => 'Eliminar componente'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'clientes.index', 'description' => 'Ver listado de clientes'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'clientes.create', 'description' => 'Registrar nuevo cliente'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'clientes.show', 'description' => 'Ver cliente'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'clientes.edit', 'description' => 'Editar cliente'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'clientes.destroy', 'description' => 'Eliminar cliente'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'camiones.index', 'description' => 'Ver listado de camiones'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'camiones.create', 'description' => 'Registrar nuevo camion'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'camiones.show', 'description' => 'Ver camion'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'camiones.edit', 'description' => 'Editar camion'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'camiones.destroy', 'description' => 'Eliminar camion'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'actividades.index', 'description' => 'Ver listado de actividades'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'actividades.create', 'description' => 'Registrar nueva actividad'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'actividades.show', 'description' => 'Ver actividad'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'actividades.edit', 'description' => 'Editar actividad'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'actividades.destroy', 'description' => 'Eliminar actividad'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'almacenes.index', 'description' => 'Ver listado de almacenes'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'almacenes.create', 'description' => 'Registrar nuevo almacen'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'almacenes.show', 'description' => 'Ver almacen'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'almacenes.edit', 'description' => 'Editar almacen'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'almacenes.destroy', 'description' => 'Eliminar almacen'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'categorias-gastos.index', 'description' => 'Ver listado de categorias de gastos'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'categorias-gastos.create', 'description' => 'Registrar nueva categoria de gastos'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'categorias-gastos.show', 'description' => 'Ver categoria de gastos'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'categorias-gastos.edit', 'description' => 'Editar categoria de gastos'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'categorias-gastos.destroy', 'description' => 'Eliminar categoria de gastos'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'rutas.index', 'description' => 'Ver listado de rutas'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'rutas.create', 'description' => 'Registrar nueva ruta'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'rutas.show', 'description' => 'Ver ruta'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'rutas.edit', 'description' => 'Editar ruta'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'rutas.destroy', 'description' => 'Eliminar ruta'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'gastos.index', 'description' => 'Ver listado de gastos'])->syncRoles([$role1,$role2,$role3,$role4]); 
        Permission::create(['name' => 'gastos.create', 'description' => 'Registrar nuevo gasto'])->syncRoles([$role1,$role2,$role3,$role4]); 
        Permission::create(['name' => 'gastos.show', 'description' => 'Ver gasto'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'gastos.edit', 'description' => 'Editar gasto'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'gastos.destroy', 'description' => 'Eliminar gasto'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'talleres.index', 'description' => 'Ver listado de talleres'])->syncRoles([$role1,$role2,$role3,$role4]); 
        Permission::create(['name' => 'talleres.create', 'description' => 'Registrar nuevo taller'])->syncRoles([$role1,$role2,$role3,$role4]); 
        Permission::create(['name' => 'talleres.show', 'description' => 'Ver taller'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'talleres.edit', 'description' => 'Editar taller'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'talleres.destroy', 'description' => 'Eliminar taller'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'servicios.index', 'description' => 'Ver listado de servicios'])->syncRoles([$role1,$role2,$role3,$role4]); 
        Permission::create(['name' => 'servicios.create', 'description' => 'Registrar nuevo servicio'])->syncRoles([$role1,$role2,$role3,$role4]); 
        Permission::create(['name' => 'servicios.show', 'description' => 'Ver servicio'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'servicios.edit', 'description' => 'Editar servicio'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'servicios.destroy', 'description' => 'Eliminar servicio'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'fallas.index', 'description' => 'Ver listado de fallas'])->syncRoles([$role1,$role2,$role3,$role4]); 
        Permission::create(['name' => 'fallas.create', 'description' => 'Registrar nueva falla'])->syncRoles([$role1,$role2,$role3,$role4]); 
        Permission::create(['name' => 'fallas.show', 'description' => 'Ver falla'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name' => 'fallas.edit', 'description' => 'Editar falla'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'fallas.destroy', 'description' => 'Eliminar falla'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'documentos-camiones.index', 'description' => 'Ver listado de documentos de camiones'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'documentos-camiones.create', 'description' => 'Registrar nuevo documento de camion'])->syncRoles([$role1,$role2,$role3]); 
        Permission::create(['name' => 'documentos-camiones.show', 'description' => 'Ver documento de camion'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'documentos-camiones.edit', 'description' => 'Editar documento de camion'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'documentos-camiones.destroy', 'description' => 'Eliminar documento de camion'])->syncRoles([$role1,$role2,$role3]);
    }
}