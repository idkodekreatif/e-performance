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
use App\Http\Controllers\Itisar\BiroAdministrasiAkademik\BaakFkBisnisController;
use App\Http\Controllers\Itisar\BiroAdministrasiAkademik\KemahasiswaanController;
use App\Http\Controllers\Itisar\BiroAdministrasiAkademik\StaffBaakDuaController;
use App\Http\Controllers\Itisar\BiroAdministrasiAkademik\StaffBaakSatuController;
use App\Http\Controllers\Itisar\KasubRisbangController;
use App\Http\Controllers\Itisar\KaUpt\KaLaboranController;
use App\Http\Controllers\Itisar\KaUpt\KaUnitItController;
use App\Http\Controllers\Itisar\KaUpt\KaUnitPemasaranController;
use App\Http\Controllers\Itisar\KaUpt\KoordinatorPerpustakaanController;
use App\Http\Controllers\Itisar\KaUpt\StaffPemasaranController;
use App\Http\Controllers\Itisar\Keuangan\StaffKeuanganController;
use App\Http\Controllers\Itisar\LpmController;
use App\Http\Controllers\Itisar\prodi\SekKaprodiController;
use App\Http\Controllers\Itisar\rektor\KaLpmController;
use App\Http\Controllers\Itisar\rektor\StaffSusBidKerjasamaController;
use App\Http\Controllers\Itisar\rektor\warekDuaController;
use App\Http\Controllers\Itisar\rektor\warekSatuController;
use App\Http\Controllers\Itisar\SubBiroUmum\StaffKebersihanController;
use App\Http\Controllers\Itisar\SubBiroUmum\StaffSarprasController;
use App\Http\Controllers\Itisar\SubBiroUmum\StaffSecurityController;
use App\Http\Controllers\Itisar\SubBiroUmum\StaffUmumController;
use App\Http\Controllers\Itisar\warek2Controller;
use App\Http\Controllers\Itisar\WarekSatu\KaBaakController;
use App\Http\Controllers\Itisar\WarekSatu\KaProdiController;
use App\Http\Controllers\Itisar\WarekSatu\KaRisbangController;
use App\Http\Controllers\Itisar\WarekSatu\KaUptController;
use App\Http\Controllers\Itisar\WarekSatu\KoorKemahasiswaanDanAlumniController;
use App\Http\Controllers\Itisar\Yayasan\RektorController;
use App\Http\Controllers\LogActivity;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SumItisarChartController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'verified', 'prevent-back-history');


Route::resource('profile', profileController::class)->only(['index', 'update'])->middleware('auth', 'verified');

// ----------------------------- Maintenain ----------------------------------------//
Route::group(['prefix' => "/admin", 'middleware' => ['role:superuser|it|hrd', 'auth', 'verified', 'prevent-back-history']], function () {
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
Route::group(['prefix' => "/Point/ITIKAD", 'middleware' => ['role:superuser|it|hrd|lppm|dosen', 'auth', 'verified', 'prevent-back-history']], function () {

    // -----------------------------Point A----------------------------------------//
    Route::controller(PointAController::class)->group(function () {
        Route::get('/Pa/Input', 'create')->name('point-A');
        Route::post('/Pa/post-pointA', 'store')->name('store.pointa');
        Route::get('/Pa/U/{PointId}', 'edit')->name('edit.Point-A');
        Route::put('/Pa/Up/{PointId}', 'update')->name('update.Point-A');
        // -----------------------------Point A HRD----------------------------------------//
        Route::get('/Pa/search/', 'searchPoin')->name('Point-A.data.search');
        Route::get('/Pa/search/result', 'resultSearchPoin')->name('Point-A.data.search.result');
        Route::put('/Pa/Up/hrd/{PointId}', 'updateHrd')->name('update.hrd.Point-A');
    });

    // -----------------------------Point B----------------------------------------//
    Route::controller(PointBController::class)->group(function () {
        Route::get('/Pb/Input', 'create')->name('point-B');
        Route::post('/Pb/post-pointB', 'store')->name('store.pointb');
        Route::get('/Pb/U/{PointId}', 'edit')->name('edit.Point-B');
        Route::put('/Pb/Up/{PointId}', 'update')->name('update.Point-B');
        // -----------------------------Point B HRD----------------------------------------//
        Route::get('/Pb/search/', 'searchPoin')->name('Point-B.data.search');
        Route::get('/Pb/search/result', 'resultSearchPoin')->name('Point-B.data.search.result');
        Route::put('/Pb/Up/hrd/{PointId}', 'updateHrd')->name('update.hrd.Point-B');
    });

    // -----------------------------Point C----------------------------------------//
    Route::controller(PointCController::class)->group(function () {
        Route::get('/Pc/Input', 'create')->name('point-C');
        Route::post('/Pc/post-pointC', 'store')->name('store.pointc');
        Route::get('/Pc/U/{PointId}', 'edit')->name('edit.Point-C');
        Route::put('/Pc/Up/{PointId}', 'update')->name('update.Point-C');
        // -----------------------------Point C HRD----------------------------------------//
        Route::get('/Pc/search/', 'searchPoin')->name('Point-C.data.search');
        Route::get('/Pc/search/result', 'resultSearchPoin')->name('Point-C.data.search.result');
        Route::put('/Pc/Up/hrd/{PointId}', 'updateHrd')->name('update.hrd.Point-C');
    });

    // -----------------------------Point D----------------------------------------//
    Route::controller(PointDController::class)->group(function () {
        Route::get('/Pd/Input', 'create')->name('point-D');
        Route::post('/Pd/post-pointD', 'store')->name('store.pointd');
        Route::get('/Pd/U/{PointId}', 'edit')->name('edit.Point-D');
        Route::put('/Pd/Up/{PointId}', 'update')->name('update.Point-D');
        // -----------------------------Point D HRD----------------------------------------//
        Route::get('/Pd/search/', 'searchPoin')->name('Point-D.data.search');
        Route::get('/Pd/search/result', 'resultSearchPoin')->name('Point-D.data.search.result');
        Route::put('/Pd/Up/hrd/{PointId}', 'updateHrd')->name('update.hrd.Point-D');
    });

    // -----------------------------Point E----------------------------------------//
    Route::controller(PointEController::class)->group(function () {
        Route::get('/Pe/Input', 'create')->name('point-E');
        Route::post('/Pe/post-pointD', 'store')->name('store.pointe');
        Route::get('/Pe/U/{PointId}', 'edit')->name('edit.Point-E');
        Route::put('/Pe/Up/{PointId}', 'update')->name('update.Point-E');
         // -----------------------------Point E HRD----------------------------------------//
        Route::get('/Pe/search/', 'searchPoin')->name('Point-E.data.search');
        Route::get('/Pe/search/result', 'resultSearchPoin')->name('Point-E.data.search.result');
        Route::put('/Pe/Up/hrd/{PointId}', 'updateHrd')->name('update.hrd.Point-E');
    });

    // -----------------------------Raport User----------------------------------------//
    Route::controller(sumPointController::class)->group(function () {
        Route::get('/raport/view/{user_id}', 'raportView')->name('raport');
        Route::get('/preview/{user_id}', 'Preview')->name('preview.point');
        // -----------------------------Search raport hrd HRD----------------------------------------//
        Route::get('/raport/search/', 'searchRaport')->name('raport.data.search');
        Route::get('/raport/search/result', 'resultSearchRaport')->name('raport.data.search.result');
    });
});

// -----------------------------Aggregat Itikad----------------------------------------//
Route::group(
    ['middleware' => ['role:superuser|it|manajer|hrd', 'auth', 'verified', 'prevent-back-history']],
    function () {
        Route::get('/raport/chart/', [sumPointController::class, 'RaportChartView'])->name('raport.chart');
        Route::get('/raport/chart/itisar/', [SumItisarChartController::class, 'ChartView'])->name('raport.chart.itisar');
    }
);

// -----------------------------Prefix All Point IKTISAR----------------------------------------//
Route::group(
    ['prefix' => "/IKTISAR", 'middleware' => ['auth', 'verified', 'prevent-back-history']],
    function () {
        // -----------------------------Warek 2 Controller Form Penilaian Ka. Bau ----------------------------------------//
        Route::controller(warek2Controller::class)->middleware(['role:it|superuser|warek2|tendik'])->group(function () {
            Route::get('/Input', 'create')->name('warek2.ka.bau');
            Route::post('/request/store', 'store')->name('store.warek2.ka.bau');
            Route::get('/ka-bau/edit/', 'edit')->name('edit.warek2.ka.bau');
            Route::get('/warek2/search/result', 'dataSearch')->name('warek2.data.search');
            Route::put('/ka-bau/edit/update/{pointId}', 'update')->name('update.warek2.ka.bau');
            Route::get('/Raport/Ka-Bau/{user_id}', 'raport')->name('warek2.ka.bau.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT PEMASARAN ----------------------------------//
        Route::controller(KaUnitPemasaranController::class)->middleware(['role:it|superuser|warek1|upt|tendik'])->group(function () {
            Route::get('/Ka-Unit-Pemasaran/Input', 'create')->name('ka.upt.ka.unit.pemasaran');
            Route::post('/Ka-Pemasaran/Request/Store', 'store')->name('store.ka.pemasaran');
            Route::get('/Ka-Pemasaran/edit/', 'edit')->name('edit.ka.pemasaran');
            Route::get('/Ka-Pemasaran/search/result', 'dataSearch')->name('pemasaran.data.search');
            Route::put('/Ka-Pemasaran/update/{pointId}', 'update')->name('update.ka.pemasaran');
            Route::get('/Raport/KaPemasaran/{user_id}', 'raport')->name('ka.pemasaran.raport')->middleware(['role:it|superuser|tendik']);
        });

        // ----------------------------- Controller Form Penilaian Staff Pemasaran ----------------------------------//
        Route::controller(StaffPemasaranController::class)->middleware(['role:it|superuser|warek1|upt|tendik'])->group(function () {
            Route::get('/StaffPemasaran/Input', 'create')->name('ka.StaffPemasaran');
            Route::post('/StaffPemasaran/Request/Store', 'store')->name('store.StaffPemasaran');
            Route::get('/StaffPemasaran/edit/', 'edit')->name('edit.StaffPemasaran');
            Route::get('/staffpemasaran/search/result', 'dataSearch')->name('staffpemasaran.data.search');
            Route::put('/StaffPemasaran/update/{pointId}', 'update')->name('update.StaffPemasaran');
            Route::get('/Raport/StaffPemasaran/{user_id}', 'raport')->name('StaffPemasaran.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT PERPUSTAKAAN ----------------------------------//
        Route::controller(KoordinatorPerpustakaanController::class)->middleware(['role:it|superuser|upt|warek1|tendik'])->group(function () {
            Route::get('/Ka-Perpustakaan/Input', 'create')->name('ka.upt.ka.unit.perpustakaan');
            Route::post('/Ka-Perpustakaan/Request/Store', 'store')->name('store.ka.perpustakaan');
            Route::get('/Ka-Perpustakaan/edit/', 'edit')->name('edit.ka.perpustakaan');
            Route::get('/kaPerpustakaan/search/result', 'dataSearch')->name('kaPerpustakaan.data.search');
            Route::put('/Ka-Perpustakaan/update/{pointId}', 'update')->name('update.ka.perpustakaan');
            Route::get('/Raport/Ka-Perpustakaan/{user_id}', 'raport')->name('ka.perpustakaan.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT LABORAN ----------------------------------//
        Route::controller(KaLaboranController::class)->middleware(['role:it|superuser|upt|warek1|tendik'])->group(function () {
            Route::get('/Ka-Laboran/Input', 'create')->name('ka.upt.ka.unit.laboran');
            Route::post('/Ka-Laboran/Request/Store', 'store')->name('store.ka.laboran');
            Route::get('/Ka-Laboran/edit/', 'edit')->name('edit.ka.laboran');
            Route::get('/kaLaboran/search/result', 'dataSearch')->name('kaLaboran.data.search');
            Route::put('/Ka-Laboran/update/{pointId}', 'update')->name('update.ka.laboran');
            Route::get('/Raport/Ka-Laboran/{user_id}', 'raport')->name('ka.laboran.raport')->middleware(['role:tendik']);
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT IT ----------------------------------//
        Route::controller(KaUnitItController::class)->middleware(['role:it|superuser|upt|warek1|tendik'])->group(function () {
            Route::get('/Ka-Unit-IT/Input', 'create')->name('ka.upt.ka.unit.it');
            Route::post('/Ka-Unit-IT/Request/Store', 'store')->name('store.ka.it');
            Route::get('/Ka-Unit-IT/edit/', 'edit')->name('edit.ka.it');
            Route::get('/kaIt/search/result', 'dataSearch')->name('kaIt.data.search');
            Route::put('/Ka-Unit-IT/update/{pointId}', 'update')->name('update.ka.it');
            Route::get('/Raport/Ka-Unit-IT/{user_id}', 'raport')->name('ka.it.raport')->middleware(['role:it|superuser|tendik']);
        });

        // ----------------------------- Controller Form Penilaian Ka. Sub. Biro Administrasi Akademik ----------------------------------//
        Route::controller(BaakController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/Baak/Input', 'create')->name('ka.baak');
            Route::post('/Baak/Request/Store', 'store')->name('store.ka.baak');
            Route::get('/Baak/edit/', 'edit')->name('edit.ka.baak');
            Route::get('/Baak/search/result', 'dataSearch')->name('baak.data.search');
            Route::put('/Baak/update/{pointId}', 'update')->name('update.ka.baak');
            Route::get('/Raport/Baak/{user_id}', 'raport')->name('ka.baak.raport')->middleware(['role:it|superuser|tendik']);
        });

         // -------------------------- Controller Form Penilaian Kemahasiswaan ------------------------------//
         Route::controller(KemahasiswaanController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/kemahasiswaan/Input', 'create')->name('kemahasiswaan');
            Route::post('/kemahasiswaan/Request/Store', 'store')->name('store.kemahasiswaan');
            Route::get('/kemahasiswaan/edit/', 'edit')->name('edit.kemahasiswaan');
            Route::get('/kemahasiswaan/search/result', 'dataSearch')->name('kemahasiswaan.data.search');
            Route::put('/kemahasiswaan/update/{pointId}', 'update')->name('update.kemahasiswaan');
            Route::get('/Raport/kemahasiswaan/{user_id}', 'raport')->name('kemahasiswaan.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Staff Baak Fakultas Bisnis ------------------------------//
        Route::controller(BaakFkBisnisController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/baakFkBisnis/Input', 'create')->name('baakFkBisnis');
            Route::post('/baakFkBisnis/Request/Store', 'store')->name('store.baakFkBisnis');
            Route::get('/baakFkBisnis/edit/', 'edit')->name('edit.baakFkBisnis');
            Route::get('/baakFkBisnis/search/result', 'dataSearch')->name('baakFkBisnis.data.search');
            Route::put('/baakFkBisnis/update/{pointId}', 'update')->name('update.baakFkBisnis');
            Route::get('/Raport/baakFkBisnis/{user_id}', 'raport')->name('baakFkBisnis.raport')->middleware(['role:it|superuser|tendik']);
        });
        // -------------------------- Controller Form Penilaian Staff Baak Satu ------------------------------//
        Route::controller(StaffBaakSatuController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/staffbaaksatu/Input', 'create')->name('staffbaaksatu');
            Route::post('/staffbaaksatu/Request/Store', 'store')->name('store.staffbaaksatu');
            Route::get('/staffbaaksatu/edit/', 'edit')->name('edit.staffbaaksatu');
            Route::get('/staffbaaksatu/search/result', 'dataSearch')->name('staffbaaksatu.data.search');
            Route::put('/staffbaaksatu/update/{pointId}', 'update')->name('update.staffbaaksatu');
            Route::get('/Raport/staffbaaksatu/{user_id}', 'raport')->name('staffbaaksatu.raport')->middleware(['role:it|superuser|tendik']);
        });
        // -------------------------- Controller Form Penilaian Staff Baak Dua ------------------------------//
        Route::controller(StaffBaakDuaController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/staffbaakdua/Input', 'create')->name('staffbaakdua');
            Route::post('/staffbaakdua/Request/Store', 'store')->name('store.staffbaakdua');
            Route::get('/staffbaakdua/edit/', 'edit')->name('edit.staffbaakdua');
            Route::get('/staffbaakdua/search/result', 'dataSearch')->name('staffbaakdua.data.search');
            Route::put('/staffbaakdua/update/{pointId}', 'update')->name('update.staffbaakdua');
            Route::get('/Raport/staffbaakdua/{user_id}', 'raport')->name('staffbaakdua.raport')->middleware(['role:it|superuser|tendik']);
        });

        // ----------------------------- Controller Form Penilaian Staff Keuangan ----------------------------------//
        Route::controller(StaffKeuanganController::class)->middleware(['role:it|superuser|keuangan|tendik'])->group(function () {
            Route::get('/StaffKeuangan/Input', 'create')->name('StaffKeuangan');
            Route::post('/StaffKeuangan/Request/Store', 'store')->name('store.StaffKeuangan');
            Route::get('/StaffKeuangan/edit/', 'edit')->name('edit.StaffKeuangan');
            Route::get('/staffkeuangan/search/result', 'dataSearch')->name('staffkeuangan.data.search');
            Route::put('/StaffKeuangan/update/{pointId}', 'update')->name('update.StaffKeuangan');
            Route::get('/Raport/StaffKeuangan/{user_id}', 'raport')->name('StaffKeuangan.raport')->middleware(['role:it|superuser|tendik']);
        });

        // ----------------------------- Controller Form Penilaian LPM ----------------------------------//
        Route::controller(LpmController::class)->middleware(['role:it|superuser|lpm|ypsdmit|tendik|rektor'])->group(function () {
            Route::get('/Lpm/Input', 'create')->name('Lpm');
            Route::post('/Lpm/Request/Store', 'store')->name('store.Lpm');
            Route::get('/Lpm/edit/', 'edit')->name('edit.Lpm');
            Route::get('/Lpm/search/result', 'dataSearch')->name('Lpm.data.search');
            Route::put('/Lpm/update/{pointId}', 'update')->name('update.Lpm');
            Route::get('/Raport/Lpm/{user_id}', 'raport')->name('Lpm.raport')->middleware(['role:it|superuser|tendik']);
        });

        // ----------------------------- Controller Form Penilaian KasubRisbang ----------------------------------//
        Route::controller(KasubRisbangController::class)->middleware(['role:it|superuser|risbang|warek1|tendik'])->group(function () {
            Route::get('/KasubRisbang/Input', 'create')->name('KasubRisbang');
            Route::post('/KasubRisbang/Request/Store', 'store')->name('store.KasubRisbang');
            Route::get('/KasubRisbang/edit/', 'edit')->name('edit.KasubRisbang');
            Route::get('/kasubrisbang/search/result', 'dataSearch')->name('kasubrisbang.data.search');
            Route::put('/KasubRisbang/update/{pointId}', 'update')->name('update.KasubRisbang');
            Route::get('/Raport/KasubRisbang/{user_id}', 'raport')->name('KasubRisbang.raport')->middleware(['role:it|superuser|tendik']);
        });

        // ----------------------------- Controller Form Penilaian Sek Ka. Prodi ----------------------------------//
        Route::controller(SekKaprodiController::class)->middleware(['role:it|superuser|gizi|perawat|bidan|manajemen|akuntansi|warek1|tendik'])->group(function () {
            Route::get('/sekKaprodi/Input', 'create')->name('sekKaprodi');
            Route::post('/sekKaprodi/Request/Store', 'store')->name('store.sekKaprodi');
            Route::get('/sekKaprodi/edit/', 'edit')->name('edit.sekKaprodi');
            Route::get('/sekkaprodi/search/result', 'dataSearch')->name('sekkaprodi.data.search');
            Route::put('/sekKaprodi/update/{pointId}', 'update')->name('update.sekKaprodi');
            Route::get('/Raport/sekKaprodi/{user_id}', 'raport')->name('sekKaprodi.raport')->middleware(['role:it|superuser|tendik']);
        });

        // ----------------------------- Controller Form Penilaian Sek Ka. Sub. Biro Kepegawaian ----------------------------------//
        Route::controller(KasubBiroKepegawaianController::class)->middleware(['role:it|superuser|bau|tendik|rektor|warek2'])->group(function () {
            Route::get('/kasubBiroKepegawaian/Input', 'create')->name('kasubBiroKepegawaian');
            Route::post('/kasubBiroKepegawaian/Request/Store', 'store')->name('store.kasubBiroKepegawaian');
            Route::get('/kasubBiroKepegawaian/edit/', 'edit')->name('edit.kasubBiroKepegawaian');
            Route::get('/kasubBiroKepegawaian/search/result', 'dataSearch')->name('kasubBiroKepegawaian.data.search');
            Route::put('/kasubBiroKepegawaian/update/{pointId}', 'update')->name('update.kasubBiroKepegawaian');
            Route::get('/Raport/kasubBiroKepegawaian/{user_id}', 'raport')->name('kasubBiroKepegawaian.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Sek Ka. Sub. Biro Keuangan dan Akuntansi ------------------------------//
        Route::controller(KasubBiroKeuanganController::class)->middleware(['role:it|superuser|bau|tendik|rektor|warek2'])->group(function () {
            Route::get('/KasubBiroKeuangan/Input', 'create')->name('KasubBiroKeuangan');
            Route::post('/KasubBiroKeuangan/Request/Store', 'store')->name('store.KasubBiroKeuangan');
            Route::get('/KasubBiroKeuangan/edit/', 'edit')->name('edit.KasubBiroKeuangan');
            Route::get('/KasubBiroKeuangan/search/result', 'dataSearch')->name('KasubBiroKeuangan.data.search');
            Route::put('/KasubBiroKeuangan/update/{pointId}', 'update')->name('update.KasubBiroKeuangan');
            Route::get('/Raport/KasubBiroKeuangan/{user_id}', 'raport')->name('KasubBiroKeuangan.raport')->middleware(['role:it|superuser|tendik']);
        });

         // -------------------------- Form Penilaian Rektor & ka. Sub. Rektor ------------------------------//

         // -------------------------- Controller Form Penilaian Koor Kemahasiswaan dan Alumni ------------------------------//
        Route::controller(KoorKemahasiswaanDanAlumniController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/koorkemahasiswaanDanAlumni/Input', 'create')->name('koorkemahasiswaanDanAlumni');
            Route::post('/koorkemahasiswaanDanAlumni/Request/Store', 'store')->name('store.koorkemahasiswaanDanAlumni');
            Route::get('/koorkemahasiswaanDanAlumni/edit/', 'edit')->name('edit.koorkemahasiswaanDanAlumni');
            Route::get('/koorkemahasiswaanDanAlumni/search/result', 'dataSearch')->name('koorkemahasiswaanDanAlumni.data.search');
            Route::put('/koorkemahasiswaanDanAlumni/update/{pointId}', 'update')->name('update.koorkemahasiswaanDanAlumni');
            Route::get('/Raport/koorkemahasiswaanDanAlumni/{user_id}', 'raport')->name('koorkemahasiswaanDanAlumni.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Ka Upt ------------------------------//
        Route::controller(KaUptController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/warek-satu/Ka-Upt/Input', 'create')->name('WarekSatu.Ka.Upt');
            Route::post('/warek-satu/Ka-Upt/Request/Store', 'store')->name('store.WarekSatu.Ka.Upt');
            Route::get('/warek-satu/Ka-Upt/edit/', 'edit')->name('edit.WarekSatu.Ka.Upt');
            Route::get('/warek-satu/KaUpt/search/result', 'dataSearch')->name('warekSatu.data.search');
            Route::put('/warek-satu/Ka-Upt/update/{pointId}', 'update')->name('update.WarekSatu.Ka.Upt');
            Route::get('/Raport/warek-satu/Ka-Upt/{user_id}', 'raport')->name('WarekSatu.Ka.Upt.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Ka Risbang ------------------------------//
        Route::controller(KaRisbangController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/warek-satu/Ka-Risbang/Input', 'create')->name('WarekSatu.Ka.Risbang');
            Route::post('/warek-satu/Ka-Risbang/Request/Store', 'store')->name('store.WarekSatu.Ka.Risbang');
            Route::get('/warek-satu/Ka-Risbang/edit/', 'edit')->name('edit.WarekSatu.Ka.Risbang');
            Route::get('/warek-satu/KaRisbang/search/result', 'dataSearch')->name('warekSatu.kaRisbang.data.search');
            Route::put('/warek-satu/Ka-Risbang/update/{pointId}', 'update')->name('update.WarekSatu.Ka.Risbang');
            Route::get('/Raport/warek-satu/Ka-Risbang/{user_id}', 'raport')->name('WarekSatu.Ka.Risbang.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Ka Baak ------------------------------//
        Route::controller(KaBaakController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/warek-satu/Ka-Baak/Input', 'create')->name('WarekSatu.Ka.Baak');
            Route::post('/warek-satu/Ka-Baak/Request/Store', 'store')->name('store.WarekSatu.Ka.Baak');
            Route::get('/warek-satu/Ka-Baak/edit/', 'edit')->name('edit.WarekSatu.Ka.Baak');
            Route::get('/warek1/KaBaak/search/result', 'dataSearch')->name('WarekSatu.baak.data.search');
            Route::put('/warek-satu/Ka-Baak/update/{pointId}', 'update')->name('update.WarekSatu.Ka.Baak');
            Route::get('/Raport/warek-satu/Ka-Baak/{user_id}', 'raport')->name('WarekSatu.Ka.Baak.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Ka Prodi ------------------------------//
        Route::controller(KaProdiController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/warek-satu/Ka-Prodi/Input', 'create')->name('WarekSatu.Ka.Prodi');
            Route::post('/warek-satu/Ka-Prodi/Request/Store', 'store')->name('store.WarekSatu.Ka.Prodi');
            Route::get('/warek-satu/Ka-Prodi/edit/', 'edit')->name('edit.WarekSatu.Ka.Prodi');
            Route::get('/warek-satu/search/result', 'dataSearch')->name('WarekSatu.KaProdi.data.search');
            Route::put('/warek-satu/Ka-Prodi/update/{pointId}', 'update')->name('update.WarekSatu.Ka.Prodi');
            Route::get('/Raport/warek-satu/Ka-Prodi/{user_id}', 'raport')->name('WarekSatu.Ka.Prodi.raport')->middleware(['role:it|superuser|tendik']);
        });


        // -------------------------- ka. Sub. Yayasan dan Form Penilaian Rektor ------------------------------//

        // -------------------------- Controller Form Penilaian Warek Satu ------------------------------//
        Route::controller(warekSatuController::class)->middleware(['role:it|superuser|rektor|ypsdmit|tendik'])->group(function () {
            Route::get('/warekSatu/Input', 'create')->name('warekSatu');
            Route::post('/warekSatu/Request/Store', 'store')->name('store.warekSatu');
            Route::get('/warekSatu/edit/', 'edit')->name('edit.warekSatu');
            Route::get('/rektor/warekSatu/search/result', 'dataSearch')->name('rektor.warekSatu.data.search');
            Route::put('/warekSatu/update/{pointId}', 'update')->name('update.warekSatu');
            Route::get('/Raport/warekSatu/{user_id}', 'raport')->name('warekSatu.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Warek Dua ------------------------------//
        Route::controller(warekDuaController::class)->middleware(['role:it|superuser|ypsdmit|rektor|tendik'])->group(function () {
            Route::get('/WarekDua/Input', 'create')->name('WarekDua');
            Route::post('/WarekDua/Request/Store', 'store')->name('store.WarekDua');
            Route::get('/WarekDua/edit/', 'edit')->name('edit.WarekDua');
            Route::get('/warekDua/search/result', 'dataSearch')->name('warekDua.data.search');
            Route::put('/WarekDua/update/{pointId}', 'update')->name('update.WarekDua');
            Route::get('/Raport/WarekDua/{user_id}', 'raport')->name('WarekDua.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Staff Sus Bidang Kerjasama ------------------------------//
        Route::controller(StaffSusBidKerjasamaController::class)->middleware(['role:it|superuser|rektor|ypsdmit|tendik'])->group(function () {
            Route::get('/StaffSusBidKerjasama/Input', 'create')->name('StaffSusBidKerjasama');
            Route::post('/StaffSusBidKerjasama/Request/Store', 'store')->name('store.StaffSusBidKerjasama');
            Route::get('/StaffSusBidKerjasama/edit/', 'edit')->name('edit.StaffSusBidKerjasama');
            Route::get('/StaffSusBidKerjasama/search/result', 'dataSearch')->name('StaffSusBidKerjasama.data.search');
            Route::put('/StaffSusBidKerjasama/update/{pointId}', 'update')->name('update.StaffSusBidKerjasama');
            Route::get('/Raport/StaffSusBidKerjasama/{user_id}', 'raport')->name('StaffSusBidKerjasama.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Ka. LPM ------------------------------//
        Route::controller(KaLpmController::class)->middleware(['role:it|superuser|rektor|tendik|ypsdmit'])->group(function () {
            Route::get('/KaLpm/Input', 'create')->name('KaLpm');
            Route::post('/KaLpm/Request/Store', 'store')->name('store.KaLpm');
            Route::get('/KaLpm/edit/', 'edit')->name('edit.KaLpm');
            Route::get('/KaLpm/search/result', 'dataSearch')->name('KaLpm.data.search');
            Route::put('/KaLpm/update/{pointId}', 'update')->name('update.KaLpm');
            Route::get('/Raport/KaLpm/{user_id}', 'raport')->name('KaLpm.raport')->middleware(['role:it|superuser|tendik']);
        });
        // -------------------------- End ka. Sub. Yayasan dan Form Penilaian Rektor ------------------------------//

        // -------------------------- Controller Form Penilaian Staff Umum Dan Kepegawaian ------------------------------//
        Route::controller(StaffUmumController::class)->middleware(['role:it|superuser|hrd|tendik'])->group(function () {
            Route::get('/staffumum/Input', 'create')->name('staffumum');
            Route::post('/staffumum/Request/Store', 'store')->name('store.staffumum');
            Route::get('/staffumum/edit/', 'edit')->name('edit.staffumum');
            Route::get('/staffumum/search/result', 'dataSearch')->name('staffumum.data.search');
            Route::put('/staffumum/update/{pointId}', 'update')->name('update.staffumum');
            Route::get('/Raport/staffumum/{user_id}', 'raport')->name('staffumum.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Staff Kebersihan ------------------------------//
        Route::controller(StaffKebersihanController::class)->middleware(['role:it|superuser|hrd|tendik'])->group(function () {
            Route::get('/staffkebersihan/Input', 'create')->name('staffkebersihan');
            Route::post('/staffkebersihan/Request/Store', 'store')->name('store.staffkebersihan');
            Route::get('/staffkebersihan/edit/', 'edit')->name('edit.staffkebersihan');
            Route::get('/staffkebersihan/search/result', 'dataSearch')->name('staffkebersihan.data.search');
            Route::put('/staffkebersihan/update/{pointId}', 'update')->name('update.staffkebersihan');
            Route::get('/Raport/staffkebersihan/{user_id}', 'raport')->name('staffkebersihan.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Staff Security ------------------------------//
        Route::controller(StaffSecurityController::class)->middleware(['role:it|superuser|hrd|tendik'])->group(function () {
            Route::get('/staffsecurity/Input', 'create')->name('staffsecurity');
            Route::post('/staffsecurity/Request/Store', 'store')->name('store.staffsecurity');
            Route::get('/staffsecurity/edit/', 'edit')->name('edit.staffsecurity');
            Route::get('/staffsecurity/search/result', 'dataSearch')->name('staffsecurity.data.search');
            Route::put('/staffsecurity/update/{pointId}', 'update')->name('update.staffsecurity');
            Route::get('/Raport/staffsecurity/{user_id}', 'raport')->name('staffsecurity.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Staff Sarpras ------------------------------//
        Route::controller(StaffSarprasController::class)->middleware(['role:it|superuser|hrd|tendik'])->group(function () {
            Route::get('/staffsarpras/Input', 'create')->name('staffsarpras');
            Route::post('/staffsarpras/Request/Store', 'store')->name('store.staffsarpras');
            Route::get('/staffsarpras/edit/', 'edit')->name('edit.staffsarpras');
            Route::get('/staffsarpras/search/result', 'dataSearch')->name('staffsarpras.data.search');
            Route::put('/staffsarpras/update/{pointId}', 'update')->name('update.staffsarpras');
            Route::get('/Raport/staffsarpras/{user_id}', 'raport')->name('staffsarpras.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Rektor ------------------------------//
        Route::controller(RektorController::class)->middleware(['role:it|superuser|ypsdmit|warek1|warek2|tendik'])->group(function () {
            Route::get('/Rektor/Input', 'create')->name('rektor');
            Route::post('/Rektor/Request/Store', 'store')->name('store.rektor');
            Route::get('/Rektor/edit/', 'edit')->name('edit.rektor');
            Route::get('/Rektor/search/result', 'dataSearch')->name('Rektor.data.search');
            Route::put('/Rektor/update/{pointId}', 'update')->name('update.rektor');
            Route::get('/Raport/Rektor/{user_id}', 'raport')->name('rektor.raport')->middleware(['role:it|superuser|tendik']);
        });
    }
);
// -----------------------------Laravel Impersonate / Login As----------------------------------------//
Route::controller(ImpersonateController::class, ['middleware' => ['auth', 'verified', 'prevent-back-history']])->group(function () {
    Route::get('/impersonate/{id}', 'impersonate')->name('impersonate');
    Route::get('/stop-impersonate', 'stopImpersonate')->name('stop-impersonate');
});

// -----------------------------Log Activity----------------------------------------//
Route::controller(LogActivity::class, ['middleware' => ['auth', 'verified', 'prevent-back-history']])->group(function () {
    Route::get('/logactivity', 'index')->name('logactivity');
});
