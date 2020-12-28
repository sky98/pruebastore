<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(InventoriesSeeder::class);
        $this->call(EstablismnetsSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(SalesSeeder::class);
    }
}
