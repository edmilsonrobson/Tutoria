<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    public function participants() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }


    public function studentsAverageScore() {
        $participants = $this->participants;

        $sum = 0;
        $totalStudents = 0;
        foreach($participants as $participant) {
            if ($participant->isStudent()) {
                $totalStudents++;
                $sum += $participant->student->lastRating()->averageScore();
            }
        }

        return $sum / $totalStudents;
    }

}
