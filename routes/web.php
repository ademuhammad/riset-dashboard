<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Api2Controller;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\GetdataController;
use App\Http\Controllers\Sensor2Controller;
use App\Http\Controllers\Sensor3Controller;
use App\Http\Controllers\Getdata2Controller;
use App\Http\Controllers\Getdata3Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/table', function () {
    return view('datatable');
});
// Route::get('/dashboard', function () {
//     // return view('dashboard');
// });
Route::get('/',[SensorController::class, 'index'])->name('dashboard');
Route::get('/dashboard',[SensorController::class, 'index'])->name('dashboard');
Route::get('/data',[SensorController::class, 'data'])->name('data');
Route::get('/dashboard2',[Sensor2Controller::class, 'index'])->name('dashboard2');
Route::get('/data2',[Sensor2Controller::class, 'data'])->name('data2');
Route::get('/dashboard3',[Sensor3Controller::class, 'index'])->name('dashboard3');
Route::get('/data3',[Sensor3Controller::class, 'data'])->name('data3');
Route::get('/export-excel', 'App\Http\Controllers\SensorController@exportExcel');
Route::get('/export-csv', 'App\Http\Controllers\SensorController@exportCsv');
Route::get('/export-excel2', 'App\Http\Controllers\Sensor2Controller@exportExcel');
Route::get('/export-csv2', 'App\Http\Controllers\Sensor2Controller@exportCsv');
Route::get('/export-excel3', 'App\Http\Controllers\Sensor3Controller@exportExcel');
Route::get('/export-csv3', 'App\Http\Controllers\Sensor3Controller@exportCsv');
// api realtime

Route::get('/sensors/latest', [ApiController::class, 'latest']);
Route::get('/sensors/latest2', [Api2Controller::class, 'latest2']);
Route::get('/sensors/latest3', [Api2Controller::class, 'latest3']);
// api esp
Route::post('/esp', [GetdataController::class, 'store'])->name('data.store');
Route::post('/esp2', [Getdata2Controller::class, 'store'])->name('data.store2');
Route::post('/esp3', [Getdata3Controller::class, 'store'])->name('data.store3');
