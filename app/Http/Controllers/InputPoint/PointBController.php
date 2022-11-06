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
            $new_data = new PointB();
            $new_data->B1 = $request->get('B1');
            $new_data->scorB1 = $request->get('scorB1');
            $new_data->scorMaxB1 = $request->get('scorMaxB1');
            $new_data->scorSubItemB1 = $request->get('scorSubItemB1');

            if ($request->hasFile('fileB1')) {
                $fileName = $request->file('fileB1')->store('uploads/Point-b', 'public');
                $new_data->fileB1 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB1_2_in = $request->get('JumlahYangDihasilkanB1_2');
            $new_data->SkorTambahanB1_2 = $request->get('SkorTambahanB1_2');
            $new_data->JumlahYangDihasilkanB1_3_in = $request->get('JumlahYangDihasilkanB1_3');
            $new_data->SkorTambahanB1_3 = $request->get('SkorTambahanB1_3');
            $new_data->JumlahYangDihasilkanB1_4_in = $request->get('JumlahYangDihasilkanB1_4');
            $new_data->SkorTambahanB1_4 = $request->get('SkorTambahanB1_4');
            $new_data->JumlahYangDihasilkanB1_5_in = $request->get('JumlahYangDihasilkanB1_5');
            $new_data->SkorTambahanB1_5 = $request->get('SkorTambahanB1_5');
            $new_data->SkorTambahanJumlahB1 = $request->get('SkorTambahanJumlahB1');
            $new_data->JumlahSkorYangDiHasilkanB1 = $request->get('JumlahSkorYangDiHasilkanB1');
            $new_data->SkorTambahanJumlahSkorB1 = $request->get('SkorTambahanJumlahSkorB1');
            $new_data->SkorTambahanJumlahBobotSubItemB1 = $request->get('SkorTambahanJumlahBobotSubItemB1');

            $new_data->B2 = $request->get('B2');
            $new_data->scorB2 = $request->get('scorB2');
            $new_data->scorMaxB2 = $request->get('scorMaxB2');
            $new_data->scorSubItemB2 = $request->get('scorSubItemB2');

            if ($request->hasFile('fileB2')) {
                $fileName = $request->file('fileB2')->store('uploads/Point-b', 'public');
                $new_data->fileB2 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB2_4_in = $request->get('JumlahYangDihasilkanB2_4');
            $new_data->SkorTambahanB2_4 = $request->get('SkorTambahanB2_4');
            $new_data->JumlahYangDihasilkanB2_5_in = $request->get('JumlahYangDihasilkanB2_5');
            $new_data->SkorTambahanB2_5 = $request->get('SkorTambahanB2_5');
            $new_data->SkorTambahanJumlahB2 = $request->get('SkorTambahanJumlahB2');
            $new_data->JumlahSkorYangDiHasilkanB2 = $request->get('JumlahSkorYangDiHasilkanB2');
            $new_data->SkorTambahanJumlahSkorB2 = $request->get('SkorTambahanJumlahSkorB2');
            $new_data->SkorTambahanJumlahBobotSubItemB2 = $request->get('SkorTambahanJumlahBobotSubItemB2');

            $new_data->B3 = $request->get('B3');
            $new_data->scorB3 = $request->get('scorB3');
            $new_data->scorMaxB3 = $request->get('scorMaxB3');
            $new_data->scorSubItemB3 = $request->get('scorSubItemB3');

            if ($request->hasFile('fileB3')) {
                $fileName = $request->file('fileB3')->store('uploads/Point-b', 'public');
                $new_data->fileB3 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB3_4_in = $request->get('JumlahYangDihasilkanB3_4');
            $new_data->SkorTambahanB3_4 = $request->get('SkorTambahanB3_4');
            $new_data->JumlahYangDihasilkanB3_5_in = $request->get('JumlahYangDihasilkanB3_5');
            $new_data->SkorTambahanB3_5 = $request->get('SkorTambahanB3_5');
            $new_data->SkorTambahanJumlahB3 = $request->get('SkorTambahanJumlahB3');
            $new_data->JumlahSkorYangDiHasilkanB3 = $request->get('JumlahSkorYangDiHasilkanB3');
            $new_data->SkorTambahanJumlahSkorB3 = $request->get('SkorTambahanJumlahSkorB3');
            $new_data->SkorTambahanJumlahBobotSubItemB3 = $request->get('SkorTambahanJumlahBobotSubItemB3');

            $new_data->B4 = $request->get('B4');
            $new_data->scorB4 = $request->get('scorB4');
            $new_data->scorMaxB4 = $request->get('scorMaxB4');
            $new_data->scorSubItemB4 = $request->get('scorSubItemB4');

            if ($request->hasFile('fileB4')) {
                $fileName = $request->file('fileB4')->store('uploads/Point-b', 'public');
                $new_data->fileB4 = $fileName;
            }

            $new_data->B5 = $request->get('B5');
            $new_data->scorB5 = $request->get('scorB5');
            $new_data->scorMaxB5 = $request->get('scorMaxB5');
            $new_data->scorSubItemB5 = $request->get('scorSubItemB5');

            if ($request->hasFile('fileB5')) {
                $fileName = $request->file('fileB5')->store('uploads/Point-b', 'public');
                $new_data->fileB5 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB5_5_in = $request->get('JumlahYangDihasilkanB5_5');
            $new_data->SkorTambahanB5_5 = $request->get('SkorTambahanB5_5');
            $new_data->SkorTambahanJumlahB5 = $request->get('SkorTambahanJumlahB5');
            $new_data->JumlahSkorYangDiHasilkanB5 = $request->get('JumlahSkorYangDiHasilkanB5');
            $new_data->SkorTambahanJumlahSkorB5 = $request->get('SkorTambahanJumlahSkorB5');
            $new_data->SkorTambahanJumlahBobotSubItemB5 = $request->get('SkorTambahanJumlahBobotSubItemB5');

            $new_data->B6 = $request->get('B6');
            $new_data->scorB6 = $request->get('scorB6');
            $new_data->scorMaxB6 = $request->get('scorMaxB6');
            $new_data->scorSubItemB6 = $request->get('scorSubItemB6');

            if ($request->hasFile('fileB6')) {
                $fileName = $request->file('fileB6')->store('uploads/Point-b', 'public');
                $new_data->fileB6 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB6_5_in = $request->get('JumlahYangDihasilkanB6_5');
            $new_data->SkorTambahanB6_5 = $request->get('SkorTambahanB6_5');
            $new_data->SkorTambahanJumlahB6 = $request->get('SkorTambahanJumlahB6');
            $new_data->JumlahSkorYangDiHasilkanB6 = $request->get('JumlahSkorYangDiHasilkanB6');
            $new_data->SkorTambahanJumlahSkorB6 = $request->get('SkorTambahanJumlahSkorB6');
            $new_data->SkorTambahanJumlahBobotSubItemB6 = $request->get('SkorTambahanJumlahBobotSubItemB6');

            $new_data->B7 = $request->get('B7');
            $new_data->scorB7 = $request->get('scorB7');
            $new_data->scorMaxB7 = $request->get('scorMaxB7');
            $new_data->scorSubItemB7 = $request->get('scorSubItemB7');

            if ($request->hasFile('fileB7')) {
                $fileName = $request->file('fileB7')->store('uploads/Point-b', 'public');
                $new_data->fileB7 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB7_5_in = $request->get('JumlahYangDihasilkanB7_5');
            $new_data->SkorTambahanB7_5 = $request->get('SkorTambahanB7_5');
            $new_data->SkorTambahanJumlahB7 = $request->get('SkorTambahanJumlahB7');
            $new_data->JumlahSkorYangDiHasilkanB7 = $request->get('JumlahSkorYangDiHasilkanB7');
            $new_data->SkorTambahanJumlahSkorB7 = $request->get('SkorTambahanJumlahSkorB7');
            $new_data->SkorTambahanJumlahBobotSubItemB7 = $request->get('SkorTambahanJumlahBobotSubItemB7');

            $new_data->B8 = $request->get('B8');
            $new_data->scorB8 = $request->get('scorB8');
            $new_data->scorMaxB8 = $request->get('scorMaxB8');
            $new_data->scorSubItemB8 = $request->get('scorSubItemB8');

            if ($request->hasFile('fileB8')) {
                $fileName = $request->file('fileB8')->store('uploads/Point-b', 'public');
                $new_data->fileB8 = $fileName;
            }

            $new_data->B9 = $request->get('B9');
            $new_data->scorB9 = $request->get('scorB9');
            $new_data->scorMaxB9 = $request->get('scorMaxB9');
            $new_data->scorSubItemB9 = $request->get('scorSubItemB9');

            if ($request->hasFile('fileB9')) {
                $fileName = $request->file('fileB9')->store('uploads/Point-b', 'public');
                $new_data->fileB9 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB9_3_in = $request->get('JumlahYangDihasilkanB9_3');
            $new_data->SkorTambahanB9_3 = $request->get('SkorTambahanB9_3');
            $new_data->JumlahYangDihasilkanB9_5_in = $request->get('JumlahYangDihasilkanB9_5');
            $new_data->SkorTambahanB9_5 = $request->get('SkorTambahanB9_5');
            $new_data->SkorTambahanJumlahB9 = $request->get('SkorTambahanJumlahB9');
            $new_data->JumlahSkorYangDiHasilkanB9 = $request->get('JumlahSkorYangDiHasilkanB9');
            $new_data->SkorTambahanJumlahSkorB9 = $request->get('SkorTambahanJumlahSkorB9');
            $new_data->SkorTambahanJumlahBobotSubItemB9 = $request->get('SkorTambahanJumlahBobotSubItemB9');

            $new_data->B10 = $request->get('B10');
            $new_data->scorB10 = $request->get('scorB10');
            $new_data->scorMaxB10 = $request->get('scorMaxB10');
            $new_data->scorSubItemB10 = $request->get('scorSubItemB10');

            if ($request->hasFile('fileB10')) {
                $fileName = $request->file('fileB10')->store('uploads/Point-b', 'public');
                $new_data->fileB10 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB10_3_in = $request->get('JumlahYangDihasilkanB10_3');
            $new_data->SkorTambahanB10_3 = $request->get('SkorTambahanB10_3');
            $new_data->JumlahYangDihasilkanB10_5_in = $request->get('JumlahYangDihasilkanB10_5');
            $new_data->SkorTambahanB10_5 = $request->get('SkorTambahanB10_5');
            $new_data->SkorTambahanJumlahB10 = $request->get('SkorTambahanJumlahB10');
            $new_data->JumlahSkorYangDiHasilkanB10 = $request->get('JumlahSkorYangDiHasilkanB10');
            $new_data->SkorTambahanJumlahSkorB10 = $request->get('SkorTambahanJumlahSkorB10');
            $new_data->SkorTambahanJumlahBobotSubItemB10 = $request->get('SkorTambahanJumlahBobotSubItemB10');

            $new_data->B11 = $request->get('B11');
            $new_data->scorB11 = $request->get('scorB11');
            $new_data->scorMaxB11 = $request->get('scorMaxB11');
            $new_data->scorSubItemB11 = $request->get('scorSubItemB11');

            if ($request->hasFile('fileB11')) {
                $fileName = $request->file('fileB11')->store('uploads/Point-b', 'public');
                $new_data->fileB11 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB11_5_in = $request->get('JumlahYangDihasilkanB11_5');
            $new_data->SkorTambahanB11_5 = $request->get('SkorTambahanB11_5');
            $new_data->SkorTambahanJumlahB11 = $request->get('SkorTambahanJumlahB11');
            $new_data->JumlahSkorYangDiHasilkanB11 = $request->get('JumlahSkorYangDiHasilkanB11');
            $new_data->SkorTambahanJumlahSkorB11 = $request->get('SkorTambahanJumlahSkorB11');
            $new_data->SkorTambahanJumlahBobotSubItemB11 = $request->get('SkorTambahanJumlahBobotSubItemB11');

            $new_data->B12 = $request->get('B12');
            $new_data->scorB12 = $request->get('scorB12');
            $new_data->scorMaxB12 = $request->get('scorMaxB12');
            $new_data->scorSubItemB12 = $request->get('scorSubItemB12');

            if ($request->hasFile('fileB12')) {
                $fileName = $request->file('fileB12')->store('uploads/Point-b', 'public');
                $new_data->fileB12 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB12_5_in = $request->get('JumlahYangDihasilkanB12_5');
            $new_data->SkorTambahanB12_5 = $request->get('SkorTambahanB12_5');
            $new_data->SkorTambahanJumlahB12 = $request->get('SkorTambahanJumlahB12');
            $new_data->JumlahSkorYangDiHasilkanB12 = $request->get('JumlahSkorYangDiHasilkanB12');
            $new_data->SkorTambahanJumlahSkorB12 = $request->get('SkorTambahanJumlahSkorB12');
            $new_data->SkorTambahanJumlahBobotSubItemB12 = $request->get('SkorTambahanJumlahBobotSubItemB12');

            $new_data->B13 = $request->get('B13');
            $new_data->scorB13 = $request->get('scorB13');
            $new_data->scorMaxB13 = $request->get('scorMaxB13');
            $new_data->scorSubItemB13 = $request->get('scorSubItemB13');

            if ($request->hasFile('fileB13')) {
                $fileName = $request->file('fileB13')->store('uploads/Point-b', 'public');
                $new_data->fileB13 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB13_3_in = $request->get('JumlahYangDihasilkanB13_3');
            $new_data->SkorTambahanB13_3 = $request->get('SkorTambahanB13_3');
            $new_data->JumlahYangDihasilkanB13_4_in = $request->get('JumlahYangDihasilkanB13_4');
            $new_data->SkorTambahanB13_4 = $request->get('SkorTambahanB13_4');
            $new_data->JumlahYangDihasilkanB13_5_in = $request->get('JumlahYangDihasilkanB13_5');
            $new_data->SkorTambahanB13_5 = $request->get('SkorTambahanB13_5');
            $new_data->SkorTambahanJumlahB13 = $request->get('SkorTambahanJumlahB13');
            $new_data->JumlahSkorYangDiHasilkanB13 = $request->get('JumlahSkorYangDiHasilkanB13');
            $new_data->SkorTambahanJumlahSkorB13 = $request->get('SkorTambahanJumlahSkorB13');
            $new_data->SkorTambahanJumlahBobotSubItemB13 = $request->get('SkorTambahanJumlahBobotSubItemB13');

            $new_data->B14 = $request->get('B14');
            $new_data->scorB14 = $request->get('scorB14');
            $new_data->scorMaxB14 = $request->get('scorMaxB14');
            $new_data->scorSubItemB14 = $request->get('scorSubItemB14');

            if ($request->hasFile('fileB14')) {
                $fileName = $request->file('fileB14')->store('uploads/Point-b', 'public');
                $new_data->fileB14 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB14_2_in = $request->get('JumlahYangDihasilkanB14_2');
            $new_data->SkorTambahanB14_2 = $request->get('SkorTambahanB14_2');
            $new_data->JumlahYangDihasilkanB14_3_in = $request->get('JumlahYangDihasilkanB14_3');
            $new_data->SkorTambahanB14_3 = $request->get('SkorTambahanB14_3');
            $new_data->JumlahYangDihasilkanB14_4_in = $request->get('JumlahYangDihasilkanB14_4');
            $new_data->SkorTambahanB14_4 = $request->get('SkorTambahanB14_4');
            $new_data->JumlahYangDihasilkanB14_5_in = $request->get('JumlahYangDihasilkanB14_5');
            $new_data->SkorTambahanB14_5 = $request->get('SkorTambahanB14_5');
            $new_data->SkorTambahanJumlahB14 = $request->get('SkorTambahanJumlahB14');
            $new_data->JumlahSkorYangDiHasilkanB14 = $request->get('JumlahSkorYangDiHasilkanB14');
            $new_data->SkorTambahanJumlahSkorB14 = $request->get('SkorTambahanJumlahSkorB14');
            $new_data->SkorTambahanJumlahBobotSubItemB14 = $request->get('SkorTambahanJumlahBobotSubItemB14');

            $new_data->B15 = $request->get('B15');
            $new_data->scorB15 = $request->get('scorB15');
            $new_data->scorMaxB15 = $request->get('scorMaxB15');
            $new_data->scorSubItemB15 = $request->get('scorSubItemB15');

            if ($request->hasFile('fileB15')) {
                $fileName = $request->file('fileB15')->store('uploads/Point-b', 'public');
                $new_data->fileB15 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB15_3_in = $request->get('JumlahYangDihasilkanB15_3');
            $new_data->SkorTambahanB15_3 = $request->get('SkorTambahanB15_3');
            $new_data->JumlahYangDihasilkanB15_4_in = $request->get('JumlahYangDihasilkanB15_4');
            $new_data->SkorTambahanB15_4 = $request->get('SkorTambahanB15_4');
            $new_data->JumlahYangDihasilkanB15_5_in = $request->get('JumlahYangDihasilkanB15_5');
            $new_data->SkorTambahanB15_5 = $request->get('SkorTambahanB15_5');
            $new_data->SkorTambahanJumlahB15 = $request->get('SkorTambahanJumlahB15');
            $new_data->JumlahSkorYangDiHasilkanB15 = $request->get('JumlahSkorYangDiHasilkanB15');
            $new_data->SkorTambahanJumlahSkorB15 = $request->get('SkorTambahanJumlahSkorB15');
            $new_data->SkorTambahanJumlahBobotSubItemB15 = $request->get('SkorTambahanJumlahBobotSubItemB15');

            $new_data->B16 = $request->get('B16');
            $new_data->scorB16 = $request->get('scorB16');
            $new_data->scorMaxB16 = $request->get('scorMaxB16');
            $new_data->scorSubItemB16 = $request->get('scorSubItemB16');

            if ($request->hasFile('fileB16')) {
                $fileName = $request->file('fileB16')->store('uploads/Point-b', 'public');
                $new_data->fileB16 = $fileName;
            }

            $new_data->B17 = $request->get('B17');
            $new_data->scorB17 = $request->get('scorB17');
            $new_data->scorMaxB17 = $request->get('scorMaxB17');
            $new_data->scorSubItemB17 = $request->get('scorSubItemB17');

            if ($request->hasFile('fileB17')) {
                $fileName = $request->file('fileB17')->store('uploads/Point-b', 'public');
                $new_data->fileB17 = $fileName;
            }

            $new_data->JumlahYangDihasilkanB17_2_in = $request->get('JumlahYangDihasilkanB17_2');
            $new_data->SkorTambahanB17_2 = $request->get('SkorTambahanB17_2');
            $new_data->JumlahYangDihasilkanB17_3_in = $request->get('JumlahYangDihasilkanB17_3');
            $new_data->SkorTambahanB17_3 = $request->get('SkorTambahanB17_3');
            $new_data->JumlahYangDihasilkanB17_4_in = $request->get('JumlahYangDihasilkanB17_4');
            $new_data->SkorTambahanB17_4 = $request->get('SkorTambahanB17_4');
            $new_data->JumlahYangDihasilkanB17_5_in = $request->get('JumlahYangDihasilkanB17_5');
            $new_data->SkorTambahanB17_5 = $request->get('SkorTambahanB17_5');
            $new_data->SkorTambahanJumlahB17 = $request->get('SkorTambahanJumlahB17');
            $new_data->JumlahSkorYangDiHasilkanB17 = $request->get('JumlahSkorYangDiHasilkanB17');
            $new_data->SkorTambahanJumlahSkorB17 = $request->get('SkorTambahanJumlahSkorB17');
            $new_data->SkorTambahanJumlahBobotSubItemB17 = $request->get('SkorTambahanJumlahBobotSubItemB17');

            $new_data->B18 = $request->get('B18');
            $new_data->scorB18 = $request->get('scorB18');
            $new_data->scorMaxB18 = $request->get('scorMaxB18');
            $new_data->scorSubItemB18 = $request->get('scorSubItemB18');

            if ($request->hasFile('fileB18')) {
                $fileName = $request->file('fileB18')->store('uploads/Point-b', 'public');
                $new_data->fileB18 = $fileName;
            }

            $new_data->TotalSkorPenelitianPointB = $request->get('TotalSkorPenelitianPointB');
            $new_data->TotalKelebihaB1 = $request->get('TotalKelebihaB1');
            $new_data->TotalKelebihaB2 = $request->get('TotalKelebihaB2');
            $new_data->TotalKelebihaB3 = $request->get('TotalKelebihaB3');
            $new_data->TotalKelebihaB5 = $request->get('TotalKelebihaB5');
            $new_data->TotalKelebihaB6 = $request->get('TotalKelebihaB6');
            $new_data->TotalKelebihaB7 = $request->get('TotalKelebihaB7');
            $new_data->TotalKelebihaB9 = $request->get('TotalKelebihaB9');
            $new_data->TotalKelebihaB10 = $request->get('TotalKelebihaB10');
            $new_data->TotalKelebihaB11 = $request->get('TotalKelebihaB11');
            $new_data->TotalKelebihaB12 = $request->get('TotalKelebihaB12');
            $new_data->TotalKelebihaB13 = $request->get('TotalKelebihaB13');
            $new_data->TotalKelebihaB14 = $request->get('TotalKelebihaB14');
            $new_data->TotalKelebihaB15 = $request->get('TotalKelebihaB15');
            $new_data->TotalKelebihaB17 = $request->get('TotalKelebihaB17');
            $new_data->TotalKelebihanSkor = $request->get('TotalKelebihanSkor');
            $new_data->NilaiPenelitian = $request->get('NilaiPenelitian');
            $new_data->NilaiTambahPenelitian = $request->get('NilaiTambahPenelitian');
            $new_data->NilaiTotalPenelitiandanKaryaIlmiah = $request->get('NilaiTotalPenelitiandanKaryaIlmiah');
            $new_data->save();

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
