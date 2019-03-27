<?php

use Faker\Generator as Faker;
use App\Models\Nidtype;

$factory->define(App\Models\Company::class, function (Faker $faker) {
    return [
        'nid_type' => function(){
        	return Nidtype::all()->count() > 0 ? Nidtype::all()->random(1)->first()->id : 0;
        },
      	'nid' => $faker->unique()->randomNumber(7, true),
      	'business_name' => $faker->company,
      	'tradename' => $faker->company,
      	'phone' => $faker->tollFreePhoneNumber,
      	'address' => $faker->address,
      	'email' => $faker->email,
    ];
});
