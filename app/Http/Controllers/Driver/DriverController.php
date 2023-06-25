<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Http\Requests\Driver\AddDriverRequest;
use App\Http\Requests\Driver\StoreCabRequest;
use App\Services\Driver\DriverService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DriverController extends Controller
{
    public function __construct(protected DriverService $driverService){}
    public function getDriverDetails(){
        return view('driver.update_driver_details');
    }
    public function addDriverDetails(AddDriverRequest $request)
    {
        try {
            $this->driverService->addDriverDetails($request->validated());
            return redirect()->back()->with('success_message','Your Driver details Added.');
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }
    }
    public function addCab(){
        return view('driver.add-cab');
    }
    public function storeCab(StoreCabRequest $request)
    {

        try {
            $this->driverService->storeCab($request->validated());
            return redirect()->back()->with('success_message','Cab Added.');
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }

    }
}
