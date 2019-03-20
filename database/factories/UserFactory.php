<?php

use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(Product::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->firstName,
        'viscosidad' => $faker->randomDigit,
        'presentacion'=> $faker->randomDigit,
        'precio' => $faker->randomFloat($nbMaxDecimals = null, $min = 100, $max = 1000),
        'description' => $faker->paragraph(5),
        'beneficios' => $faker->paragraph(5),
        'aplicaciones' => $faker->paragraph(5),
        'uso' => $faker->paragraph(5),
    ];
});
