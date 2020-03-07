<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedJob extends Model
{
     protected $fillable = [
        'userId', 'jobId',
    ];
}
