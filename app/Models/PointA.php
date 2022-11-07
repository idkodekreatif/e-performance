<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointA extends Model
{
    use HasFactory;

    protected $table = "point_a";
    // protected $fillable = [
    //     'A1', 'scorA1', 'scorMaxA1', 'scorSubItemA1', 'A2', 'scorA2', 'scorMaxA2', 'scorSubItemA2', 'A3', 'scorA3', 'scorMaxA3', 'scorSubItemA3', 'A4', 'scorA4', 'scorMaxA4', 'scorSubItemA4', 'A5', 'scorA5', 'scorMaxA5', 'scorSubItemA5', 'A6', 'scorA6', 'scorMaxA6', 'scorSubItemA6', 'A7', 'scorA7', 'scorMaxA7', 'scorSubItemA7', 'A8', 'scorA8', 'scorMaxA8', 'scorSubItemA8', 'A9', 'scorA9', 'scorMaxA9', 'scorSubItemA9', 'A10', 'scorA10', 'scorMaxA10', 'scorSubItemA10', 'A11', 'scorA11', 'scorMaxA11', 'scorSubItemA11', 'tambahan_a11_in', 'SkorTambahanA11_5', 'SkorTambahanJumlahA11_5', 'JumlahSkorYangDiHasilkanA11_5', 'JumlahSkorYangDiHasilkanBobotSubItemA11_5', 'SkorTambahanJumlahBobotSubItemA11_5',
    //     'A12', 'scorA12', 'scorMaxA12', 'scorSubItemA12', 'JumlahYangDihasilkanA12_3_in', 'SkorTambahanA12_3', 'JumlahYangDihasilkanA12_4_in', 'SkorTambahanA12_4', 'JumlahYangDihasilkanA12_5_in', 'SkorTambahanA12_5', 'SkorTambahanJumlahA12', 'JumlahSkorYangDiHasilkanA12', 'SkorTambahanJumlahSkorA12', 'SkorTambahanJumlahBobotSubItemA12',
    //     'A13', 'scorA13', 'scorMaxA13', 'scorSubItemA13', 'TotalSkorPendidikanPointA', 'TotalKelebihanA11', 'TotalKelebihanA12', 'TotalKelebihanSkor', 'nilaiPendidikandanPengajaran', 'NilaiTambahPendidikanDanPengajaran', 'NilaiTotalPendidikanDanPengajaran'
    // ];
    protected $guarded = [];

    public function UserId()
    {
        return $this->belongsTo(User::class);
    }
}
