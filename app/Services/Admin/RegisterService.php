<?php

namespace App\Services\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

/**
 * Class RegisterService.
 */
class RegisterService
{
    public function register(array $data)
    {
      return   Admin::create([
            'name' => $data['username'],
            'email' => $data['email'],
            'mobile_no' => $data['mobile_no'],
            'password' => Hash::make($data['password']),
      ]);

    }

}
