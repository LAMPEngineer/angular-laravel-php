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


/**
 *  Service Container - Bind
 */
App::bind('App\Billing\Stripe', function(){
    return new \App\Billing\Stripe(config('services.stripe.secret'));
});




/**
 * make use of bind anywhere
 */

//$stripe = app::make('App\Billing\Stripe');

$stripe = resolve('App\Billing\Stripe');




ddd($stripe);








Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', [StudentController::class, 'index']);

Route::post('/add-student', [StudentController::class, 'addStudent'])->name('student.name');

//Route::get('/edit-student', [StudentController::class, 'editStudent']);

Route::get('/edit-student', 'StudentController@editStudent')->name('edit-student');