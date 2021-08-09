<?php

use App\Http\Controllers\StudentController;
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


Route::get('/students', [StudentController::class, 'index']);

Route::post('/add-student', [StudentController::class, 'addStudent'])->name('student.name');

//Route::get('/edit-student', [StudentController::class, 'editStudent']);

Route::get('/edit-student', 'StudentController@editStudent')->name('edit-student');