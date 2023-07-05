<?php

use App\Http\Controllers\ControlUserController;
use App\Http\Controllers\iktisar\iktisarBulanan\baak\iktisarBulananBaakKaUnitController;
use App\Http\Controllers\iktisar\iktisarBulanan\baak\iktisarBulananBaakStaffController;
use App\Http\Controllers\iktisar\iktisarBulanan\bau\iktisarBulananBauKaUnitController;
use App\Http\Controllers\iktisar\iktisarBulanan\Dekan\iktisarBulananDekanController;
use App\Http\Controllers\iktisar\iktisarBulanan\hrd\iktisarBulananHrdStaffController;
use App\Http\Controllers\iktisar\iktisarBulanan\iktisarBulananKaUnitController;
use App\Http\Controllers\iktisar\iktisarBulanan\iktisarBulananStaffController;
use App\Http\Controllers\iktisar\iktisarBulanan\kaprodi\iktisarBulananKaprodiController;
use App\Http\Controllers\iktisar\iktisarBulanan\keuangan\iktisarBulananKeuanganStaffController;
use App\Http\Controllers\iktisar\iktisarBulanan\lpm\iktisarBulananLpmKaUnitController;
use App\Http\Controllers\iktisar\iktisarBulanan\rektor\iktisarBulananRektorController;
use App\Http\Controllers\iktisar\iktisarBulanan\risbang\iktisarBulananRisbangKaUnitController;
use App\Http\Controllers\iktisar\iktisarBulanan\warek1\iktisarBulananWarekSatuController;
use App\Http\Controllers\iktisar\iktisarBulanan\warek2\iktisarBulananWarek2Controller;
use App\Http\Controllers\iktisar\iktisarBulanan\ypsdmit\iktisarBulananYpsdmitController;
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
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'verify' => true,
    'register' => false
]);

Route::get('/', function () {
    return view('auth.login');
});

// -----------------------------Home----------------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth', 'verified', 'prevent-back-history');

// -----------------------------Buil Interfaces----------------------------------------//
Route::get('/buildInterfaces', [App\Http\Controllers\HomeController::class, 'build']);

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
        Route::post('/users/register', 'store')->name('users.store');
        Route::get('/users/{user}', 'show')->name('users.show');
        Route::get('/users/destroy/{user}', 'destroy')->name('users.destroy');
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
        Route::get('/raport/cetakPdf/{user_id}', 'raportPdf')->name('raport.pdf');
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

Route::group(
    ['prefix' => "/IKTISAR/bulanan", 'middleware' => ['auth', 'verified', 'prevent-back-history']],
    function () {
        // -----------------------------IKTISAR Bulanan Staff----------------------------------------//
        Route::middleware(['role:it|superuser|tendik|upt'])->group(function () {
            // penilai isi data
            Route::get('/input/staff', [iktisarBulananStaffController::class, 'create'])->name('iktisar.bulanan.staff.create');
            Route::post('/input/staff/store', [iktisarBulananStaffController::class, 'store'])->name('iktisar.bulanan.staff.store');
            // search dan pembaruan data
            Route::get('/staff/searchData', [iktisarBulananStaffController::class, 'searchDataEdit'])->name('iktisar.bulanan.staff.DataEdit');
            Route::get('/staff/edit', [iktisarBulananStaffController::class, 'edit'])->name('iktisar.bulanan.staff.edit');
            Route::put('/staff/edit/{id}', [iktisarBulananStaffController::class, 'update'])->name('iktisar.bulanan.staff.update');
            // Raport tendik dan search detail poin
            Route::get('/staff/raport/{user_id}', [iktisarBulananStaffController::class, 'raportStaff'])->name('iktisar.bulanan.staff.raport.staff');
            Route::get('/staff/detail/data', [iktisarBulananStaffController::class, 'searchDataPoin'])->name('iktisar.bulanan.staff.detailData');
            Route::get('/staff/detail/data/poin', [iktisarBulananStaffController::class, 'dataPoin'])->name('iktisar.bulanan.staff.poin');
            // Detail Raport Tendik
            Route::get('/staff/search-data/raport', [iktisarBulananStaffController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.staff.data.raport');
            Route::get('/staff/data/raport', [iktisarBulananStaffController::class, 'staffRaportIktisar'])->name('data.raport.staff');
        });


        // -----------------------------IKTISAR Bulanan Ka. Unit----------------------------------------//
        Route::middleware(['role:it|superuser|tendik|upt'])->group(function () {
            // penilai isi data
            Route::get('/input/kaunit', [iktisarBulananKaUnitController::class, 'create'])->name('iktisar.bulanan.kaunit.create');
            Route::post('/input/kaunit/store', [iktisarBulananKaUnitController::class, 'store'])->name('iktisar.bulanan.kaunit.store');
            // search dan pembaruan data
            Route::get('/kaunit/searchData', [iktisarBulananKaUnitController::class, 'searchDataEdit'])->name('iktisar.bulanan.kaunit.DataEdit');
            Route::get('/kaunit/edit', [iktisarBulananKaUnitController::class, 'edit'])->name('iktisar.bulanan.kaunit.edit');
            Route::put('/kaunit/edit/{id}', [iktisarBulananKaUnitController::class, 'update'])->name('iktisar.bulanan.kaunit.update');
            // Raport tendik dan search detail poin
            Route::get('/kaunit/raport/{user_id}', [iktisarBulananKaUnitController::class, 'raportStaff'])->name('iktisar.bulanan.kaunit.raport.kaunit');
            Route::get('/kaunit/detail/data', [iktisarBulananKaUnitController::class, 'searchDataPoin'])->name('iktisar.bulanan.kaunit.detailData');
            Route::get('/kaunit/detail/data/poin', [iktisarBulananKaUnitController::class, 'dataPoin'])->name('iktisar.bulanan.kaunit.poin');
            // Detail Raport Tendik
            Route::get('/kaunit/search-data/raport', [iktisarBulananKaUnitController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.kaunit.data.raport');
            Route::get('/kaunit/data/raport', [iktisarBulananKaUnitController::class, 'staffRaportIktisar'])->name('data.raport.kaunit');
        });

        // -----------------------------IKTISAR Bulanan Ka. Unit----------------------------------------//
        Route::middleware(['role:it|superuser|tendik|ypsdmit'])->group(function () {
            // penilai isi data
            Route::get('/input/ypsdmit', [iktisarBulananYpsdmitController::class, 'create'])->name('iktisar.bulanan.ypsdmit.create');
            Route::post('/input/ypsdmit/store', [iktisarBulananYpsdmitController::class, 'store'])->name('iktisar.bulanan.ypsdmit.store');
            // search dan pembaruan data
            Route::get('/ypsdmit/searchData', [iktisarBulananYpsdmitController::class, 'searchDataEdit'])->name('iktisar.bulanan.ypsdmit.DataEdit');
            Route::get('/ypsdmit/edit', [iktisarBulananYpsdmitController::class, 'edit'])->name('iktisar.bulanan.ypsdmit.edit');
            Route::put('/ypsdmit/edit/{id}', [iktisarBulananYpsdmitController::class, 'update'])->name('iktisar.bulanan.ypsdmit.update');
            // Raport tendik dan search detail poin
            Route::get('/ypsdmit/raport/{user_id}', [iktisarBulananYpsdmitController::class, 'raportStaff'])->name('iktisar.bulanan.ypsdmit.raport.ypsdmit');
            Route::get('/ypsdmit/detail/data', [iktisarBulananYpsdmitController::class, 'searchDataPoin'])->name('iktisar.bulanan.ypsdmit.detailData');
            Route::get('/ypsdmit/detail/data/poin', [iktisarBulananYpsdmitController::class, 'dataPoin'])->name('iktisar.bulanan.ypsdmit.poin');
            // Detail Raport Tendik
            Route::get('/ypsdmit/search-data/raport', [iktisarBulananYpsdmitController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.ypsdmit.data.raport');
            Route::get('/ypsdmit/data/raport', [iktisarBulananYpsdmitController::class, 'staffRaportIktisar'])->name('data.raport.ypsdmit');
        });

        Route::middleware(['role:it|superuser|tendik|rektor'])->group(function () {
            // penilai isi data
            Route::get('/input/rektor', [iktisarBulananRektorController::class, 'create'])->name('iktisar.bulanan.rektor.create');
            Route::post('/input/rektor/store', [iktisarBulananRektorController::class, 'store'])->name('iktisar.bulanan.rektor.store');
            // search dan pembaruan data
            Route::get('/rektor/searchData', [iktisarBulananRektorController::class, 'searchDataEdit'])->name('iktisar.bulanan.rektor.DataEdit');
            Route::get('/rektor/edit', [iktisarBulananRektorController::class, 'edit'])->name('iktisar.bulanan.rektor.edit');
            Route::put('/rektor/edit/{id}', [iktisarBulananRektorController::class, 'update'])->name('iktisar.bulanan.rektor.update');
            // Raport tendik dan search detail poin
            Route::get('/rektor/raport/{user_id}', [iktisarBulananRektorController::class, 'raportStaff'])->name('iktisar.bulanan.rektor.raport.rektor');
            Route::get('/rektor/detail/data', [iktisarBulananRektorController::class, 'searchDataPoin'])->name('iktisar.bulanan.rektor.detailData');
            Route::get('/rektor/detail/data/poin', [iktisarBulananRektorController::class, 'dataPoin'])->name('iktisar.bulanan.rektor.poin');
            // Detail Raport Tendik
            Route::get('/rektor/search-data/raport', [iktisarBulananRektorController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.rektor.data.raport');
            Route::get('/rektor/data/raport', [iktisarBulananRektorController::class, 'staffRaportIktisar'])->name('data.raport.rektor');
        });

        Route::middleware(['role:it|superuser|tendik|warek1'])->group(function () {
            // penilai isi data
            Route::get('/input/warekSatu', [iktisarBulananWarekSatuController::class, 'create'])->name('iktisar.bulanan.warekSatu.create');
            Route::post('/input/warekSatu/store', [iktisarBulananWarekSatuController::class, 'store'])->name('iktisar.bulanan.warekSatu.store');
            // search dan pembaruan data
            Route::get('/warekSatu/searchData', [iktisarBulananWarekSatuController::class, 'searchDataEdit'])->name('iktisar.bulanan.warekSatu.DataEdit');
            Route::get('/warekSatu/edit', [iktisarBulananWarekSatuController::class, 'edit'])->name('iktisar.bulanan.warekSatu.edit');
            Route::put('/warekSatu/edit/{id}', [iktisarBulananWarekSatuController::class, 'update'])->name('iktisar.bulanan.warekSatu.update');
            // Raport tendik dan search detail poin
            Route::get('/warekSatu/raport/{user_id}', [iktisarBulananWarekSatuController::class, 'raportStaff'])->name('iktisar.bulanan.warekSatu.raport.warekSatu');
            Route::get('/warekSatu/detail/data', [iktisarBulananWarekSatuController::class, 'searchDataPoin'])->name('iktisar.bulanan.warekSatu.detailData');
            Route::get('/warekSatu/detail/data/poin', [iktisarBulananWarekSatuController::class, 'dataPoin'])->name('iktisar.bulanan.warekSatu.poin');
            // Detail Raport Tendik
            Route::get('/warekSatu/search-data/raport', [iktisarBulananWarekSatuController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.warekSatu.data.raport');
            Route::get('/warekSatu/data/raport', [iktisarBulananWarekSatuController::class, 'staffRaportIktisar'])->name('data.raport.warekSatu');
        });

        Route::middleware(['role:it|superuser|tendik|warek2'])->group(function () {
            // penilai isi data
            Route::get('/input/warekDua', [iktisarBulananWarek2Controller::class, 'create'])->name('iktisar.bulanan.warekDua.create');
            Route::post('/input/warekDua/store', [iktisarBulananWarek2Controller::class, 'store'])->name('iktisar.bulanan.warekDua.store');
            // search dan pembaruan data
            Route::get('/warekDua/searchData', [iktisarBulananWarek2Controller::class, 'searchDataEdit'])->name('iktisar.bulanan.warekDua.DataEdit');
            Route::get('/warekDua/edit', [iktisarBulananWarek2Controller::class, 'edit'])->name('iktisar.bulanan.warekDua.edit');
            Route::put('/warekDua/edit/{id}', [iktisarBulananWarek2Controller::class, 'update'])->name('iktisar.bulanan.warekDua.update');
            // Raport tendik dan search detail poin
            Route::get('/warekDua/raport/{user_id}', [iktisarBulananWarek2Controller::class, 'raportStaff'])->name('iktisar.bulanan.warekDua.raport.warekDua');
            Route::get('/warekDua/detail/data', [iktisarBulananWarek2Controller::class, 'searchDataPoin'])->name('iktisar.bulanan.warekDua.detailData');
            Route::get('/warekDua/detail/data/poin', [iktisarBulananWarek2Controller::class, 'dataPoin'])->name('iktisar.bulanan.warekDua.poin');
            // Detail Raport Tendik
            Route::get('/warekDua/search-data/raport', [iktisarBulananWarek2Controller::class, 'searchRaportIktisar'])->name('iktisar.bulanan.warekDua.data.raport');
            Route::get('/warekDua/data/raport', [iktisarBulananWarek2Controller::class, 'staffRaportIktisar'])->name('data.raport.warekDua');
        });

        Route::middleware(['role:it|superuser|tendik|kasubbaak'])->group(function () {
            // penilai isi data
            Route::get('/input/baak/staff', [iktisarBulananBaakStaffController::class, 'create'])->name('iktisar.bulanan.baak.staff.create');
            Route::post('/input/baak/staff/store', [iktisarBulananBaakStaffController::class, 'store'])->name('iktisar.bulanan.baak.staff.store');
            // search dan pembaruan data
            Route::get('/baak/staff/searchData', [iktisarBulananBaakStaffController::class, 'searchDataEdit'])->name('iktisar.bulanan.baak.staff.DataEdit');
            Route::get('/baak/edit/staff', [iktisarBulananBaakStaffController::class, 'edit'])->name('iktisar.bulanan.baak.staff.edit');
            Route::put('/baak/edit/staff/{id}', [iktisarBulananBaakStaffController::class, 'update'])->name('iktisar.bulanan.baak.staff.update');
            // Raport tendik dan search detail poin
            Route::get('/baak/raport/staff/{user_id}', [iktisarBulananBaakStaffController::class, 'raportStaff'])->name('iktisar.bulanan.baak.staff.raport.baak');
            Route::get('/baak/staff/detail/data', [iktisarBulananBaakStaffController::class, 'searchDataPoin'])->name('iktisar.bulanan.baak.staff.detailData');
            Route::get('/baak/staff/detail/data/poin', [iktisarBulananBaakStaffController::class, 'dataPoin'])->name('iktisar.bulanan.baak.staff.poin');
            // Detail Raport Tendik
            Route::get('/baak/staff/search-data/raport', [iktisarBulananBaakStaffController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.baak.staff.data.raport');
            Route::get('/baak/staff/data/raport', [iktisarBulananBaakStaffController::class, 'staffRaportIktisar'])->name('data.raport.staff.baak');
        });

        Route::middleware(['role:it|superuser|tendik|baak'])->group(function () {
            // penilai isi data
            Route::get('/input/baak/kaunit', [iktisarBulananBaakKaUnitController::class, 'create'])->name('iktisar.bulanan.baak.kaunit.create');
            Route::post('/input/baak/kaunit/store', [iktisarBulananBaakKaUnitController::class, 'store'])->name('iktisar.bulanan.baak.kaunit.store');
            // search dan pembaruan data
            Route::get('/baak/kaunit/searchData', [iktisarBulananBaakKaUnitController::class, 'searchDataEdit'])->name('iktisar.bulanan.baak.kaunit.DataEdit');
            Route::get('/baak/edit/kaunit', [iktisarBulananBaakKaUnitController::class, 'edit'])->name('iktisar.bulanan.baak.kaunit.edit');
            Route::put('/baak/edit/kaunit/{id}', [iktisarBulananBaakKaUnitController::class, 'update'])->name('iktisar.bulanan.baak.kaunit.update');
            // Raport tendik dan search detail poin
            Route::get('/baak/raport/kaunit/{user_id}', [iktisarBulananBaakKaUnitController::class, 'raportStaff'])->name('iktisar.bulanan.baak.kaunit.raport.baak');
            Route::get('/baak/kaunit/detail/data', [iktisarBulananBaakKaUnitController::class, 'searchDataPoin'])->name('iktisar.bulanan.baak.kaunit.detailData');
            Route::get('/baak/kaunit/detail/data/poin', [iktisarBulananBaakKaUnitController::class, 'dataPoin'])->name('iktisar.bulanan.baak.kaunit.poin');
            // Detail Raport Tendik
            Route::get('/baak/kaunit/search-data/raport', [iktisarBulananBaakKaUnitController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.baak.kaunit.data.raport');
            Route::get('/baak/kaunit/data/raport', [iktisarBulananBaakKaUnitController::class, 'staffRaportIktisar'])->name('data.raport.kaunit.baak');
        });

        Route::middleware(['role:it|superuser|tendik|keuangan'])->group(function () {
            // penilai isi data
            Route::get('/input/keuangan', [iktisarBulananKeuanganStaffController::class, 'create'])->name('iktisar.bulanan.keuangan.create');
            Route::post('/input/keuangan/store', [iktisarBulananKeuanganStaffController::class, 'store'])->name('iktisar.bulanan.keuangan.store');
            // search dan pembaruan data
            Route::get('/keuangan/searchData', [iktisarBulananKeuanganStaffController::class, 'searchDataEdit'])->name('iktisar.bulanan.keuangan.DataEdit');
            Route::get('/keuangan/edit', [iktisarBulananKeuanganStaffController::class, 'edit'])->name('iktisar.bulanan.keuangan.edit');
            Route::put('/keuangan/edit/{id}', [iktisarBulananKeuanganStaffController::class, 'update'])->name('iktisar.bulanan.keuangan.update');
            // Raport tendik dan search detail poin
            Route::get('/keuangan/raport/{user_id}', [iktisarBulananKeuanganStaffController::class, 'raportStaff'])->name('iktisar.bulanan.keuangan.raport.keuangan');
            Route::get('/keuangan/detail/data', [iktisarBulananKeuanganStaffController::class, 'searchDataPoin'])->name('iktisar.bulanan.keuangan.detailData');
            Route::get('/keuangan/detail/data/poin', [iktisarBulananKeuanganStaffController::class, 'dataPoin'])->name('iktisar.bulanan.keuangan.poin');
            // Detail Raport Tendik
            Route::get('/keuangan/search-data/raport', [iktisarBulananKeuanganStaffController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.keuangan.data.raport');
            Route::get('/keuangan/data/raport', [iktisarBulananKeuanganStaffController::class, 'staffRaportIktisar'])->name('data.raport.keuangan');
        });

        Route::middleware(['role:it|superuser|tendik|lpm'])->group(function () {
            // penilai isi data
            Route::get('/input/lpm', [iktisarBulananLpmKaUnitController::class, 'create'])->name('iktisar.bulanan.lpm.create');
            Route::post('/input/lpm/store', [iktisarBulananLpmKaUnitController::class, 'store'])->name('iktisar.bulanan.lpm.store');
            // search dan pembaruan data
            Route::get('/lpm/searchData', [iktisarBulananLpmKaUnitController::class, 'searchDataEdit'])->name('iktisar.bulanan.lpm.DataEdit');
            Route::get('/lpm/edit', [iktisarBulananLpmKaUnitController::class, 'edit'])->name('iktisar.bulanan.lpm.edit');
            Route::put('/lpm/edit/{id}', [iktisarBulananLpmKaUnitController::class, 'update'])->name('iktisar.bulanan.lpm.update');
            // Raport tendik dan search detail poin
            Route::get('/lpm/raport/{user_id}', [iktisarBulananLpmKaUnitController::class, 'raportStaff'])->name('iktisar.bulanan.lpm.raport.lpm');
            Route::get('/lpm/detail/data', [iktisarBulananLpmKaUnitController::class, 'searchDataPoin'])->name('iktisar.bulanan.lpm.detailData');
            Route::get('/lpm/detail/data/poin', [iktisarBulananLpmKaUnitController::class, 'dataPoin'])->name('iktisar.bulanan.lpm.poin');
            // Detail Raport Tendik
            Route::get('/lpm/search-data/raport', [iktisarBulananLpmKaUnitController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.lpm.data.raport');
            Route::get('/lpm/data/raport', [iktisarBulananLpmKaUnitController::class, 'staffRaportIktisar'])->name('data.raport.lpm');
        });

        Route::middleware(['role:it|superuser|tendik|risbang'])->group(function () {
            // penilai isi data
            Route::get('/input/risbang', [iktisarBulananRisbangKaUnitController::class, 'create'])->name('iktisar.bulanan.risbang.create');
            Route::post('/input/risbang/store', [iktisarBulananRisbangKaUnitController::class, 'store'])->name('iktisar.bulanan.risbang.store');
            // search dan pembaruan data
            Route::get('/risbang/searchData', [iktisarBulananRisbangKaUnitController::class, 'searchDataEdit'])->name('iktisar.bulanan.risbang.DataEdit');
            Route::get('/risbang/edit', [iktisarBulananRisbangKaUnitController::class, 'edit'])->name('iktisar.bulanan.risbang.edit');
            Route::put('/risbang/edit/{id}', [iktisarBulananRisbangKaUnitController::class, 'update'])->name('iktisar.bulanan.risbang.update');
            // Raport tendik dan search detail poin
            Route::get('/risbang/raport/{user_id}', [iktisarBulananRisbangKaUnitController::class, 'raportStaff'])->name('iktisar.bulanan.risbang.raport.risbang');
            Route::get('/risbang/detail/data', [iktisarBulananRisbangKaUnitController::class, 'searchDataPoin'])->name('iktisar.bulanan.risbang.detailData');
            Route::get('/risbang/detail/data/poin', [iktisarBulananRisbangKaUnitController::class, 'dataPoin'])->name('iktisar.bulanan.risbang.poin');
            // Detail Raport Tendik
            Route::get('/risbang/search-data/raport', [iktisarBulananRisbangKaUnitController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.risbang.data.raport');
            Route::get('/risbang/data/raport', [iktisarBulananRisbangKaUnitController::class, 'staffRaportIktisar'])->name('data.raport.risbang');
        });

        Route::middleware(['role:it|superuser|tendik|gizi|perawat|bidan|manajemen|akuntansi'])->group(function () {
            // penilai isi data
            Route::get('/input/sekkaprodi', [iktisarBulananKaprodiController::class, 'create'])->name('iktisar.bulanan.sekkaprodi.create');
            Route::post('/input/sekkaprodi/store', [iktisarBulananKaprodiController::class, 'store'])->name('iktisar.bulanan.sekkaprodi.store');
            // search dan pembaruan data
            Route::get('/sekkaprodi/searchData', [iktisarBulananKaprodiController::class, 'searchDataEdit'])->name('iktisar.bulanan.sekkaprodi.DataEdit');
            Route::get('/sekkaprodi/edit', [iktisarBulananKaprodiController::class, 'edit'])->name('iktisar.bulanan.sekkaprodi.edit');
            Route::put('/sekkaprodi/edit/{id}', [iktisarBulananKaprodiController::class, 'update'])->name('iktisar.bulanan.sekkaprodi.update');
            // Raport tendik dan search detail poin
            Route::get('/sekkaprodi/raport/{user_id}', [iktisarBulananKaprodiController::class, 'raportStaff'])->name('iktisar.bulanan.sekkaprodi.raport.sekkaprodi');
            Route::get('/sekkaprodi/detail/data', [iktisarBulananKaprodiController::class, 'searchDataPoin'])->name('iktisar.bulanan.sekkaprodi.detailData');
            Route::get('/sekkaprodi/detail/data/poin', [iktisarBulananKaprodiController::class, 'dataPoin'])->name('iktisar.bulanan.sekkaprodi.poin');
            // Detail Raport Tendik
            Route::get('/sekkaprodi/search-data/raport', [iktisarBulananKaprodiController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.sekkaprodi.data.raport');
            Route::get('/sekkaprodi/data/raport', [iktisarBulananKaprodiController::class, 'staffRaportIktisar'])->name('data.raport.sekkaprodi');
        });

        Route::middleware(['role:it|superuser|tendik|bau'])->group(function () {
            // penilai isi data
            Route::get('/input/bau', [iktisarBulananBauKaUnitController::class, 'create'])->name('iktisar.bulanan.bau.create');
            Route::post('/input/bau/store', [iktisarBulananBauKaUnitController::class, 'store'])->name('iktisar.bulanan.bau.store');
            // search dan pembaruan data
            Route::get('/bau/searchData', [iktisarBulananBauKaUnitController::class, 'searchDataEdit'])->name('iktisar.bulanan.bau.DataEdit');
            Route::get('/bau/edit', [iktisarBulananBauKaUnitController::class, 'edit'])->name('iktisar.bulanan.bau.edit');
            Route::put('/bau/edit/{id}', [iktisarBulananBauKaUnitController::class, 'update'])->name('iktisar.bulanan.bau.update');
            // Raport tendik dan search detail poin
            Route::get('/bau/raport/{user_id}', [iktisarBulananBauKaUnitController::class, 'raportStaff'])->name('iktisar.bulanan.bau.raport.bau');
            Route::get('/bau/detail/data', [iktisarBulananBauKaUnitController::class, 'searchDataPoin'])->name('iktisar.bulanan.bau.detailData');
            Route::get('/bau/detail/data/poin', [iktisarBulananBauKaUnitController::class, 'dataPoin'])->name('iktisar.bulanan.bau.poin');
            // Detail Raport Tendik
            Route::get('/bau/search-data/raport', [iktisarBulananBauKaUnitController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.bau.data.raport');
            Route::get('/bau/data/raport', [iktisarBulananBauKaUnitController::class, 'staffRaportIktisar'])->name('data.raport.bau');
        });

        Route::middleware(['role:it|superuser|tendik|hrd'])->group(function () {
            // penilai isi data
            Route::get('/input/hrd', [iktisarBulananHrdStaffController::class, 'create'])->name('iktisar.bulanan.hrd.create');
            Route::post('/input/hrd/store', [iktisarBulananHrdStaffController::class, 'store'])->name('iktisar.bulanan.hrd.store');
            // search dan pembaruan data
            Route::get('/hrd/searchData', [iktisarBulananHrdStaffController::class, 'searchDataEdit'])->name('iktisar.bulanan.hrd.DataEdit');
            Route::get('/hrd/edit', [iktisarBulananHrdStaffController::class, 'edit'])->name('iktisar.bulanan.hrd.edit');
            Route::put('/hrd/edit/{id}', [iktisarBulananHrdStaffController::class, 'update'])->name('iktisar.bulanan.hrd.update');
            // Raport tendik dan search detail poin
            Route::get('/hrd/raport/{user_id}', [iktisarBulananHrdStaffController::class, 'raportStaff'])->name('iktisar.bulanan.hrd.raport.hrd');
            Route::get('/hrd/detail/data', [iktisarBulananHrdStaffController::class, 'searchDataPoin'])->name('iktisar.bulanan.hrd.detailData');
            Route::get('/hrd/detail/data/poin', [iktisarBulananHrdStaffController::class, 'dataPoin'])->name('iktisar.bulanan.hrd.poin');
            // Detail Raport Tendik
            Route::get('/hrd/search-data/raport', [iktisarBulananHrdStaffController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.hrd.data.raport');
            Route::get('/hrd/data/raport/', [iktisarBulananHrdStaffController::class, 'staffRaportIktisar'])->name('data.raport.hrd');
        });

        Route::middleware(['role:it|superuser|tendik|dekan'])->group(function () {
            // penilai isi data
            Route::get('/input/dekan', [iktisarBulananDekanController::class, 'create'])->name('iktisar.bulanan.dekan.create');
            Route::post('/input/dekan/store', [iktisarBulananDekanController::class, 'store'])->name('iktisar.bulanan.dekan.store');
            // search dan pembaruan data
            Route::get('/dekan/searchData', [iktisarBulananDekanController::class, 'searchDataEdit'])->name('iktisar.bulanan.dekan.DataEdit');
            Route::get('/dekan/edit', [iktisarBulananDekanController::class, 'edit'])->name('iktisar.bulanan.dekan.edit');
            Route::put('/dekan/edit/{id}', [iktisarBulananDekanController::class, 'update'])->name('iktisar.bulanan.dekan.update');
            // Raport tendik dan search detail poin
            Route::get('/dekan/raport/{user_id}', [iktisarBulananDekanController::class, 'raportStaff'])->name('iktisar.bulanan.dekan.raport.dekan');
            Route::get('/dekan/detail/data', [iktisarBulananDekanController::class, 'searchDataPoin'])->name('iktisar.bulanan.dekan.detailData');
            Route::get('/dekan/detail/data/poin', [iktisarBulananDekanController::class, 'dataPoin'])->name('iktisar.bulanan.dekan.poin');
            // Detail Raport Tendik
            Route::get('/dekan/search-data/raport', [iktisarBulananDekanController::class, 'searchRaportIktisar'])->name('iktisar.bulanan.dekan.data.raport');
            Route::get('/dekan/data/raport/', [iktisarBulananDekanController::class, 'staffRaportIktisar'])->name('data.raport.dekan');
        });
    }
);

// -----------------------------Prefix All Point IKTISAR Tahunan----------------------------------------//
Route::group(
    ['prefix' => "/IKTISAR", 'middleware' => ['auth', 'verified', 'prevent-back-history']],
    function () {
        // -----------------------------Warek 2 Controller Form Penilaian Ka. Bau ----------------------------------------//
        Route::controller(warek2Controller::class)->middleware(['role:it|superuser|warek2|tendik'])->group(function () {
            Route::get('/Input', 'create')->name('warek2.ka.bau');
            Route::get('/ka-bau/result/poin/{userId}', 'detailPoin')->name('ka.bau.poin');
            Route::post('/request/store', 'store')->name('store.warek2.ka.bau');
            Route::get('/ka-bau/edit/', 'edit')->name('edit.warek2.ka.bau');
            Route::get('/ka-bau/search/result', 'dataSearch')->name('warek2.data.search');
            Route::put('/ka-bau/edit/update/{pointId}', 'update')->name('update.warek2.ka.bau');
            Route::get('/ka-bau/raport/cetakPdf/{user_id}', 'raportPdf')->name('cetak.raport.pdf');
            Route::get('/Raport/Ka-Bau/{user_id}', 'raport')->name('warek2.ka.bau.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT PEMASARAN ----------------------------------//
        Route::controller(KaUnitPemasaranController::class)->middleware(['role:it|superuser|warek1|upt|tendik'])->group(function () {
            Route::get('/Ka-Unit-Pemasaran/Input', 'create')->name('ka.upt.ka.unit.pemasaran');
            Route::get('/Ka-Unit-Pemasaran/result/poin/{userId}', 'detailPoin')->name('ka.upt.ka.unit.pemasaran.poin');
            Route::post('/Ka-Pemasaran/Request/Store', 'store')->name('store.ka.pemasaran');
            Route::get('/Ka-Pemasaran/edit/', 'edit')->name('edit.ka.pemasaran');
            Route::get('/Ka-Pemasaran/search/result', 'dataSearch')->name('pemasaran.data.search');
            Route::put('/Ka-Pemasaran/update/{pointId}', 'update')->name('update.ka.pemasaran');
            Route::get('/Raport/KaPemasaran/{user_id}', 'raport')->name('ka.pemasaran.raport');
            Route::get('/Ka-Pemasaran/searchRaportResult/', 'searchRaport')->name('searchRaport.pemasaran');
            Route::get('/Ka-Pemasaran/Result/', 'resultRaport')->name('resultRaport.pemasaran');
        });

        // ----------------------------- Controller Form Penilaian Staff Pemasaran ----------------------------------//
        Route::controller(StaffPemasaranController::class)->middleware(['role:it|superuser|warek1|upt|tendik'])->group(function () {
            Route::get('/StaffPemasaran/Input', 'create')->name('ka.StaffPemasaran');
            Route::get('/StaffPemasaran/result/poin/{userId}', 'detailPoin')->name('staff.pemasaran.poin');
            Route::post('/StaffPemasaran/Request/Store', 'store')->name('store.StaffPemasaran');
            Route::get('/StaffPemasaran/edit/', 'edit')->name('edit.StaffPemasaran');
            Route::get('/staffpemasaran/search/result', 'dataSearch')->name('staffpemasaran.data.search');
            Route::put('/StaffPemasaran/update/{pointId}', 'update')->name('update.StaffPemasaran');
            Route::get('/Raport/StaffPemasaran/{user_id}', 'raport')->name('StaffPemasaran.raport');
            Route::get('/StaffPemasaran/searchRaportResult/', 'searchRaport')->name('searchRaport.staffpemasaran');
            Route::get('/StaffPemasaran/Result/', 'resultRaport')->name('resultRaport.staffpemasaran');
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT PERPUSTAKAAN ----------------------------------//
        Route::controller(KoordinatorPerpustakaanController::class)->middleware(['role:it|superuser|upt|warek1|tendik'])->group(function () {
            Route::get('/Ka-Perpustakaan/Input', 'create')->name('ka.upt.ka.unit.perpustakaan');
            Route::get('/Ka-Perpustakaan/result/poin/{userId}', 'detailPoin')->name('ka.upt.ka.perpustakaan.poin');
            Route::post('/Ka-Perpustakaan/Request/Store', 'store')->name('store.ka.perpustakaan');
            Route::get('/Ka-Perpustakaan/edit/', 'edit')->name('edit.ka.perpustakaan');
            Route::get('/kaPerpustakaan/search/result', 'dataSearch')->name('kaPerpustakaan.data.search');
            Route::put('/Ka-Perpustakaan/update/{pointId}', 'update')->name('update.ka.perpustakaan');
            Route::get('/Raport/Ka-Perpustakaan/{user_id}', 'raport')->name('ka.perpustakaan.raport');
            Route::get('/Ka-Perpustakaan/searchRaportResult/', 'searchRaport')->name('searchRaport.ka.perpustakaan');
            Route::get('/Ka-Perpustakaan/Result/', 'resultRaport')->name('resultRaport.ka.perpustakaan');
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT LABORAN ----------------------------------//
        Route::controller(KaLaboranController::class)->middleware(['role:it|superuser|upt|warek1|tendik'])->group(function () {
            Route::get('/Ka-Laboran/Input', 'create')->name('ka.upt.ka.unit.laboran');
            Route::get('/Ka-Laboran/result/poin/{userId}', 'detailPoin')->name('ka.upt.ka.unit.laboran.poin');
            Route::post('/Ka-Laboran/Request/Store', 'store')->name('store.ka.laboran');
            Route::get('/Ka-Laboran/edit/', 'edit')->name('edit.ka.laboran');
            Route::get('/kaLaboran/search/result', 'dataSearch')->name('kaLaboran.data.search');
            Route::put('/Ka-Laboran/update/{pointId}', 'update')->name('update.ka.laboran');
            Route::get('/Raport/Ka-Laboran/{user_id}', 'raport')->name('ka.laboran.raport');
            Route::get('/Ka-Laboran/searchRaportResult/', 'searchRaport')->name('searchRaport.kaLaboran');
            Route::get('/Ka-Laboran/Result/', 'resultRaport')->name('resultRaport.kaLaboran');
        });

        // -----------------------------Ka. UPT Controller Form Penilaian Ka. UNIT IT ----------------------------------//
        Route::controller(KaUnitItController::class)->middleware(['role:it|superuser|upt|warek1|tendik'])->group(function () {
            Route::get('/Ka-Unit-IT/Input', 'create')->name('ka.upt.ka.unit.it');
            Route::get('/Ka-Unit-IT/result/poin/{userId}', 'detailPoin')->name('ka.upt.ka.unit.it.poin');
            Route::post('/Ka-Unit-IT/Request/Store', 'store')->name('store.ka.it');
            Route::get('/Ka-Unit-IT/edit/', 'edit')->name('edit.ka.it');
            Route::get('/kaIt/search/result', 'dataSearch')->name('kaIt.data.search');
            Route::put('/Ka-Unit-IT/update/{pointId}', 'update')->name('update.ka.it');
            Route::get('/Raport/Ka-Unit-IT/{user_id}', 'raport')->name('ka.it.raport');
            Route::get('/Ka-Unit-IT/searchRaportResult/', 'searchRaport')->name('searchRaport.ka.it');
            Route::get('/Ka-Unit-IT/Result/', 'resultRaport')->name('resultRaport.ka.it');
        });

        // ----------------------------- Controller Form Penilaian Ka. Sub. Biro Administrasi Akademik ----------------------------------//
        Route::controller(BaakController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/Baak/Input', 'create')->name('ka.baak');
            Route::get('/Ka-subBaak/result/poin/{userId}', 'detailPoin')->name('ka.sub.baak.poin');
            Route::post('/Baak/Request/Store', 'store')->name('store.ka.baak');
            Route::get('/Baak/edit/', 'edit')->name('edit.ka.baak');
            Route::get('/Baak/search/result', 'dataSearch')->name('baak.data.search');
            Route::put('/Baak/update/{pointId}', 'update')->name('update.ka.baak');
            Route::get('/Raport/Baak/{user_id}', 'raport')->name('ka.baak.raport');
            Route::get('/Baak/searchRaportResult/', 'searchRaport')->name('searchRaport.ka.baak');
            Route::get('/Baak/Result/', 'resultRaport')->name('resultRaport.ka.baak');
        });

        // -------------------------- Controller Form Penilaian Kemahasiswaan ------------------------------//
        Route::controller(KemahasiswaanController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/kemahasiswaan/Input', 'create')->name('kemahasiswaan');
            Route::get('/kemahasiswaan/result/poin/{userId}', 'detailPoin')->name('kemahasiswaan.poin');
            Route::post('/kemahasiswaan/Request/Store', 'store')->name('store.kemahasiswaan');
            Route::get('/kemahasiswaan/edit/', 'edit')->name('edit.kemahasiswaan');
            Route::get('/kemahasiswaan/search/result', 'dataSearch')->name('kemahasiswaan.data.search');
            Route::put('/kemahasiswaan/update/{pointId}', 'update')->name('update.kemahasiswaan');
            Route::get('/Raport/kemahasiswaan/{user_id}', 'raport')->name('kemahasiswaan.raport');
            Route::get('/kemahasiswaan/searchRaportResult/', 'searchRaport')->name('searchRaport.kemahasiswaan');
            Route::get('/kemahasiswaan/Result/', 'resultRaport')->name('resultRaport.kemahasiswaan');
        });

        // -------------------------- Controller Form Penilaian Staff Baak Fakultas Bisnis ------------------------------//
        Route::controller(BaakFkBisnisController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/baakFkBisnis/Input', 'create')->name('baakFkBisnis');
            Route::get('/baakFkBisnis/result/poin/{userId}', 'detailPoin')->name('baakFkBisnis.poin');
            Route::post('/baakFkBisnis/Request/Store', 'store')->name('store.baakFkBisnis');
            Route::get('/baakFkBisnis/edit/', 'edit')->name('edit.baakFkBisnis');
            Route::get('/baakFkBisnis/search/result', 'dataSearch')->name('baakFkBisnis.data.search');
            Route::put('/baakFkBisnis/update/{pointId}', 'update')->name('update.baakFkBisnis');
            Route::get('/Raport/baakFkBisnis/{user_id}', 'raport')->name('baakFkBisnis.raport');
            Route::get('/baakFkBisnis/searchRaportResult/', 'searchRaport')->name('searchRaport.baakFkBisnis');
            Route::get('/baakFkBisnis/Result/', 'resultRaport')->name('resultRaport.baakFkBisnis');
        });
        // -------------------------- Controller Form Penilaian Staff Baak Satu ------------------------------//
        Route::controller(StaffBaakSatuController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/staffbaaksatu/Input', 'create')->name('staffbaaksatu');
            Route::get('/staffbaaksatu/result/poin/{userId}', 'detailPoin')->name('staffbaaksatu.poin');
            Route::post('/staffbaaksatu/Request/Store', 'store')->name('store.staffbaaksatu');
            Route::get('/staffbaaksatu/edit/', 'edit')->name('edit.staffbaaksatu');
            Route::get('/staffbaaksatu/search/result', 'dataSearch')->name('staffbaaksatu.data.search');
            Route::put('/staffbaaksatu/update/{pointId}', 'update')->name('update.staffbaaksatu');
            Route::get('/Raport/staffbaaksatu/{user_id}', 'raport')->name('staffbaaksatu.raport');
            Route::get('/staffbaaksatu/searchRaportResult/', 'searchRaport')->name('searchRaport.staffbaaksatu');
            Route::get('/staffbaaksatu/Result/', 'resultRaport')->name('resultRaport.staffbaaksatu');
        });
        // -------------------------- Controller Form Penilaian Staff Baak Dua ------------------------------//
        Route::controller(StaffBaakDuaController::class)->middleware(['role:it|superuser|baak|warek1|tendik'])->group(function () {
            Route::get('/staffbaakdua/Input', 'create')->name('staffbaakdua');
            Route::get('/staffbaakdua/result/poin/{userId}', 'detailPoin')->name('staffbaakdua.poin');
            Route::post('/staffbaakdua/Request/Store', 'store')->name('store.staffbaakdua');
            Route::get('/staffbaakdua/edit/', 'edit')->name('edit.staffbaakdua');
            Route::get('/staffbaakdua/search/result', 'dataSearch')->name('staffbaakdua.data.search');
            Route::put('/staffbaakdua/update/{pointId}', 'update')->name('update.staffbaakdua');
            Route::get('/Raport/staffbaakdua/{user_id}', 'raport')->name('staffbaakdua.raport');
            Route::get('/staffbaakdua/searchRaportResult/', 'searchRaport')->name('searchRaport.staffbaakdua');
            Route::get('/staffbaakdua/Result/', 'resultRaport')->name('resultRaport.staffbaakdua');
        });

        // ----------------------------- Controller Form Penilaian Staff Keuangan ----------------------------------//
        Route::controller(StaffKeuanganController::class)->middleware(['role:it|superuser|keuangan|tendik'])->group(function () {
            Route::get('/StaffKeuangan/Input', 'create')->name('StaffKeuangan');
            Route::get('/StaffKeuangan/result/poin/{userId}', 'detailPoin')->name('StaffKeuangan.poin');
            Route::post('/StaffKeuangan/Request/Store', 'store')->name('store.StaffKeuangan');
            Route::get('/StaffKeuangan/edit/', 'edit')->name('edit.StaffKeuangan');
            Route::get('/staffkeuangan/search/result', 'dataSearch')->name('staffkeuangan.data.search');
            Route::put('/StaffKeuangan/update/{pointId}', 'update')->name('update.StaffKeuangan');
            Route::get('/Raport/StaffKeuangan/{user_id}', 'raport')->name('StaffKeuangan.raport')->middleware(['role:it|superuser|tendik']);
        });

        // ----------------------------- Controller Form Penilaian LPM ----------------------------------//
        Route::controller(LpmController::class)->middleware(['role:it|superuser|lpm|ypsdmit|tendik|rektor'])->group(function () {
            Route::get('/Lpm/Input', 'create')->name('Lpm');
            Route::get('/Lpm/result/poin/{userId}', 'detailPoin')->name('lpm.poin');
            Route::post('/Lpm/Request/Store', 'store')->name('store.Lpm');
            Route::get('/Lpm/edit/', 'edit')->name('edit.Lpm');
            Route::get('/Lpm/search/result', 'dataSearch')->name('Lpm.data.search');
            Route::put('/Lpm/update/{pointId}', 'update')->name('update.Lpm');
            Route::get('/Raport/Lpm/{user_id}', 'raport')->name('Lpm.raport');
            Route::get('/Lpm/searchRaportResult/', 'searchRaport')->name('searchRaport.Lpm');
            Route::get('/Lpm/Result/', 'resultRaport')->name('resultRaport.Lpm');
        });

        // ----------------------------- Controller Form Penilaian KasubRisbang ----------------------------------//
        Route::controller(KasubRisbangController::class)->middleware(['role:it|superuser|risbang|warek1|tendik'])->group(function () {
            Route::get('/KasubRisbang/Input', 'create')->name('KasubRisbang');
            Route::get('/KasubRisbang/result/poin/{userId}', 'detailPoin')->name('KasubRisbang.poin');
            Route::post('/KasubRisbang/Request/Store', 'store')->name('store.KasubRisbang');
            Route::get('/KasubRisbang/edit/', 'edit')->name('edit.KasubRisbang');
            Route::get('/kasubrisbang/search/result', 'dataSearch')->name('kasubrisbang.data.search');
            Route::put('/KasubRisbang/update/{pointId}', 'update')->name('update.KasubRisbang');
            Route::get('/Raport/KasubRisbang/{user_id}', 'raport')->name('KasubRisbang.raport');
            Route::get('/KasubRisbang/searchRaportResult/', 'searchRaport')->name('searchRaport.KasubRisbang');
            Route::get('/KasubRisbang/Result/', 'resultRaport')->name('resultRaport.KasubRisbang');
        });

        // ----------------------------- Controller Form Penilaian Sek Ka. Prodi ----------------------------------//
        Route::controller(SekKaprodiController::class)->middleware(['role:it|superuser|gizi|perawat|bidan|manajemen|akuntansi|warek1|tendik'])->group(function () {
            Route::get('/sekKaprodi/Input', 'create')->name('sekKaprodi');
            Route::get('/sekKaprodi/result/poin/{userId}', 'detailPoin')->name('sekKaprodi.poin');
            Route::post('/sekKaprodi/Request/Store', 'store')->name('store.sekKaprodi');
            Route::get('/sekKaprodi/edit/', 'edit')->name('edit.sekKaprodi');
            Route::get('/sekkaprodi/search/result', 'dataSearch')->name('sekkaprodi.data.search');
            Route::put('/sekKaprodi/update/{pointId}', 'update')->name('update.sekKaprodi');
            Route::get('/Raport/sekKaprodi/{user_id}', 'raport')->name('sekKaprodi.raport');
            Route::get('/sekKaprodi/searchRaportResult/', 'searchRaport')->name('searchRaport.sekKaprodi');
            Route::get('/sekKaprodi/Result/', 'resultRaport')->name('resultRaport.sekKaprodi');
        });

        // ----------------------------- Controller Form Penilaian Sek Ka. Sub. Biro Kepegawaian ----------------------------------//
        Route::controller(KasubBiroKepegawaianController::class)->middleware(['role:it|superuser|bau|tendik|rektor|warek2'])->group(function () {
            Route::get('/kasubBiroKepegawaian/Input', 'create')->name('kasubBiroKepegawaian');
            Route::get('/kasubBiroKepegawaian/result/poin/{userId}', 'detailPoin')->name('kasubBiroKepegawaian.poin');
            Route::post('/kasubBiroKepegawaian/Request/Store', 'store')->name('store.kasubBiroKepegawaian');
            Route::get('/kasubBiroKepegawaian/edit/', 'edit')->name('edit.kasubBiroKepegawaian');
            Route::get('/kasubBiroKepegawaian/search/result', 'dataSearch')->name('kasubBiroKepegawaian.data.search');
            Route::put('/kasubBiroKepegawaian/update/{pointId}', 'update')->name('update.kasubBiroKepegawaian');
            Route::get('/Raport/kasubBiroKepegawaian/{user_id}', 'raport')->name('kasubBiroKepegawaian.raport');
            Route::get('/kasubBiroKepegawaian/searchRaportResult/', 'searchRaport')->name('searchRaport.kasubBiroKepegawaian');
            Route::get('/kasubBiroKepegawaian/Result/', 'resultRaport')->name('resultRaport.kasubBiroKepegawaian');
        });

        // -------------------------- Controller Form Penilaian Sek Ka. Sub. Biro Keuangan dan Akuntansi ------------------------------//
        Route::controller(KasubBiroKeuanganController::class)->middleware(['role:it|superuser|bau|tendik|rektor|warek2'])->group(function () {
            Route::get('/KasubBiroKeuangan/Input', 'create')->name('KasubBiroKeuangan');
            Route::get('/KasubBiroKeuangan/result/poin/{userId}', 'detailPoin')->name('KasubBiroKeuangan.poin');
            Route::post('/KasubBiroKeuangan/Request/Store', 'store')->name('store.KasubBiroKeuangan');
            Route::get('/KasubBiroKeuangan/edit/', 'edit')->name('edit.KasubBiroKeuangan');
            Route::get('/KasubBiroKeuangan/search/result', 'dataSearch')->name('KasubBiroKeuangan.data.search');
            Route::put('/KasubBiroKeuangan/update/{pointId}', 'update')->name('update.KasubBiroKeuangan');
            Route::get('/Raport/KasubBiroKeuangan/{user_id}', 'raport')->name('KasubBiroKeuangan.raport');
            Route::get('/KasubBiroKeuangan/searchRaportResult/', 'searchRaport')->name('searchRaport.KasubBiroKeuangan');
            Route::get('/KasubBiroKeuangan/Result/', 'resultRaport')->name('resultRaport.KasubBiroKeuangan');
        });

        // -------------------------- Form Penilaian Rektor & ka. Sub. Rektor ------------------------------//

        // -------------------------- Controller Form Penilaian Koor Kemahasiswaan dan Alumni ------------------------------//
        Route::controller(KoorKemahasiswaanDanAlumniController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/koorkemahasiswaanDanAlumni/Input', 'create')->name('koorkemahasiswaanDanAlumni');
            Route::get('/koorkemahasiswaanDanAlumni/result/poin/{userId}', 'detailPoin')->name('koorkemahasiswaanDanAlumni.poin');
            Route::post('/koorkemahasiswaanDanAlumni/Request/Store', 'store')->name('store.koorkemahasiswaanDanAlumni');
            Route::get('/koorkemahasiswaanDanAlumni/edit/', 'edit')->name('edit.koorkemahasiswaanDanAlumni');
            Route::get('/koorkemahasiswaanDanAlumni/search/result', 'dataSearch')->name('koorkemahasiswaanDanAlumni.data.search');
            Route::put('/koorkemahasiswaanDanAlumni/update/{pointId}', 'update')->name('update.koorkemahasiswaanDanAlumni');
            Route::get('/Raport/koorkemahasiswaanDanAlumni/{user_id}', 'raport')->name('koorkemahasiswaanDanAlumni.raport');
            Route::get('/koorkemahasiswaanDanAlumni/searchRaportResult/', 'searchRaport')->name('searchRaport.koorkemahasiswaanDanAlumni');
            Route::get('/koorkemahasiswaanDanAlumni/Result/', 'resultRaport')->name('resultRaport.koorkemahasiswaanDanAlumni');
        });

        // -------------------------- Controller Form Penilaian Ka Upt ------------------------------//
        Route::controller(KaUptController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/warek-satu/Ka-Upt/Input', 'create')->name('WarekSatu.Ka.Upt');
            Route::get('/warek-satu/Ka-Upt/result/poin/{userId}', 'detailPoin')->name('WarekSatu.Ka.Upt.poin');
            Route::post('/warek-satu/Ka-Upt/Request/Store', 'store')->name('store.WarekSatu.Ka.Upt');
            Route::get('/warek-satu/Ka-Upt/edit/', 'edit')->name('edit.WarekSatu.Ka.Upt');
            Route::get('/warek-satu/KaUpt/search/result', 'dataSearch')->name('warekSatu.data.search');
            Route::put('/warek-satu/Ka-Upt/update/{pointId}', 'update')->name('update.WarekSatu.Ka.Upt');
            Route::get('/Raport/warek-satu/Ka-Upt/{user_id}', 'raport')->name('WarekSatu.Ka.Upt.raport');
            Route::get('/warek-satu/Ka-Upt/searchRaportResult/', 'searchRaport')->name('searchRaport.WarekSatu.Ka.Upt');
            Route::get('/warek-satu/Ka-Upt/Result/', 'resultRaport')->name('resultRaport.WarekSatu.Ka.Upt');
        });

        // -------------------------- Controller Form Penilaian Ka Risbang ------------------------------//
        Route::controller(KaRisbangController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/warek-satu/Ka-Risbang/Input', 'create')->name('WarekSatu.Ka.Risbang');
            Route::get('/warek-satu/Ka-Risbang/result/poin/{userId}', 'detailPoin')->name('WarekSatu.Ka.Risbang.poin');
            Route::post('/warek-satu/Ka-Risbang/Request/Store', 'store')->name('store.WarekSatu.Ka.Risbang');
            Route::get('/warek-satu/Ka-Risbang/edit/', 'edit')->name('edit.WarekSatu.Ka.Risbang');
            Route::get('/warek-satu/KaRisbang/search/result', 'dataSearch')->name('warekSatu.kaRisbang.data.search');
            Route::put('/warek-satu/Ka-Risbang/update/{pointId}', 'update')->name('update.WarekSatu.Ka.Risbang');
            Route::get('/Raport/warek-satu/Ka-Risbang/{user_id}', 'raport')->name('WarekSatu.Ka.Risbang.raport');
            Route::get('/warek-satu/Ka-Risbang/searchRaportResult/', 'searchRaport')->name('searchRaport.WarekSatu.WarekSatu.Ka.Risbang');
            Route::get('/warek-satu/Ka-Risbang/Result/', 'resultRaport')->name('resultRaport.WarekSatu.WarekSatu.Ka.Risbang');
        });

        // -------------------------- Controller Form Penilaian Ka Baak ------------------------------//
        Route::controller(KaBaakController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/warek-satu/Ka-Baak/Input', 'create')->name('WarekSatu.Ka.Baak');
            Route::get('/warek-satu/Ka-Baak/result/poin/{userId}', 'detailPoin')->name('WarekSatu.Ka.Baak.poin');
            Route::post('/warek-satu/Ka-Baak/Request/Store', 'store')->name('store.WarekSatu.Ka.Baak');
            Route::get('/warek-satu/Ka-Baak/edit/', 'edit')->name('edit.WarekSatu.Ka.Baak');
            Route::get('/warek1/KaBaak/search/result', 'dataSearch')->name('WarekSatu.baak.data.search');
            Route::put('/warek-satu/Ka-Baak/update/{pointId}', 'update')->name('update.WarekSatu.Ka.Baak');
            Route::get('/Raport/warek-satu/Ka-Baak/{user_id}', 'raport')->name('WarekSatu.Ka.Baak.raport');
            Route::get('/warek-satu/Ka-Baak/searchRaportResult/', 'searchRaport')->name('searchRaport.WarekSatu.Ka.Baak');
            Route::get('/warek-satu/Ka-Baak/Result/', 'resultRaport')->name('resultRaport.WarekSatu.Ka.Baak');
        });

        // -------------------------- Controller Form Penilaian Ka Prodi ------------------------------//
        Route::controller(KaProdiController::class)->middleware(['role:it|superuser|warek1|tendik|rektor'])->group(function () {
            Route::get('/warek-satu/Ka-Prodi/Input', 'create')->name('WarekSatu.Ka.Prodi');
            Route::get('/warek-satu/Ka-Prodi/result/poin/{userId}', 'detailPoin')->name('WarekSatu.Ka.Prodi.poin');
            Route::post('/warek-satu/Ka-Prodi/Request/Store', 'store')->name('store.WarekSatu.Ka.Prodi');
            Route::get('/warek-satu/Ka-Prodi/edit/', 'edit')->name('edit.WarekSatu.Ka.Prodi');
            Route::get('/warek-satu/search/result', 'dataSearch')->name('WarekSatu.KaProdi.data.search');
            Route::put('/warek-satu/Ka-Prodi/update/{pointId}', 'update')->name('update.WarekSatu.Ka.Prodi');
            Route::get('/Raport/warek-satu/Ka-Prodi/{user_id}', 'raport')->name('WarekSatu.Ka.Prodi.raport');
            Route::get('/warek-satu/Ka-Prodi/searchRaportResult/', 'searchRaport')->name('searchRaport.WarekSatu.Ka.Prodi');
            Route::get('/warek-satu/Ka-Prodi/Result/', 'resultRaport')->name('resultRaport.WarekSatu.Ka.Prodi');
        });


        // -------------------------- ka. Sub. Yayasan dan Form Penilaian Rektor ------------------------------//

        // -------------------------- Controller Form Penilaian Warek Satu ------------------------------//
        Route::controller(warekSatuController::class)->middleware(['role:it|superuser|rektor|ypsdmit|tendik'])->group(function () {
            Route::get('/warekSatu/Input', 'create')->name('warekSatu');
            Route::get('/warekSatu/result/poin/{userId}', 'detailPoin')->name('warekSatu.poin');
            Route::post('/warekSatu/Request/Store', 'store')->name('store.warekSatu');
            Route::get('/warekSatu/edit/', 'edit')->name('edit.warekSatu');
            Route::get('/rektor/warekSatu/search/result', 'dataSearch')->name('rektor.warekSatu.data.search');
            Route::put('/warekSatu/update/{pointId}', 'update')->name('update.warekSatu');
            Route::get('/Raport/warekSatu/{user_id}', 'raport')->name('warekSatu.raport');
            Route::get('/warekSatu/searchRaportResult/', 'searchRaport')->name('searchRaport.rektor.warekSatu');
            Route::get('/warekSatu/Result/', 'resultRaport')->name('resultRaport.rektor.warekSatu');
        });

        // -------------------------- Controller Form Penilaian Warek Dua ------------------------------//
        Route::controller(warekDuaController::class)->middleware(['role:it|superuser|ypsdmit|rektor|tendik'])->group(function () {
            Route::get('/WarekDua/Input', 'create')->name('WarekDua');
            Route::get('/WarekDua/result/poin/{userId}', 'detailPoin')->name('WarekDua.poin');
            Route::post('/WarekDua/Request/Store', 'store')->name('store.WarekDua');
            Route::get('/WarekDua/edit/', 'edit')->name('edit.WarekDua');
            Route::get('/warekDua/search/result', 'dataSearch')->name('warekDua.data.search');
            Route::put('/WarekDua/update/{pointId}', 'update')->name('update.WarekDua');
            Route::get('/Raport/WarekDua/{user_id}', 'raport')->name('WarekDua.raport');
            Route::get('/WarekDua/searchRaportResult/', 'searchRaport')->name('searchRaport.warekDua');
            Route::get('/WarekDua/Result/', 'resultRaport')->name('resultRaport.warekDua');
        });

        // -------------------------- Controller Form Penilaian Staff Sus Bidang Kerjasama ------------------------------//
        Route::controller(StaffSusBidKerjasamaController::class)->middleware(['role:it|superuser|rektor|ypsdmit|tendik'])->group(function () {
            Route::get('/StaffSusBidKerjasama/Input', 'create')->name('StaffSusBidKerjasama');
            Route::get('/StaffSusBidKerjasama/result/poin/{userId}', 'detailPoin')->name('StaffSusBidKerjasama.poin');
            Route::post('/StaffSusBidKerjasama/Request/Store', 'store')->name('store.StaffSusBidKerjasama');
            Route::get('/StaffSusBidKerjasama/edit/', 'edit')->name('edit.StaffSusBidKerjasama');
            Route::get('/StaffSusBidKerjasama/search/result', 'dataSearch')->name('StaffSusBidKerjasama.data.search');
            Route::put('/StaffSusBidKerjasama/update/{pointId}', 'update')->name('update.StaffSusBidKerjasama');
            Route::get('/Raport/StaffSusBidKerjasama/{user_id}', 'raport')->name('StaffSusBidKerjasama.raport');
            Route::get('/StaffSusBidKerjasama/searchRaportResult/', 'searchRaport')->name('searchRaport.StaffSusBidKerjasama');
            Route::get('/StaffSusBidKerjasama/Result/', 'resultRaport')->name('resultRaport.StaffSusBidKerjasama');
        });

        // -------------------------- Controller Form Penilaian Ka. LPM ------------------------------//
        Route::controller(KaLpmController::class)->middleware(['role:it|superuser|rektor|tendik|ypsdmit'])->group(function () {
            Route::get('/KaLpm/Input', 'create')->name('KaLpm');
            Route::get('/KaLpm/result/poin/{userId}', 'detailPoin')->name('KaLpmn.poin');
            Route::post('/KaLpm/Request/Store', 'store')->name('store.KaLpm');
            Route::get('/KaLpm/edit/', 'edit')->name('edit.KaLpm');
            Route::get('/KaLpm/search/result', 'dataSearch')->name('KaLpm.data.search');
            Route::put('/KaLpm/update/{pointId}', 'update')->name('update.KaLpm');
            Route::get('/Raport/KaLpm/{user_id}', 'raport')->name('KaLpm.raport');
            Route::get('/KaLpm/searchRaportResult/', 'searchRaport')->name('searchRaport.KaLpm');
            Route::get('/KaLpm/Result/', 'resultRaport')->name('resultRaport.KaLpm');
        });
        // -------------------------- End ka. Sub. Yayasan dan Form Penilaian Rektor ------------------------------//

        // -------------------------- Controller Form Penilaian Staff Umum Dan Kepegawaian ------------------------------//
        Route::controller(StaffUmumController::class)->middleware(['role:it|superuser|hrd|tendik'])->group(function () {
            Route::get('/staffumum/Input', 'create')->name('staffumum');
            Route::get('/staffumum/result/poin/{userId}', 'detailPoin')->name('staffumum.poin');
            Route::post('/staffumum/Request/Store', 'store')->name('store.staffumum');
            Route::get('/staffumum/edit/', 'edit')->name('edit.staffumum');
            Route::get('/staffumum/search/result', 'dataSearch')->name('staffumum.data.search');
            Route::put('/staffumum/update/{pointId}', 'update')->name('update.staffumum');
            Route::get('/Raport/staffumum/{user_id}', 'raport')->name('staffumum.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Staff Kebersihan ------------------------------//
        Route::controller(StaffKebersihanController::class)->middleware(['role:it|superuser|hrd|tendik'])->group(function () {
            Route::get('/staffkebersihan/Input', 'create')->name('staffkebersihan');
            Route::get('/staffkebersihan/result/poin/{userId}', 'detailPoin')->name('staffkebersihan.poin');
            Route::post('/staffkebersihan/Request/Store', 'store')->name('store.staffkebersihan');
            Route::get('/staffkebersihan/edit/', 'edit')->name('edit.staffkebersihan');
            Route::get('/staffkebersihan/search/result', 'dataSearch')->name('staffkebersihan.data.search');
            Route::put('/staffkebersihan/update/{pointId}', 'update')->name('update.staffkebersihan');
            Route::get('/Raport/staffkebersihan/{user_id}', 'raport')->name('staffkebersihan.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Staff Security ------------------------------//
        Route::controller(StaffSecurityController::class)->middleware(['role:it|superuser|hrd|tendik'])->group(function () {
            Route::get('/staffsecurity/Input', 'create')->name('staffsecurity');
            Route::get('/staffsecurity/result/poin/{userId}', 'detailPoin')->name('staffsecurity.poin');
            Route::post('/staffsecurity/Request/Store', 'store')->name('store.staffsecurity');
            Route::get('/staffsecurity/edit/', 'edit')->name('edit.staffsecurity');
            Route::get('/staffsecurity/search/result', 'dataSearch')->name('staffsecurity.data.search');
            Route::put('/staffsecurity/update/{pointId}', 'update')->name('update.staffsecurity');
            Route::get('/Raport/staffsecurity/{user_id}', 'raport')->name('staffsecurity.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Staff Sarpras ------------------------------//
        Route::controller(StaffSarprasController::class)->middleware(['role:it|superuser|hrd|tendik'])->group(function () {
            Route::get('/staffsarpras/Input', 'create')->name('staffsarpras');
            Route::get('/staffsarpras/result/poin/{userId}', 'detailPoin')->name('staffsarpras.poin');
            Route::post('/staffsarpras/Request/Store', 'store')->name('store.staffsarpras');
            Route::get('/staffsarpras/edit/', 'edit')->name('edit.staffsarpras');
            Route::get('/staffsarpras/search/result', 'dataSearch')->name('staffsarpras.data.search');
            Route::put('/staffsarpras/update/{pointId}', 'update')->name('update.staffsarpras');
            Route::get('/Raport/staffsarpras/{user_id}', 'raport')->name('staffsarpras.raport')->middleware(['role:it|superuser|tendik']);
        });

        // -------------------------- Controller Form Penilaian Rektor ------------------------------//
        Route::controller(RektorController::class)->middleware(['role:it|superuser|ypsdmit|warek1|warek2|tendik'])->group(function () {
            Route::get('/Rektor/Input', 'create')->name('rektor');
            Route::get('/Rektor/result/poin/{userId}', 'detailPoin')->name('rektor.poin');
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
