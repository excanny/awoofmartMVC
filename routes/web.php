<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CartController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/', [FrontController::class, 'home']);
Route::post('/getareas', [FrontController::class, 'getareas']);
Route::post('/getlandmarks', [FrontController::class, 'getlandmarks']);
Route::post('/choosecitytoshop', [FrontController::class, 'choosecitytoshop']);
Route::get('/city/{city_name}', [FrontController::class, 'city']);

Route::post('/addtocart', [CartController::class, 'AddToCart']);
Route::post('/removefromcart', [CartController::class, 'RemoveFromCart']);
Route::post('/clearcart', [CartController::class, 'ClearCart']);
Route::any('/cartdetails', [CartController::class, 'CartDetails']);
Route::get('/cart', [FrontController::class, 'Cart']);
Route::post('/updatecartquantity', [CartController::class, 'UpdateCartQuantity']);
Route::post('/loadchangecartquantitydetails', [CartController::class, 'LoadChangeCartQuantityDetails']);


require __DIR__.'/auth.php';
