<x-app-layout title="Raport">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Point</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raport</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Raport User</h4>
            </div>
            <div class="card-body">
                @if (!empty($users->user_id))
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <?php
                            $a = (float)$users->NilaiTotalPendidikanDanPengajaran;
                            $b = (float)$users->NilaiTotalPenelitiandanKaryaIlmiah;
                            $c = (float)$users->NilaiTotalPengabdianKepadaMasyarakat;
                            $total_Ntu = $a + $b + $c;

                            $d = (float)$users->ResultSumNilaiTotalUnsurPenunjang;
                            $e = (float)$users->NilaiUnsurPengabdian;
                            $total_Ntd = $d + $e;

                            $total_Nkd = $total_Ntu + $total_Ntd;
                        ?>
                        <tr>
                            <td>Nilai Total UNSUR UTAMA</td>
                            <td>
                                <?php echo $total_Ntu ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Total Unsur Non-Tri Dharma</td>
                            <td>
                                <?php echo $total_Ntd ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Kinerja Dosen</td>
                            <td>
                                <?php echo $total_Nkd  ?>
                            </td>
                        </tr>
                    </table>

                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Nilai Total</td>
                                <td>Standar</td>
                                <td>Persentase Capaian terhadap standar (%)</td>
                                <td>Predikat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PENDIDIKAN DAN PENGAJARAN</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>PENELITIAN DAN KARYA ILMIAH</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>PENGABDIAN KEPADA MASYARAKAT</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Cukup</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>NILAI KINERJA TOTAL</td>
                                <td colspan="4">-</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>STANDAR KINERJA TOTAL</td>
                                <td colspan="4">-</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>PERSENTASE CAPAIAN TOTAL (%)</td>
                                <td colspan="4">-</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>PREDIKAT</td>
                                <td colspan="4">BAIK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tr>
                            <td>Nilai Total UNSUR UTAMA</td>
                            <td>
                                -
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Total Unsur Non-Tri Dharma</td>
                            <td>
                                -
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Kinerja Dosen</td>
                            <td>
                                -
                            </td>
                        </tr>
                    </table>

                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Nilai Total</td>
                                <td>Standar</td>
                                <td>Persentase Capaian terhadap standar (%)</td>
                                <td>Predikat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PENDIDIKAN DAN PENGAJARAN</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>PENELITIAN DAN KARYA ILMIAH</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>PENGABDIAN KEPADA MASYARAKAT</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>NILAI KINERJA TOTAL</td>
                                <td colspan="4">-</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>STANDAR KINERJA TOTAL</td>
                                <td colspan="4">-</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>PERSENTASE CAPAIAN TOTAL (%)</td>
                                <td colspan="4">-</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>PREDIKAT</td>
                                <td colspan="4">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @endif

            </div>
        </div>
    </div>

    @push('JavaScript')

    @endpush
</x-app-layout>
