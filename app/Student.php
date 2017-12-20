<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    public function scholarship() {
        return $this->belongsTo(Scholarship::class);
    }

    public function ratings() {
        return $this->hasMany(Rating::class);
    }

    public function lastRating() {
        return $this->ratings()->latest()->first();
    }
}
