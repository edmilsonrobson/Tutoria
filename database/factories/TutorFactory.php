<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(App\Tutor::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create();
        },

        'is_admin' => false,
    ];
});
