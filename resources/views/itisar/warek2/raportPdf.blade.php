<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raport Tendik</title>
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

    <h3 style="text-align: center; font-weight:bold;">REKAP NILAI IKTISAR TA. <?php echo $year2021; ?> - <?php echo $year2022; ?>
    </h3>

    <?php
    $DataUserKinerjaPerilaku = (float) $DataUser->output_total_sementara_kinerja_perilaku;
    $DataUserKinerjaKompetensi = (float) $DataUser->output_total_sementara_kinerja_kompetensi;
    
    // SUM Nilai Perilaku dan Kompetensi
    $resultSumPerilakuKompetensi = $DataUserKinerjaPerilaku + $DataUserKinerjaKompetensi;
    
    // Predikat Perilaku dan Kompetensi
    if ($resultSumPerilakuKompetensi >= 5) {
        $OutPutPredikatKompetensi = 'ISTIMEWA';
    } elseif ($resultSumPerilakuKompetensi >= 4.01) {
        # code...
        $OutPutPredikatKompetensi = 'SANGAT BAIK';
    } elseif ($resultSumPerilakuKompetensi >= 3.01) {
        # code...
        $OutPutPredikatKompetensi = 'BAIK';
    } elseif ($resultSumPerilakuKompetensi >= 2.01) {
        # code...
        $OutPutPredikatKompetensi = 'CUKUP';
    } else {
        # code...
        $OutPutPredikatKompetensi = 'KURANG';
    }
    ?>

    <table>
        <thead>
            <tr style="font-weight:bold">
                <td>KOMPONEN</td>
                <td>PERILAKU</td>
                <td>KOMPETENSI</td>
                <td>NILAI KINERJA TOTAL</td>
                <td>PREDIKAT</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-weight:bold">Nilai</td>
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
