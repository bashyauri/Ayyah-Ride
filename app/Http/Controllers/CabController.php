<?php

namespace App\Http\Controllers;

use App\Models\Cab;
use App\Models\CabAvailability;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CabController extends Controller
{
    public function index()
    {
        $cabs = Cab::all();

        return view('welcome', compact('cabs'));
    }
}
