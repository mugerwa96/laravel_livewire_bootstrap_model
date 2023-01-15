<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Carbon;
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

// student
Route::controller(StudentController::class)->group(function(){
    Route::get('/student','index')->name('student.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
