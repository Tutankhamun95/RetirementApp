<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(){

        return $this->belongsTo('App\User');
    }

    public function schools(){

        return $this->belongsToMany('App\School')->withTimestamps();

    }

    public function members(){
        return $this->belongsToMany('App\Member')->withTimestamps();
    }

    public function scopeApproved($query)
    {
        return $query->where('is_approved', 1);
    }
    public function scopePublished($query)
    {
        return $query->where('status', 1);
    }
}
