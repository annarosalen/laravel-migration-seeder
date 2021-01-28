<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'name' => ($faker ->word()),
        'address' => ($faker ->streetAddress()),
        'employees_count' =>($faker ->randomDigit())
    ];
});
