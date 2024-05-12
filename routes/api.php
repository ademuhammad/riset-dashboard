<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetdataController;
use App\Http\Controllers\Getdata2Controller;
use App\Http\Controllers\Getdata3Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/esp', [GetdataController::class, 'store'])->name('data.store');
Route::post('/esp2', [Getdata2Controller::class, 'store'])->name('data.store2');
Route::post('/esp3', [Getdata3Controller::class, 'store'])->name('data.store3');
