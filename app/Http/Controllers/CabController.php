<?php

namespace App\Http\Controllers;

use App\Models\Cab;
use App\Models\CabAvailability;
use App\Models\CabSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CabController extends Controller
{
    public function index()
    {

        return view('welcome');
    }
    public function searchCabs(Request $request) {

        $cabs = CabSchedule::where(['city' => $request->from,'destination'=>$request->to,'date'=>$request->departure])->get();

        return  view('cabs', compact('cabs'));
    }
    public function schedulePayment($id)
    {
        $trip = CabSchedule::where('id', $id)->first();


        return view('schedule-payment',['trip' => $trip]);
    }

}