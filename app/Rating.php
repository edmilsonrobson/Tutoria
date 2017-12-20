<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes;

    public function averageScore() {
        return ($this->assiduity_score + $this->proactivity_score + $this->productivity_score) / 3;
    }
}
