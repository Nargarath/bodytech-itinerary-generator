<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lesson;

class DayShift extends Model
{
    protected $fillable = ["shift"];

    function lesson(){
        return $this->hasMany(Lesson::class);
    }
}
