<?php

use Illuminate\Support\Facades\Route;
use App\Models\Annonce;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;




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

Route::get('/', 'App\Http\Controllers\AnnonceController@gallery');
Route::get('/Accueil', 'App\Http\Controllers\AnnonceController@gallery1');
Route::get('/show1/{id}','App\Http\Controllers\AnnonceController@show1')->name('annonces.show1');
Route::get('/', 'App\Http\Controllers\AnnonceController@gallery')->name('annonces.principale');
Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/new-login', function () {
    return view('newLogin');

});
Route::get('/new-register', function () {
    return view('newRegister');
});
Route::get('/new-forget', function () {
    return view('newForget');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/profiles','App\Http\Controllers\ProfileController');

Route::get('test', function () {

    $user = [
        'name' => 'Aouissate Amira',
        'info' => 'Laravel Developer'
    ];

    \Mail::to('a7amira@gmail.com')->send(new \App\Mail\NewMail($user));

    dd("success");

});

Route::resource('annonces','App\Http\Controllers\AnnonceController');
 Auth::routes(['verify'=>true]);
 Route::get('profile',function(){

 })->middleware('verified');


 Route::get('admin', [HomeController::class, 'adminHome'])->name('admin')->middleware('is_admin');


 Route::get('new-login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
 Route::get('new-login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

 
Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');
Route::delete('destroy/{id}',[App\Http\Controllers\CommentController::class, 'destroy'])->name('comment.destroy');


//Route::resource('reservations',App\Http\Controllers\ReservationController::class);
Route::resource('reservations','App\Http\Controllers\ReservationController');


Route::get('/contact-form', [App\Http\Controllers\RegisterController::class, 'index']);
Route::post('/captcha-validation', [App\Http\Controllers\RegisterController::class, 'capthcaFormValidate']);
Route::get('/reload-captcha', [App\Http\Controllers\CaptchaServiceController::class, 'reloadCaptcha']);


Route::get('allannonces', 'App\Http\Controllers\AnnonceController@gallery2');


Route::get('stripe', [App\Http\Controllers\ReservationController::class, 'stripe']);
Route::post('stripe', [App\Http\Controllers\ReservationtController::class, 'stripePost'])->name('stripe.post');

Route::get('indexAdmin', [App\Http\Controllers\AnnonceController::class, 'indexAdmin'])->name('annonces.indexAdmin');
Route::get('indexAdmin1', [App\Http\Controllers\ReservationController::class, 'indexAdmin1'])->name('reservations.indexAdmin1');   



Route::get('indexP', [App\Http\Controllers\AnnonceController::class, 'indexP'])->name('annonces.indexP');

Route::get('login/{provider}', [App\Http\Controllers\GoogleLoginController::class, 'redirectToProvider']);
Route::get('{provider}/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleProviderCallback'] );
