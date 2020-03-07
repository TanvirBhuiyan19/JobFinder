<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'companyName' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'type' => rand(0,1),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'categoryImage' => rand(1,10).'.png',
    ];
});


$factory->define(Company::class, function (Faker $faker) {
    return [
        'userId' => App\User::all()->random()->id,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'website' => $faker->domainName,
        'websitelogo' => 'companyLogo.png',
        'coverPhoto' => 'companyCover.jpg',
        'description' => $faker->paragraph(rand(2,10)),
    ];
});

$factory->define(Job::class, function (Faker $faker) {
    return [
        'userId' => App\User::all()->random()->id,
        'companyId' => App\Company::all()->random()->id,
        'title' => $title=$faker->text,
        'slug' => str_slug($title),
        'description' => $faker->paragraph(rand(2,10)),
        'categoryId' => rand(1,10),
        'position' => $faker->jobTitle,
        'location' => $faker->address,
        'salary' => $faker->rand(20000,50000),
        'country' => $faker->country,
        'deadline' => $faker->date($min = 'now'),
    ];
});


