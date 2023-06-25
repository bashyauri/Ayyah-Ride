<?php

namespace App\Services\Driver;

use App\Models\Cab;
use App\Models\DriverDetails;
use Illuminate\Support\Facades\Auth;

/**
 * Class DriverService.
 */
class DriverService
{
    public function addDriverDetails(array $data){
        return DriverDetails::create([
            'admin_id' => Auth::guard('admin')->id(),
            'driver_license_no' => $data['driver_license_number'],
            'plate_no' => $data['plate_number'],
            'no_of_seats' => $data['no_of_seats'],
            'bvn_no' => $data['bvn_no'],
        ]
        );
    }
    public function storeCab(array $data){
        return Cab::create([
            'driver_details_id' =>Auth::guard('admin')->id(),
            'brand' => $data['brand'],
            'model' => $data['model'],
            'vin' => $data['vin'],
            'registration_no' => $data['registration_no'],
            'chassis_number' => $data['chassis_number'],
            'no_of_seats' => $data['no_of_seats']
        ]);
    }
}