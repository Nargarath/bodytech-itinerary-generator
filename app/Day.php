<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DayShift;
class Day extends Model
{
    protected $fillable = ["date"];

    public function shift(){
        return $this->hasMany(DayShift::class);
    }
}
