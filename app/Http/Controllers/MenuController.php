<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function IndexMenuPoint()
    {
        // $data = DB::table('control_menu')->first();
        $data = Menu::first();
        // dd($data);
        return view('menu.menu-point', ['data' => $data]);
    }

    public function MenuPointSore(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = new Menu();
            $data->control_menu = $request->get('MenuPoint');
            $data->save();
            DB::commit();
            toast('Menu Update successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Menu Update fail :)', 'error');
            return redirect()->back();
        }
    }

    public function MenuPointUpdate(Request $request, $id_menu)
    {
        DB::beginTransaction();
        try {
            $RecordData =  Menu::where('id', $id_menu)->firstOrFail();
            $MenuPoint = $request->get('MenuPoint');
            $update = [
                'control_menu' => $MenuPoint,
            ];
            $RecordData->update($update);
            DB::commit();
            toast('Menu Update successfully :)', 'success');
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollBack();
            toast('Menu Update fail :)', 'error');
            return redirect()->back();
        }
    }
}
