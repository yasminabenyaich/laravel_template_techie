<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/backHome',function(){
    return view("backoffice.partial.backHome");
})->name("backOffice");

Route::resource("/service",ServiceController::class);
<<<<<<< HEAD
Route::resource("/about", AboutController::class);
=======

// Route Abouts
>>>>>>> 22150d7dbff88f6a67ec2f34ea8d64260a44db90
