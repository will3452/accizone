<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->to(route('login')); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('reports')->name('reports.')->group(function () {
    Route::get('/', [ReportController::class, 'index'])->name('index'); 
    Route::get('/create', [ReportController::class, 'create'])->name('create'); 
    Route::post('/', [ReportController::class, 'store'])->name('store'); 
}); 

Route::get('/notifications', function(Request $request) {
    return view('notifications'); 
})->name('notifications'); 


Route::get('/show-route/{lat}/{lng}', function (Request $request, $lat, $lng) {
    return view('route', compact('lat', 'lng')); 
})->name('routes');

Route::view('/map', 'map'); 