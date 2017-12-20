<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model {
    use SoftDeletes;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function participants() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function studentsAverageScore() {
        $participants = $this->participants()->with('student')->get();

        return $participants->filter(function ($participant) {
            return $participant->isStudent();
        })->average(function ($participant) {
            return $participant->student->lastRating()->averageScore();
        });
    }

}
