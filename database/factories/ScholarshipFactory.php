<?php

use App\Project;
use Faker\Generator as Faker;

$factory->define(App\Scholarship::class, function (Faker $faker) {
    return [
        'project_id' => function() {
            return factory(Project::class)->create();
        }
    ];
});
