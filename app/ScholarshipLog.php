<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScholarshipLog extends Model
{
    use SoftDeletes;

    protected $dates = ['started_at', 'ended_at'];



}
