<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Classes\Facade\Postcard;
use App\Classes\Facade\PostcardSendingService;
use Facades\App\Classes\Facade\Twitter;



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



/** 
 * Facade: 
 * 
 * 1. without facade - a normal flow
 *
 */
Route::get('/postcards', function(){

    $postcardService = new PostcardSendingService(country:'us', width:4, height:6);

    $postcardService->hello(message: 'Hello from Gautam\'s Tape USA!', email: 'test@test.com');

});


 /* 2. facade implementation */
Route::get('/facades', function(){

    Postcard::hello('Hello from facade', 'klm123@abc.com');

});


 /* 3. real-time facades */
Route::get('/realtime', function(){

    Twitter::publish('Here is my status');

});