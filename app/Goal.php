<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = 'goals';
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
