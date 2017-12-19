<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function skills() {
        return $this->belongsToMany(Skill::class)->withPivot('proficiency')->withTimestamps();
    }

    public function projects() {
        return $this->belongsToMany(Project::class)->withTimestamps();
    }

    public function student() {
        return $this->hasOne(Student::class);
    }

    public function isStudent() {
        return ($this->student()->count() > 0);
    }

    public function tutor() {
        return $this->hasOne(Tutor::class);
    }

    public function isTutor() {
        return ($this->tutor()->count() > 0);
    }
}
