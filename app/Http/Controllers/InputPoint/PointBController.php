<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PointB;
use App\Models\Setting\Period;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PointBController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        // 1. Cek periode aktif
        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->first();

        if (!$activePeriod) {
            return view('menu.disabled');
        }

        // 2. Ambil semua jabatan fungsional user dari pivot (many-to-many)
        $jabfungList = $user->jabfung()->pluck('name')->toArray();

        // 3. Daftar jabfung yang masuk kategori dosen
        $jabatanDosen = ['Non-JAD', 'Asisten Ahli', 'Lektor', 'Lektor Kepala', 'Guru Besar'];

        // 4. Cek apakah salah satu jabfung user adalah dosen
        $selectedJabfung = null;
        foreach ($jabfungList as $jf) {
            if (in_array($jf, $jabatanDosen)) {   // tanpa strtolower, harus match persis
                $selectedJabfung = $jf;
                break;
            }
        }

        // 5. Jika user termasuk kategori dosen berdasarkan jabfung
        if ($selectedJabfung) {

            // ubah ke format nama file view
            $viewName = str_replace(' ', '-', $selectedJabfung);
            // ex: Lektor Kepala → Lektor-Kepala.blade.php

            // 6. Cek apakah sudah pernah input Point B
            $existingData = PointB::where('new_user_id', $user->id)
                ->where('period_id', $activePeriod->id)
                ->first();

            if ($existingData) {
                return redirect()->route('edit.Point-B', ['PointId' => $user->id]);
            }

            // 7. Tentukan view path
            $viewPath = "input-point.point-b.dosen.$viewName";

            // 8. Safe fallback: jika view tidak ditemukan, arahkan ke default dosen
            if (!view()->exists($viewPath)) {
                $viewPath = "input-point.Point-B";
            }

            return view($viewPath, [
                'user' => $user,
                'jabfungList' => $jabfungList,
                'editMode' => false,
            ]);
        }

        // 9. Jika bukan dosen (Tendik / Staff)
        $existingData = PointB::where('new_user_id', $user->id)
            ->where('period_id', $activePeriod->id)
            ->first();

        if ($existingData) {
            return redirect()->route('edit.Point-B', ['PointId' => $user->id]);
        }

        return view('input-point.point-B', [
            'user' => $user,
            'jabfungList' => $jabfungList,
            'editMode' => false,
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fileB1' => 'mimes:pdf',
            'fileB2' => 'mimes:pdf',
            'fileB3' => 'mimes:pdf',
            'fileB4' => 'mimes:pdf',
            'fileB5' => 'mimes:pdf',
            'fileB6' => 'mimes:pdf',
            'fileB7' => 'mimes:pdf',
            'fileB8' => 'mimes:pdf',
            'fileB9' => 'mimes:pdf',
            'fileB10' => 'mimes:pdf',
            'fileB11' => 'mimes:pdf',
            'fileB12' => 'mimes:pdf',
            'fileB13' => 'mimes:pdf',
            'fileB14' => 'mimes:pdf',
            'fileB15' => 'mimes:pdf',
            'fileB16' => 'mimes:pdf',
            'fileB17' => 'mimes:pdf',
            'fileB18' => 'mimes:pdf',
        ]);

        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            throw new \Exception('Periode aktif tidak ditemukan.');
        }


        DB::beginTransaction();
        try {
            $pointB = new PointB();
            $pointB->new_user_id = Auth()->id();
            $pointB->period_id = $activePeriod->id;

            $pointB->B1 = $request->get('B1');
            $pointB->scorB1 = $request->get('scorB1');
            $pointB->scorMaxB1 = $request->get('scorMaxB1');
            $pointB->scorSubItemB1 = $request->get('scorSubItemB1');

            if ($request->hasFile('fileB1')) {
                $fileName = $request->file('fileB1')->store('uploads/Point-b', 'public');
                $pointB->fileB1 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB1_2_in = $request->get('JumlahYangDihasilkanB1_2');
            $pointB->SkorTambahanB1_2 = $request->get('SkorTambahanB1_2');
            $pointB->JumlahYangDihasilkanB1_3_in = $request->get('JumlahYangDihasilkanB1_3');
            $pointB->SkorTambahanB1_3 = $request->get('SkorTambahanB1_3');
            $pointB->JumlahYangDihasilkanB1_4_in = $request->get('JumlahYangDihasilkanB1_4');
            $pointB->SkorTambahanB1_4 = $request->get('SkorTambahanB1_4');
            $pointB->JumlahYangDihasilkanB1_5_in = $request->get('JumlahYangDihasilkanB1_5');
            $pointB->SkorTambahanB1_5 = $request->get('SkorTambahanB1_5');
            $pointB->SkorTambahanJumlahB1 = $request->get('SkorTambahanJumlahB1');
            $pointB->JumlahSkorYangDiHasilkanB1 = $request->get('JumlahSkorYangDiHasilkanB1');
            $pointB->SkorTambahanJumlahSkorB1 = $request->get('SkorTambahanJumlahSkorB1');
            $pointB->SkorTambahanJumlahBobotSubItemB1 = $request->get('SkorTambahanJumlahBobotSubItemB1');

            $pointB->B2 = $request->get('B2');
            $pointB->scorB2 = $request->get('scorB2');
            $pointB->scorMaxB2 = $request->get('scorMaxB2');
            $pointB->scorSubItemB2 = $request->get('scorSubItemB2');

            if ($request->hasFile('fileB2')) {
                $fileName = $request->file('fileB2')->store('uploads/Point-b', 'public');
                $pointB->fileB2 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB2_4_in = $request->get('JumlahYangDihasilkanB2_4');
            $pointB->SkorTambahanB2_4 = $request->get('SkorTambahanB2_4');
            $pointB->JumlahYangDihasilkanB2_5_in = $request->get('JumlahYangDihasilkanB2_5');
            $pointB->SkorTambahanB2_5 = $request->get('SkorTambahanB2_5');
            $pointB->SkorTambahanJumlahB2 = $request->get('SkorTambahanJumlahB2');
            $pointB->JumlahSkorYangDiHasilkanB2 = $request->get('JumlahSkorYangDiHasilkanB2');
            $pointB->SkorTambahanJumlahSkorB2 = $request->get('SkorTambahanJumlahSkorB2');
            $pointB->SkorTambahanJumlahBobotSubItemB2 = $request->get('SkorTambahanJumlahBobotSubItemB2');

            $pointB->B3 = $request->get('B3');
            $pointB->scorB3 = $request->get('scorB3');
            $pointB->scorMaxB3 = $request->get('scorMaxB3');
            $pointB->scorSubItemB3 = $request->get('scorSubItemB3');

            if ($request->hasFile('fileB3')) {
                $fileName = $request->file('fileB3')->store('uploads/Point-b', 'public');
                $pointB->fileB3 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB3_4_in = $request->get('JumlahYangDihasilkanB3_4');
            $pointB->SkorTambahanB3_4 = $request->get('SkorTambahanB3_4');
            $pointB->JumlahYangDihasilkanB3_5_in = $request->get('JumlahYangDihasilkanB3_5');
            $pointB->SkorTambahanB3_5 = $request->get('SkorTambahanB3_5');
            $pointB->SkorTambahanJumlahB3 = $request->get('SkorTambahanJumlahB3');
            $pointB->JumlahSkorYangDiHasilkanB3 = $request->get('JumlahSkorYangDiHasilkanB3');
            $pointB->SkorTambahanJumlahSkorB3 = $request->get('SkorTambahanJumlahSkorB3');
            $pointB->SkorTambahanJumlahBobotSubItemB3 = $request->get('SkorTambahanJumlahBobotSubItemB3');

            $pointB->B4 = $request->get('B4');
            $pointB->scorB4 = $request->get('scorB4');
            $pointB->scorMaxB4 = $request->get('scorMaxB4');
            $pointB->scorSubItemB4 = $request->get('scorSubItemB4');

            if ($request->hasFile('fileB4')) {
                $fileName = $request->file('fileB4')->store('uploads/Point-b', 'public');
                $pointB->fileB4 = $fileName;
            }

            $pointB->B5 = $request->get('B5');
            $pointB->scorB5 = $request->get('scorB5');
            $pointB->scorMaxB5 = $request->get('scorMaxB5');
            $pointB->scorSubItemB5 = $request->get('scorSubItemB5');

            if ($request->hasFile('fileB5')) {
                $fileName = $request->file('fileB5')->store('uploads/Point-b', 'public');
                $pointB->fileB5 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB5_5_in = $request->get('JumlahYangDihasilkanB5_5');
            $pointB->SkorTambahanB5_5 = $request->get('SkorTambahanB5_5');
            $pointB->SkorTambahanJumlahB5 = $request->get('SkorTambahanJumlahB5');
            $pointB->JumlahSkorYangDiHasilkanB5 = $request->get('JumlahSkorYangDiHasilkanB5');
            $pointB->SkorTambahanJumlahSkorB5 = $request->get('SkorTambahanJumlahSkorB5');
            $pointB->SkorTambahanJumlahBobotSubItemB5 = $request->get('SkorTambahanJumlahBobotSubItemB5');

            $pointB->B6 = $request->get('B6');
            $pointB->scorB6 = $request->get('scorB6');
            $pointB->scorMaxB6 = $request->get('scorMaxB6');
            $pointB->scorSubItemB6 = $request->get('scorSubItemB6');

            if ($request->hasFile('fileB6')) {
                $fileName = $request->file('fileB6')->store('uploads/Point-b', 'public');
                $pointB->fileB6 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB6_5_in = $request->get('JumlahYangDihasilkanB6_5');
            $pointB->SkorTambahanB6_5 = $request->get('SkorTambahanB6_5');
            $pointB->SkorTambahanJumlahB6 = $request->get('SkorTambahanJumlahB6');
            $pointB->JumlahSkorYangDiHasilkanB6 = $request->get('JumlahSkorYangDiHasilkanB6');
            $pointB->SkorTambahanJumlahSkorB6 = $request->get('SkorTambahanJumlahSkorB6');
            $pointB->SkorTambahanJumlahBobotSubItemB6 = $request->get('SkorTambahanJumlahBobotSubItemB6');

            $pointB->B7 = $request->get('B7');
            $pointB->scorB7 = $request->get('scorB7');
            $pointB->scorMaxB7 = $request->get('scorMaxB7');
            $pointB->scorSubItemB7 = $request->get('scorSubItemB7');

            if ($request->hasFile('fileB7')) {
                $fileName = $request->file('fileB7')->store('uploads/Point-b', 'public');
                $pointB->fileB7 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB7_5_in = $request->get('JumlahYangDihasilkanB7_5');
            $pointB->SkorTambahanB7_5 = $request->get('SkorTambahanB7_5');
            $pointB->SkorTambahanJumlahB7 = $request->get('SkorTambahanJumlahB7');
            $pointB->JumlahSkorYangDiHasilkanB7 = $request->get('JumlahSkorYangDiHasilkanB7');
            $pointB->SkorTambahanJumlahSkorB7 = $request->get('SkorTambahanJumlahSkorB7');
            $pointB->SkorTambahanJumlahBobotSubItemB7 = $request->get('SkorTambahanJumlahBobotSubItemB7');

            $pointB->B8 = $request->get('B8');
            $pointB->scorB8 = $request->get('scorB8');
            $pointB->scorMaxB8 = $request->get('scorMaxB8');
            $pointB->scorSubItemB8 = $request->get('scorSubItemB8');

            if ($request->hasFile('fileB8')) {
                $fileName = $request->file('fileB8')->store('uploads/Point-b', 'public');
                $pointB->fileB8 = $fileName;
            }

            $pointB->B9 = $request->get('B9');
            $pointB->scorB9 = $request->get('scorB9');
            $pointB->scorMaxB9 = $request->get('scorMaxB9');
            $pointB->scorSubItemB9 = $request->get('scorSubItemB9');

            if ($request->hasFile('fileB9')) {
                $fileName = $request->file('fileB9')->store('uploads/Point-b', 'public');
                $pointB->fileB9 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB9_3_in = $request->get('JumlahYangDihasilkanB9_3');
            $pointB->SkorTambahanB9_3 = $request->get('SkorTambahanB9_3');
            $pointB->JumlahYangDihasilkanB9_5_in = $request->get('JumlahYangDihasilkanB9_5');
            $pointB->SkorTambahanB9_5 = $request->get('SkorTambahanB9_5');
            $pointB->SkorTambahanJumlahB9 = $request->get('SkorTambahanJumlahB9');
            $pointB->JumlahSkorYangDiHasilkanB9 = $request->get('JumlahSkorYangDiHasilkanB9');
            $pointB->SkorTambahanJumlahSkorB9 = $request->get('SkorTambahanJumlahSkorB9');
            $pointB->SkorTambahanJumlahBobotSubItemB9 = $request->get('SkorTambahanJumlahBobotSubItemB9');

            $pointB->B10 = $request->get('B10');
            $pointB->scorB10 = $request->get('scorB10');
            $pointB->scorMaxB10 = $request->get('scorMaxB10');
            $pointB->scorSubItemB10 = $request->get('scorSubItemB10');

            if ($request->hasFile('fileB10')) {
                $fileName = $request->file('fileB10')->store('uploads/Point-b', 'public');
                $pointB->fileB10 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB10_3_in = $request->get('JumlahYangDihasilkanB10_3');
            $pointB->SkorTambahanB10_3 = $request->get('SkorTambahanB10_3');
            $pointB->JumlahYangDihasilkanB10_5_in = $request->get('JumlahYangDihasilkanB10_5');
            $pointB->SkorTambahanB10_5 = $request->get('SkorTambahanB10_5');
            $pointB->SkorTambahanJumlahB10 = $request->get('SkorTambahanJumlahB10');
            $pointB->JumlahSkorYangDiHasilkanB10 = $request->get('JumlahSkorYangDiHasilkanB10');
            $pointB->SkorTambahanJumlahSkorB10 = $request->get('SkorTambahanJumlahSkorB10');
            $pointB->SkorTambahanJumlahBobotSubItemB10 = $request->get('SkorTambahanJumlahBobotSubItemB10');

            $pointB->B11 = $request->get('B11');
            $pointB->scorB11 = $request->get('scorB11');
            $pointB->scorMaxB11 = $request->get('scorMaxB11');
            $pointB->scorSubItemB11 = $request->get('scorSubItemB11');

            if ($request->hasFile('fileB11')) {
                $fileName = $request->file('fileB11')->store('uploads/Point-b', 'public');
                $pointB->fileB11 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB11_5_in = $request->get('JumlahYangDihasilkanB11_5');
            $pointB->SkorTambahanB11_5 = $request->get('SkorTambahanB11_5');
            $pointB->SkorTambahanJumlahB11 = $request->get('SkorTambahanJumlahB11');
            $pointB->JumlahSkorYangDiHasilkanB11 = $request->get('JumlahSkorYangDiHasilkanB11');
            $pointB->SkorTambahanJumlahSkorB11 = $request->get('SkorTambahanJumlahSkorB11');
            $pointB->SkorTambahanJumlahBobotSubItemB11 = $request->get('SkorTambahanJumlahBobotSubItemB11');

            $pointB->B12 = $request->get('B12');
            $pointB->scorB12 = $request->get('scorB12');
            $pointB->scorMaxB12 = $request->get('scorMaxB12');
            $pointB->scorSubItemB12 = $request->get('scorSubItemB12');

            if ($request->hasFile('fileB12')) {
                $fileName = $request->file('fileB12')->store('uploads/Point-b', 'public');
                $pointB->fileB12 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB12_5_in = $request->get('JumlahYangDihasilkanB12_5');
            $pointB->SkorTambahanB12_5 = $request->get('SkorTambahanB12_5');
            $pointB->SkorTambahanJumlahB12 = $request->get('SkorTambahanJumlahB12');
            $pointB->JumlahSkorYangDiHasilkanB12 = $request->get('JumlahSkorYangDiHasilkanB12');
            $pointB->SkorTambahanJumlahSkorB12 = $request->get('SkorTambahanJumlahSkorB12');
            $pointB->SkorTambahanJumlahBobotSubItemB12 = $request->get('SkorTambahanJumlahBobotSubItemB12');

            $pointB->B13 = $request->get('B13');
            $pointB->scorB13 = $request->get('scorB13');
            $pointB->scorMaxB13 = $request->get('scorMaxB13');
            $pointB->scorSubItemB13 = $request->get('scorSubItemB13');

            if ($request->hasFile('fileB13')) {
                $fileName = $request->file('fileB13')->store('uploads/Point-b', 'public');
                $pointB->fileB13 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB13_3_in = $request->get('JumlahYangDihasilkanB13_3');
            $pointB->SkorTambahanB13_3 = $request->get('SkorTambahanB13_3');
            $pointB->JumlahYangDihasilkanB13_4_in = $request->get('JumlahYangDihasilkanB13_4');
            $pointB->SkorTambahanB13_4 = $request->get('SkorTambahanB13_4');
            $pointB->JumlahYangDihasilkanB13_5_in = $request->get('JumlahYangDihasilkanB13_5');
            $pointB->SkorTambahanB13_5 = $request->get('SkorTambahanB13_5');
            $pointB->SkorTambahanJumlahB13 = $request->get('SkorTambahanJumlahB13');
            $pointB->JumlahSkorYangDiHasilkanB13 = $request->get('JumlahSkorYangDiHasilkanB13');
            $pointB->SkorTambahanJumlahSkorB13 = $request->get('SkorTambahanJumlahSkorB13');
            $pointB->SkorTambahanJumlahBobotSubItemB13 = $request->get('SkorTambahanJumlahBobotSubItemB13');

            $pointB->B14 = $request->get('B14');
            $pointB->scorB14 = $request->get('scorB14');
            $pointB->scorMaxB14 = $request->get('scorMaxB14');
            $pointB->scorSubItemB14 = $request->get('scorSubItemB14');

            if ($request->hasFile('fileB14')) {
                $fileName = $request->file('fileB14')->store('uploads/Point-b', 'public');
                $pointB->fileB14 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB14_2_in = $request->get('JumlahYangDihasilkanB14_2');
            $pointB->SkorTambahanB14_2 = $request->get('SkorTambahanB14_2');
            $pointB->JumlahYangDihasilkanB14_3_in = $request->get('JumlahYangDihasilkanB14_3');
            $pointB->SkorTambahanB14_3 = $request->get('SkorTambahanB14_3');
            $pointB->JumlahYangDihasilkanB14_4_in = $request->get('JumlahYangDihasilkanB14_4');
            $pointB->SkorTambahanB14_4 = $request->get('SkorTambahanB14_4');
            $pointB->JumlahYangDihasilkanB14_5_in = $request->get('JumlahYangDihasilkanB14_5');
            $pointB->SkorTambahanB14_5 = $request->get('SkorTambahanB14_5');
            $pointB->SkorTambahanJumlahB14 = $request->get('SkorTambahanJumlahB14');
            $pointB->JumlahSkorYangDiHasilkanB14 = $request->get('JumlahSkorYangDiHasilkanB14');
            $pointB->SkorTambahanJumlahSkorB14 = $request->get('SkorTambahanJumlahSkorB14');
            $pointB->SkorTambahanJumlahBobotSubItemB14 = $request->get('SkorTambahanJumlahBobotSubItemB14');

            $pointB->B15 = $request->get('B15');
            $pointB->scorB15 = $request->get('scorB15');
            $pointB->scorMaxB15 = $request->get('scorMaxB15');
            $pointB->scorSubItemB15 = $request->get('scorSubItemB15');

            if ($request->hasFile('fileB15')) {
                $fileName = $request->file('fileB15')->store('uploads/Point-b', 'public');
                $pointB->fileB15 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB15_3_in = $request->get('JumlahYangDihasilkanB15_3');
            $pointB->SkorTambahanB15_3 = $request->get('SkorTambahanB15_3');
            $pointB->JumlahYangDihasilkanB15_4_in = $request->get('JumlahYangDihasilkanB15_4');
            $pointB->SkorTambahanB15_4 = $request->get('SkorTambahanB15_4');
            $pointB->JumlahYangDihasilkanB15_5_in = $request->get('JumlahYangDihasilkanB15_5');
            $pointB->SkorTambahanB15_5 = $request->get('SkorTambahanB15_5');
            $pointB->SkorTambahanJumlahB15 = $request->get('SkorTambahanJumlahB15');
            $pointB->JumlahSkorYangDiHasilkanB15 = $request->get('JumlahSkorYangDiHasilkanB15');
            $pointB->SkorTambahanJumlahSkorB15 = $request->get('SkorTambahanJumlahSkorB15');
            $pointB->SkorTambahanJumlahBobotSubItemB15 = $request->get('SkorTambahanJumlahBobotSubItemB15');

            $pointB->B16 = $request->get('B16');
            $pointB->scorB16 = $request->get('scorB16');
            $pointB->scorMaxB16 = $request->get('scorMaxB16');
            $pointB->scorSubItemB16 = $request->get('scorSubItemB16');

            if ($request->hasFile('fileB16')) {
                $fileName = $request->file('fileB16')->store('uploads/Point-b', 'public');
                $pointB->fileB16 = $fileName;
            }

            $pointB->B17 = $request->get('B17');
            $pointB->scorB17 = $request->get('scorB17');
            $pointB->scorMaxB17 = $request->get('scorMaxB17');
            $pointB->scorSubItemB17 = $request->get('scorSubItemB17');

            if ($request->hasFile('fileB17')) {
                $fileName = $request->file('fileB17')->store('uploads/Point-b', 'public');
                $pointB->fileB17 = $fileName;
            }

            $pointB->JumlahYangDihasilkanB17_2_in = $request->get('JumlahYangDihasilkanB17_2');
            $pointB->SkorTambahanB17_2 = $request->get('SkorTambahanB17_2');
            $pointB->JumlahYangDihasilkanB17_3_in = $request->get('JumlahYangDihasilkanB17_3');
            $pointB->SkorTambahanB17_3 = $request->get('SkorTambahanB17_3');
            $pointB->JumlahYangDihasilkanB17_4_in = $request->get('JumlahYangDihasilkanB17_4');
            $pointB->SkorTambahanB17_4 = $request->get('SkorTambahanB17_4');
            $pointB->JumlahYangDihasilkanB17_5_in = $request->get('JumlahYangDihasilkanB17_5');
            $pointB->SkorTambahanB17_5 = $request->get('SkorTambahanB17_5');
            $pointB->SkorTambahanJumlahB17 = $request->get('SkorTambahanJumlahB17');
            $pointB->JumlahSkorYangDiHasilkanB17 = $request->get('JumlahSkorYangDiHasilkanB17');
            $pointB->SkorTambahanJumlahSkorB17 = $request->get('SkorTambahanJumlahSkorB17');
            $pointB->SkorTambahanJumlahBobotSubItemB17 = $request->get('SkorTambahanJumlahBobotSubItemB17');

            $pointB->B18 = $request->get('B18');
            $pointB->scorB18 = $request->get('scorB18');
            $pointB->scorMaxB18 = $request->get('scorMaxB18');
            $pointB->scorSubItemB18 = $request->get('scorSubItemB18');

            if ($request->hasFile('fileB18')) {
                $fileName = $request->file('fileB18')->store('uploads/Point-b', 'public');
                $pointB->fileB18 = $fileName;
            }

            $pointB->TotalSkorPenelitianPointB = $request->get('TotalSkorPenelitianPointB');
            $pointB->TotalKelebihaB1 = $request->get('TotalKelebihaB1');
            $pointB->TotalKelebihaB2 = $request->get('TotalKelebihaB2');
            $pointB->TotalKelebihaB3 = $request->get('TotalKelebihaB3');
            $pointB->TotalKelebihaB5 = $request->get('TotalKelebihaB5');
            $pointB->TotalKelebihaB6 = $request->get('TotalKelebihaB6');
            $pointB->TotalKelebihaB7 = $request->get('TotalKelebihaB7');
            $pointB->TotalKelebihaB9 = $request->get('TotalKelebihaB9');
            $pointB->TotalKelebihaB10 = $request->get('TotalKelebihaB10');
            $pointB->TotalKelebihaB11 = $request->get('TotalKelebihaB11');
            $pointB->TotalKelebihaB12 = $request->get('TotalKelebihaB12');
            $pointB->TotalKelebihaB13 = $request->get('TotalKelebihaB13');
            $pointB->TotalKelebihaB14 = $request->get('TotalKelebihaB14');
            $pointB->TotalKelebihaB15 = $request->get('TotalKelebihaB15');
            $pointB->TotalKelebihaB17 = $request->get('TotalKelebihaB17');
            $pointB->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
            $pointB->NilaiPenelitian = $request->get('NilaiPenelitian');
            $pointB->NilaiTambahPenelitian = $request->get('NilaiTambahPenelitian');
            $pointB->NilaiTotalPenelitiandanKaryaIlmiah = $request->get('NilaiTotalPenelitiandanKaryaIlmiah');

            $pointB->save();

            DB::commit();
            toast('Create new Point B successfully :)', 'success');
            return redirect()->route('point-C');
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point B fail :)', 'error');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointB  $pointB
     * @return \Illuminate\Http\Response
     */
    public function edit($PointId)
    {
        $user = Auth::user();

        // 1. Cek periode aktif
        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            return view('menu.disabled');
        }

        // 2. Ambil data Point B berdasarkan user & periode
        $data = PointB::where('new_user_id', $PointId)
            ->where('period_id', $activePeriod->id)
            ->first();

        if (!$data) {
            return redirect()->route('create.Point-B');
        }

        // 3. Ambil seluruh jabatan fungsional user
        $jabfungList = $user->jabfung()->pluck('name')->toArray();

        // 4. Daftar jabatan fungsional dosen (HARUS lowercase agar match)
        $jabatanDosen = ['non-jad', 'asisten ahli', 'lektor', 'lektor kepala', 'guru besar'];

        // 5. Tentukan jabfung dosen yang dimiliki user
        $selectedJabfung = null;
        foreach ($jabfungList as $jf) {
            $jfLower = strtolower($jf);
            if (in_array($jfLower, $jabatanDosen)) {
                $selectedJabfung = $jfLower;
                break;
            }
        }

        // 6. Jika user adalah dosen → arahkan ke view sesuai jabfung
        if ($selectedJabfung) {
            $viewName = str_replace(' ', '-', $selectedJabfung); // contoh: "guru besar" → "guru-besar"
            $viewPath = "edit-point.point-b.dosen.$viewName";

            // 7. Safe fallback jika view belum tersedia
            if (!view()->exists($viewPath)) {
                $viewPath = "edit-point.point-b.dosen.default";
            }

            return view($viewPath, [
                'user' => $user,
                'data' => $data,
                'jabfungList' => $jabfungList,
                'editMode' => true,
            ]);
        }

        // 8. Jika bukan dosen → arahkan ke view umum
        return view('edit-point.EditPointB', [
            'user' => $user,
            'data' => $data,
            'jabfungList' => $jabfungList,
            'editMode' => true,
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointB  $pointB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointB $pointB, $PointId)
    {
        $request->validate([
            'fileB1' => 'mimes:pdf',
            'fileB2' => 'mimes:pdf',
            'fileB3' => 'mimes:pdf',
            'fileB4' => 'mimes:pdf',
            'fileB5' => 'mimes:pdf',
            'fileB6' => 'mimes:pdf',
            'fileB7' => 'mimes:pdf',
            'fileB8' => 'mimes:pdf',
            'fileB9' => 'mimes:pdf',
            'fileB10' => 'mimes:pdf',
            'fileB11' => 'mimes:pdf',
            'fileB12' => 'mimes:pdf',
            'fileB13' => 'mimes:pdf',
            'fileB14' => 'mimes:pdf',
            'fileB15' => 'mimes:pdf',
            'fileB16' => 'mimes:pdf',
            'fileB17' => 'mimes:pdf',
            'fileB18' => 'mimes:pdf',
        ]);

        $activePeriod = Period::where('is_closed', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$activePeriod) {
            return view('menu.disabled');
        }

        DB::beginTransaction();
        try {
            $RecordData = PointB::where('new_user_id', $PointId)
                ->where('period_id', $activePeriod->id)
                ->firstOrFail();
            // Request put data update
            $B1 = $request->B1;
            $scorB1 = $request->scorB1;
            $scorMaxB1 = $request->scorMaxB1;
            $scorSubItemB1 = $request->scorSubItemB1;

            if ($request->hasFile('fileB1')) {
                if ($RecordData->fileB1 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB1))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB1);
                }
                $file_b1 = $request->file('fileB1')->store('uploads/Point-b', 'public');
            } else {
                $file_b1 = $RecordData->fileB1;
            }

            $JumlahYangDihasilkanB1_2_in = $request->JumlahYangDihasilkanB1_2;
            $SkorTambahanB1_2 = $request->SkorTambahanB1_2;
            $JumlahYangDihasilkanB1_3_in = $request->JumlahYangDihasilkanB1_3;
            $SkorTambahanB1_3 = $request->SkorTambahanB1_3;
            $JumlahYangDihasilkanB1_4_in = $request->JumlahYangDihasilkanB1_4;
            $SkorTambahanB1_4 = $request->SkorTambahanB1_4;
            $JumlahYangDihasilkanB1_5_in = $request->JumlahYangDihasilkanB1_5;
            $SkorTambahanB1_5 = $request->SkorTambahanB1_5;
            $SkorTambahanJumlahB1 = $request->SkorTambahanJumlahB1;
            $JumlahSkorYangDiHasilkanB1 = $request->JumlahSkorYangDiHasilkanB1;
            $SkorTambahanJumlahSkorB1 = $request->SkorTambahanJumlahSkorB1;
            $SkorTambahanJumlahBobotSubItemB1 = $request->SkorTambahanJumlahBobotSubItemB1;

            $B2 = $request->B2;
            $scorB2 = $request->scorB2;
            $scorMaxB2 = $request->scorMaxB2;
            $scorSubItemB2 = $request->scorSubItemB2;

            if ($request->hasFile('fileB2')) {
                if ($RecordData->fileB2 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB2))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB2);
                }
                $file_b2 = $request->file('fileB2')->store('uploads/Point-b', 'public');
            } else {
                $file_b2 = $RecordData->fileB2;
            }

            $JumlahYangDihasilkanB2_4_in = $request->JumlahYangDihasilkanB2_4;
            $SkorTambahanB2_4 = $request->SkorTambahanB2_4;
            $JumlahYangDihasilkanB2_5_in = $request->JumlahYangDihasilkanB2_5;
            $SkorTambahanB2_5 = $request->SkorTambahanB2_5;
            $SkorTambahanJumlahB2 = $request->SkorTambahanJumlahB2;
            $JumlahSkorYangDiHasilkanB2 = $request->JumlahSkorYangDiHasilkanB2;
            $SkorTambahanJumlahSkorB2 = $request->SkorTambahanJumlahSkorB2;
            $SkorTambahanJumlahBobotSubItemB2 = $request->SkorTambahanJumlahBobotSubItemB2;


            $B3 = $request->B3;
            $scorB3 = $request->scorB3;
            $scorMaxB3 = $request->scorMaxB3;
            $scorSubItemB3 = $request->scorSubItemB3;

            if ($request->hasFile('fileB3')) {
                if ($RecordData->fileB3 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB3))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB3);
                }
                $file_b3 = $request->file('fileB3')->store('uploads/Point-b', 'public');
            } else {
                $file_b3 = $RecordData->fileB3;
            }

            $JumlahYangDihasilkanB3_4_in = $request->JumlahYangDihasilkanB3_4;
            $SkorTambahanB3_4 = $request->SkorTambahanB3_4;
            $JumlahYangDihasilkanB3_5_in = $request->JumlahYangDihasilkanB3_5;
            $SkorTambahanB3_5 = $request->SkorTambahanB3_5;
            $SkorTambahanJumlahB3 = $request->SkorTambahanJumlahB3;
            $JumlahSkorYangDiHasilkanB3 = $request->JumlahSkorYangDiHasilkanB3;
            $SkorTambahanJumlahSkorB3 = $request->SkorTambahanJumlahSkorB3;
            $SkorTambahanJumlahBobotSubItemB3 = $request->SkorTambahanJumlahBobotSubItemB3;

            $B4 = $request->B4;
            $scorB4 = $request->scorB4;
            $scorMaxB4 = $request->scorMaxB4;
            $scorSubItemB4 = $request->scorSubItemB4;

            if ($request->hasFile('fileB4')) {
                if ($RecordData->fileB4 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB4))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB4);
                }
                $file_b4 = $request->file('fileB4')->store('uploads/Point-b', 'public');
            } else {
                $file_b4 = $RecordData->fileB4;
            }

            $B5 = $request->B5;
            $scorB5 = $request->scorB5;
            $scorMaxB5 = $request->scorMaxB5;
            $scorSubItemB5 = $request->scorSubItemB5;

            if ($request->hasFile('fileB5')) {
                if ($RecordData->fileB5 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB5))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB5);
                }
                $file_b5 = $request->file('fileB5')->store('uploads/Point-b', 'public');
            } else {
                $file_b5 = $RecordData->fileB5;
            }

            $JumlahYangDihasilkanB5_5_in = $request->JumlahYangDihasilkanB5_5;
            $SkorTambahanB5_5 = $request->SkorTambahanB5_5;
            $SkorTambahanJumlahB5 = $request->SkorTambahanJumlahB5;
            $JumlahSkorYangDiHasilkanB5 = $request->JumlahSkorYangDiHasilkanB5;
            $SkorTambahanJumlahSkorB5 = $request->SkorTambahanJumlahSkorB5;
            $SkorTambahanJumlahBobotSubItemB5 = $request->SkorTambahanJumlahBobotSubItemB5;

            $B6 = $request->B6;
            $scorB6 = $request->scorB6;
            $scorMaxB6 = $request->scorMaxB6;
            $scorSubItemB6 = $request->scorSubItemB6;

            if ($request->hasFile('fileB6')) {
                if ($RecordData->fileB6 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB6))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB6);
                }
                $file_b6 = $request->file('fileB6')->store('uploads/Point-b', 'public');
            } else {
                $file_b6 = $RecordData->fileB6;
            }

            $JumlahYangDihasilkanB6_5_in = $request->JumlahYangDihasilkanB6_5;
            $SkorTambahanB6_5 = $request->SkorTambahanB6_5;
            $SkorTambahanJumlahB6 = $request->SkorTambahanJumlahB6;
            $JumlahSkorYangDiHasilkanB6 = $request->JumlahSkorYangDiHasilkanB6;
            $SkorTambahanJumlahSkorB6 = $request->SkorTambahanJumlahSkorB6;
            $SkorTambahanJumlahBobotSubItemB6 = $request->SkorTambahanJumlahBobotSubItemB6;

            $B7 = $request->B7;
            $scorB7 = $request->scorB7;
            $scorMaxB7 = $request->scorMaxB7;
            $scorSubItemB7 = $request->scorSubItemB7;

            if ($request->hasFile('fileB7')) {
                if ($RecordData->fileB7 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB7))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB7);
                }
                $file_b7 = $request->file('fileB7')->store('uploads/Point-b', 'public');
            } else {
                $file_b7 = $RecordData->fileB7;
            }

            $JumlahYangDihasilkanB7_5_in = $request->JumlahYangDihasilkanB7_5;
            $SkorTambahanB7_5 = $request->SkorTambahanB7_5;
            $SkorTambahanJumlahB7 = $request->SkorTambahanJumlahB7;
            $JumlahSkorYangDiHasilkanB7 = $request->JumlahSkorYangDiHasilkanB7;
            $SkorTambahanJumlahSkorB7 = $request->SkorTambahanJumlahSkorB7;
            $SkorTambahanJumlahBobotSubItemB7 = $request->SkorTambahanJumlahBobotSubItemB7;

            $B8 = $request->B8;
            $scorB8 = $request->scorB8;
            $scorMaxB8 = $request->scorMaxB8;
            $scorSubItemB8 = $request->scorSubItemB8;

            if ($request->hasFile('fileB8')) {
                if ($RecordData->fileB8 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB8))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB8);
                }
                $file_b8 = $request->file('fileB8')->store('uploads/Point-b', 'public');
            } else {
                $file_b8 = $RecordData->fileB8;
            }

            $B9 = $request->B9;
            $scorB9 = $request->scorB9;
            $scorMaxB9 = $request->scorMaxB9;
            $scorSubItemB9 = $request->scorSubItemB9;

            if ($request->hasFile('fileB9')) {
                if ($RecordData->fileB9 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB9))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB9);
                }
                $file_b9 = $request->file('fileB9')->store('uploads/Point-b', 'public');
            } else {
                $file_b9 = $RecordData->fileB9;
            }

            $JumlahYangDihasilkanB9_3_in = $request->JumlahYangDihasilkanB9_3;
            $SkorTambahanB9_3 = $request->SkorTambahanB9_3;
            $JumlahYangDihasilkanB9_5_in = $request->JumlahYangDihasilkanB9_5;
            $SkorTambahanB9_5 = $request->SkorTambahanB9_5;
            $SkorTambahanJumlahB9 = $request->SkorTambahanJumlahB9;
            $JumlahSkorYangDiHasilkanB9 = $request->JumlahSkorYangDiHasilkanB9;
            $SkorTambahanJumlahSkorB9 = $request->SkorTambahanJumlahSkorB9;
            $SkorTambahanJumlahBobotSubItemB9 = $request->SkorTambahanJumlahBobotSubItemB9;

            $B10 = $request->B10;
            $scorB10 = $request->scorB10;
            $scorMaxB10 = $request->scorMaxB10;
            $scorSubItemB10 = $request->scorSubItemB10;

            if ($request->hasFile('fileB10')) {
                if ($RecordData->fileB10 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB10))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB10);
                }
                $file_b10 = $request->file('fileB10')->store('uploads/Point-b', 'public');
            } else {
                $file_b10 = $RecordData->fileB10;
            }

            $JumlahYangDihasilkanB10_3_in = $request->JumlahYangDihasilkanB10_3;
            $SkorTambahanB10_3 = $request->SkorTambahanB10_3;
            $JumlahYangDihasilkanB10_5_in = $request->JumlahYangDihasilkanB10_5;
            $SkorTambahanB10_5 = $request->SkorTambahanB10_5;
            $SkorTambahanJumlahB10 = $request->SkorTambahanJumlahB10;
            $JumlahSkorYangDiHasilkanB10 = $request->JumlahSkorYangDiHasilkanB10;
            $SkorTambahanJumlahSkorB10 = $request->SkorTambahanJumlahSkorB10;
            $SkorTambahanJumlahBobotSubItemB10 = $request->SkorTambahanJumlahBobotSubItemB10;

            $B11 = $request->B11;
            $scorB11 = $request->scorB11;
            $scorMaxB11 = $request->scorMaxB11;
            $scorSubItemB11 = $request->scorSubItemB11;

            if ($request->hasFile('fileB11')) {
                if ($RecordData->fileB11 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB11))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB11);
                }
                $file_b11 = $request->file('fileB11')->store('uploads/Point-b', 'public');
            } else {
                $file_b11 = $RecordData->fileB11;
            }

            $JumlahYangDihasilkanB11_5_in = $request->JumlahYangDihasilkanB11_5;
            $SkorTambahanB11_5 = $request->SkorTambahanB11_5;
            $SkorTambahanJumlahB11 = $request->SkorTambahanJumlahB11;
            $JumlahSkorYangDiHasilkanB11 = $request->JumlahSkorYangDiHasilkanB11;
            $SkorTambahanJumlahSkorB11 = $request->SkorTambahanJumlahSkorB11;
            $SkorTambahanJumlahBobotSubItemB11 = $request->SkorTambahanJumlahBobotSubItemB11;

            $B12 = $request->B12;
            $scorB12 = $request->scorB12;
            $scorMaxB12 = $request->scorMaxB12;
            $scorSubItemB12 = $request->scorSubItemB12;

            if ($request->hasFile('fileB12')) {
                if ($RecordData->fileB12 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB12))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB12);
                }
                $file_b12 = $request->file('fileB12')->store('uploads/Point-b', 'public');
            } else {
                $file_b12 = $RecordData->fileB12;
            }

            $JumlahYangDihasilkanB12_5_in = $request->JumlahYangDihasilkanB12_5;
            $SkorTambahanB12_5 = $request->SkorTambahanB12_5;
            $SkorTambahanJumlahB12 = $request->SkorTambahanJumlahB12;
            $JumlahSkorYangDiHasilkanB12 = $request->JumlahSkorYangDiHasilkanB12;
            $SkorTambahanJumlahSkorB12 = $request->SkorTambahanJumlahSkorB12;
            $SkorTambahanJumlahBobotSubItemB12 = $request->SkorTambahanJumlahBobotSubItemB12;

            $B13 = $request->B13;
            $scorB13 = $request->scorB13;
            $scorMaxB13 = $request->scorMaxB13;
            $scorSubItemB13 = $request->scorSubItemB13;

            if ($request->hasFile('fileB13')) {
                if ($RecordData->fileB13 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB13))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB13);
                }
                $file_b13 = $request->file('fileB13')->store('uploads/Point-b', 'public');
            } else {
                $file_b13 = $RecordData->fileB13;
            }

            $JumlahYangDihasilkanB13_3_in = $request->JumlahYangDihasilkanB13_3;
            $SkorTambahanB13_3 = $request->SkorTambahanB13_3;
            $JumlahYangDihasilkanB13_4_in = $request->JumlahYangDihasilkanB13_4;
            $SkorTambahanB13_4 = $request->SkorTambahanB13_4;
            $JumlahYangDihasilkanB13_5_in = $request->JumlahYangDihasilkanB13_5;
            $SkorTambahanB13_5 = $request->SkorTambahanB13_5;
            $SkorTambahanJumlahB13 = $request->SkorTambahanJumlahB13;
            $JumlahSkorYangDiHasilkanB13 = $request->JumlahSkorYangDiHasilkanB13;
            $SkorTambahanJumlahSkorB13 = $request->SkorTambahanJumlahSkorB13;
            $SkorTambahanJumlahBobotSubItemB13 = $request->SkorTambahanJumlahBobotSubItemB13;

            $B14 = $request->B14;
            $scorB14 = $request->scorB14;
            $scorMaxB14 = $request->scorMaxB14;
            $scorSubItemB14 = $request->scorSubItemB14;

            if ($request->hasFile('fileB14')) {
                if ($RecordData->fileB14 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB14))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB14);
                }
                $file_b14 = $request->file('fileB14')->store('uploads/Point-b', 'public');
            } else {
                $file_b14 = $RecordData->fileB14;
            }

            $JumlahYangDihasilkanB14_2_in = $request->JumlahYangDihasilkanB14_2;
            $SkorTambahanB14_2 = $request->SkorTambahanB14_2;
            $JumlahYangDihasilkanB14_3_in = $request->JumlahYangDihasilkanB14_3;
            $SkorTambahanB14_3 = $request->SkorTambahanB14_3;
            $JumlahYangDihasilkanB14_4_in = $request->JumlahYangDihasilkanB14_4;
            $SkorTambahanB14_4 = $request->SkorTambahanB14_4;
            $JumlahYangDihasilkanB14_5_in = $request->JumlahYangDihasilkanB14_5;
            $SkorTambahanB14_5 = $request->SkorTambahanB14_5;
            $SkorTambahanJumlahB14 = $request->SkorTambahanJumlahB14;
            $JumlahSkorYangDiHasilkanB14 = $request->JumlahSkorYangDiHasilkanB14;
            $SkorTambahanJumlahSkorB14 = $request->SkorTambahanJumlahSkorB14;
            $SkorTambahanJumlahBobotSubItemB14 = $request->SkorTambahanJumlahBobotSubItemB14;

            $B15 = $request->B15;
            $scorB15 = $request->scorB15;
            $scorMaxB15 = $request->scorMaxB15;
            $scorSubItemB15 = $request->scorSubItemB15;

            if ($request->hasFile('fileB15')) {
                if ($RecordData->fileB15 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB15))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB15);
                }
                $file_b15 = $request->file('fileB15')->store('uploads/Point-b', 'public');
            } else {
                $file_b15 = $RecordData->fileB15;
            }

            $JumlahYangDihasilkanB15_3_in = $request->JumlahYangDihasilkanB15_3;
            $SkorTambahanB15_3 = $request->SkorTambahanB15_3;
            $JumlahYangDihasilkanB15_4_in = $request->JumlahYangDihasilkanB15_4;
            $SkorTambahanB15_4 = $request->SkorTambahanB15_4;
            $JumlahYangDihasilkanB15_5_in = $request->JumlahYangDihasilkanB15_5;
            $SkorTambahanB15_5 = $request->SkorTambahanB15_5;
            $SkorTambahanJumlahB15 = $request->SkorTambahanJumlahB15;
            $JumlahSkorYangDiHasilkanB15 = $request->JumlahSkorYangDiHasilkanB15;
            $SkorTambahanJumlahSkorB15 = $request->SkorTambahanJumlahSkorB15;
            $SkorTambahanJumlahBobotSubItemB15 = $request->SkorTambahanJumlahBobotSubItemB15;

            $B16 = $request->B16;
            $scorB16 = $request->scorB16;
            $scorMaxB16 = $request->scorMaxB16;
            $scorSubItemB16 = $request->scorSubItemB16;

            if ($request->hasFile('fileB16')) {
                if ($RecordData->fileB16 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB16))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB16);
                }
                $file_b16 = $request->file('fileB16')->store('uploads/Point-b', 'public');
            } else {
                $file_b16 = $RecordData->fileB16;
            }

            $B17 = $request->B17;
            $scorB17 = $request->scorB17;
            $scorMaxB17 = $request->scorMaxB17;
            $scorSubItemB17 = $request->scorSubItemB17;

            if ($request->hasFile('fileB17')) {
                if ($RecordData->fileB17 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB17))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB17);
                }
                $file_b17 = $request->file('fileB17')->store('uploads/Point-b', 'public');
            } else {
                $file_b17 = $RecordData->fileB17;
            }

            $JumlahYangDihasilkanB17_2_in = $request->JumlahYangDihasilkanB17_2;
            $SkorTambahanB17_2 = $request->SkorTambahanB17_2;
            $JumlahYangDihasilkanB17_3_in = $request->JumlahYangDihasilkanB17_3;
            $SkorTambahanB17_3 = $request->SkorTambahanB17_3;
            $JumlahYangDihasilkanB17_4_in = $request->JumlahYangDihasilkanB17_4;
            $SkorTambahanB17_4 = $request->SkorTambahanB17_4;
            $JumlahYangDihasilkanB17_5_in = $request->JumlahYangDihasilkanB17_5;
            $SkorTambahanB17_5 = $request->SkorTambahanB17_5;
            $SkorTambahanJumlahB17 = $request->SkorTambahanJumlahB17;
            $JumlahSkorYangDiHasilkanB17 = $request->JumlahSkorYangDiHasilkanB17;
            $SkorTambahanJumlahSkorB17 = $request->SkorTambahanJumlahSkorB17;
            $SkorTambahanJumlahBobotSubItemB17 = $request->SkorTambahanJumlahBobotSubItemB17;

            $B18 = $request->B18;
            $scorB18 = $request->scorB18;
            $scorMaxB18 = $request->scorMaxB18;
            $scorSubItemB18 = $request->scorSubItemB18;

            if ($request->hasFile('fileB18')) {
                if ($RecordData->fileB18 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB18))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB18);
                }
                $file_b18 = $request->file('fileB18')->store('uploads/Point-b', 'public');
            } else {
                $file_b18 = $RecordData->fileB18;
            }

            $TotalSkorPenelitianPointB = $request->TotalSkorPenelitianPointB;
            $TotalKelebihaB1 = $request->TotalKelebihaB1;
            $TotalKelebihaB2 = $request->TotalKelebihaB2;
            $TotalKelebihaB3 = $request->TotalKelebihaB3;
            $TotalKelebihaB5 = $request->TotalKelebihaB5;
            $TotalKelebihaB6 = $request->TotalKelebihaB6;
            $TotalKelebihaB7 = $request->TotalKelebihaB7;
            $TotalKelebihaB9 = $request->TotalKelebihaB9;
            $TotalKelebihaB10 = $request->TotalKelebihaB10;
            $TotalKelebihaB11 = $request->TotalKelebihaB11;
            $TotalKelebihaB12 = $request->TotalKelebihaB12;
            $TotalKelebihaB13 = $request->TotalKelebihaB13;
            $TotalKelebihaB14 = $request->TotalKelebihaB14;
            $TotalKelebihaB15 = $request->TotalKelebihaB15;
            $TotalKelebihaB17 = $request->TotalKelebihaB17;
            $TotalKelebihanSkor = $request->TotalKelebihanSkor;
            $NilaiPenelitian = $request->NilaiPenelitian;
            $NilaiTambahPenelitian = $request->NilaiTambahPenelitian;
            $NilaiTotalPenelitiandanKaryaIlmiah = $request->NilaiTotalPenelitiandanKaryaIlmiah;


            $update = [
                'B1' => $B1,
                'scorB1' => $scorB1,
                'scorMaxB1' => $scorMaxB1,
                'scorSubItemB1' => $scorSubItemB1,
                'fileB1' => $file_b1,
                'JumlahYangDihasilkanB1_2_in' => $JumlahYangDihasilkanB1_2_in,
                'SkorTambahanB1_2' => $SkorTambahanB1_2,
                'JumlahYangDihasilkanB1_3_in' => $JumlahYangDihasilkanB1_3_in,
                'SkorTambahanB1_3' => $SkorTambahanB1_3,
                'JumlahYangDihasilkanB1_4_in' => $JumlahYangDihasilkanB1_4_in,
                'SkorTambahanB1_4' => $SkorTambahanB1_4,
                'JumlahYangDihasilkanB1_5_in' => $JumlahYangDihasilkanB1_5_in,
                'SkorTambahanB1_5' => $SkorTambahanB1_5,
                'SkorTambahanJumlahB1' => $SkorTambahanJumlahB1,
                'JumlahSkorYangDiHasilkanB1' => $JumlahSkorYangDiHasilkanB1,
                'SkorTambahanJumlahSkorB1' => $SkorTambahanJumlahSkorB1,
                'SkorTambahanJumlahBobotSubItemB1' => $SkorTambahanJumlahBobotSubItemB1,

                'B2' => $B2,
                'scorB2' => $scorB2,
                'scorMaxB2' => $scorMaxB2,
                'scorSubItemB2' => $scorSubItemB2,
                'fileB2' => $file_b2,
                'JumlahYangDihasilkanB2_4_in' => $JumlahYangDihasilkanB2_4_in,
                'SkorTambahanB2_4' => $SkorTambahanB2_4,
                'JumlahYangDihasilkanB2_5_in' => $JumlahYangDihasilkanB2_5_in,
                'SkorTambahanB2_5' => $SkorTambahanB2_5,
                'SkorTambahanJumlahB2' => $SkorTambahanJumlahB2,
                'JumlahSkorYangDiHasilkanB2' => $JumlahSkorYangDiHasilkanB2,
                'SkorTambahanJumlahSkorB2' => $SkorTambahanJumlahSkorB2,
                'SkorTambahanJumlahBobotSubItemB2' => $SkorTambahanJumlahBobotSubItemB2,

                'B3' => $B3,
                'scorB3' => $scorB3,
                'scorMaxB3' => $scorMaxB3,
                'scorSubItemB3' => $scorSubItemB3,
                'fileB3' => $file_b3,
                'JumlahYangDihasilkanB3_4_in' => $JumlahYangDihasilkanB3_4_in,
                'SkorTambahanB3_4' => $SkorTambahanB3_4,
                'JumlahYangDihasilkanB3_5_in' => $JumlahYangDihasilkanB3_5_in,
                'SkorTambahanB3_5' => $SkorTambahanB3_5,
                'SkorTambahanJumlahB3' => $SkorTambahanJumlahB3,
                'JumlahSkorYangDiHasilkanB3' => $JumlahSkorYangDiHasilkanB3,
                'SkorTambahanJumlahSkorB3' => $SkorTambahanJumlahSkorB3,
                'SkorTambahanJumlahBobotSubItemB3' => $SkorTambahanJumlahBobotSubItemB3,

                'B4' => $B4,
                'scorB4' => $scorB4,
                'scorMaxB4' => $scorMaxB4,
                'scorSubItemB4' => $scorSubItemB4,
                'fileB4' => $file_b4,

                'B5' => $B5,
                'scorB5' => $scorB5,
                'scorMaxB5' => $scorMaxB5,
                'scorSubItemB5' => $scorSubItemB5,
                'fileB5' => $file_b5,
                'JumlahYangDihasilkanB5_5_in' => $JumlahYangDihasilkanB5_5_in,
                'SkorTambahanB5_5' => $SkorTambahanB5_5,
                'SkorTambahanJumlahB5' => $SkorTambahanJumlahB5,
                'JumlahSkorYangDiHasilkanB5' => $JumlahSkorYangDiHasilkanB5,
                'SkorTambahanJumlahSkorB5' => $SkorTambahanJumlahSkorB5,
                'SkorTambahanJumlahBobotSubItemB5' => $SkorTambahanJumlahBobotSubItemB5,

                'B6' => $B6,
                'scorB6' => $scorB6,
                'scorMaxB6' => $scorMaxB6,
                'scorSubItemB6' => $scorSubItemB6,
                'fileB6' => $file_b6,
                'JumlahYangDihasilkanB6_5_in' => $JumlahYangDihasilkanB6_5_in,
                'SkorTambahanB6_5' => $SkorTambahanB6_5,
                'SkorTambahanJumlahB6' => $SkorTambahanJumlahB6,
                'JumlahSkorYangDiHasilkanB6' => $JumlahSkorYangDiHasilkanB6,
                'SkorTambahanJumlahSkorB6' => $SkorTambahanJumlahSkorB6,
                'SkorTambahanJumlahBobotSubItemB6' => $SkorTambahanJumlahBobotSubItemB6,

                'B7' => $B7,
                'scorB7' => $scorB7,
                'scorMaxB7' => $scorMaxB7,
                'scorSubItemB7' => $scorSubItemB7,
                'fileB7' => $file_b7,
                'JumlahYangDihasilkanB7_5_in' => $JumlahYangDihasilkanB7_5_in,
                'SkorTambahanB7_5' => $SkorTambahanB7_5,
                'SkorTambahanJumlahB7' => $SkorTambahanJumlahB7,
                'JumlahSkorYangDiHasilkanB7' => $JumlahSkorYangDiHasilkanB7,
                'SkorTambahanJumlahSkorB7' => $SkorTambahanJumlahSkorB7,
                'SkorTambahanJumlahBobotSubItemB7' => $SkorTambahanJumlahBobotSubItemB7,

                'B8' => $B8,
                'scorB8' => $scorB8,
                'scorMaxB8' => $scorMaxB8,
                'scorSubItemB8' => $scorSubItemB8,
                'fileB8' => $file_b8,

                'B9' => $B9,
                'scorB9' => $scorB9,
                'scorMaxB9' => $scorMaxB9,
                'scorSubItemB9' => $scorSubItemB9,
                'fileB9' => $file_b9,
                'JumlahYangDihasilkanB9_3_in' => $JumlahYangDihasilkanB9_3_in,
                'SkorTambahanB9_3' => $SkorTambahanB9_3,
                'JumlahYangDihasilkanB9_5_in' => $JumlahYangDihasilkanB9_5_in,
                'SkorTambahanB9_5' => $SkorTambahanB9_5,
                'SkorTambahanJumlahB9' => $SkorTambahanJumlahB9,
                'JumlahSkorYangDiHasilkanB9' => $JumlahSkorYangDiHasilkanB9,
                'SkorTambahanJumlahSkorB9' => $SkorTambahanJumlahSkorB9,
                'SkorTambahanJumlahBobotSubItemB9' => $SkorTambahanJumlahBobotSubItemB9,

                'B10' => $B10,
                'scorB10' => $scorB10,
                'scorMaxB10' => $scorMaxB10,
                'scorSubItemB10' => $scorSubItemB10,
                'fileB10' => $file_b10,
                'JumlahYangDihasilkanB10_3_in' => $JumlahYangDihasilkanB10_3_in,
                'SkorTambahanB10_3' => $SkorTambahanB10_3,
                'JumlahYangDihasilkanB10_5_in' => $JumlahYangDihasilkanB10_5_in,
                'SkorTambahanB10_5' => $SkorTambahanB10_5,
                'SkorTambahanJumlahB10' => $SkorTambahanJumlahB10,
                'JumlahSkorYangDiHasilkanB10' => $JumlahSkorYangDiHasilkanB10,
                'SkorTambahanJumlahSkorB10' => $SkorTambahanJumlahSkorB10,
                'SkorTambahanJumlahBobotSubItemB10' => $SkorTambahanJumlahBobotSubItemB10,

                'B11' => $B11,
                'scorB11' => $scorB11,
                'scorMaxB11' => $scorMaxB11,
                'scorSubItemB11' => $scorSubItemB11,
                'fileB11' => $file_b11,
                'JumlahYangDihasilkanB11_5_in' => $JumlahYangDihasilkanB11_5_in,
                'SkorTambahanB11_5' => $SkorTambahanB11_5,
                'SkorTambahanJumlahB11' => $SkorTambahanJumlahB11,
                'JumlahSkorYangDiHasilkanB11' => $JumlahSkorYangDiHasilkanB11,
                'SkorTambahanJumlahSkorB11' => $SkorTambahanJumlahSkorB11,
                'SkorTambahanJumlahBobotSubItemB11' => $SkorTambahanJumlahBobotSubItemB11,

                'B12' => $B12,
                'scorB12' => $scorB12,
                'scorMaxB12' => $scorMaxB12,
                'scorSubItemB12' => $scorSubItemB12,
                'fileB12' => $file_b12,
                'JumlahYangDihasilkanB12_5_in' => $JumlahYangDihasilkanB12_5_in,
                'SkorTambahanB12_5' => $SkorTambahanB12_5,
                'SkorTambahanJumlahB12' => $SkorTambahanJumlahB12,
                'JumlahSkorYangDiHasilkanB12' => $JumlahSkorYangDiHasilkanB12,
                'SkorTambahanJumlahSkorB12' => $SkorTambahanJumlahSkorB12,
                'SkorTambahanJumlahBobotSubItemB12' => $SkorTambahanJumlahBobotSubItemB12,

                'B13' => $B13,
                'scorB13' => $scorB13,
                'scorMaxB13' => $scorMaxB13,
                'scorSubItemB13' => $scorSubItemB13,
                'fileB13' => $file_b13,
                'JumlahYangDihasilkanB13_3_in' => $JumlahYangDihasilkanB13_3_in,
                'SkorTambahanB13_3' => $SkorTambahanB13_3,
                'JumlahYangDihasilkanB13_4_in' => $JumlahYangDihasilkanB13_4_in,
                'SkorTambahanB13_4' => $SkorTambahanB13_4,
                'JumlahYangDihasilkanB13_5_in' => $JumlahYangDihasilkanB13_5_in,
                'SkorTambahanB13_5' => $SkorTambahanB13_5,
                'SkorTambahanJumlahB13' => $SkorTambahanJumlahB13,
                'JumlahSkorYangDiHasilkanB13' => $JumlahSkorYangDiHasilkanB13,
                'SkorTambahanJumlahSkorB13' => $SkorTambahanJumlahSkorB13,
                'SkorTambahanJumlahBobotSubItemB13' => $SkorTambahanJumlahBobotSubItemB13,

                'B14' => $B14,
                'scorB14' => $scorB14,
                'scorMaxB14' => $scorMaxB14,
                'scorSubItemB14' => $scorSubItemB14,
                'fileB14' => $file_b14,
                'JumlahYangDihasilkanB14_2_in' => $JumlahYangDihasilkanB14_2_in,
                'SkorTambahanB14_2' => $SkorTambahanB14_2,
                'JumlahYangDihasilkanB14_3_in' => $JumlahYangDihasilkanB14_3_in,
                'SkorTambahanB14_3' => $SkorTambahanB14_3,
                'JumlahYangDihasilkanB14_4_in' => $JumlahYangDihasilkanB14_4_in,
                'SkorTambahanB14_4' => $SkorTambahanB14_4,
                'JumlahYangDihasilkanB14_5_in' => $JumlahYangDihasilkanB14_5_in,
                'SkorTambahanB14_5' => $SkorTambahanB14_5,
                'SkorTambahanJumlahB14' => $SkorTambahanJumlahB14,
                'JumlahSkorYangDiHasilkanB14' => $JumlahSkorYangDiHasilkanB14,
                'SkorTambahanJumlahSkorB14' => $SkorTambahanJumlahSkorB14,
                'SkorTambahanJumlahBobotSubItemB14' => $SkorTambahanJumlahBobotSubItemB14,

                'B15' => $B15,
                'scorB15' => $scorB15,
                'scorMaxB15' => $scorMaxB15,
                'scorSubItemB15' => $scorSubItemB15,
                'fileB15' => $file_b15,
                'JumlahYangDihasilkanB15_3_in' => $JumlahYangDihasilkanB15_3_in,
                'SkorTambahanB15_3' => $SkorTambahanB15_3,
                'JumlahYangDihasilkanB15_4_in' => $JumlahYangDihasilkanB15_4_in,
                'SkorTambahanB15_4' => $SkorTambahanB15_4,
                'JumlahYangDihasilkanB15_5_in' => $JumlahYangDihasilkanB15_5_in,
                'SkorTambahanB15_5' => $SkorTambahanB15_5,
                'SkorTambahanJumlahB15' => $SkorTambahanJumlahB15,
                'JumlahSkorYangDiHasilkanB15' => $JumlahSkorYangDiHasilkanB15,
                'SkorTambahanJumlahSkorB15' => $SkorTambahanJumlahSkorB15,
                'SkorTambahanJumlahBobotSubItemB15' => $SkorTambahanJumlahBobotSubItemB15,

                'B16' => $B16,
                'scorB16' => $scorB16,
                'scorMaxB16' => $scorMaxB16,
                'scorSubItemB16' => $scorSubItemB16,
                'fileB16' => $file_b16,

                'B17' => $B17,
                'scorB17' => $scorB17,
                'scorMaxB17' => $scorMaxB17,
                'scorSubItemB17' => $scorSubItemB17,
                'fileB17' => $file_b17,
                'JumlahYangDihasilkanB17_2_in' => $JumlahYangDihasilkanB17_2_in,
                'SkorTambahanB17_2' => $SkorTambahanB17_2,
                'JumlahYangDihasilkanB17_3_in' => $JumlahYangDihasilkanB17_3_in,
                'SkorTambahanB17_3' => $SkorTambahanB17_3,
                'JumlahYangDihasilkanB17_4_in' => $JumlahYangDihasilkanB17_4_in,
                'SkorTambahanB17_4' => $SkorTambahanB17_4,
                'JumlahYangDihasilkanB17_5_in' => $JumlahYangDihasilkanB17_5_in,
                'SkorTambahanB17_5' => $SkorTambahanB17_5,
                'SkorTambahanJumlahB17' => $SkorTambahanJumlahB17,
                'JumlahSkorYangDiHasilkanB17' => $JumlahSkorYangDiHasilkanB17,
                'SkorTambahanJumlahSkorB17' => $SkorTambahanJumlahSkorB17,
                'SkorTambahanJumlahBobotSubItemB17' => $SkorTambahanJumlahBobotSubItemB17,

                'B18' => $B18,
                'scorB18' => $scorB18,
                'scorMaxB18' => $scorMaxB18,
                'scorSubItemB18' => $scorSubItemB18,
                'fileB18' => $file_b18,

                'TotalSkorPenelitianPointB' => $TotalSkorPenelitianPointB,
                'TotalKelebihaB1' => $TotalKelebihaB1,
                'TotalKelebihaB2' => $TotalKelebihaB2,
                'TotalKelebihaB3' => $TotalKelebihaB3,
                'TotalKelebihaB5' => $TotalKelebihaB5,
                'TotalKelebihaB6' => $TotalKelebihaB6,
                'TotalKelebihaB7' => $TotalKelebihaB7,
                'TotalKelebihaB9' => $TotalKelebihaB9,
                'TotalKelebihaB10' => $TotalKelebihaB10,
                'TotalKelebihaB11' => $TotalKelebihaB11,
                'TotalKelebihaB12' => $TotalKelebihaB12,
                'TotalKelebihaB13' => $TotalKelebihaB13,
                'TotalKelebihaB14' => $TotalKelebihaB14,
                'TotalKelebihaB15' => $TotalKelebihaB15,
                'TotalKelebihaB17' => $TotalKelebihaB17,
                'TotalKelebihanSkor' => $TotalKelebihanSkor,
                'NilaiPenelitian' => $NilaiPenelitian,
                'NilaiTambahPenelitian' => $NilaiTambahPenelitian,
                'NilaiTotalPenelitiandanKaryaIlmiah' => $NilaiTotalPenelitiandanKaryaIlmiah,
            ];


            $RecordData->update($update);
            DB::commit();
            toast('Update Point B successfully :)', 'success');
            return redirect()->route('point-C');
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point B fail :)', 'error');
            return redirect()->back();
        }
    }

    // functuin mencari data page search
    public function searchPoin()
    {
        $allPeriods = Period::all();

        $users = User::whereNotIn('name', [
            'superuser',
            'manajer',
            'it',
            'hrd',
            'lppm',
            'warek2',
            'upt',
            'baak',
            'keuangan',
            'lpm',
            'risbang',
            'gizi',
            'perawat',
            'bidan',
            'manajemen',
            'akuntansi',
            'bau',
            'warek1',
            'rektor',
            'ypsdmit'
        ])->get();

        return view('edit-point.hrd.search.searchDataPoinB', compact('users', 'allPeriods'));
    }

    // return view ke edit
    public function resultSearchPoin(Request $request)
    {
        $period_id = $request->input('period_id');
        $user_id = $request->input('id');

        // Cek user dan relasi jabatan
        $user = User::with('jabatan')->find($user_id);

        if (!$user) {
            return view('menu.menu-empty');
        }

        // Ambil data point_b dari tabel
        $resultData = DB::table('users')
            ->leftJoin('point_b', 'point_b.new_user_id', '=', 'users.id')
            ->select('users.name', 'users.email', 'point_b.*')
            ->where('users.id', '=', $user_id)
            ->where('point_b.period_id', '=', $period_id)
            ->first();

        if (!$resultData) {
            return view('menu.menu-empty');
        }

        // Cek apakah user adalah dosen dan sesuai jabatan
        if ($user->jabatan) {
            $jabatanName = strtolower($user->jabatan->name);
            $dosenJabatan = ['asisten ahli', 'lektor', 'lektor kepala', 'guru besar', 'profesor'];

            if (in_array($jabatanName, $dosenJabatan)) {
                $viewName = str_replace(' ', '-', $jabatanName);

                return view("edit-point.hrd.dosen.point-b.$viewName", [
                    'user' => $user,
                    'data' => $resultData,
                    'editMode' => true,
                ]);
            }
        }

        // View default untuk non-dosen
        return view('edit-point.hrd.update.EditPointBhrd', [
            'user' => $user,
            'data' => $resultData,
            'editMode' => true,
        ]);
    }


    public function updateHrd(Request $request, PointB $pointB, $PointId)
    {
        $request->validate([
            'fileB1' => 'mimes:pdf',
            'fileB2' => 'mimes:pdf',
            'fileB3' => 'mimes:pdf',
            'fileB4' => 'mimes:pdf',
            'fileB5' => 'mimes:pdf',
            'fileB6' => 'mimes:pdf',
            'fileB7' => 'mimes:pdf',
            'fileB8' => 'mimes:pdf',
            'fileB9' => 'mimes:pdf',
            'fileB10' => 'mimes:pdf',
            'fileB11' => 'mimes:pdf',
            'fileB12' => 'mimes:pdf',
            'fileB13' => 'mimes:pdf',
            'fileB14' => 'mimes:pdf',
            'fileB15' => 'mimes:pdf',
            'fileB16' => 'mimes:pdf',
            'fileB17' => 'mimes:pdf',
            'fileB18' => 'mimes:pdf',
        ]);

        DB::beginTransaction();
        try {
            $period_id = $request->input('period_id'); // Mendapatkan period_id dari input form
            // Menggunakan findOrFail untuk mencari data PointA berdasarkan new_user_id dan period_id
            $RecordData = PointB::where('new_user_id', $PointId)
                ->where('period_id', $period_id)
                ->firstOrFail();

            // Request put data update
            $B1 = $request->B1;
            $scorB1 = $request->scorB1;
            $scorMaxB1 = $request->scorMaxB1;
            $scorSubItemB1 = $request->scorSubItemB1;

            if ($request->hasFile('fileB1')) {
                if ($RecordData->fileB1 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB1))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB1);
                }
                $file_b1 = $request->file('fileB1')->store('uploads/Point-b', 'public');
            } else {
                $file_b1 = $RecordData->fileB1;
            }

            $JumlahYangDihasilkanB1_2_in = $request->JumlahYangDihasilkanB1_2;
            $SkorTambahanB1_2 = $request->SkorTambahanB1_2;
            $JumlahYangDihasilkanB1_3_in = $request->JumlahYangDihasilkanB1_3;
            $SkorTambahanB1_3 = $request->SkorTambahanB1_3;
            $JumlahYangDihasilkanB1_4_in = $request->JumlahYangDihasilkanB1_4;
            $SkorTambahanB1_4 = $request->SkorTambahanB1_4;
            $JumlahYangDihasilkanB1_5_in = $request->JumlahYangDihasilkanB1_5;
            $SkorTambahanB1_5 = $request->SkorTambahanB1_5;
            $SkorTambahanJumlahB1 = $request->SkorTambahanJumlahB1;
            $JumlahSkorYangDiHasilkanB1 = $request->JumlahSkorYangDiHasilkanB1;
            $SkorTambahanJumlahSkorB1 = $request->SkorTambahanJumlahSkorB1;
            $SkorTambahanJumlahBobotSubItemB1 = $request->SkorTambahanJumlahBobotSubItemB1;

            $B2 = $request->B2;
            $scorB2 = $request->scorB2;
            $scorMaxB2 = $request->scorMaxB2;
            $scorSubItemB2 = $request->scorSubItemB2;

            if ($request->hasFile('fileB2')) {
                if ($RecordData->fileB2 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB2))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB2);
                }
                $file_b2 = $request->file('fileB2')->store('uploads/Point-b', 'public');
            } else {
                $file_b2 = $RecordData->fileB2;
            }

            $JumlahYangDihasilkanB2_4_in = $request->JumlahYangDihasilkanB2_4;
            $SkorTambahanB2_4 = $request->SkorTambahanB2_4;
            $JumlahYangDihasilkanB2_5_in = $request->JumlahYangDihasilkanB2_5;
            $SkorTambahanB2_5 = $request->SkorTambahanB2_5;
            $SkorTambahanJumlahB2 = $request->SkorTambahanJumlahB2;
            $JumlahSkorYangDiHasilkanB2 = $request->JumlahSkorYangDiHasilkanB2;
            $SkorTambahanJumlahSkorB2 = $request->SkorTambahanJumlahSkorB2;
            $SkorTambahanJumlahBobotSubItemB2 = $request->SkorTambahanJumlahBobotSubItemB2;


            $B3 = $request->B3;
            $scorB3 = $request->scorB3;
            $scorMaxB3 = $request->scorMaxB3;
            $scorSubItemB3 = $request->scorSubItemB3;

            if ($request->hasFile('fileB3')) {
                if ($RecordData->fileB3 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB3))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB3);
                }
                $file_b3 = $request->file('fileB3')->store('uploads/Point-b', 'public');
            } else {
                $file_b3 = $RecordData->fileB3;
            }

            $JumlahYangDihasilkanB3_4_in = $request->JumlahYangDihasilkanB3_4;
            $SkorTambahanB3_4 = $request->SkorTambahanB3_4;
            $JumlahYangDihasilkanB3_5_in = $request->JumlahYangDihasilkanB3_5;
            $SkorTambahanB3_5 = $request->SkorTambahanB3_5;
            $SkorTambahanJumlahB3 = $request->SkorTambahanJumlahB3;
            $JumlahSkorYangDiHasilkanB3 = $request->JumlahSkorYangDiHasilkanB3;
            $SkorTambahanJumlahSkorB3 = $request->SkorTambahanJumlahSkorB3;
            $SkorTambahanJumlahBobotSubItemB3 = $request->SkorTambahanJumlahBobotSubItemB3;

            $B4 = $request->B4;
            $scorB4 = $request->scorB4;
            $scorMaxB4 = $request->scorMaxB4;
            $scorSubItemB4 = $request->scorSubItemB4;

            if ($request->hasFile('fileB4')) {
                if ($RecordData->fileB4 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB4))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB4);
                }
                $file_b4 = $request->file('fileB4')->store('uploads/Point-b', 'public');
            } else {
                $file_b4 = $RecordData->fileB4;
            }

            $B5 = $request->B5;
            $scorB5 = $request->scorB5;
            $scorMaxB5 = $request->scorMaxB5;
            $scorSubItemB5 = $request->scorSubItemB5;

            if ($request->hasFile('fileB5')) {
                if ($RecordData->fileB5 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB5))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB5);
                }
                $file_b5 = $request->file('fileB5')->store('uploads/Point-b', 'public');
            } else {
                $file_b5 = $RecordData->fileB5;
            }

            $JumlahYangDihasilkanB5_5_in = $request->JumlahYangDihasilkanB5_5;
            $SkorTambahanB5_5 = $request->SkorTambahanB5_5;
            $SkorTambahanJumlahB5 = $request->SkorTambahanJumlahB5;
            $JumlahSkorYangDiHasilkanB5 = $request->JumlahSkorYangDiHasilkanB5;
            $SkorTambahanJumlahSkorB5 = $request->SkorTambahanJumlahSkorB5;
            $SkorTambahanJumlahBobotSubItemB5 = $request->SkorTambahanJumlahBobotSubItemB5;

            $B6 = $request->B6;
            $scorB6 = $request->scorB6;
            $scorMaxB6 = $request->scorMaxB6;
            $scorSubItemB6 = $request->scorSubItemB6;

            if ($request->hasFile('fileB6')) {
                if ($RecordData->fileB6 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB6))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB6);
                }
                $file_b6 = $request->file('fileB6')->store('uploads/Point-b', 'public');
            } else {
                $file_b6 = $RecordData->fileB6;
            }

            $JumlahYangDihasilkanB6_5_in = $request->JumlahYangDihasilkanB6_5;
            $SkorTambahanB6_5 = $request->SkorTambahanB6_5;
            $SkorTambahanJumlahB6 = $request->SkorTambahanJumlahB6;
            $JumlahSkorYangDiHasilkanB6 = $request->JumlahSkorYangDiHasilkanB6;
            $SkorTambahanJumlahSkorB6 = $request->SkorTambahanJumlahSkorB6;
            $SkorTambahanJumlahBobotSubItemB6 = $request->SkorTambahanJumlahBobotSubItemB6;

            $B7 = $request->B7;
            $scorB7 = $request->scorB7;
            $scorMaxB7 = $request->scorMaxB7;
            $scorSubItemB7 = $request->scorSubItemB7;

            if ($request->hasFile('fileB7')) {
                if ($RecordData->fileB7 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB7))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB7);
                }
                $file_b7 = $request->file('fileB7')->store('uploads/Point-b', 'public');
            } else {
                $file_b7 = $RecordData->fileB7;
            }

            $JumlahYangDihasilkanB7_5_in = $request->JumlahYangDihasilkanB7_5;
            $SkorTambahanB7_5 = $request->SkorTambahanB7_5;
            $SkorTambahanJumlahB7 = $request->SkorTambahanJumlahB7;
            $JumlahSkorYangDiHasilkanB7 = $request->JumlahSkorYangDiHasilkanB7;
            $SkorTambahanJumlahSkorB7 = $request->SkorTambahanJumlahSkorB7;
            $SkorTambahanJumlahBobotSubItemB7 = $request->SkorTambahanJumlahBobotSubItemB7;

            $B8 = $request->B8;
            $scorB8 = $request->scorB8;
            $scorMaxB8 = $request->scorMaxB8;
            $scorSubItemB8 = $request->scorSubItemB8;

            if ($request->hasFile('fileB8')) {
                if ($RecordData->fileB8 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB8))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB8);
                }
                $file_b8 = $request->file('fileB8')->store('uploads/Point-b', 'public');
            } else {
                $file_b8 = $RecordData->fileB8;
            }

            $B9 = $request->B9;
            $scorB9 = $request->scorB9;
            $scorMaxB9 = $request->scorMaxB9;
            $scorSubItemB9 = $request->scorSubItemB9;

            if ($request->hasFile('fileB9')) {
                if ($RecordData->fileB9 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB9))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB9);
                }
                $file_b9 = $request->file('fileB9')->store('uploads/Point-b', 'public');
            } else {
                $file_b9 = $RecordData->fileB9;
            }

            $JumlahYangDihasilkanB9_3_in = $request->JumlahYangDihasilkanB9_3;
            $SkorTambahanB9_3 = $request->SkorTambahanB9_3;
            $JumlahYangDihasilkanB9_5_in = $request->JumlahYangDihasilkanB9_5;
            $SkorTambahanB9_5 = $request->SkorTambahanB9_5;
            $SkorTambahanJumlahB9 = $request->SkorTambahanJumlahB9;
            $JumlahSkorYangDiHasilkanB9 = $request->JumlahSkorYangDiHasilkanB9;
            $SkorTambahanJumlahSkorB9 = $request->SkorTambahanJumlahSkorB9;
            $SkorTambahanJumlahBobotSubItemB9 = $request->SkorTambahanJumlahBobotSubItemB9;

            $B10 = $request->B10;
            $scorB10 = $request->scorB10;
            $scorMaxB10 = $request->scorMaxB10;
            $scorSubItemB10 = $request->scorSubItemB10;

            if ($request->hasFile('fileB10')) {
                if ($RecordData->fileB10 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB10))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB10);
                }
                $file_b10 = $request->file('fileB10')->store('uploads/Point-b', 'public');
            } else {
                $file_b10 = $RecordData->fileB10;
            }

            $JumlahYangDihasilkanB10_3_in = $request->JumlahYangDihasilkanB10_3;
            $SkorTambahanB10_3 = $request->SkorTambahanB10_3;
            $JumlahYangDihasilkanB10_5_in = $request->JumlahYangDihasilkanB10_5;
            $SkorTambahanB10_5 = $request->SkorTambahanB10_5;
            $SkorTambahanJumlahB10 = $request->SkorTambahanJumlahB10;
            $JumlahSkorYangDiHasilkanB10 = $request->JumlahSkorYangDiHasilkanB10;
            $SkorTambahanJumlahSkorB10 = $request->SkorTambahanJumlahSkorB10;
            $SkorTambahanJumlahBobotSubItemB10 = $request->SkorTambahanJumlahBobotSubItemB10;

            $B11 = $request->B11;
            $scorB11 = $request->scorB11;
            $scorMaxB11 = $request->scorMaxB11;
            $scorSubItemB11 = $request->scorSubItemB11;

            if ($request->hasFile('fileB11')) {
                if ($RecordData->fileB11 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB11))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB11);
                }
                $file_b11 = $request->file('fileB11')->store('uploads/Point-b', 'public');
            } else {
                $file_b11 = $RecordData->fileB11;
            }

            $JumlahYangDihasilkanB11_5_in = $request->JumlahYangDihasilkanB11_5;
            $SkorTambahanB11_5 = $request->SkorTambahanB11_5;
            $SkorTambahanJumlahB11 = $request->SkorTambahanJumlahB11;
            $JumlahSkorYangDiHasilkanB11 = $request->JumlahSkorYangDiHasilkanB11;
            $SkorTambahanJumlahSkorB11 = $request->SkorTambahanJumlahSkorB11;
            $SkorTambahanJumlahBobotSubItemB11 = $request->SkorTambahanJumlahBobotSubItemB11;

            $B12 = $request->B12;
            $scorB12 = $request->scorB12;
            $scorMaxB12 = $request->scorMaxB12;
            $scorSubItemB12 = $request->scorSubItemB12;

            if ($request->hasFile('fileB12')) {
                if ($RecordData->fileB12 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB12))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB12);
                }
                $file_b12 = $request->file('fileB12')->store('uploads/Point-b', 'public');
            } else {
                $file_b12 = $RecordData->fileB12;
            }

            $JumlahYangDihasilkanB12_5_in = $request->JumlahYangDihasilkanB12_5;
            $SkorTambahanB12_5 = $request->SkorTambahanB12_5;
            $SkorTambahanJumlahB12 = $request->SkorTambahanJumlahB12;
            $JumlahSkorYangDiHasilkanB12 = $request->JumlahSkorYangDiHasilkanB12;
            $SkorTambahanJumlahSkorB12 = $request->SkorTambahanJumlahSkorB12;
            $SkorTambahanJumlahBobotSubItemB12 = $request->SkorTambahanJumlahBobotSubItemB12;

            $B13 = $request->B13;
            $scorB13 = $request->scorB13;
            $scorMaxB13 = $request->scorMaxB13;
            $scorSubItemB13 = $request->scorSubItemB13;

            if ($request->hasFile('fileB13')) {
                if ($RecordData->fileB13 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB13))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB13);
                }
                $file_b13 = $request->file('fileB13')->store('uploads/Point-b', 'public');
            } else {
                $file_b13 = $RecordData->fileB13;
            }

            $JumlahYangDihasilkanB13_3_in = $request->JumlahYangDihasilkanB13_3;
            $SkorTambahanB13_3 = $request->SkorTambahanB13_3;
            $JumlahYangDihasilkanB13_4_in = $request->JumlahYangDihasilkanB13_4;
            $SkorTambahanB13_4 = $request->SkorTambahanB13_4;
            $JumlahYangDihasilkanB13_5_in = $request->JumlahYangDihasilkanB13_5;
            $SkorTambahanB13_5 = $request->SkorTambahanB13_5;
            $SkorTambahanJumlahB13 = $request->SkorTambahanJumlahB13;
            $JumlahSkorYangDiHasilkanB13 = $request->JumlahSkorYangDiHasilkanB13;
            $SkorTambahanJumlahSkorB13 = $request->SkorTambahanJumlahSkorB13;
            $SkorTambahanJumlahBobotSubItemB13 = $request->SkorTambahanJumlahBobotSubItemB13;

            $B14 = $request->B14;
            $scorB14 = $request->scorB14;
            $scorMaxB14 = $request->scorMaxB14;
            $scorSubItemB14 = $request->scorSubItemB14;

            if ($request->hasFile('fileB14')) {
                if ($RecordData->fileB14 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB14))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB14);
                }
                $file_b14 = $request->file('fileB14')->store('uploads/Point-b', 'public');
            } else {
                $file_b14 = $RecordData->fileB14;
            }

            $JumlahYangDihasilkanB14_2_in = $request->JumlahYangDihasilkanB14_2;
            $SkorTambahanB14_2 = $request->SkorTambahanB14_2;
            $JumlahYangDihasilkanB14_3_in = $request->JumlahYangDihasilkanB14_3;
            $SkorTambahanB14_3 = $request->SkorTambahanB14_3;
            $JumlahYangDihasilkanB14_4_in = $request->JumlahYangDihasilkanB14_4;
            $SkorTambahanB14_4 = $request->SkorTambahanB14_4;
            $JumlahYangDihasilkanB14_5_in = $request->JumlahYangDihasilkanB14_5;
            $SkorTambahanB14_5 = $request->SkorTambahanB14_5;
            $SkorTambahanJumlahB14 = $request->SkorTambahanJumlahB14;
            $JumlahSkorYangDiHasilkanB14 = $request->JumlahSkorYangDiHasilkanB14;
            $SkorTambahanJumlahSkorB14 = $request->SkorTambahanJumlahSkorB14;
            $SkorTambahanJumlahBobotSubItemB14 = $request->SkorTambahanJumlahBobotSubItemB14;

            $B15 = $request->B15;
            $scorB15 = $request->scorB15;
            $scorMaxB15 = $request->scorMaxB15;
            $scorSubItemB15 = $request->scorSubItemB15;

            if ($request->hasFile('fileB15')) {
                if ($RecordData->fileB15 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB15))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB15);
                }
                $file_b15 = $request->file('fileB15')->store('uploads/Point-b', 'public');
            } else {
                $file_b15 = $RecordData->fileB15;
            }

            $JumlahYangDihasilkanB15_3_in = $request->JumlahYangDihasilkanB15_3;
            $SkorTambahanB15_3 = $request->SkorTambahanB15_3;
            $JumlahYangDihasilkanB15_4_in = $request->JumlahYangDihasilkanB15_4;
            $SkorTambahanB15_4 = $request->SkorTambahanB15_4;
            $JumlahYangDihasilkanB15_5_in = $request->JumlahYangDihasilkanB15_5;
            $SkorTambahanB15_5 = $request->SkorTambahanB15_5;
            $SkorTambahanJumlahB15 = $request->SkorTambahanJumlahB15;
            $JumlahSkorYangDiHasilkanB15 = $request->JumlahSkorYangDiHasilkanB15;
            $SkorTambahanJumlahSkorB15 = $request->SkorTambahanJumlahSkorB15;
            $SkorTambahanJumlahBobotSubItemB15 = $request->SkorTambahanJumlahBobotSubItemB15;

            $B16 = $request->B16;
            $scorB16 = $request->scorB16;
            $scorMaxB16 = $request->scorMaxB16;
            $scorSubItemB16 = $request->scorSubItemB16;

            if ($request->hasFile('fileB16')) {
                if ($RecordData->fileB16 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB16))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB16);
                }
                $file_b16 = $request->file('fileB16')->store('uploads/Point-b', 'public');
            } else {
                $file_b16 = $RecordData->fileB16;
            }

            $B17 = $request->B17;
            $scorB17 = $request->scorB17;
            $scorMaxB17 = $request->scorMaxB17;
            $scorSubItemB17 = $request->scorSubItemB17;

            if ($request->hasFile('fileB17')) {
                if ($RecordData->fileB17 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB17))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB17);
                }
                $file_b17 = $request->file('fileB17')->store('uploads/Point-b', 'public');
            } else {
                $file_b17 = $RecordData->fileB17;
            }

            $JumlahYangDihasilkanB17_2_in = $request->JumlahYangDihasilkanB17_2;
            $SkorTambahanB17_2 = $request->SkorTambahanB17_2;
            $JumlahYangDihasilkanB17_3_in = $request->JumlahYangDihasilkanB17_3;
            $SkorTambahanB17_3 = $request->SkorTambahanB17_3;
            $JumlahYangDihasilkanB17_4_in = $request->JumlahYangDihasilkanB17_4;
            $SkorTambahanB17_4 = $request->SkorTambahanB17_4;
            $JumlahYangDihasilkanB17_5_in = $request->JumlahYangDihasilkanB17_5;
            $SkorTambahanB17_5 = $request->SkorTambahanB17_5;
            $SkorTambahanJumlahB17 = $request->SkorTambahanJumlahB17;
            $JumlahSkorYangDiHasilkanB17 = $request->JumlahSkorYangDiHasilkanB17;
            $SkorTambahanJumlahSkorB17 = $request->SkorTambahanJumlahSkorB17;
            $SkorTambahanJumlahBobotSubItemB17 = $request->SkorTambahanJumlahBobotSubItemB17;

            $B18 = $request->B18;
            $scorB18 = $request->scorB18;
            $scorMaxB18 = $request->scorMaxB18;
            $scorSubItemB18 = $request->scorSubItemB18;

            if ($request->hasFile('fileB18')) {
                if ($RecordData->fileB18 && file_exists(storage_path('app/public/uploads/Point-b/' . $RecordData->fileB18))) {
                    \Storage::delete('public/uploads/Point-b/' . $RecordData->fileB18);
                }
                $file_b18 = $request->file('fileB18')->store('uploads/Point-b', 'public');
            } else {
                $file_b18 = $RecordData->fileB18;
            }

            $TotalSkorPenelitianPointB = $request->TotalSkorPenelitianPointB;
            $TotalKelebihaB1 = $request->TotalKelebihaB1;
            $TotalKelebihaB2 = $request->TotalKelebihaB2;
            $TotalKelebihaB3 = $request->TotalKelebihaB3;
            $TotalKelebihaB5 = $request->TotalKelebihaB5;
            $TotalKelebihaB6 = $request->TotalKelebihaB6;
            $TotalKelebihaB7 = $request->TotalKelebihaB7;
            $TotalKelebihaB9 = $request->TotalKelebihaB9;
            $TotalKelebihaB10 = $request->TotalKelebihaB10;
            $TotalKelebihaB11 = $request->TotalKelebihaB11;
            $TotalKelebihaB12 = $request->TotalKelebihaB12;
            $TotalKelebihaB13 = $request->TotalKelebihaB13;
            $TotalKelebihaB14 = $request->TotalKelebihaB14;
            $TotalKelebihaB15 = $request->TotalKelebihaB15;
            $TotalKelebihaB17 = $request->TotalKelebihaB17;
            $TotalKelebihanSkor = $request->TotalKelebihanSkor;
            $NilaiPenelitian = $request->NilaiPenelitian;
            $NilaiTambahPenelitian = $request->NilaiTambahPenelitian;
            $NilaiTotalPenelitiandanKaryaIlmiah = $request->NilaiTotalPenelitiandanKaryaIlmiah;


            $update = [
                'B1' => $B1,
                'scorB1' => $scorB1,
                'scorMaxB1' => $scorMaxB1,
                'scorSubItemB1' => $scorSubItemB1,
                'fileB1' => $file_b1,
                'JumlahYangDihasilkanB1_2_in' => $JumlahYangDihasilkanB1_2_in,
                'SkorTambahanB1_2' => $SkorTambahanB1_2,
                'JumlahYangDihasilkanB1_3_in' => $JumlahYangDihasilkanB1_3_in,
                'SkorTambahanB1_3' => $SkorTambahanB1_3,
                'JumlahYangDihasilkanB1_4_in' => $JumlahYangDihasilkanB1_4_in,
                'SkorTambahanB1_4' => $SkorTambahanB1_4,
                'JumlahYangDihasilkanB1_5_in' => $JumlahYangDihasilkanB1_5_in,
                'SkorTambahanB1_5' => $SkorTambahanB1_5,
                'SkorTambahanJumlahB1' => $SkorTambahanJumlahB1,
                'JumlahSkorYangDiHasilkanB1' => $JumlahSkorYangDiHasilkanB1,
                'SkorTambahanJumlahSkorB1' => $SkorTambahanJumlahSkorB1,
                'SkorTambahanJumlahBobotSubItemB1' => $SkorTambahanJumlahBobotSubItemB1,

                'B2' => $B2,
                'scorB2' => $scorB2,
                'scorMaxB2' => $scorMaxB2,
                'scorSubItemB2' => $scorSubItemB2,
                'fileB2' => $file_b2,
                'JumlahYangDihasilkanB2_4_in' => $JumlahYangDihasilkanB2_4_in,
                'SkorTambahanB2_4' => $SkorTambahanB2_4,
                'JumlahYangDihasilkanB2_5_in' => $JumlahYangDihasilkanB2_5_in,
                'SkorTambahanB2_5' => $SkorTambahanB2_5,
                'SkorTambahanJumlahB2' => $SkorTambahanJumlahB2,
                'JumlahSkorYangDiHasilkanB2' => $JumlahSkorYangDiHasilkanB2,
                'SkorTambahanJumlahSkorB2' => $SkorTambahanJumlahSkorB2,
                'SkorTambahanJumlahBobotSubItemB2' => $SkorTambahanJumlahBobotSubItemB2,

                'B3' => $B3,
                'scorB3' => $scorB3,
                'scorMaxB3' => $scorMaxB3,
                'scorSubItemB3' => $scorSubItemB3,
                'fileB3' => $file_b3,
                'JumlahYangDihasilkanB3_4_in' => $JumlahYangDihasilkanB3_4_in,
                'SkorTambahanB3_4' => $SkorTambahanB3_4,
                'JumlahYangDihasilkanB3_5_in' => $JumlahYangDihasilkanB3_5_in,
                'SkorTambahanB3_5' => $SkorTambahanB3_5,
                'SkorTambahanJumlahB3' => $SkorTambahanJumlahB3,
                'JumlahSkorYangDiHasilkanB3' => $JumlahSkorYangDiHasilkanB3,
                'SkorTambahanJumlahSkorB3' => $SkorTambahanJumlahSkorB3,
                'SkorTambahanJumlahBobotSubItemB3' => $SkorTambahanJumlahBobotSubItemB3,

                'B4' => $B4,
                'scorB4' => $scorB4,
                'scorMaxB4' => $scorMaxB4,
                'scorSubItemB4' => $scorSubItemB4,
                'fileB4' => $file_b4,

                'B5' => $B5,
                'scorB5' => $scorB5,
                'scorMaxB5' => $scorMaxB5,
                'scorSubItemB5' => $scorSubItemB5,
                'fileB5' => $file_b5,
                'JumlahYangDihasilkanB5_5_in' => $JumlahYangDihasilkanB5_5_in,
                'SkorTambahanB5_5' => $SkorTambahanB5_5,
                'SkorTambahanJumlahB5' => $SkorTambahanJumlahB5,
                'JumlahSkorYangDiHasilkanB5' => $JumlahSkorYangDiHasilkanB5,
                'SkorTambahanJumlahSkorB5' => $SkorTambahanJumlahSkorB5,
                'SkorTambahanJumlahBobotSubItemB5' => $SkorTambahanJumlahBobotSubItemB5,

                'B6' => $B6,
                'scorB6' => $scorB6,
                'scorMaxB6' => $scorMaxB6,
                'scorSubItemB6' => $scorSubItemB6,
                'fileB6' => $file_b6,
                'JumlahYangDihasilkanB6_5_in' => $JumlahYangDihasilkanB6_5_in,
                'SkorTambahanB6_5' => $SkorTambahanB6_5,
                'SkorTambahanJumlahB6' => $SkorTambahanJumlahB6,
                'JumlahSkorYangDiHasilkanB6' => $JumlahSkorYangDiHasilkanB6,
                'SkorTambahanJumlahSkorB6' => $SkorTambahanJumlahSkorB6,
                'SkorTambahanJumlahBobotSubItemB6' => $SkorTambahanJumlahBobotSubItemB6,

                'B7' => $B7,
                'scorB7' => $scorB7,
                'scorMaxB7' => $scorMaxB7,
                'scorSubItemB7' => $scorSubItemB7,
                'fileB7' => $file_b7,
                'JumlahYangDihasilkanB7_5_in' => $JumlahYangDihasilkanB7_5_in,
                'SkorTambahanB7_5' => $SkorTambahanB7_5,
                'SkorTambahanJumlahB7' => $SkorTambahanJumlahB7,
                'JumlahSkorYangDiHasilkanB7' => $JumlahSkorYangDiHasilkanB7,
                'SkorTambahanJumlahSkorB7' => $SkorTambahanJumlahSkorB7,
                'SkorTambahanJumlahBobotSubItemB7' => $SkorTambahanJumlahBobotSubItemB7,

                'B8' => $B8,
                'scorB8' => $scorB8,
                'scorMaxB8' => $scorMaxB8,
                'scorSubItemB8' => $scorSubItemB8,
                'fileB8' => $file_b8,

                'B9' => $B9,
                'scorB9' => $scorB9,
                'scorMaxB9' => $scorMaxB9,
                'scorSubItemB9' => $scorSubItemB9,
                'fileB9' => $file_b9,
                'JumlahYangDihasilkanB9_3_in' => $JumlahYangDihasilkanB9_3_in,
                'SkorTambahanB9_3' => $SkorTambahanB9_3,
                'JumlahYangDihasilkanB9_5_in' => $JumlahYangDihasilkanB9_5_in,
                'SkorTambahanB9_5' => $SkorTambahanB9_5,
                'SkorTambahanJumlahB9' => $SkorTambahanJumlahB9,
                'JumlahSkorYangDiHasilkanB9' => $JumlahSkorYangDiHasilkanB9,
                'SkorTambahanJumlahSkorB9' => $SkorTambahanJumlahSkorB9,
                'SkorTambahanJumlahBobotSubItemB9' => $SkorTambahanJumlahBobotSubItemB9,

                'B10' => $B10,
                'scorB10' => $scorB10,
                'scorMaxB10' => $scorMaxB10,
                'scorSubItemB10' => $scorSubItemB10,
                'fileB10' => $file_b10,
                'JumlahYangDihasilkanB10_3_in' => $JumlahYangDihasilkanB10_3_in,
                'SkorTambahanB10_3' => $SkorTambahanB10_3,
                'JumlahYangDihasilkanB10_5_in' => $JumlahYangDihasilkanB10_5_in,
                'SkorTambahanB10_5' => $SkorTambahanB10_5,
                'SkorTambahanJumlahB10' => $SkorTambahanJumlahB10,
                'JumlahSkorYangDiHasilkanB10' => $JumlahSkorYangDiHasilkanB10,
                'SkorTambahanJumlahSkorB10' => $SkorTambahanJumlahSkorB10,
                'SkorTambahanJumlahBobotSubItemB10' => $SkorTambahanJumlahBobotSubItemB10,

                'B11' => $B11,
                'scorB11' => $scorB11,
                'scorMaxB11' => $scorMaxB11,
                'scorSubItemB11' => $scorSubItemB11,
                'fileB11' => $file_b11,
                'JumlahYangDihasilkanB11_5_in' => $JumlahYangDihasilkanB11_5_in,
                'SkorTambahanB11_5' => $SkorTambahanB11_5,
                'SkorTambahanJumlahB11' => $SkorTambahanJumlahB11,
                'JumlahSkorYangDiHasilkanB11' => $JumlahSkorYangDiHasilkanB11,
                'SkorTambahanJumlahSkorB11' => $SkorTambahanJumlahSkorB11,
                'SkorTambahanJumlahBobotSubItemB11' => $SkorTambahanJumlahBobotSubItemB11,

                'B12' => $B12,
                'scorB12' => $scorB12,
                'scorMaxB12' => $scorMaxB12,
                'scorSubItemB12' => $scorSubItemB12,
                'fileB12' => $file_b12,
                'JumlahYangDihasilkanB12_5_in' => $JumlahYangDihasilkanB12_5_in,
                'SkorTambahanB12_5' => $SkorTambahanB12_5,
                'SkorTambahanJumlahB12' => $SkorTambahanJumlahB12,
                'JumlahSkorYangDiHasilkanB12' => $JumlahSkorYangDiHasilkanB12,
                'SkorTambahanJumlahSkorB12' => $SkorTambahanJumlahSkorB12,
                'SkorTambahanJumlahBobotSubItemB12' => $SkorTambahanJumlahBobotSubItemB12,

                'B13' => $B13,
                'scorB13' => $scorB13,
                'scorMaxB13' => $scorMaxB13,
                'scorSubItemB13' => $scorSubItemB13,
                'fileB13' => $file_b13,
                'JumlahYangDihasilkanB13_3_in' => $JumlahYangDihasilkanB13_3_in,
                'SkorTambahanB13_3' => $SkorTambahanB13_3,
                'JumlahYangDihasilkanB13_4_in' => $JumlahYangDihasilkanB13_4_in,
                'SkorTambahanB13_4' => $SkorTambahanB13_4,
                'JumlahYangDihasilkanB13_5_in' => $JumlahYangDihasilkanB13_5_in,
                'SkorTambahanB13_5' => $SkorTambahanB13_5,
                'SkorTambahanJumlahB13' => $SkorTambahanJumlahB13,
                'JumlahSkorYangDiHasilkanB13' => $JumlahSkorYangDiHasilkanB13,
                'SkorTambahanJumlahSkorB13' => $SkorTambahanJumlahSkorB13,
                'SkorTambahanJumlahBobotSubItemB13' => $SkorTambahanJumlahBobotSubItemB13,

                'B14' => $B14,
                'scorB14' => $scorB14,
                'scorMaxB14' => $scorMaxB14,
                'scorSubItemB14' => $scorSubItemB14,
                'fileB14' => $file_b14,
                'JumlahYangDihasilkanB14_2_in' => $JumlahYangDihasilkanB14_2_in,
                'SkorTambahanB14_2' => $SkorTambahanB14_2,
                'JumlahYangDihasilkanB14_3_in' => $JumlahYangDihasilkanB14_3_in,
                'SkorTambahanB14_3' => $SkorTambahanB14_3,
                'JumlahYangDihasilkanB14_4_in' => $JumlahYangDihasilkanB14_4_in,
                'SkorTambahanB14_4' => $SkorTambahanB14_4,
                'JumlahYangDihasilkanB14_5_in' => $JumlahYangDihasilkanB14_5_in,
                'SkorTambahanB14_5' => $SkorTambahanB14_5,
                'SkorTambahanJumlahB14' => $SkorTambahanJumlahB14,
                'JumlahSkorYangDiHasilkanB14' => $JumlahSkorYangDiHasilkanB14,
                'SkorTambahanJumlahSkorB14' => $SkorTambahanJumlahSkorB14,
                'SkorTambahanJumlahBobotSubItemB14' => $SkorTambahanJumlahBobotSubItemB14,

                'B15' => $B15,
                'scorB15' => $scorB15,
                'scorMaxB15' => $scorMaxB15,
                'scorSubItemB15' => $scorSubItemB15,
                'fileB15' => $file_b15,
                'JumlahYangDihasilkanB15_3_in' => $JumlahYangDihasilkanB15_3_in,
                'SkorTambahanB15_3' => $SkorTambahanB15_3,
                'JumlahYangDihasilkanB15_4_in' => $JumlahYangDihasilkanB15_4_in,
                'SkorTambahanB15_4' => $SkorTambahanB15_4,
                'JumlahYangDihasilkanB15_5_in' => $JumlahYangDihasilkanB15_5_in,
                'SkorTambahanB15_5' => $SkorTambahanB15_5,
                'SkorTambahanJumlahB15' => $SkorTambahanJumlahB15,
                'JumlahSkorYangDiHasilkanB15' => $JumlahSkorYangDiHasilkanB15,
                'SkorTambahanJumlahSkorB15' => $SkorTambahanJumlahSkorB15,
                'SkorTambahanJumlahBobotSubItemB15' => $SkorTambahanJumlahBobotSubItemB15,

                'B16' => $B16,
                'scorB16' => $scorB16,
                'scorMaxB16' => $scorMaxB16,
                'scorSubItemB16' => $scorSubItemB16,
                'fileB16' => $file_b16,

                'B17' => $B17,
                'scorB17' => $scorB17,
                'scorMaxB17' => $scorMaxB17,
                'scorSubItemB17' => $scorSubItemB17,
                'fileB17' => $file_b17,
                'JumlahYangDihasilkanB17_2_in' => $JumlahYangDihasilkanB17_2_in,
                'SkorTambahanB17_2' => $SkorTambahanB17_2,
                'JumlahYangDihasilkanB17_3_in' => $JumlahYangDihasilkanB17_3_in,
                'SkorTambahanB17_3' => $SkorTambahanB17_3,
                'JumlahYangDihasilkanB17_4_in' => $JumlahYangDihasilkanB17_4_in,
                'SkorTambahanB17_4' => $SkorTambahanB17_4,
                'JumlahYangDihasilkanB17_5_in' => $JumlahYangDihasilkanB17_5_in,
                'SkorTambahanB17_5' => $SkorTambahanB17_5,
                'SkorTambahanJumlahB17' => $SkorTambahanJumlahB17,
                'JumlahSkorYangDiHasilkanB17' => $JumlahSkorYangDiHasilkanB17,
                'SkorTambahanJumlahSkorB17' => $SkorTambahanJumlahSkorB17,
                'SkorTambahanJumlahBobotSubItemB17' => $SkorTambahanJumlahBobotSubItemB17,

                'B18' => $B18,
                'scorB18' => $scorB18,
                'scorMaxB18' => $scorMaxB18,
                'scorSubItemB18' => $scorSubItemB18,
                'fileB18' => $file_b18,

                'TotalSkorPenelitianPointB' => $TotalSkorPenelitianPointB,
                'TotalKelebihaB1' => $TotalKelebihaB1,
                'TotalKelebihaB2' => $TotalKelebihaB2,
                'TotalKelebihaB3' => $TotalKelebihaB3,
                'TotalKelebihaB5' => $TotalKelebihaB5,
                'TotalKelebihaB6' => $TotalKelebihaB6,
                'TotalKelebihaB7' => $TotalKelebihaB7,
                'TotalKelebihaB9' => $TotalKelebihaB9,
                'TotalKelebihaB10' => $TotalKelebihaB10,
                'TotalKelebihaB11' => $TotalKelebihaB11,
                'TotalKelebihaB12' => $TotalKelebihaB12,
                'TotalKelebihaB13' => $TotalKelebihaB13,
                'TotalKelebihaB14' => $TotalKelebihaB14,
                'TotalKelebihaB15' => $TotalKelebihaB15,
                'TotalKelebihaB17' => $TotalKelebihaB17,
                'TotalKelebihanSkor' => $TotalKelebihanSkor,
                'NilaiPenelitian' => $NilaiPenelitian,
                'NilaiTambahPenelitian' => $NilaiTambahPenelitian,
                'NilaiTotalPenelitiandanKaryaIlmiah' => $NilaiTotalPenelitiandanKaryaIlmiah,
            ];


            $RecordData->update($update);
            DB::commit();
            toast('Update Point B successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Update Point B fail :)', 'error');
            return redirect()->back();
        }
    }
}
