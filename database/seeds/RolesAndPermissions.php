<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


       
        // create permissions
        Permission::create(['name' => 'create_role']);
        Permission::create(['name' => 'get_roles']);
        Permission::create(['name' => 'update_role']);
        Permission::create(['name' => 'delete_role']);
        Permission::create(['name' => 'create_permission']);
        Permission::create(['name' => 'get_permission']);
        Permission::create(['name' => 'update_permission']);
        Permission::create(['name' => 'delete_permission']);
        Permission::create(['name' => 'create_product']);
        Permission::create(['name' => 'get_products']);
        Permission::create(['name' => 'update_product']);
        Permission::create(['name' => 'delete_product']);

        Role::create(['name' => 'employee'])
        ->givePermissionTo([
            'create_product',
            'get_products',
            'update_product',
            'delete_product',
        ]);

        Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());


    }
}
