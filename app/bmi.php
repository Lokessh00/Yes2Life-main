<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bmi extends Model
{
    //
    protected $table = '_bmi';
    protected $fillable = [
        'bmi',
        'weight',
        'height',
    ];
}
