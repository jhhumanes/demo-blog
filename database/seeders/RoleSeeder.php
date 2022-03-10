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
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleBlogger = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.home', 'description' => 'Ver dashboard'])
            ->syncRoles([$roleAdmin, $roleBlogger]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver listado de usuarios'])
            ->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar roles'])
            ->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver listado de etiquetas'])
            ->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear etiqueta'])
            ->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Modificar etiqueta'])
            ->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Eliminar etiqueta'])
            ->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver listado de categorías'])
            ->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear categoría'])
            ->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Modificar categoría'])
            ->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar categoría'])
            ->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver listado de etiquetas'])
            ->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear etiqueta'])
            ->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Modificar etiqueta'])
            ->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar etiqueta'])
            ->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver listado de posts'])
            ->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear post'])
            ->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Modificar post'])
            ->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar post'])
            ->syncRoles([$roleAdmin, $roleBlogger]);
    }
}
