<?php

use Illuminate\Database\Seeder;

class EstablismentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\establisments::class,1)->create();
    }
}
