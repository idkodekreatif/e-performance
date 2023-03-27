<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raport Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            margin-top: 5%;
            font-family: Arial, Helvetica, sans-serif;
        }

        table,
        th,
        td {
            width: 100%;
            border: 1px solid #b7b7b7;
            text-align: center;
            font-size: 12px;
            border-collapse: collapse;
            padding: 5px;
        }

        .tanda-tangan {
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .pihak {
            text-align: center;
        }

        .kiri {
            margin-right: auto;
            float: left;
        }

        .kanan {
            margin-left: auto;
            float: right;
        }

        .nama-dosen,
        .nama-warek {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .signatures {
            /* display: flex; */
            justify-content: space-between;
            align-items: center;
            text-align: center;
        }

        .center-signature {
            margin-top: 20%;
            width: 100%;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <?php
    $year2021 = date('Y') - 2;
    $year2022 = date('Y') - 1;
    ?>

    <h3 style="text-align: center; font-weight:bold;">REKAP NILAI ITIKAD TA. <?php echo $year2021; ?> - <?php echo $year2022; ?>
    </h3>
    <table style="text-align:center;">
        <?php
        $a = (float) ($users->NilaiTotalPendidikanDanPengajaran ?? 0);
        $b = (float) ($users->NilaiTotalPenelitiandanKaryaIlmiah ?? 0);
        $c = (float) ($users->NilaiTotalPengabdianKepadaMasyarakat ?? 0);
        // SUM Point ( A,B,C )
        $total_Ntu = $a + $b + $c;
        $d = (float) ($users->ResultSumNilaiTotalUnsurPenunjang ?? 0);
        $e = (float) ($users->NilaiUnsurPengabdian ?? 0);
        // SUM Point ( D,E )
        $total_Ntd = $d + $e;
        // SUM Point Nilai Kinerja Dosen
        $total_Nkd = $total_Ntu + $total_Ntd;
        $NtAFinalSum = ($a / 11.69) * 100;
        if ($NtAFinalSum >= 120) {
            $outputHasilPDP = 'ISTIMEWA';
        } elseif ($NtAFinalSum >= 110) {
            # code...
            $outputHasilPDP = 'SANGAT BAIK';
        } elseif ($NtAFinalSum >= 100) {
            # code...
            $outputHasilPDP = 'BAIK';
        } elseif ($NtAFinalSum >= 80) {
            # code...
            $outputHasilPDP = 'CUKUP';
        } else {
            # code...
            $outputHasilPDP = 'KURANG';
        }
        $NTiFinalSum = ($b / 4.26) * 100;
        if ($NTiFinalSum >= 120) {
            $OutputHasilPki = 'ISTIMEWA';
        } elseif ($NTiFinalSum >= 110) {
            # code...
            $OutputHasilPki = 'SANGAT BAIK';
        } elseif ($NTiFinalSum >= 100) {
            # code...
            $OutputHasilPki = 'BAIK';
        } elseif ($NTiFinalSum >= 80) {
            # code...
            $OutputHasilPki = 'CUKUP';
        } else {
            # code...
            $OutputHasilPki = 'KURANG';
        }
        $NTiFinalSumPkm = ($c / 1.2) * 100;
        if ($NTiFinalSumPkm >= 120) {
            $OutputHasilPkm = 'ISTIMEWA';
        } elseif ($NTiFinalSumPkm >= 110) {
            # code...
            $OutputHasilPkm = 'SANGAT BAIK';
        } elseif ($NTiFinalSumPkm >= 100) {
            # code...
            $OutputHasilPkm = 'BAIK';
        } elseif ($NTiFinalSumPkm >= 80) {
            # code...
            $OutputHasilPkm = 'CUKUP';
        } else {
            # code...
            $OutputHasilPkm = 'KURANG';
        }
        // Persentase Capaian terhadap standar (%) Point UNSUR PENUNJANG, Pengabdian institusi, dan pengembangan diri
        $SUMUnsurPenungjang = ($total_Ntd / 2.17) * 100;
        // Predikat
        if ($SUMUnsurPenungjang >= 120) {
            $OutputHasilUnsurPenunjang = 'ISTIMEWA';
        } elseif ($SUMUnsurPenungjang >= 110) {
            # code...
            $OutputHasilUnsurPenunjang = 'SANGAT BAIK';
        } elseif ($SUMUnsurPenungjang >= 100) {
            # code...
            $OutputHasilUnsurPenunjang = 'BAIK';
        } elseif ($SUMUnsurPenungjang >= 80) {
            # code...
            $OutputHasilUnsurPenunjang = 'CUKUP';
        } else {
            # code...
            $OutputHasilUnsurPenunjang = 'KURANG';
        }
        // SUM Nilai kinerja total
        $SumNkt = $a + $b + $c + $total_Ntd;
        // SUM Nilsi standart
        $sum_Skt = 11.69 + 4.26 + 1.2 + 2.17;
        // Result nilai presentasi Capaian total (%)
        $result_PCT = ($SumNkt / $sum_Skt) * 100;
        // Predikat akhir
        if ($result_PCT >= 120) {
            $Result_predikat = 'ISTIMEWA';
        } elseif ($result_PCT >= 110) {
            # code...
            $Result_predikat = 'SANGAT BAIK';
        } elseif ($result_PCT >= 100) {
            # code...
            $Result_predikat = 'BAIK';
        } elseif ($result_PCT >= 80) {
            # code...
            $Result_predikat = 'CUKUP';
        } else {
            # code...
            $Result_predikat = 'KURANG';
        }
        ?>
        <tr>
            <td>Nilai Total UNSUR UTAMA</td>
            <td>
                <?php echo number_format((float) $total_Ntu, 2, '.', ''); ?>
            </td>
        </tr>
        <tr>
            <td>Nilai Total Unsur Non-Tri Dharma</td>
            <td>
                <?php echo number_format((float) $total_Ntd, 2, '.', ''); ?>
            </td>
        </tr>
        <tr>
            <td>Nilai Kinerja Dosen</td>
            <td>
                <?php echo number_format((float) $total_Nkd, 2, '.', ''); ?>
            </td>
        </tr>
    </table>

    <table>
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
                    <?php echo number_format((float) $a, 2, '.', ''); ?>
                </td>
                <td>11.69</td>
                <td>
                    <?php echo number_format((float) $NtAFinalSum, 2, '.', ''); ?>
                </td>
                <td>
                    <?php echo $outputHasilPDP; ?>
                </td>
            </tr>
            <tr>
                <td>PENELITIAN DAN KARYA ILMIAH</td>
                <td>
                    <?php echo number_format((float) $b, 2, '.', ''); ?>
                </td>
                <td>4.26</td>
                <td>
                    <?php echo number_format((float) $NTiFinalSum, 2, '.', ''); ?>
                </td>
                <td>
                    <?php echo $OutputHasilPki; ?>
                </td>
            </tr>
            <tr>
                <td>PENGABDIAN KEPADA MASYARAKAT</td>
                <td>
                    <?php echo number_format((float) $c, 2, '.', ''); ?>
                </td>
                <td>1.20</td>
                <td>
                    <?php echo number_format((float) $NTiFinalSumPkm, 2, '.', ''); ?>
                </td>
                <td>
                    <?php echo $OutputHasilPkm; ?>
                </td>
            </tr>
            <tr>
                <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                <td>
                    <?php echo number_format((float) $total_Ntd, 2, '.', ''); ?>
                </td>
                <td>2.17</td>
                <td>
                    <?php echo number_format((float) $SUMUnsurPenungjang, 2, '.', ''); ?>
                </td>
                <td>
                    <?php echo $OutputHasilUnsurPenunjang; ?>
                </td>
            </tr>
            <tr style="font-weight:bold;">
                <td>NILAI KINERJA TOTAL</td>
                <td colspan="4">
                    <?php echo number_format((float) $SumNkt, 2, '.', ''); ?>
                </td>
            </tr>
            <tr style="font-weight:bold;">
                <td>STANDAR KINERJA TOTAL</td>
                <td colspan="4">
                    <?php echo number_format((float) $sum_Skt, 2, '.', ''); ?>
                </td>
            </tr>
            <tr style="font-weight:bold;">
                <td>PERSENTASE CAPAIAN TOTAL (%)</td>
                <td colspan="4">
                    <?php echo number_format((float) $result_PCT, 2, '.', ''); ?>
                </td>
            </tr>
            <tr style="font-weight:bold;">
                <td>PREDIKAT</td>
                <td colspan="4">
                    <?php echo $Result_predikat; ?>
                </td>
            </tr>
        </tbody>
    </table>


    <p style="text-align: right;">Surabaya, {{ date('d F Y') }}</p>

    <div class="tanda-tangan">
        <div class="pihak kiri">
            <p class="nama-dosen">Validator,</p>
            <br>
            <br>
            <br>
            <p class="nama-dosen">Emha Yuslifar, SE</p>
        </div>
        <div class="pihak kanan">
            <p class="nama-warek">Dosen,</p>
            <br>
            <br>
            <br>
            <p class="nama-warek">{{ Auth::user()->name }}</p>
        </div>
    </div>

    <div class="signatures">
        <div class="center-signature">
            <p>Mengetahui,</p>
            <p>Wakil Rektor II</p>
            <br>
            <br>
            <br>
            <p>Dr. M. Budi Widajanto, Drs. Ec., M.P.</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
