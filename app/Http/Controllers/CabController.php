<?php

namespace App\Http\Controllers;

use App\Models\Cab;
use Illuminate\Http\Request;

class CabController extends Controller
{
    public function index()
    {
        $cabs = Cab::all();

        return view('cabs.index', compact('cabs'));
    }
}
