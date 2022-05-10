<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TestCOntroller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
    return view('SetupAccount');
});
Route::view('welcomePage','SetupAccount');

Route::POST('UserDataSubmit',[UsersController::class,'try']);
// Route::post('Insertformdata', [BlogController::class,'insert_data']);


// Route::get('/send-email',[UsersController::class,'sendEmail']);

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');


// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/welcomePage');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/login',[
//     'users' => 'UsersController@Login',
//     'as' => 'user.login'

// ]);

// Route::get('/login/validate',[
//     'users' => 'UsersController@validateLogin',
//     'as' => 'user.login'

// ]);


Route::get('/sendemail', 'UsersController@index');
Route::post('/sendemail/send', 'UsersController@send');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('createdb', [UsersController::class,'createdb']);
Route::get('try', [UsersController::class,'try']);
Route::get('createtb', [UsersController::class,'createtb']);

Route::get('list', [TestCOntroller::class,'list']);
