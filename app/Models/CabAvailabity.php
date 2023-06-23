<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabAvailabity extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function cab()
    {
        return $this->belongsTo(Cab::class);
    }
}