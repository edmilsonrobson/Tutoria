<?php

use App\Project;
use App\Skill;
use App\Student;
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
        $user1 = factory(User::class)->create(['password' => bcrypt('123456')]);
        factory(Student::class)->create(['user_id' => $user1->id]);
        $user1->skills()->attach(factory(Skill::class)->create(['name' => 'Python']), ['proficiency' => 35]);
        $user1->skills()->attach(factory(Skill::class)->create(['name' => 'PHP']), ['proficiency' => 75]);

        $project = factory(Project::class)->create(['name' => 'Project ABC']);
        $project->participants()->attach($user1);


    }
}
