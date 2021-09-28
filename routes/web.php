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
//     return view('master');
// });


Route::get('/', [EmployeeController::class, 'dashboard'])->name('dashboard');

Route::get('/add-employee', [EmployeeController::class, 'create'])->name('create');
Route::post('/save-employee', [EmployeeController::class, 'store'])->name('store');

Route::get('/employee-list', [EmployeeController::class, 'index'])->name('list');
Route::get('/employee-edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/update-employee/{id}', [EmployeeController::class, 'update'])->name('update');
Route::get('/employee-delete/{id}', [EmployeeController::class, 'destroy'])->name('destroy');
Route::get('/employee-show/{id}', [EmployeeController::class, 'show'])->name('show');



