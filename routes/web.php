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

// -----------------------------Home----------------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['role:superuser|it|hrd|lppm|dosen']], function () {

    // -----------------------------Prefix All Point----------------------------------------//
    Route::group(['prefix' => "/Point"], function () {

        // -----------------------------Point A----------------------------------------//
        Route::controller(PointAController::class)->group(function () {
            Route::get('/P-A', 'create')->name('point-A');
            Route::post('/P-A/post-pointA', 'store')->name('store.pointa');
            Route::get('/P-A/U/{PointId}', 'edit')->name('edit.Point-A');
            Route::put('/P-A/Up/{PointId}', 'update')->name('update.Point-A');
        });

        // -----------------------------Point B----------------------------------------//
        Route::controller(PointBController::class)->group(function () {
            Route::get('/P-B', 'create')->name('point-B');
            Route::post('/P-B/post-pointB', 'store')->name('store.pointb');
            Route::get('/P-B/U/{PointId}', 'edit')->name('edit.Point-B');
            Route::put('/P-B/Up/{PointId}', 'update')->name('update.Point-B');
        });

        Route::get('/point-C', [PointCController::class, 'create'])->name('point-C');
        Route::post('/post-pointC', [PointCController::class, 'store'])->name('store.pointc');

        Route::get('/point-D', [PointDController::class, 'create'])->name('point-D');
        Route::post('/post-pointD', [PointDController::class, 'store'])->name('store.pointd');

        Route::get('/point-E', [PointEController::class, 'create'])->name('point-E');
        Route::post('/post-pointE', [PointEController::class, 'store'])->name('store.pointe');
    });
    Route::get('/raport/view/{user_id}', [sumPointController::class, 'raportView'])->name('raport');
    Route::get('/UserControl', [ControlUserController::class, 'index'])->name('usercontrol');
});

// -----------------------------Aggregat----------------------------------------//
Route::group(
    ['middleware' => ['role:superuser|it']],
    function () {
        Route::get('/raport/chart/', [sumPointController::class, 'RaportChartView'])->name('raport.chart');
    }
);
