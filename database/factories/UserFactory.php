<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\categories;
use App\Models\products;
use App\Models\inventories;
use App\Models\establisments;
use App\Models\employees;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/*
*Send data to users table
*/
$factory->define(User::class, function (Faker $faker) {
	static $password;
    return [
    	'nit' =>$faker->unique->randomNumber($nbDigits = NULL, $strict = false),
        'name' => $faker->name,
        'telephone' => $faker->tollFreePhoneNumber,
        'department' => $faker->state,
        'city' => $faker->city,
        'address' => $faker->address,
        'state' => 1,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => $password ?: $password = bcrypt('12345'), // 12345
        'remember_token' => Str::random(10),
    ];
});


/*
*Send data to categories table
*/
$factory->define(categories::class, function(Faker $faker){
    return [
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 200),
    ];
});


/*
*Send data to products table
*/
$factory->define(products::class, function(Faker $faker){
    return [
        'nit' =>$faker->unique->randomNumber($nbDigits = NULL, $strict = false),
        'name' => $faker->name,
        'description' => $faker->text,
        'cost' => $faker->numberBetween($min = 1000, $max = 50000),
        'value' => $faker->numberBetween($min = 50000, $max = 100000),
        'state' => 1,
        'category_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});


/*
*Send data to inventories table
*/
$factory->define(inventories::class, function(Faker $faker){
    return [
        'stock' => $faker->numberBetween($min = 10, $max = 200),
        'minimum_stock' => $faker->numberBetween($min = 10, $max = 20),
    ];
});


/*
*Send data to establisments table
*/
$factory->define(establisments::class, function(Faker $faker){
    return [
        'nit' =>$faker->unique->randomNumber($nbDigits = NULL, $strict = false),
        'name' => $faker->name,
        'department' => $faker->state,
        'city' => $faker->city,
        'address' => $faker->address,
        'telephone' => $faker->tollFreePhoneNumber,
        'state' => 1,
        'inventories_id' => 1,
    ];
});


/*
*Send data to employees table
*/
$factory->define(employees::class, function (Faker $faker) {
	static $password;
    return [
    	'nit' =>$faker->unique->randomNumber($nbDigits = NULL, $strict = false),
        'name' => $faker->name,
        'telephone' => $faker->tollFreePhoneNumber,
        'department' => $faker->state,
        'city' => $faker->city,
        'address' => $faker->address,
        'state' => 1,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('12345'), // 12345
        'establisment_id' => 1,
    ];
});


/*
*Send data to sales table
*/
$factory->define(sales::class, function(Faker $faker){
    return [
        'nit' => $faker->bothify('##??##??##??##??'),
        'employee_id' => $faker->numberBetween($min = 1, $max = 20),
        'establisment_id' => 1,
    ];
});

