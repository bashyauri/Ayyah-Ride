<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function cabs()
    {
        return $this->hasMany(Cab::class);
    }
}
