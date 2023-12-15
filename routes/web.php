<?php

use App\Models\User;
use App\Models\AccessLog;
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

Route::get('/profile/{user}', function (User $user) {
    AccessLog::create([
        'user_id' => auth()->id(), 
        'info' => 'Visit profile', 
    ]); 
    return view('profile', compact('user')); 
}); 

Route::post('/update/{user}', function (Request $request, User $user) {
    $data = []; 
    AccessLog::create([
        'user_id' => auth()->id(), 
        'info' => 'Update profile', 
    ]); 
    if ($request->has('email')) {
        $data['email'] = $request->email;
    }

    if ($request->has('password')) {
        $data['password'] = bcrypt($request->password); 
    }

    if ($request->has('gender')) {
        $data['gender'] = $request->gender; 
    }

    if ($request->has('address')) {
        $data['address'] = $request->address;
    }

    if ($request->has('name')) {
        $data['name'] = $request->name; 
    }

    $user->update($data); 

    alert()->success('Updated successfully!'); 

    return back(); 
}); 