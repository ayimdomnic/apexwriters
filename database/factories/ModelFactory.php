<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Orders::class, function(Faker\Generator $faker){
    return [
        'title' =>$faker->name,
        'word_length' =>$faker->randomDigit,
        'subject'=> $faker->name,
        'academic_level'=> $faker->name,
        'deadline'=> $faker->dateTime,
        'total' => $faker ->numberBetween($min =1000, $max=2500),
        'attachment' => $faker ->text(200),
        'style' => $faker ->name,
        'no_of_sources'=>$faker->numberBetween($min=1, $max=13),
        'suggested_sources'=>$faker->text(200),
        'essential_sources'=>$faker->text(200),
        'instructions'=>$faker->text(500),


    ];
});


