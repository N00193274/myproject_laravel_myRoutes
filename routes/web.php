<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Manager\BusinessController as ManagerBusinessController;
use App\http\Controllers\Employee\BusinessController as EmployeeBusinessController;

use App\Models\User;

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

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('manager/home', [App\Http\Controllers\Manager\HomeController::class, 'index'])->name('manager.home');
Route::get('employee/home', [App\Http\Controllers\Employee\HomeController::class, 'index'])->name('employee.home');

Route::get('/employee/businesses/', [EmployeeBusinessController::class, 'index'])->name('employee.businesses.index');
Route::get('/employee/businesses/{id}', [EmployeeBusinessController::class, 'show'])->name('employee.businesses.show'); 

Route::get('/manager/businesses/', [ManagerBusinessController::class, 'index'])->name('manager.businesses.index');
Route::get('/manager/businesses/{id}', [ManagerBusinessController::class, 'show'])->name('manager.businesses.show');

Route::get('/manager/businesses/create', [ManagerBusinessController::class, 'create'])->name('manager.businesses.create');

Route::get('/manager/businesses/store', [ManagerBusinessController::class, 'store'])->name('manager.businesses.store');
Route::get('/manager/businesses/{id}/edit', [ManagerBusinessController::class, 'edit'])->name('manager.businesses.edit');
Route::get('/manager/businesses/{id}', [ManagerBusinessController::class, 'update'])->name('manager.businesses.update');
Route::delete('/manager/businesses/{id}', [ManagerBusinessController::class, 'destroy'])->name('manager.businesses.destroy');

