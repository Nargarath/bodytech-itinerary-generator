<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DayShift;

class Lesson extends Model
{
    protected $fillable = [
        "name","schedule","lesson_difficulty","teacher_name","period"
    ];


    public function shift()
    {
        return $this->belongsTo(DayShift::class);
    }
}