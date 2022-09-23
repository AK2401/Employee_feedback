<?php

use App\Http\Controllers\Employee_regController;
use App\Http\Controllers\State_CityController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// State And  City Route
Route::get('/admin/create', [State_CityController::class, 'create']);
Route::post('/admin/create', [State_CityController::class, 'store']);
Route::get('/admin/view', [State_CityController::class, 'index']);
Route::get('/admin/edit/{id}', [State_CityController::class, 'edit']);
Route::post('/admin/update', [State_CityController::class, 'update']);
Route::get('/admin/delete/{id}', [State_CityController::class, 'destroy']);

// Employee  Route
Route::get('/', [Employee_regController::class, 'create']);
Route::post('/employee/create', [Employee_regController::class, 'store']);
Route::get('/employee/view', [Employee_regController::class, 'index']);
Route::get('/employee/delete/{id}', [Employee_regController::class, 'destroy']);
