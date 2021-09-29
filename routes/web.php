<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\VerifyEmailController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware'=>'auth'],function (){

    Route::get('store/services',[\App\Http\Controllers\ServiceController::class,'getServices'])->name('services.index');
    Route::resource('services','App\Http\Controllers\ServiceController');
    Route::post('services/search',[\App\Http\Controllers\ServiceController::class,'search'])->name('service.search');
    Route::get('category/services',[\App\Http\Controllers\ServiceController::class,'servicesToCategory'])->name('service.category');
    Route::get('service',[\App\Http\Controllers\ServiceController::class,'getService'])->name('service.get');
    Route::resource('orders','App\Http\Controllers\OrderController');
    Route::get('settings',[\App\Http\Controllers\SettingController::class,'setting'])->name('settings');
    Route::post('settings/edit/percentage',[\App\Http\Controllers\SettingController::class,'editPercentage'])->name('settings.percentage');
    Route::post('settings/edit/password',[\App\Http\Controllers\SettingController::class,'changePassword'])->name('settings.password');
    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');
    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');
});

Route::get('/questions',[\App\Http\Controllers\HomeController::class,'questions'])->name('questions');
Route::get('pay',function (){
return view('pay');

})->name('pay');

