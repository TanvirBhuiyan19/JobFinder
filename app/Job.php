<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     protected $fillable = [
        'userId', 'title', 'description', 'salary', 'location', 'country',
    ];
}
