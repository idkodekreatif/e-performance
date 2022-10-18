<?php

use App\Http\Controllers\InputPoint\PointBController;
use App\Http\Controllers\InputPoint\PointCController;
use App\Http\Controllers\InputPoint\PointDController;
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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['role:superuser|it']], function () {
    Route::get('/point-A', [App\Http\Controllers\InputPoint\PointAController::class, 'index'])->name('point-A');
    Route::get('/point-B', [PointBController::class, 'index'])->name('point-B');
    Route::get('/point-C', [PointCController::class, 'index'])->name('point-C');
    Route::get('/point-D', [PointDController::class, 'index'])->name('point-D');
});
