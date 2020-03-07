<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'userId', 'address', 'gender', 'dob', 'experience', 'bio', 'cv', 'resume', 'avator',
    ];
    
     public function profile(){
          return $this->hasOne('App\Profile');
      }
      
      public function user() {
        return $this->belongsTo('App\User');
    }
    
}
