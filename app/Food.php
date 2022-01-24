<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $guarded = [];

    public function day() {
        return $this->belongsTo('App\Day', 'day_id');
    }
}
