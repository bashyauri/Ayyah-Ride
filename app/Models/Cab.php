<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cab extends Model
{
    use HasFactory;
    protected $guarded= [];
    public function availability()
    {
        return $this->hasMany(CabAvailability::class);
    }

    public function schedules()
    {
        return $this->hasMany(CabSchedule::class);
    }
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
