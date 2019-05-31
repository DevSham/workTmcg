<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'id' => factory('App\Posts')->create()->id,
        'fname' => $faker->name,
        'sname' => $faker->name,
        'sex' =>$faker->text,
        'amount' => $faket->number,
        '_token' => str_random(),


    
    ];
});
