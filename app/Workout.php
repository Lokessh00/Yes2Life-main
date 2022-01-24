<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $table = 'workouts';
    protected $guarded = [];

    public function day() {
        return $this->belongsTo('App\Day', 'day_id');
    }

    public function exercise() {
        return $this->belongsTo('App\Exercise', 'exercise_id');
    }
}
