<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'parent_id' ,
        'name' => $faker->name,
    ];
});
