<x-app-layout title="Raport">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Point</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raport</a></li>
            </ol>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Raport User</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <?php
                            $a = (float)($users->NilaiTotalPendidikanDanPengajaran ?? 0);
                            $b = (float)($users->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
                            $c = (float)($users->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
                            // SUM Point ( A,B,C )
                            $total_Ntu = $a + $b + $c;
                            $d = (float)($users->ResultSumNilaiTotalUnsurPenunjang ?? 0);
                            $e = (float)($users->NilaiUnsurPengabdian ?? 0);
                            // SUM Point ( D,E )
                            $total_Ntd = $d + $e;
                            // SUM Point Nilai Kinerja Dosen
                            $total_Nkd = $total_Ntu + $total_Ntd;
                            $NtAFinalSum = $a /11.69 * 100;
                            if ($NtAFinalSum >= 120) {
                                $outputHasilPDP =  "ISTIMEWA";
                            }elseif($NtAFinalSum >= 110) {
                                # code...
                                $outputHasilPDP = "SANGAT BAIK";
                            }elseif($NtAFinalSum >= 100) {
                                # code...
                                $outputHasilPDP = "BAIK";
                            }elseif ($NtAFinalSum >= 80) {
                                # code...
                                $outputHasilPDP = "CUKUP";
                            }else {
                                # code...
                                $outputHasilPDP = "KURANG";
                            }
                                $NTiFinalSum = $b /4.26 * 100;
                                if ($NTiFinalSum >= 120) {
                                $OutputHasilPki = "ISTIMEWA";
                                }elseif($NTiFinalSum >= 110) {
                                # code...
                                $OutputHasilPki = "SANGAT BAIK";
                                }elseif($NTiFinalSum >= 100) {
                                # code...
                                $OutputHasilPki = "BAIK";
                                }elseif ($NTiFinalSum >= 80) {
                                # code...
                                $OutputHasilPki = "CUKUP";
                                }else {
                                # code...
                                $OutputHasilPki = "KURANG";
                                }
                                $NTiFinalSumPkm = $c /1.20 * 100;
                                if ($NTiFinalSumPkm >= 120) {
                                $OutputHasilPkm = "ISTIMEWA";
                                }elseif($NTiFinalSumPkm >= 110) {
                                # code...
                                $OutputHasilPkm = "SANGAT BAIK";
                                }elseif($NTiFinalSumPkm >= 100) {
                                # code...
                                $OutputHasilPkm = "BAIK";
                                }elseif ($NTiFinalSumPkm >= 80) {
                                # code...
                                $OutputHasilPkm = "CUKUP";
                                }else {
                                # code...
                                $OutputHasilPkm = "KURANG";
                                }
                                // Persentase Capaian terhadap standar (%) Point UNSUR PENUNJANG, Pengabdian institusi, dan pengembangan diri
                                $SUMUnsurPenungjang = $total_Ntd /2.17 * 100;
                                // Predikat
                                if ($SUMUnsurPenungjang >= 120) {
                                $OutputHasilUnsurPenunjang = "ISTIMEWA";
                                }elseif($SUMUnsurPenungjang >= 110) {
                                # code...
                                $OutputHasilUnsurPenunjang = "SANGAT BAIK";
                                }elseif($SUMUnsurPenungjang >= 100) {
                                # code...
                                $OutputHasilUnsurPenunjang = "BAIK";
                                }elseif ($SUMUnsurPenungjang >= 80) {
                                # code...
                                $OutputHasilUnsurPenunjang = "CUKUP";
                                }else {
                                # code...
                                $OutputHasilUnsurPenunjang = "KURANG";
                                }
                                // SUM Nilai kinerja total
                                $SumNkt = $a + $b + $c + $total_Ntd;
                                // SUM Nilsi standart
                                $sum_Skt = 11.69 + 4.26 + 1.20 + 2.17;
                                // Result nilai presentasi Capaian total (%)
                                $result_PCT = $SumNkt / $sum_Skt * 100;
                                // Predikat akhir
                                if ($result_PCT >= 120) {
                                $Result_predikat = "ISTIMEWA";
                                }elseif($result_PCT >= 110) {
                                # code...
                                $Result_predikat = "SANGAT BAIK";
                                }elseif($result_PCT >= 100) {
                                # code...
                                $Result_predikat = "BAIK";
                                }elseif ($result_PCT >= 80) {
                                # code...
                                $Result_predikat = "CUKUP";
                                }else {
                                # code...
                                $Result_predikat = "KURANG";
                                }
                            ?>
                        <tr>
                            <td>Nilai Total UNSUR UTAMA</td>
                            <td>
                                <?php echo number_format((float)$total_Ntu, 2, '.', '')  ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Total Unsur Non-Tri Dharma</td>
                            <td>
                                <?php echo number_format((float)$total_Ntd, 2, '.', '') ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Nilai Kinerja Dosen</td>
                            <td>
                                <?php echo number_format((float)$total_Nkd, 2, '.', '')  ?>
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
                                <td>
                                    <?php echo number_format((float)$a, 2, '.', '') ?>
                                </td>
                                <td>11.69</td>
                                <td>
                                    <?php echo number_format((float)$NtAFinalSum, 2, '.', '')  ?>
                                </td>
                                <td>
                                    <?php echo $outputHasilPDP ?>
                                </td>
                            </tr>
                            <tr>
                                <td>PENELITIAN DAN KARYA ILMIAH</td>
                                <td>
                                    <?php echo number_format((float)$b, 2, '.', '') ?>
                                </td>
                                <td>4.26</td>
                                <td>
                                    <?php echo number_format((float)$NTiFinalSum, 2, '.', '') ?>
                                </td>
                                <td>
                                    <?php echo $OutputHasilPki ?>
                                </td>
                            </tr>
                            <tr>
                                <td>PENGABDIAN KEPADA MASYARAKAT</td>
                                <td>
                                    <?php echo number_format((float)$c, 2, '.', '') ?>
                                </td>
                                <td>1.20</td>
                                <td>
                                    <?php echo number_format((float)$NTiFinalSumPkm, 2, '.', '') ?>
                                </td>
                                <td>
                                    <?php echo $OutputHasilPkm ?>
                                </td>
                            </tr>
                            <tr>
                                <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                                <td>
                                    <?php echo number_format((float)$total_Ntd, 2, '.', '') ?>
                                </td>
                                <td>2.17</td>
                                <td>
                                    <?php echo number_format((float)$SUMUnsurPenungjang, 2, '.', '') ?>
                                </td>
                                <td>
                                    <?php echo $OutputHasilUnsurPenunjang ?>
                                </td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>NILAI KINERJA TOTAL</td>
                                <td colspan="4">
                                    <?php echo number_format((float)$SumNkt, 2, '.', '') ?>
                                </td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>STANDAR KINERJA TOTAL</td>
                                <td colspan="4">
                                    <?php echo number_format((float)$sum_Skt, 2, '.', '') ?>
                                </td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>PERSENTASE CAPAIAN TOTAL (%)</td>
                                <td colspan="4">
                                    <?php echo number_format((float)$result_PCT, 2, '.', '') ?>
                                </td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>PREDIKAT</td>
                                <td colspan="4">
                                    <?php echo $Result_predikat ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @push('JavaScript')

    @endpush
</x-app-layout>
