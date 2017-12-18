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
}
