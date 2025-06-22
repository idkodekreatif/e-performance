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
    @php
        $selectedPeriod = $periods->firstWhere('id', $selectedPeriodId);
        $academicYear = $selectedPeriod ? $selectedPeriod->name : 'Tahun Akademik Tidak Diketahui';
    @endphp

    <h3 style="text-align: center; font-weight:bold;">
        REKAP NILAI ITIKAD TA. {{ $academicYear }}
    </h3>

    <table style="text-align:center;">
        <tr>
            <td>Nilai Total UNSUR UTAMA</td>
            <td>{{ $resultArray['total_Ntu'] }}</td>
        </tr>
        <tr>
            <td>Nilai Total Unsur Non-Tri Dharma</td>
            <td>{{ $resultArray['total_Ntd'] }}</td>
        </tr>
        <tr>
            <td>Nilai Kinerja Dosen</td>
            <td>{{ $resultArray['total_Nkd'] }}</td>
        </tr>
    </table>

    <table>
        <thead>
            <tr>
                <td>Poin Penilaian</td>
                <td>Komponen</td>
                <td>Nilai Total</td>
                <td>Standar</td>
                <td>Persentase Capaian terhadap standar (%)</td>
                <td>Predikat</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A.</td>
                <td>PENDIDIKAN DAN PENGAJARAN</td>
                <td>{{ $resultArray['a'] }}</td>
                <td>11.69</td>
                <td>{{ $resultArray['NtAFinalSum'] }}</td>
                <td>{{ $resultArray['outputHasilPDP'] }}</td>
            </tr>
            <tr>
                <td>B.</td>
                <td>PENELITIAN DAN KARYA ILMIAH</td>
                <td>{{ $resultArray['b'] }}</td>
                <td>4.26</td>
                <td>{{ $resultArray['NTiFinalSum'] }}</td>
                <td>{{ $resultArray['OutputHasilPki'] }}</td>
            </tr>
            <tr>
                <td>C.</td>
                <td>PENGABDIAN KEPADA MASYARAKAT</td>
                <td>{{ $resultArray['c'] }}</td>
                <td>1.20</td>
                <td>{{ $resultArray['NTiFinalSumPkm'] }}</td>
                <td>{{ $resultArray['OutputHasilPkm'] }}</td>
            </tr>
            <tr>
                <td>D dan E</td>
                <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                <td>{{ $resultArray['total_Ntd'] }}</td>
                <td>2.17</td>
                <td>{{ $resultArray['SUMUnsurPenungjang'] }}</td>
                <td>{{ $resultArray['OutputHasilUnsurPenunjang'] }}</td>
            </tr>
            <tr style="font-weight:bold;">
                <td colspan="2">NILAI KINERJA TOTAL</td>
                <td colspan="4">{{ $resultArray['SumNkt'] }}</td>
            </tr>
            <tr style="font-weight:bold;">
                <td colspan="2">STANDAR KINERJA TOTAL</td>
                <td colspan="4">{{ $resultArray['sum_Skt'] }}</td>
            </tr>
            <tr style="font-weight:bold;">
                <td colspan="2">PREDIKAT</td>
                <td colspan="4">{{ $resultArray['predikat'] }}</td>
            </tr>
        </tbody>
    </table>

    <p style="text-align: right; margin-bottom:0;">Surabaya, {{ date('d F Y') }}</p>

    <div class="tanda-tangan">
        <div class="pihak kiri">
            <p class="nama-dosen">Validator,</p>
            <br><br>
            <p class="nama-dosen">Emha Yuslifar, SE</p>
        </div>
        <div class="pihak kanan">
            <p class="nama-warek">Dosen,</p>
            <br><br>
            <p class="nama-warek">{{ Auth::user()->name }}</p>
        </div>
    </div>

    <div class="signatures">
        <div class="center-signature">
            <p>Menyetujui/Mengesahkan</p>
            <p>Rektor,</p>
            <br><br>
            <p>Dr. Ahmad Hariyanto, M.Si.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
