<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe2 extends Model
{
    //
    protected $table = 'recipe2';
    protected $fillable = [
        'name',
        'description',
        'steps',
        'prep_time',
        'cook_time',
        'serving',
        'ingredients',
        'tools',
        'image',
    ];
}
