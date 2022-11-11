<?php

use App\Http\Controllers\ControlUserController;
use App\Http\Controllers\InputPoint\PointAController;
use App\Http\Controllers\InputPoint\PointBController;
use App\Http\Controllers\InputPoint\PointCController;
use App\Http\Controllers\InputPoint\PointDController;
use App\Http\Controllers\InputPoint\PointEController;
use App\Http\Controllers\sumPointController;
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
    Route::group(['prefix' => "/Input-Point"], function () {
        Route::get('/point-A', [PointAController::class, 'create'])->name('point-A');
        Route::post('/post-pointA', [PointAController::class, 'store'])->name('store.pointa');

        Route::get('/point-B', [PointBController::class, 'create'])->name('point-B');
        Route::post('/post-pointB', [PointBController::class, 'store'])->name('store.pointb');

        Route::get('/point-C', [PointCController::class, 'create'])->name('point-C');
        Route::post('/post-pointC', [PointCController::class, 'store'])->name('store.pointc');

        Route::get('/point-D', [PointDController::class, 'create'])->name('point-D');
        Route::post('/post-pointD', [PointDController::class, 'store'])->name('store.pointd');

        Route::get('/point-E', [PointEController::class, 'create'])->name('point-E');
        Route::post('/post-pointE', [PointEController::class, 'store'])->name('store.pointe');
    });
    Route::get('/raport/view/{user_id}', [sumPointController::class, 'raportView'])->name('raport');
    Route::get('/raport/chart/', [sumPointController::class, 'RaportChartView'])->name('raport.chart');
    // Route::get('/raport/chart/{user_id}', [sumPointController::class, 'RaportChartView'])->name('raport.chart');
    Route::get('/UserControl', [ControlUserController::class, 'index'])->name('usercontrol');
});
