<?php

use App\Student;
use App\Tutor;
use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'tutor_id' => function() {
            return factory(Tutor::class)->create();
        },

        'student_id' => function() {
            return factory(Student::class)->create();
        },

        'productivity_score' => $faker->numberBetween(1, 5),
        'assiduity_score' => $faker->numberBetween(1, 5),
        'proactivity_score' => $faker->numberBetween(1, 5),
    ];
});
