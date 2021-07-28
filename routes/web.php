<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ChartsController; 

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ChartsController::class, 'show'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/cera', function () {
    return Inertia::render('Cera');
})->name('cera');

Route::middleware(['auth:sanctum', 'verified'])->get('/reqengine', function () {
    return Inertia::render('ReqEngine');
})->name('reqengine');

Route::middleware(['auth:sanctum', 'verified'])->get('/schedulaid', function () {
    return Inertia::render('Schedulaid');
})->name('schedulaid');

Route::middleware(['auth:sanctum', 'verified'])->get('/artifacts', function () {
    return Inertia::render('Artifacts');
})->name('artifacts');

Route::middleware(['auth:sanctum', 'verified'])->get('/codezinc', function () {
    return Inertia::render('CodeZinc');
})->name('codezinc');

Route::middleware(['auth:sanctum', 'verified'])->get('/metrix', function () {
    return Inertia::render('Metrix');
})->name('metrix');

Route::middleware(['auth:sanctum', 'verified'])->get('/about', function () {
    return Inertia::render('About');
})->name('about');