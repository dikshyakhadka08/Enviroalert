<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SensorDataController;

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





Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,"index"]);

Route::get('/contact', [HomeController::class,"contactpage"]);

Route::get('/about', [HomeController::class,"aboutpage"]);

Route::get('/admindash', [HomeController::class,"admindashpage"]);

Route::get('/sensor-data', [SensorDataController::class, 'fetch'])->name('sensor.data');

Route::get('/chartjs', [DashboardController::class,"chartjspage"]);

Route::post('/water-level-exceeded', [SensorDataController::class, 'waterLevelExceeded'])->name('water.level.exceeded');

Route::get('/test404', function() {
    abort(404);
});

Route::get('/test403', function() {
    abort(403);
});

Route::get('/test419', function() {
    abort(419);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
