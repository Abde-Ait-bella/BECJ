<?php

use App\Http\Controllers\Admin\G_pageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\servicesController;
use App\Http\Controllers\Admin\ApropoController;
use App\Http\Controllers\Admin\AvisController;
use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/dashbord', [G_pageController::class, 'index'])->name('dashbord.index');
    Route::post('/avis/store', [AvisController::class, 'store'])->name('avis.store');
    Route::post('/apropos/store', [ApropoController::class, 'update'])->name('apropos.store');
    Route::post('/services/store', [servicesController::class, 'store'])->name('services.store');
});

Auth::routes([
    'register' => false
]);

Route::get('/icons', function(){
    return view('icons');
});
