<?php

use App\Project;
use App\Rating;
use App\RatingCriteria;
use App\Skill;
use App\Student;
use App\Tutor;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentUser1 = factory(User::class)->create(['password' => bcrypt('123456')]);
        $studentUser2 = factory(User::class)->create(['password' => bcrypt('123456')]);
        $tutorUser1 = factory(User::class)->create(['password' => bcrypt('123456')]);

        factory(Student::class)->create(['user_id' => $studentUser1->id]);
        factory(Student::class)->create(['user_id' => $studentUser2->id]);
        factory(Tutor::class)->create(['user_id' => $tutorUser1->id]);
        $studentUser1->skills()->attach(factory(Skill::class)->create(['name' => 'Python']), ['proficiency' => 35]);
        $studentUser1->skills()->attach(factory(Skill::class)->create(['name' => 'PHP']), ['proficiency' => 75]);

        $project = $studentUser1->student->scholarship->project;
        $project->name = 'Project ABC';
        $project->participants()->attach($studentUser1);
        $project->participants()->attach($studentUser2);

        factory(Rating::class)->create([
            'student_id' => $studentUser1->student->id,
            'tutor_id' => $tutorUser1->tutor->id,
        ]);

        factory(Rating::class)->create([
            'student_id' => $studentUser2->student->id,
            'tutor_id' => $tutorUser1->tutor->id,
        ]);



    }
}
