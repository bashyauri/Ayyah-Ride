<?php

namespace App\Services\Admin;

use App\Models\CabSchedule;

/**
 * Class CabScheduleService.
 */
class CabScheduleService
{
    public function scheduleTrip(array $data,string $cabId)
    {
      return   CabSchedule::create([
            'cab_id' => $cabId,
            'date' => $data['date'],
            'city' => $data['city'],
            'destination' => $data['destination'],
            'amount' => $data['amount'],
            'time' => $data['time'],
        ]);
    }

}
