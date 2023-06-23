<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Driver\Auth\RegisterController;
use App\Http\Controllers\Driver\DriverController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('/admin')->group(function(){
// Admin Login
Route::match(['GET','POST'],'login',[AdminController::class,'login']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);
// ADMIN DASHBOARD
Route::group(['middleware'=> ['admin']],function(){
    //Check Admin Password
    Route::post('check-admin-password',[AdminController::class,'checkAdminPassword'])->name('check-admin-password');
    //Update Admin Details
    Route::match(['GET','POST'],'update-admin-details',[AdminController::class,'updateAdminDetails']);
    //Update Driver Details

    Route::get('/update-driver-details',[DriverController::class,'getDriverDetails']);
    Route::post('/add-driver-details',[DriverController::class,'addDriverDetails']);
    Route::get('/get-drivers',[AdminController::class,'getAllDrivers']);
    //Update Admin Password
    Route::match(['GET','POST'],'update-admin-password',[AdminController::class,'updateAdminPassword']);
    //Admin Dashboard
    Route::match(['GET','POST'],'dashboard',[AdminController::class,'dashboard']);
    //Admin Logout
    Route::get('/logout',[AdminController::class,'logout']);
});

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});