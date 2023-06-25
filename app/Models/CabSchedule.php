<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabSchedule extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function cab()
    {
        return $this->belongsTo(Cab::class);
    }
}