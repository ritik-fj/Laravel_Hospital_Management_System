<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/newpatient', function () {
    return view('newpatient');
})->middleware('auth');

Route::get('/patientdetails/addpayment/{patientId}', function () {
    return view('addpayment');
})->middleware('auth');

Route::post('/addpayment', 'App\Http\Controllers\PaymentController@store');


Route::get('patientdetails/{id}', 'App\Http\Controllers\PatientController@show')->middleware('auth','isDocNurAdm');





Route::get('editpatient/{id}', 'App\Http\Controllers\PatientController@edit')->middleware('auth','isDocNurAdm');
Route::put('update-data/{id}', 'App\Http\Controllers\PatientController@update');



Route::get('/viewpatient', 'App\Http\Controllers\PatientController@index')->middleware('auth','isDocNurAdm');
Route::post('/viewpatient', 'App\Http\Controllers\PatientController@store');


Route::get('/viewusers', 'App\Http\Controllers\UserController@index')->middleware('auth','isAdmin');

Route::get('/patientdetails/patientpayments/{patientId}', 'App\Http\Controllers\PaymentController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

