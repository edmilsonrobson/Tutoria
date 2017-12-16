<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{

    public function getRouteKeyName() {
        return 'name';
    }

    use SoftDeletes;

    //

    public function users() {
        return $this->belongsToMany(User::class)->withPivot('percentage')->withTimestamps();
    }
}
