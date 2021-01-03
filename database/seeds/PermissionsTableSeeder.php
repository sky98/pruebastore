<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//Permission list for users
        Permission::create(['name' => 'api.users.index']);
        Permission::create(['name' => 'api.users.update']);
        Permission::create(['name' => 'api.users.show']);
        Permission::create(['name' => 'api.users.store']);
        Permission::create(['name' => 'api.users.destroy']);

         //Permission list for products
        Permission::create(['name' => 'api.products.index']);
        Permission::create(['name' => 'api.products.update']);
        Permission::create(['name' => 'api.products.show']);
        Permission::create(['name' => 'api.products.store']);
        Permission::create(['name' => 'api.products.destroy']);

        //Permission list for categories
        Permission::create(['name' => 'api.categories.index']);
        Permission::create(['name' => 'api.categories.update']);
        Permission::create(['name' => 'api.categories.show']);
        Permission::create(['name' => 'api.categories.store']);
        Permission::create(['name' => 'api.categories.destroy']);

        //Permission list for employees
        Permission::create(['name' => 'api.employees.index']);
        Permission::create(['name' => 'api.employees.update']);
        Permission::create(['name' => 'api.employees.show']);
        Permission::create(['name' => 'api.employees.store']);
        Permission::create(['name' => 'api.employees.destroy']);

        //Permission list for establisments
        Permission::create(['name' => 'api.establisments.index']);
        Permission::create(['name' => 'api.establisments.update']);
        Permission::create(['name' => 'api.establisments.show']);
        Permission::create(['name' => 'api.establisments.store']);
        Permission::create(['name' => 'api.establisments.destroy']);

        //Permission list for inventories
        Permission::create(['name' => 'api.inventories.index']);
        Permission::create(['name' => 'api.inventories.update']);
        Permission::create(['name' => 'api.inventories.show']);
        Permission::create(['name' => 'api.inventories.store']);
        Permission::create(['name' => 'api.inventories.destroy']);

        //Permission list for sales
        Permission::create(['name' => 'api.sales.index']);
        Permission::create(['name' => 'api.sales.update']);
        Permission::create(['name' => 'api.sales.show']);
        Permission::create(['name' => 'api.sales.store']);
        Permission::create(['name' => 'api.sales.destroy']);

        $admin = Role::create(['name' => 'Admin']);

        $admin->givePermissionTo(Permission::all());

        //User Admin
        $user = User::find(1); //
        $user->assignRole('Admin');
    }
}
