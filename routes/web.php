<?php

use App\Http\Controllers\ControlUserController;
use App\Http\Controllers\InputPoint\PointAController;
use App\Http\Controllers\InputPoint\PointBController;
use App\Http\Controllers\InputPoint\PointCController;
use App\Http\Controllers\InputPoint\PointDController;
use App\Http\Controllers\InputPoint\PointEController;
use App\Http\Controllers\LogActivity;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\sumPointController;
use App\Http\Controllers\UserManagement\IndexController;
use App\Http\Controllers\UserManagement\PermissionController;
use App\Http\Controllers\UserManagement\profileController;
use App\Http\Controllers\UserManagement\RoleController;
use App\Http\Controllers\UserManagement\UserController;
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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('auth.login');
});

// -----------------------------Home----------------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'verified');


Route::resource('profile', profileController::class)->only(['index', 'update'])->middleware('auth', 'verified');


Route::group(['prefix' => "/admin", 'middleware' => ['role:superuser|it|hrd', 'auth', 'verified']], function () {
    // -----------------------------Users Management Spatie----------------------------------------//
    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    // ----------------------------- User Role Controller ----------------------------------------//
    Route::resource('/role', RoleController::class);
    Route::controller(RoleController::class)->group(function () {
        Route::post('/roles/{role}/permissions', 'givePermission')->name('role.permissions');
        Route::delete('/roles/{role}/permissions/{permission}', 'revokePermission')->name('role.permission.revoke');
    });

    // ----------------------------- User Permissions Controller ----------------------------------------//
    Route::resource('/permission', PermissionController::class);
    Route::controller(PermissionController::class)->group(function () {
        Route::post('/permissions/{permission}/roles', 'assignRole')->name('permissions.roles');
        Route::delete('/permissions/{permission}/roles/{role}', 'removeRole')->name('permission.role.remove');
    });


    // ----------------------------- User Management ----------------------------------------//
    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users.index');
        Route::get('/users/{user}', 'show')->name('users.show');
        Route::delete('/users/{user}', 'destroy')->name('users.destroy');
        Route::post('/users/{user}/roles', 'assignRole')->name('users.roles');
        Route::delete('/users/{user}/roles/{role}', 'removeRole')->name('users.roles.remove');
        Route::post('/users/{user}/permissions', 'givePermission')->name('users.permissions');
        Route::delete('/users/{user}/permissions/{permission}', 'revokePermission')->name('users.permissions.revoke');
    });

    // -----------------------------Menu Controller Edit Point----------------------------------------//
    Route::controller(MenuController::class)->group(function () {
        Route::get('/Menu/Point', 'IndexMenuPoint')->name('Menu.Controller');
        Route::post('/Menu/Point/Store', 'MenuPointSore')->name('Menu.Store');
        Route::put('/Menu/Point/{id_menu}', 'MenuPointUpdate')->name('Menu.Update');
    });
});

// -----------------------------Prefix All Point----------------------------------------//
Route::group(['prefix' => "/Point", 'middleware' => ['role:superuser|it|hrd|lppm|dosen', 'auth', 'verified']], function () {

    // -----------------------------Point A----------------------------------------//
    Route::controller(PointAController::class)->group(function () {
        Route::get('/Pa/Input', 'create')->name('point-A');
        Route::post('/Pa/post-pointA', 'store')->name('store.pointa');
        Route::get('/Pa/U/{PointId}', 'edit')->name('edit.Point-A');
        Route::put('/Pa/Up/{PointId}', 'update')->name('update.Point-A');
    });

    // -----------------------------Point B----------------------------------------//
    Route::controller(PointBController::class)->group(function () {
        Route::get('/Pb/Input', 'create')->name('point-B');
        Route::post('/Pb/post-pointB', 'store')->name('store.pointb');
        Route::get('/Pb/U/{PointId}', 'edit')->name('edit.Point-B');
        Route::put('/Pb/Up/{PointId}', 'update')->name('update.Point-B');
    });

    // -----------------------------Point C----------------------------------------//
    Route::controller(PointCController::class)->group(function () {
        Route::get('/Pc/Input', 'create')->name('point-C');
        Route::post('/Pc/post-pointC', 'store')->name('store.pointc');
        Route::get('/Pc/U/{PointId}', 'edit')->name('edit.Point-C');
        Route::put('/Pc/Up/{PointId}', 'update')->name('update.Point-C');
    });

    // -----------------------------Point D----------------------------------------//
    Route::controller(PointDController::class)->group(function () {
        Route::get('/Pd/Input', 'create')->name('point-D');
        Route::post('/Pd/post-pointD', 'store')->name('store.pointd');
        Route::get('/Pd/U/{PointId}', 'edit')->name('edit.Point-D');
        Route::put('/Pd/Up/{PointId}', 'update')->name('update.Point-D');
    });

    // -----------------------------Point E----------------------------------------//
    Route::controller(PointEController::class)->group(function () {
        Route::get('/Pe/Input', 'create')->name('point-E');
        Route::post('/Pe/post-pointD', 'store')->name('store.pointe');
        Route::get('/Pe/U/{PointId}', 'edit')->name('edit.Point-E');
        Route::put('/Pe/Up/{PointId}', 'update')->name('update.Point-E');
    });

    // -----------------------------Raport User----------------------------------------//
    Route::controller(sumPointController::class)->group(function () {
        Route::get('/raport/view/{user_id}', 'raportView')->name('raport');
    });
});

// -----------------------------Aggregat----------------------------------------//
Route::group(
    ['middleware' => ['role:superuser|it|manajer|hrd', 'auth', 'verified']],
    function () {
        Route::get('/raport/chart/', [sumPointController::class, 'RaportChartView'])->name('raport.chart');
    }
);

// -----------------------------Log Activity----------------------------------------//
Route::controller(LogActivity::class)->group(function () {
    Route::get('/logactivity', 'index')->name('logactivity');
});
