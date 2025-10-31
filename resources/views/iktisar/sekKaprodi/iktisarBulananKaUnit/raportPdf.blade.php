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
            margin-top: 13%;
            font-family: Arial, Helvetica, sans-serif;
        }

        table,
        th,
        td {
            width: 100%;
            border: 1px solid #000000;
            text-align: center;
            font-size: 12px;
            border-collapse: collapse;
            padding: 5px;
        }

        .tanda-tangan {
            justify-content: space-between;
            align-items: center;
            margin-top: 5px;
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
    <h3 style="text-align: center; font-weight:bold;">REKAP NILAI IKTISAR BULAN <?php echo strtoupper(date('F')); ?> - <?php echo date('Y'); ?>
    </h3>
    <table style="text-align:center;">
        <?php
        $DataUserKinerjaPerilaku = (float) $data->output_total_sementara_kinerja_perilaku;
        $DataUserKinerjaKompetensi = (float) $data->total_nilai_presentase;

        // SUM Nilai Perilaku dan Kompetensi
        $resultSumPerilakuKompetensi = $DataUserKinerjaPerilaku + $DataUserKinerjaKompetensi;

        // Predikat Perilaku dan Kompetensi
        if ($resultSumPerilakuKompetensi >= 5) {
            $OutPutPredikatKompetensi = 'ISTIMEWA';
        } elseif ($resultSumPerilakuKompetensi >= 4) {
            # code...
            $OutPutPredikatKompetensi = 'SANGAT BAIK';
        } elseif ($resultSumPerilakuKompetensi >= 3) {
            # code...
            $OutPutPredikatKompetensi = 'BAIK';
        } elseif ($resultSumPerilakuKompetensi >= 2) {
            # code...
            $OutPutPredikatKompetensi = 'CUKUP';
        } else {
            # code...
            $OutPutPredikatKompetensi = 'KURANG';
        }
        ?>

        <tr style="font-weight:bold">
            <td>KOMPONEN</td>
            <td>PERILAKU</td>
            <td>KOMPETENSI</td>
            <td>NILAI KINERJA TOTAL</td>
            <td>PREDIKAT</td>
        </tr>
        <tr>
            <td style="font-weight:bold">NILAI</td>
            <td>
                <?php echo number_format((float) $DataUserKinerjaPerilaku, 2, '.', ''); ?>
            </td>
            <td>
                <?php echo number_format((float) $DataUserKinerjaKompetensi, 2, '.', ''); ?>
            </td>
            <td>
                <?php echo number_format((float) $resultSumPerilakuKompetensi, 2, '.', ''); ?>
            </td>
            <td style="font-weight:bold">
                <?php echo $OutPutPredikatKompetensi; ?>
            </td>
        </tr>
    </table>


    <p style="text-align: right; margin-bottom:0;">Surabaya, {{ date('d F Y') }}</p>

    <div class="pihak1">
        <div class="pihak kiri">
            <p class="nama-dosen">Pejabat Penilai,</p>
            <br>
             @if (Auth::user()->hasRole('perawat'))
                <p class="nama-dosen">Ariska Putri Hidayathillah, S.Kep.,Ns., M. Epid</p>
            @elseif (Auth::user()->hasRole('gizi'))
                <p class="nama-dosen">Ir. RR. Nurul Hidayati, M. Si</p>
            @elseif (Auth::user()->hasRole('bidan'))
                <p class="nama-dosen">Setiya Hartiningtiyaswati, M. Keb</p>
            @elseif (Auth::user()->hasRole('manajement'))
                <p class="nama-dosen">Bambang Gunawan, Ir., M.Kes.</p>
            @elseif (Auth::user()->hasRole('akuntansi'))
                <p class="nama-dosen">Agda Laily Ahadiya, S.Ak., M.M.</p>
            @endif
        </div>
        <div class="pihak kanan">
            <p class="nama-warek">Personel yang dinilai,</p>
            <br>
            <p class="nama-warek">{{ $data->name }}</p>
        </div>
    </div>

    <div class="pihak2">
        <div class="pihak kiri">
            <p class="nama-dosen">Atasan Pejabat Penilai,</p>
            <br>
            <br>
            <p class="nama-dosen">Annas Vijaya, S.Si., M.T.I.</p>
        </div>
        <div class="pihak kanan">
            <p class="nama-warek">Pejabat yang <br> Menyetujui/Mengesahkan,</p>
            <br>
            <p class="nama-warek">Dr. Ahmad Hariyanto, M.Si.</p>
        </div>
    </div>

    {{-- OLD --}}
    {{-- <div class="tanda-tangan">
        <div class="pihak kiri">
            <p class="nama-dosen">Penilai,</p>
            <br>
            <br>
            @if (Auth::user()->hasRole('perawat'))
                <p class="nama-dosen">Ariska Putri Hidayathillah, S.Kep.,Ns., M. Epid</p>
            @elseif (Auth::user()->hasRole('gizi'))
                <p class="nama-dosen">Ir. RR. Nurul Hidayati, M. Si</p>
            @elseif (Auth::user()->hasRole('bidan'))
                <p class="nama-dosen">Setiya Hartiningtiyaswati, M. Keb</p>
            @elseif (Auth::user()->hasRole('manajement'))
                <p class="nama-dosen">Bambang Gunawan, Ir., M.Kes.</p>
            @elseif (Auth::user()->hasRole('akuntansi'))
                <p class="nama-dosen">Agda Laily Ahadiya, S.Ak., M.M.</p>
            @endif


        </div>
        <div class="pihak kanan">
            <p class="nama-warek">Personel yang dinilai,</p>
            <br>
            <br>
            <p class="nama-warek">{{ $data->name }}</p>
        </div>
    </div>

    <div class="signatures">
        <div class="center-signature">
            <p>Menyetujui/Mengesahkan,</p>
            <p>Rektor,</p>
            <br>
            <br>
            <p>Dr. Ahmad Hariyanto, M.Si.</p>
        </div>
    </div> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
