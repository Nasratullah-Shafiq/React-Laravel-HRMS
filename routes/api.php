<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ApiController;

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
Route::post('/save',[App\Http\Controllers\EmployeeController::class, 'store']);

Route::delete('/{id}',[App\Http\Controllers\EmployeeController::class, 'destroy']);
// Route::delete('/delete/{id}', [EmployeeController::class, 'destroy'])->name('api.employees.destroy');

Route::put('/update/{employee}',[App\Http\Controllers\EmployeeController::class, 'update']);

Route::get('/employees',[App\Http\Controllers\EmployeeController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
