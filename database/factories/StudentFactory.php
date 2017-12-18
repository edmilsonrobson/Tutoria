<?php

use App\Scholarship;
use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'scholarship_id' => function() {
            return factory(Scholarship::class);
        }
    ];
});
