<?php

namespace App\Http\Controllers\Driver\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegisterRequest;
use App\Services\Admin\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function __construct(protected RegisterService $registerService)
    {

    }
    public function index(){
        return view('driver.register');
    }
    public function register(RegisterRequest $request)
    {
        try {
            $this->registerService->register($request->validated());
            return redirect()->back()->with('success_message','Your account has been created.');
        } catch (\Exception $ex) {
            Log::alert($ex->getMessage());
            return redirect()->back()->withErrors(['msgError' => 'Something went wrong']);
        }




    }
}