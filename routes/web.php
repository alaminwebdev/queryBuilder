<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'index'])->name('home');

//data insert via traditional get method
Route::get('insert/{name}/{age}/{city}/{department}/{salary}', [EmployeeController::class, 'insert']);

Route::get('view', [EmployeeController::class, 'select'])->name('getEmployees');

Route::get('view/{id}', [EmployeeController::class, 'eachselect'])->name('getByID');

Route::get('update/{id}/{name}', [EmployeeController::class, 'update']);

Route::get('delete/{id}', [EmployeeController::class , 'delete']);

Route::get('city', [EmployeeController::class, 'city'])->name('getCity');

Route::get('cinsert/{cityname}', [EmployeeController::class, 'insertCity']);