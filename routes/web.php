<?php

use Illuminate\Support\Facades\Mail;
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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/questions',[\App\Http\Controllers\HomeController::class,'questions'])->name('questions');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('store/services',[\App\Http\Controllers\ServiceController::class,'getServices']);
Route::resource('services','App\Http\Controllers\ServiceController');
Route::post('services/search',[\App\Http\Controllers\ServiceController::class,'search'])->name('service.search');
Route::get('category/services',[\App\Http\Controllers\ServiceController::class,'servicesToCategory'])->name('service.category');
Route::get('service',[\App\Http\Controllers\ServiceController::class,'getService'])->name('service.get');
Route::resource('orders','App\Http\Controllers\OrderController');
Route::get('/send',function (){
     Mail::raw('This is an test e-mail', function ($message) {
         $message->to("lel23443217399@gmail.com", "someone");
         $message->subject("hi checking");
         $message->getSwiftMessage();
     });
     return "true";
});
