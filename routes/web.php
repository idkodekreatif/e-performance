<?php

use App\Http\Controllers\ControlUserController;
use App\Http\Controllers\InputPoint\PointAController;
use App\Http\Controllers\InputPoint\PointBController;
use App\Http\Controllers\InputPoint\PointCController;
use App\Http\Controllers\InputPoint\PointDController;
use App\Http\Controllers\InputPoint\PointEController;
use App\Http\Controllers\Itisar\Baak\BaakController;
use App\Http\Controllers\Itisar\Bau\KasubBiroKepegawaianController;
use App\Http\Controllers\Itisar\Bau\KasubBiroKeuanganController;
use App\Http\Controllers\Itisar\KasubRisbangController;
use App\Http\Controllers\Itisar\KaUpt\KaLaboranController;
use App\Http\Controllers\Itisar\KaUpt\KaUnitItController;
use App\Http\Controllers\Itisar\KaUpt\KaUnitPemasaranController;
use App\Http\Controllers\Itisar\KaUpt\KoordinatorPerpustakaanController;
use App\Http\Controllers\Itisar\KaUpt\StaffPemasaranController;
use App\Http\Controllers\Itisar\Keuangan\StaffKeuanganController;
use App\Http\Controllers\Itisar\LpmController;
use App\Http\Controllers\Itisar\prodi\SekKaprodiController;
use App\Http\Controllers\Itisar\rektor\warekDuaController;
use App\Http\Controllers\Itisar\rektor\warekSatuController;
use App\Http\Controllers\Itisar\warek2Controller;
use App\Http\Controllers\LogActivity;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\sumPointController;
use App\Http\Controllers\UserManagement\ImpersonateController;
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

// ----------------------------- Maintenain ----------------------------------------//
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

// -----------------------------Prefix All Point ITIKAD----------------------------------------//
Route::group(['prefix' => "/Point/ITIKAD", 'middleware' => ['role:superuser|it|hrd|lppm|dosen', 'auth', 'verified']], function () {

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

// -----------------------------Aggregat Itikad----------------------------------------//
Route::group(
    ['middleware' => ['role:superuser|it|manajer|hrd', 'auth', 'verified']],
    function () {
        Route::get('/raport/chart/', [sumPointController::class, 'RaportChartView'])->name('raport.chart');
    }
);

// -----------------------------Prefix All Point ITISAR----------------------------------------//
Route::group(
    ['prefix' => "/ITISAR", 'middleware' => ['role:superuser|it|hrd|lppm|tendik', 'auth', 'verified']],
    function () {
        // -----------------------------Warek 2 Controller Form Penilaian Ka. Bau ----------------------------------------//
        Route::controller(warek2Controller::class)->group(function () {
            Route::get('/Input', 'create')->name('warek2.ka.bau');
            Route::post('/request/store', 'store')->name('store.warek2.ka.bau');
            Route::get('/ka-bau/edit/{PointId}', 'edit')->name('edit.warek2.ka.bau');
            Route::put('/ka-bau/edit/update/{PointId}', 'update')->name('update.warek2.ka.bau');
            Route::get('/Raport/Ka-Bau/{user_id}', 'raport')->name('warek2.ka.bau.raport');
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT PEMASARAN ----------------------------------//
        Route::controller(KaUnitPemasaranController::class)->group(function () {
            Route::get('/Ka-Unit-Pemasaran/Input', 'create')->name('ka.upt.ka.unit.pemasaran');
            Route::post('/Ka-Pemasaran/Request/Store', 'store')->name('store.ka.pemasaran');
            Route::get('/Ka-Pemasaran/edit/{PointId}', 'edit')->name('edit.ka.pemasaran');
            Route::put('/Ka-Pemasaran/update/{PointId}', 'update')->name('update.ka.pemasaran');
            Route::get('/Raport/KaPemasaran/{user_id}', 'raport')->name('ka.pemasaran.raport');
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT PERPUSTAKAAN ----------------------------------//
        Route::controller(KoordinatorPerpustakaanController::class)->group(function () {
            Route::get('/Ka-Perpustakaan/Input', 'create')->name('ka.upt.ka.unit.perpustakaan');
            Route::post('/Ka-Perpustakaan/Request/Store', 'store')->name('store.ka.perpustakaan');
            Route::get('/Ka-Perpustakaan/edit/{PointId}', 'edit')->name('edit.ka.perpustakaan');
            Route::put('/Ka-Perpustakaan/update/{PointId}', 'update')->name('update.ka.perpustakaan');
            Route::get('/Raport/Ka-Perpustakaan/{user_id}', 'raport')->name('ka.perpustakaan.raport');
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT LABORAN ----------------------------------//
        Route::controller(KaLaboranController::class)->group(function () {
            Route::get('/Ka-Laboran/Input', 'create')->name('ka.upt.ka.unit.laboran');
            Route::post('/Ka-Laboran/Request/Store', 'store')->name('store.ka.laboran');
            Route::get('/Ka-Laboran/edit/{PointId}', 'edit')->name('edit.ka.laboran');
            Route::put('/Ka-Laboran/update/{PointId}', 'update')->name('update.ka.laboran');
            Route::get('/Raport/Ka-Laboran/{user_id}', 'raport')->name('ka.laboran.raport');
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT IT ----------------------------------//
        Route::controller(KaUnitItController::class)->group(function () {
            Route::get('/Ka-Unit-IT/Input', 'create')->name('ka.upt.ka.unit.it');
            Route::post('/Ka-Unit-IT/Request/Store', 'store')->name('store.ka.it');
            Route::get('/Ka-Unit-IT/edit/{PointId}', 'edit')->name('edit.ka.it');
            Route::put('/Ka-Unit-IT/update/{PointId}', 'update')->name('update.ka.it');
            Route::get('/Raport/Ka-Unit-IT/{user_id}', 'raport')->name('ka.it.raport');
        });

        // ----------------------------- Controller Form Penilaian Ka. Baak ----------------------------------//
        Route::controller(BaakController::class)->group(function () {
            Route::get('/Baak/Input', 'create')->name('ka.baak');
            Route::post('/Baak/Request/Store', 'store')->name('store.ka.baak');
            Route::get('/Baak/edit/{PointId}', 'edit')->name('edit.ka.baak');
            Route::put('/Baak/update/{PointId}', 'update')->name('update.ka.baak');
            Route::get('/Raport/Baak/{user_id}', 'raport')->name('ka.baak.raport');
        });

        // ----------------------------- Controller Form Penilaian Staff Pemasaran ----------------------------------//
        Route::controller(StaffPemasaranController::class)->group(function () {
            Route::get('/StaffPemasaran/Input', 'create')->name('ka.StaffPemasaran');
            Route::post('/StaffPemasaran/Request/Store', 'store')->name('store.StaffPemasaran');
            Route::get('/StaffPemasaran/edit/{PointId}', 'edit')->name('edit.StaffPemasaran');
            Route::put('/StaffPemasaran/update/{PointId}', 'update')->name('update.StaffPemasaran');
            Route::get('/Raport/StaffPemasaran/{user_id}', 'raport')->name('StaffPemasaran.raport');
        });

        // ----------------------------- Controller Form Penilaian Staff Keuangan ----------------------------------//
        Route::controller(StaffKeuanganController::class)->group(function () {
            Route::get('/StaffKeuangan/Input', 'create')->name('StaffKeuangan');
            Route::post('/StaffKeuangan/Request/Store', 'store')->name('store.StaffKeuangan');
            Route::get('/StaffKeuangan/edit/{PointId}', 'edit')->name('edit.StaffKeuangan');
            Route::put('/StaffKeuangan/update/{PointId}', 'update')->name('update.StaffKeuangan');
            Route::get('/Raport/StaffKeuangan/{user_id}', 'raport')->name('StaffKeuangan.raport');
        });

        // ----------------------------- Controller Form Penilaian LPM ----------------------------------//
        Route::controller(LpmController::class)->group(function () {
            Route::get('/Lpm/Input', 'create')->name('Lpm');
            Route::post('/Lpm/Request/Store', 'store')->name('store.Lpm');
            Route::get('/Lpm/edit/{PointId}', 'edit')->name('edit.Lpm');
            Route::put('/Lpm/update/{PointId}', 'update')->name('update.Lpm');
            Route::get('/Raport/Lpm/{user_id}', 'raport')->name('Lpm.raport');
        });

        // ----------------------------- Controller Form Penilaian KasubRisbang ----------------------------------//
        Route::controller(KasubRisbangController::class)->group(function () {
            Route::get('/KasubRisbang/Input', 'create')->name('KasubRisbang');
            Route::post('/KasubRisbang/Request/Store', 'store')->name('store.KasubRisbang');
            Route::get('/KasubRisbang/edit/{PointId}', 'edit')->name('edit.KasubRisbang');
            Route::put('/KasubRisbang/update/{PointId}', 'update')->name('update.KasubRisbang');
            Route::get('/Raport/KasubRisbang/{user_id}', 'raport')->name('KasubRisbang.raport');
        });

        // ----------------------------- Controller Form Penilaian Sek Ka. Prodi ----------------------------------//
        Route::controller(SekKaprodiController::class)->group(function () {
            Route::get('/sekKaprodi/Input', 'create')->name('sekKaprodi');
            Route::post('/sekKaprodi/Request/Store', 'store')->name('store.sekKaprodi');
            Route::get('/sekKaprodi/edit/{PointId}', 'edit')->name('edit.sekKaprodi');
            Route::put('/sekKaprodi/update/{PointId}', 'update')->name('update.sekKaprodi');
            Route::get('/Raport/sekKaprodi/{user_id}', 'raport')->name('sekKaprodi.raport');
        });

        // ----------------------------- Controller Form Penilaian Sek Ka. Sub. Biro Kepegawaian ----------------------------------//
        Route::controller(KasubBiroKepegawaianController::class)->group(function () {
            Route::get('/kasubBiroKepegawaian/Input', 'create')->name('kasubBiroKepegawaian');
            Route::post('/kasubBiroKepegawaian/Request/Store', 'store')->name('store.kasubBiroKepegawaian');
            Route::get('/kasubBiroKepegawaian/edit/{PointId}', 'edit')->name('edit.kasubBiroKepegawaian');
            Route::put('/kasubBiroKepegawaian/update/{PointId}', 'update')->name('update.kasubBiroKepegawaian');
            Route::get('/Raport/kasubBiroKepegawaian/{user_id}', 'raport')->name('kasubBiroKepegawaian.raport');
        });

        // -------------------------- Controller Form Penilaian Sek Ka. Sub. Biro Keuangan dan Akuntansi ------------------------------//
        Route::controller(KasubBiroKeuanganController::class)->group(function () {
            Route::get('/KasubBiroKeuangan/Input', 'create')->name('KasubBiroKeuangan');
            Route::post('/KasubBiroKeuangan/Request/Store', 'store')->name('store.KasubBiroKeuangan');
            Route::get('/KasubBiroKeuangan/edit/{PointId}', 'edit')->name('edit.KasubBiroKeuangan');
            Route::put('/KasubBiroKeuangan/update/{PointId}', 'update')->name('update.KasubBiroKeuangan');
            Route::get('/Raport/KasubBiroKeuangan/{user_id}', 'raport')->name('KasubBiroKeuangan.raport');
        });

        // -------------------------- Controller Form Penilaian Warek Satu ------------------------------//
        Route::controller(warekSatuController::class)->group(function () {
            Route::get('/warekSatu/Input', 'create')->name('warekSatu');
            Route::post('/warekSatu/Request/Store', 'store')->name('store.warekSatu');
            Route::get('/warekSatu/edit/{PointId}', 'edit')->name('edit.warekSatu');
            Route::put('/warekSatu/update/{PointId}', 'update')->name('update.warekSatu');
            Route::get('/Raport/warekSatu/{user_id}', 'raport')->name('warekSatu.raport');
        });

        // -------------------------- Controller Form Penilaian Warek Satu ------------------------------//
        Route::controller(warekDuaController::class)->group(function () {
            Route::get('/WarekDua/Input', 'create')->name('WarekDua');
            Route::post('/WarekDua/Request/Store', 'store')->name('store.WarekDua');
            Route::get('/WarekDua/edit/{PointId}', 'edit')->name('edit.WarekDua');
            Route::put('/WarekDua/update/{PointId}', 'update')->name('update.WarekDua');
            Route::get('/Raport/WarekDua/{user_id}', 'raport')->name('WarekDua.raport');
        });
    }
);
// -----------------------------Laravel Impersonate / Login As----------------------------------------//
Route::controller(ImpersonateController::class, ['middleware' => ['auth', 'verified']])->group(function () {
    Route::get('/impersonate/{id}', 'impersonate')->name('impersonate');
    Route::get('/stop-impersonate', 'stopImpersonate')->name('stop-impersonate');
});

// -----------------------------Log Activity----------------------------------------//
Route::controller(LogActivity::class)->group(function () {
    Route::get('/logactivity', 'index')->name('logactivity');
});
