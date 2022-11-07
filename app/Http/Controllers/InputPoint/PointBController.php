<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input-point.point-B');
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
            'fileB1' => 'required|mimes:pdf|max:2048',
            'fileB2' => 'required|mimes:pdf|max:2048',
            'fileB3' => 'required|mimes:pdf|max:2048',
            'fileB4' => 'required|mimes:pdf|max:2048',
            'fileB5' => 'required|mimes:pdf|max:2048',
            'fileB6' => 'required|mimes:pdf|max:2048',
            'fileB7' => 'required|mimes:pdf|max:2048',
            'fileB8' => 'required|mimes:pdf|max:2048',
            'fileB9' => 'required|mimes:pdf|max:2048',
            'fileB10' => 'required|mimes:pdf|max:2048',
            'fileB11' => 'required|mimes:pdf|max:2048',
            'fileB12' => 'required|mimes:pdf|max:2048',
            'fileB13' => 'required|mimes:pdf|max:2048',
            'fileB14' => 'required|mimes:pdf|max:2048',
            'fileB15' => 'required|mimes:pdf|max:2048',
            'fileB16' => 'required|mimes:pdf|max:2048',
            'fileB17' => 'required|mimes:pdf|max:2048',
            'fileB18' => 'required|mimes:pdf|max:2048',
        ]);


        DB::beginTransaction();
        try {
            $pointB = new PointB();
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
            $pointB->user_id = Auth()->id();
            $pointB->save();

            DB::commit();
            toast('Create new Point B successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Add Point B fail :)', 'error');
            return redirect()->back();
        }
        // return redirect()->route('point-B');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PointB  $pointB
     * @return \Illuminate\Http\Response
     */
    public function show(PointB $pointB)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointB  $pointB
     * @return \Illuminate\Http\Response
     */
    public function edit(PointB $pointB)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointB  $pointB
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointB $pointB)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointB  $pointB
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointB $pointB)
    {
        //
    }
}
