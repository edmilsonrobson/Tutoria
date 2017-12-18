<?php

use App\FundingInstitution;
use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'description' => $faker->sentences(3, true),
        'funding_institution_id' => function() {
            return factory(FundingInstitution::class)->create();
        }
    ];
});
