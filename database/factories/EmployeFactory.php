<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employees;
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

$factory->define(employees::class, function (Faker $faker) {
    return [
        'frist_name' => $faker->name,
         'last_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'company_id' =>$faker->numerify('##'),
        'phone' =>$faker->numerify('###-###-####')
        
       
       
    ];
});
