<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function getDriverDetails(){
        return view('driver.update_driver_details');
    }
    public function addDriverDetails(Request $request){
        dd($request->all());
    }
}
