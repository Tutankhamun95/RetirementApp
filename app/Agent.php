<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function project(){

        return $this->belongsTo('App\Project');
    }
}
