<?php

namespace App\Http\Controllers\iktisar\iktisarBulanan;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class iktisarBulananKaUnitController extends Controller
{
    public function create()
    {
        $users = User::whereNotIn('name', [
            'superuser', 'manajer', 'it', 'hrd', 'lppm', 'warek2', 'upt', 'baak', 'keuangan', 'lpm', 'risbang', 'gizi', 'perawat', 'bidan', 'manajemen', 'akuntansi', 'bau', 'warek1', 'rektor', 'ypsdmit'
        ])->get();
        return view('iktisar.iktisarBulananKaUnit.create', compact('users'));
    }
}
