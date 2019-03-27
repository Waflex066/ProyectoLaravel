<?php

use Faker\Generator as Faker;
use App\Models\Account;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'nid_type',
        'nid' => $faker->unique()->randomNumber(7, true),
        'name' => $faker->name,
        'last_name' => $faker->lastName,
    ];
});
