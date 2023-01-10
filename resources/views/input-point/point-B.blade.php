<x-app-layout title="Form Input Point B">
    @push('style')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point B</a></li>
            </ol>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point B</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="table-responsive">
                        <form action="{{ route('store.pointb') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered border-2 text-center">
                                <thead>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Komponen Kompetensi</td>
                                        <td colspan="5">Skor</td>
                                        <td rowspan="2" class="col">Bukti Pendukung</td>
                                        <td rowspan="2" class="bg-warning">Skor</td>
                                        <td rowspan="2">Skor/Skor maks</td>
                                        <td rowspan="2">Skor x Bobot Sub Item</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="#">
                                        <tr>
                                            <td>B</td>
                                            <td colspan="10" class="text-start">PENELITIAN DAN KARYA ILMIAH</td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>Memiliki karya yang diakui di tingkat nasional
                                                (Hak Cipta Nasional)</td>
                                            <td>Memiliki karya yang diakui di tingkat Internasional
                                                (Hak Cipta internasional)</td>
                                            <td>Memiliki karya yang memiliki hak Paten Terdaftar</td>
                                            <td>Metode baru yang diusulkan telah disetujui dan diimplementasikan dalam
                                                PT /
                                                Fakultas / Prodinya
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload <br> 1,
                                                    Sertifikat Hak Cipta <br>
                                                    2, Formulir Pendaftaran Permohonan Paten <br>
                                                    3, Sertifikat Hak Paten</label>
                                                <input class="@error('fileB1') is-invalid @enderror" name="fileB1"
                                                    id="formFileSm" type="file">

                                                @error('fileB1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB1" name="scorB1"
                                                    type="number" aria-label="B1" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB1" name="scorMaxB1" type="number"
                                                    aria-label="B1" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB1" name="scorSubItemB1" type="number"
                                                    aria-label="B1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.1</td>
                                            <td>Dosen memiliki karya yang telah dipatenkan atau diakui secara nasional
                                                maupun internasional
                                            </td>
                                            <td><input type="radio" class="B1" name="B1" id="B1" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B1" name="B1" id="B1" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B1" name="B1" id="B1" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B1" name="B1" id="B1" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B1" name="B1" id="B1" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB1_2"
                                                    id="JumlahYangDihasilkanB1_2" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB1_3"
                                                    id="JumlahYangDihasilkanB1_3" onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" name="JumlahYangDihasilkanB1_4"
                                                    id="JumlahYangDihasilkanB1_4" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB1_5"
                                                    id="JumlahYangDihasilkanB1_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB1"
                                                    id="JumlahSkorYangDiHasilkanB1" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB1"
                                                    id="SkorTambahanJumlahSkorB1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB1_2" id="SkorTambahanB1_2"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB1_3" id="SkorTambahanB1_3"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB1_4" id="SkorTambahanB1_4"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB1_5" id="SkorTambahanB1_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB1"
                                                    id="SkorTambahanJumlahB1" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB1"
                                                    id="SkorTambahanJumlahBobotSubItemB1" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>Dalam pertengahan proses pembuatan buku</td>
                                            <td>Dalam proses percetakan</td>
                                            <td>Diterbitkan dan diedarkan secara nasional</td>
                                            <td>Diterbitkan dan diedarkan secara Internasional
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    monograf</label>
                                                <input class="@error('fileB2') is-invalid @enderror" name="fileB2"
                                                    id="formFileSm" type="file">

                                                @error('fileB2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB2" name="scorB2"
                                                    type="number" aria-label="B2" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB2" name="scorMaxB2" type="number"
                                                    aria-label="B2" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB2" name="scorSubItemB2" type="number"
                                                    aria-label="B2" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.2</td>
                                            <td>Dosen menghasilkan monograf yang relevan dengan bidang kelimuan
                                            </td>
                                            <td><input type="radio" class="B2" name="B2" id="B2" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B2" name="B2" id="B2" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B2" name="B2" id="B2" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B2" name="B2" id="B2" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B2" name="B2" id="B2" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB2_4"
                                                    id="JumlahYangDihasilkanB2_4" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB2_5"
                                                    id="JumlahYangDihasilkanB2_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB2"
                                                    id="JumlahSkorYangDiHasilkanB2" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB2"
                                                    id="SkorTambahanJumlahSkorB2" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB2_4" id="SkorTambahanB2_4"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB2_5" id="SkorTambahanB2_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB2"
                                                    id="SkorTambahanJumlahB2" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB2"
                                                    id="SkorTambahanJumlahBobotSubItemB2" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>Dalam pertengahan proses pembuatan buku</td>
                                            <td>Dalam proses percetakan</td>
                                            <td>Diterbitkan dan diedarkan secara nasional</td>
                                            <td>Diterbitkan dan diedarkan secara Internasional
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    buku referensi</label>
                                                <input class="@error('fileB3') is-invalid @enderror" name="fileB3"
                                                    id="formFileSm" type="file">

                                                @error('fileB3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB3" name="scorB3"
                                                    type="number" aria-label="B3" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB3" name="scorMaxB3" type="number"
                                                    aria-label="B3" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB3" name="scorSubItemB3" type="number"
                                                    aria-label="B3" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.3</td>
                                            <td>Dosen menghasilkan buku referensi yang relevan dengan bidang keilmuan
                                            </td>
                                            <td><input type="radio" class="B3" name="B3" id="B3" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B3" name="B3" id="B3" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B3" name="B3" id="B3" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B3" name="B3" id="B3" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B3" name="B3" id="B3" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB3_4"
                                                    id="JumlahYangDihasilkanB3_4" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB3_5"
                                                    id="JumlahYangDihasilkanB3_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB3"
                                                    id="JumlahSkorYangDiHasilkanB3" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB3"
                                                    id="SkorTambahanJumlahSkorB3" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB3_4" id="SkorTambahanB3_4"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB3_5" id="SkorTambahanB3_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB3"
                                                    id="SkorTambahanJumlahB3" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB3"
                                                    id="SkorTambahanJumlahBobotSubItemB3" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>satu kali sebagai anggota penulis</td>
                                            <td>Lebih dari 1 kali sebagai anggota penulis</td>
                                            <td>Satu kali sebagai penulis utama/tunggal</td>
                                            <td>Lebih dari satu kali sebagai penulis utama/tunggal
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    monograf/buku</label>
                                                <input class="@error('fileB4') is-invalid @enderror" name="fileB4"
                                                    id="formFileSm" type="file">

                                                @error('fileB4')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB4" name="scorB4"
                                                    type="number" aria-label="B4" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB4" type="number" name="scorMaxB4"
                                                    aria-label="B4" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB4" name="scorSubItemB4" type="number"
                                                    aria-label="B4" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.4</td>
                                            <td>Peran Dosen sebagai Penulis Utama/tunggal, Monograf/Buku yang
                                                diterbitkan
                                            </td>
                                            <td><input type="radio" class="B4" name="B4" id="B4" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B4" name="B4" id="B4" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B4" name="B4" id="B4" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B4" name="B4" id="B4" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B4" name="B4" id="B4" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>telah dikirimkan dan belum mendapat balasan / telah dikirimkan namun
                                                ditolak
                                            </td>
                                            <td>sedang dalam proses review redaksi</td>
                                            <td>sudah ada konfirmasi untuk dimuat / sedang dalam revisi</td>
                                            <td>telah dimuat dalam jurnal ilmiah internasional
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    jurnal ilmiah internasional dan bukti penerimaan
                                                    naskah</label>
                                                <input class="@error('fileB5') is-invalid @enderror" name="fileB5"
                                                    id="formFileSm" type="file">

                                                @error('fileB5')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB5" name="scorB5"
                                                    type="number" aria-label="B5" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB5" name="scorMaxB5" type="number"
                                                    aria-label="B5" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB5" name="scorSubItemB5" type="number"
                                                    aria-label="B5" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.5</td>
                                            <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah Internasional
                                            </td>
                                            <td><input type="radio" class="B5" name="B5" id="B5" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B5" name="B5" id="B5" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B5" name="B5" id="B5" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B5" name="B5" id="B5" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B5" name="B5" id="B5" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB5_5"
                                                    id="JumlahYangDihasilkanB5_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB5"
                                                    id="JumlahSkorYangDiHasilkanB5" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB5"
                                                    id="SkorTambahanJumlahSkorB5" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB5_5" id="SkorTambahanB5_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB5"
                                                    id="SkorTambahanJumlahB5" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB5"
                                                    id="SkorTambahanJumlahBobotSubItemB5" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>telah dikirimkan dan belum mendapat balasan / telah dikirimkan namun
                                                ditolak
                                            </td>
                                            <td>sedang dalam proses review redaksi</td>
                                            <td>sudah ada konfirmasi untuk dimuat / sedang dalam revisi</td>
                                            <td>telah dimuat dalam jurnal ilmiah nasional terakreditasi
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    jurnal ilmiah nasional terakreditasi dan bukti
                                                    penerimaan naskah</label>
                                                <input class="@error('fileB6') is-invalid @enderror" name="fileB6"
                                                    id="formFileSm" type="file">

                                                @error('fileB6')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB6" name="scorB6"
                                                    type="number" aria-label="B6" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB6" name="scorMaxB6" type="number"
                                                    aria-label="B6" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB6" name="scorSubItemB6" type="number"
                                                    aria-label="B6" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.6</td>
                                            <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah nasional
                                                terakreditasi
                                            </td>
                                            <td><input type="radio" class="B6" name="B6" id="B6" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B6" name="B6" id="B6" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B6" name="B6" id="B6" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B6" name="B6" id="B6" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B6" name="B6" id="B6" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB6_5"
                                                    id="JumlahYangDihasilkanB6_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB6"
                                                    id="JumlahSkorYangDiHasilkanB6" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB6"
                                                    id="SkorTambahanJumlahSkorB6" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB6_5" id="SkorTambahanB6_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB6"
                                                    id="SkorTambahanJumlahB6" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB6"
                                                    id="SkorTambahanJumlahBobotSubItemB6" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>telah dikirimkan dan belum mendapat balasan / telah dikirimkan namun
                                                ditolak
                                            </td>
                                            <td>sudah ada konfirmasi/sedang dalam revisi</td>
                                            <td>1 - 2 karya dimuat dalam jurnal ilmiah nasional tidak terakreditasi</td>
                                            <td>3 karya dimuat dalam jurnal ilmiah tidak terakreditasi
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    jurnal ilmiah nasional tidak terakreditasi dan bukti
                                                    penerimaan naskah</label>
                                                <input class="@error('fileB7') is-invalid @enderror" name="fileB7"
                                                    id="formFileSm" type="file">

                                                @error('fileB7')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB7" name="scorB7"
                                                    type="number" aria-label="B7" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB7" name="scorMaxB7" type="number"
                                                    aria-label="B7" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB7" name="scorSubItemB7" type="number"
                                                    aria-label="B7" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.7</td>
                                            <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah Nasional
                                                tidak
                                                terakreditasi / Jurnal Ilmiah Nasional
                                                ber-ISSN
                                            </td>
                                            <td><input type="radio" class="B7" name="B7" id="B7" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B7" name="B7" id="B7" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B7" name="B7" id="B7" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B7" name="B7" id="B7" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B7" name="B7" id="B7" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah kelebihan karya artikel (>3 karya)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB7_5"
                                                    id="JumlahYangDihasilkanB7_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB7"
                                                    id="JumlahSkorYangDiHasilkanB7" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB7"
                                                    id="SkorTambahanJumlahSkorB7" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB7_5" id="SkorTambahanB7_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB7"
                                                    id="SkorTambahanJumlahB7" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB7"
                                                    id="SkorTambahanJumlahBobotSubItemB7" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>satu kali sebagai anggota penulis</td>
                                            <td>Lebih dari 1 kali sebagai anggota penulis</td>
                                            <td>Satu kali sebagai penulis utama/tunggal</td>
                                            <td>
                                                Lebih dari
                                                satu kali sebagai penulis utama/tunggal
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    jurnal</label>
                                                <input class="@error('fileB8') is-invalid @enderror" name="fileB8"
                                                    id="formFileSm" type="file">

                                                @error('fileB8')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB8" name="scorB8"
                                                    type="number" aria-label="B8" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB8" name="scorMaxB8" type="number"
                                                    aria-label="B8" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB8" name="scorSubItemB8" type="number"
                                                    aria-label="B8" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.8</td>
                                            <td>Peran Dosen sebagai Penulis Utama/tunggal, dari jurnal yang diterbitkan
                                            </td>
                                            <td><input type="radio" class="B8" name="B8" id="B8" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B8" name="B8" id="B8" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B8" name="B8" id="B8" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B8" name="B8" id="B8" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B8" name="B8" id="B8" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>makalah telah ditampilkan namun belum ada bukti berupa prosiding/tidak
                                                dimuat dalam prosiding
                                            </td>
                                            <td>makalah tidak ditampilkan namun dimuat dalam prosiding yang
                                                dipublikasikan
                                            </td>
                                            <td>makalah telah ditampilkan dan bukti sertifikat maupun prosiding telah
                                                diterima lengkap, jumlah makalah = 1</td>
                                            <td>makalah telah ditampilkan dan bukti sertifikat maupun prosiding telah
                                                diterima lengkap, jumlah makalah = 2
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    sertifikat dan prosiding seminar</label>
                                                <input class="@error('fileB9') is-invalid @enderror" name="fileB9"
                                                    id="formFileSm" type="file">

                                                @error('fileB9')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB9" name="scorB9"
                                                    type="number" aria-label="B9" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB9" name="scorMaxB9" type="number"
                                                    aria-label="B9" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB9" name="scorSubItemB9" type="number"
                                                    aria-label="B9" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.9</td>
                                            <td>Dosen membuat makalah dipresentasikan dalam seminar dan dimuat dalam
                                                prosiding internasional
                                            </td>
                                            <td><input type="radio" class="B9" name="B9" id="B9" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B9" name="B9" id="B9" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B9" name="B9" id="B9" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B9" name="B9" id="B9" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B9" name="B9" id="B9" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah kelebihan karya makalah (>2 makalah)</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB9_3"
                                                    id="JumlahYangDihasilkanB9_3" onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB9_5"
                                                    id="JumlahYangDihasilkanB9_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB9"
                                                    id="JumlahSkorYangDiHasilkanB9" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB9"
                                                    id="SkorTambahanJumlahSkorB9" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB9_3" id="SkorTambahanB9_3"
                                                    readonly>
                                            </td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB9_5" id="SkorTambahanB9_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB9"
                                                    id="SkorTambahanJumlahB9" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB9"
                                                    id="SkorTambahanJumlahBobotSubItemB9" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>makalah telah ditampilkan namun belum ada bukti berupa prosiding/tidak
                                                dimuat dalam prosiding
                                            </td>
                                            <td>makalah tidak ditampilkan namun dimuat dalam prosiding yang
                                                dipublikasikan
                                            </td>
                                            <td>makalah telah ditampilkan dan bukti sertifikat maupun prosiding telah
                                                diterima lengkap, jumlah makalah = 1 -2</td>
                                            <td>makalah telah ditampilkan dan bukti sertifikat maupun prosiding telah
                                                diterima lengkap, jumlah makalah 3 - 4
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    sertifikat dan prosiding seminar</label>
                                                <input class="@error('fileB10') is-invalid @enderror" name="fileB10"
                                                    id="formFileSm" type="file">

                                                @error('fileB10')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB10" name="scorB10"
                                                    type="number" aria-label="B10" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB10" name="scorMaxB10" type="number"
                                                    aria-label="B10" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB10" name="scorSubItemB10"
                                                    type="number" aria-label="B10" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.10</td>
                                            <td>Dosen membuat makalah dipresentasikan dalam seminar dan dimuat dalam
                                                prosiding nasional/lokal
                                            </td>
                                            <td><input type="radio" class="B10" name="B10" id="B10" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B10" name="B10" id="B10" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B10" name="B10" id="B10" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B10" name="B10" id="B10" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B10" name="B10" id="B10" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah kelebihan karya makalah (>4 makalah)</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB10_3"
                                                    id="JumlahYangDihasilkanB10_3" onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB10_5"
                                                    id="JumlahYangDihasilkanB10_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB10"
                                                    id="JumlahSkorYangDiHasilkanB10" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB10"
                                                    id="SkorTambahanJumlahSkorB10" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB10_3" id="SkorTambahanB10_3"
                                                    readonly>
                                            </td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB10_5" id="SkorTambahanB10_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB10"
                                                    id="SkorTambahanJumlahB10" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB10"
                                                    id="SkorTambahanJumlahBobotSubItemB10" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>poster telah mendapat konfirmasi untuk ditampilkan dalam seminar
                                                internasional
                                            </td>
                                            <td>poster telah ditampilkan namun belum ada bukti sertifikatnya
                                            </td>
                                            <td>poster telah ditampilkan dan bukti sertifiakat telah diterima lengkap,
                                                jumlah poster = 1</td>
                                            <td>poster telah ditampilkan dan bukti sertifikat telah diterima lengkap,
                                                jumlah
                                                poster = 2
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    sertifikat dan prosiding seminar</label>
                                                <input class="@error('fileB11') is-invalid @enderror" name="fileB11"
                                                    id="formFileSm" type="file">

                                                @error('fileB11')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB11" name="scorB11"
                                                    type="number" aria-label="B11" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB11" name="scorMaxB11" type="number"
                                                    aria-label="B11" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB11" name="scorSubItemB11"
                                                    type="number" aria-label="B11" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.11</td>
                                            <td>Dosen membuat POSTER dipresentasikan dalam seminar dan prosiding
                                                internasional
                                            </td>
                                            <td><input type="radio" class="B11" name="B11" id="B11" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B11" name="B11" id="B11" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B11" name="B11" id="B11" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B11" name="B11" id="B11" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B11" name="B11" id="B11" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah kelebihan karya poster (>2 poster)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB11_5"
                                                    id="JumlahYangDihasilkanB11_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB11"
                                                    id="JumlahSkorYangDiHasilkanB11" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB11"
                                                    id="SkorTambahanJumlahSkorB11" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB11_5" id="SkorTambahanB11_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB11"
                                                    id="SkorTambahanJumlahB11" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB11"
                                                    id="SkorTambahanJumlahBobotSubItemB11" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>poster telah mendapat konfirmasi untuk ditampilkan dalam seminar
                                                internasional
                                            </td>
                                            <td>poster telah ditampilkan namun belum ada bukti sertifikatnya
                                            </td>
                                            <td>poster telah ditampilkan dan bukti sertifikat telah diterima lengkap,
                                                jumlah
                                                poster 1 - 2</td>
                                            <td>poster telah ditampilkan dan bukti sertifiakat telah diterima lengkap,
                                                jumlah poster 3 - 4
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    sertifikat dan prosiding seminar</label>
                                                <input class="@error('fileB12') is-invalid @enderror" name="fileB12"
                                                    id="formFileSm" type="file">

                                                @error('fileB12')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB12" name="scorB12"
                                                    type="number" aria-label="B12" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB12" name="scorMaxB12" type="number"
                                                    aria-label="B12" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB12" name="scorSubItemB12"
                                                    type="number" aria-label="B12" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.12</td>
                                            <td>Dosen membuat POSTER dipresentasikan dalam seminar dan prosiding
                                                Nasional
                                            </td>
                                            <td><input type="radio" class="B12" name="B12" id="B12" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B12" name="B12" id="B12" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B12" name="B12" id="B12" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B12" name="B12" id="B12" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B12" name="B12" id="B12" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah kelebihan karya poster (>4 poster)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB12_5"
                                                    id="JumlahYangDihasilkanB12_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB12"
                                                    id="JumlahSkorYangDiHasilkanB12" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB12"
                                                    id="SkorTambahanJumlahSkorB12" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB12_5" id="SkorTambahanB12_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB12"
                                                    id="SkorTambahanJumlahB12" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB12"
                                                    id="SkorTambahanJumlahBobotSubItemB12" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>Opini sudah dikonfirmasi untuk diterbitkan
                                            </td>
                                            <td>Opini telah diterbitkan dalam koran/majalah lokal
                                            </td>
                                            <td>Opini telah diterbitkan dalam koran/majalah nasional</td>
                                            <td>Opini telah diterbitkan dalam koran/majalah internasional
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    koran/majalah populer/umum</label>
                                                <input class="@error('fileB13') is-invalid @enderror" name="fileB13"
                                                    id="formFileSm" type="file">

                                                @error('fileB13')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB13" name="scorB13"
                                                    type="number" aria-label="B13" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB13" name="scorMaxB13" type="number"
                                                    aria-label="B13" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB13" name="scorSubItemB13"
                                                    type="number" aria-label="B13" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.13</td>
                                            <td>Dosen menulis opini dalam Koran/Majalah populer / umum
                                            </td>
                                            <td><input type="radio" class="B13" name="B13" id="B13" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B13" name="B13" id="B13" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B13" name="B13" id="B13" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B13" name="B13" id="B13" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B13" name="B13" id="B13" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB13_3"
                                                    id="JumlahYangDihasilkanB13_3" onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" name="JumlahYangDihasilkanB13_4"
                                                    id="JumlahYangDihasilkanB13_4" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB13_5"
                                                    id="JumlahYangDihasilkanB13_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB13"
                                                    id="JumlahSkorYangDiHasilkanB13" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB13"
                                                    id="SkorTambahanJumlahSkorB13" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB13_3" id="SkorTambahanB13_3"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB13_4" id="SkorTambahanB13_4"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB13_5" id="SkorTambahanB13_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB13"
                                                    id="SkorTambahanJumlahB13" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB13"
                                                    id="SkorTambahanJumlahBobotSubItemB13" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>Hasil penelitian digunakan untuk kepentingan internal Institusi
                                            </td>
                                            <td>Hasil penelitian digunakan untuk kepentingan lokal (kota/kabupaten)
                                            </td>
                                            <td>Hasil penelitian digunakan untuk kepentingan nasional</td>
                                            <td>Hasil penelitian/pemikiran digunakan untuk kepentingan internasional
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    buku yang telah disimpan di Perpustakaan PT</label>
                                                <input class="@error('fileB14') is-invalid @enderror" name="fileB14"
                                                    id="formFileSm" type="file">

                                                @error('fileB14')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB14" name="scorB14"
                                                    type="number" aria-label="B14" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB14" name="scorMaxB14" type="number"
                                                    aria-label="B14" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB14" name="scorSubItemB14"
                                                    type="number" aria-label="B14" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.14</td>
                                            <td>Dosen menghasilkan penelitian/pemikiran yang tidak dipublikasikan, tapi
                                                digunakan untuk kepentingan tertentu (dibukukan
                                                dan disimpan dalam perpustakaan PT)
                                            </td>
                                            <td><input type="radio" class="B14" name="B14" id="B14" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B14" name="B14" id="B14" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B14" name="B14" id="B14" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B14" name="B14" id="B14" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B14" name="B14" id="B14" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB14_2"
                                                    id="JumlahYangDihasilkanB14_2" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB14_3"
                                                    id="JumlahYangDihasilkanB14_3" onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" name="JumlahYangDihasilkanB14_4"
                                                    id="JumlahYangDihasilkanB14_4" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB14_5"
                                                    id="JumlahYangDihasilkanB14_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB14"
                                                    id="JumlahSkorYangDiHasilkanB14" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB14"
                                                    id="SkorTambahanJumlahSkorB14" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB14_2" id="SkorTambahanB14_2"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB14_3" id="SkorTambahanB14_3"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB14_4" id="SkorTambahanB14_4"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB14_5" id="SkorTambahanB14_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB14"
                                                    id="SkorTambahanJumlahB14" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB14"
                                                    id="SkorTambahanJumlahBobotSubItemB14" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>Pernah membuat proposal penelitian yang ditolak/tidak mendapatkan
                                                pendanaan,
                                                dalam 1 tahun penilaian
                                            </td>
                                            <td>Proposal penelitian dengan dana hibah lokal/Institusi
                                            </td>
                                            <td>Proposal penelitian dengan dana hibah nasional (DIKTI/BRIN/dll)</td>
                                            <td>Proposal penelitian dengan dana hibah internasional
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    proposal dan bukti fisik surat/surel penerimaan
                                                    proposal</label>
                                                <input class="@error('fileB15') is-invalid @enderror" name="fileB15"
                                                    id="formFileSm" type="file">

                                                @error('fileB15')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB15" name="scorB15"
                                                    type="number" aria-label="B15" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB15" name="scorMaxB15" type="number"
                                                    aria-label="B15" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB15" name="scorSubItemB15"
                                                    type="number" aria-label="B15" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.15</td>
                                            <td>Dosen membuat proposal penelitian, karya/desain teknologi, seni dan
                                                sastra
                                                dengan dana hibah
                                            </td>
                                            <td><input type="radio" class="B15" name="B15" id="B15" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B15" name="B15" id="B15" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B15" name="B15" id="B15" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B15" name="B15" id="B15" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B15" name="B15" id="B15" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB15_3"
                                                    id="JumlahYangDihasilkanB15_3" onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" name="JumlahYangDihasilkanB15_4"
                                                    id="JumlahYangDihasilkanB15_4" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB15_5"
                                                    id="JumlahYangDihasilkanB15_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB15"
                                                    id="JumlahSkorYangDiHasilkanB15" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB15"
                                                    id="SkorTambahanJumlahSkorB15" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB15_3" id="SkorTambahanB15_3"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB15_4" id="SkorTambahanB15_4"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB15_5" id="SkorTambahanB15_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB15"
                                                    id="SkorTambahanJumlahB15" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB15"
                                                    id="SkorTambahanJumlahBobotSubItemB15" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>satu kali sebagai anggota peneliti</td>
                                            <td>Lebih dari 1 kali sebagai anggota peneliti</td>
                                            <td>Satu kali sebagai peneliti utama/tunggal</td>
                                            <td>lebih dari 1 kali sebagai peneliti utama/tunggal
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    proposal dan bukti fisik surat/surel penerimaan
                                                    proposal</label>
                                                <input class="@error('fileB16') is-invalid @enderror" name="fileB16"
                                                    id="formFileSm" type="file">

                                                @error('fileB16')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB16" name="scorB16"
                                                    type="number" aria-label="B16" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB16" name="scorMaxB16" type="number"
                                                    aria-label="B16" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB16" name="scorSubItemB16"
                                                    type="number" aria-label="B16" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.16</td>
                                            <td>Peran Dosen dlm pembuatan proposal penelitian, karya/disain teknologi,
                                                seni
                                                dan sastra
                                            </td>
                                            <td><input type="radio" class="B16" name="B16" id="B16" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B16" name="B16" id="B16" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B16" name="B16" id="B16" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B16" name="B16" id="B16" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B16" name="B16" id="B16" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>Dosen sedang melaksanakan penelitian dengan dana pribadi
                                            </td>
                                            <td>Dosen sedang melaksanakan penelitian dengan dana hibah lokal/IKBIS
                                            </td>
                                            <td>Dosen sedang melaksanakan penelitian dengan dana hibah nasional</td>
                                            <td>Dosen sedang melaksanakan penelitian dengan dana hibah internasional
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    surat kontrak penelitian/surat penerimaan dana
                                                    hibah, dan jurnal penelitian</label>
                                                <input class="@error('fileB17') is-invalid @enderror" name="fileB17"
                                                    id="formFileSm" type="file">

                                                @error('fileB17')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB17" name="scorB17"
                                                    type="number" aria-label="B17" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB17" name="scorMaxB17" type="number"
                                                    aria-label="B17" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB17" name="scorSubItemB17"
                                                    type="number" aria-label="B17" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.17</td>
                                            <td>Dosen melakukan penelitian dengan dana hibah
                                            </td>
                                            <td><input type="radio" class="B17" name="B17" id="B17" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B17" name="B17" id="B17" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B17" name="B17" id="B17" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B17" name="B17" id="B17" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B17" name="B17" id="B17" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB17_2"
                                                    id="JumlahYangDihasilkanB17_2" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB17_3"
                                                    id="JumlahYangDihasilkanB17_3" onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" name="JumlahYangDihasilkanB17_4"
                                                    id="JumlahYangDihasilkanB17_4" onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" name="JumlahYangDihasilkanB17_5"
                                                    id="JumlahYangDihasilkanB17_5" onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" name="JumlahSkorYangDiHasilkanB17"
                                                    id="JumlahSkorYangDiHasilkanB17" readonly></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahSkorB17"
                                                    id="SkorTambahanJumlahSkorB17" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanB17_2" id="SkorTambahanB17_2"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB17_3" id="SkorTambahanB17_3"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB17_4" id="SkorTambahanB17_4"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanB17_5" id="SkorTambahanB17_5"
                                                    readonly>
                                            </td>
                                            <td><input type="number" name="SkorTambahanJumlahB17"
                                                    id="SkorTambahanJumlahB17" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" name="SkorTambahanJumlahBobotSubItemB17"
                                                    id="SkorTambahanJumlahBobotSubItemB17" readonly></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">Deskripsi penilaian:</td>
                                            <td>Tidak sama sekali</td>
                                            <td>satu kali sebagai anggota peneliti</td>
                                            <td>Lebih dari 1 kali sebagai anggota peneliti</td>
                                            <td>Satu kali sebagai peneliti utama/tunggal</td>
                                            <td>lebih dari 1 kali sebagai peneliti utama/tunggal
                                            </td>
                                            <td rowspan="2">
                                                <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                    fisik
                                                    proposal dan bukti fisik surat/surel penerimaan
                                                    proposal</label>
                                                <input class="@error('fileB18') is-invalid @enderror" name="fileB18"
                                                    id="formFileSm" type="file">

                                                @error('fileB18')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB18" name="scorB18"
                                                    type="number" aria-label="B18" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB18" name="scorMaxB18" type="number"
                                                    aria-label="B18" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB18" name="scorSubItemB18"
                                                    type="number" aria-label="B18" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.18</td>
                                            <td>Peran Dosen dalam penelitian
                                            </td>
                                            <td><input type="radio" class="B18" name="B18" id="B18" value="1"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B18" name="B18" id="B18" value="2"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B18" name="B18" id="B18" value="3"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B18" name="B18" id="B18" value="4"
                                                    onclick="sum();">
                                            </td>
                                            <td><input type="radio" class="B18" name="B18" id="B18" value="5"
                                                    onclick="sum();">
                                            </td>
                                        </tr>


                                        <tr>
                                            <td colspan="5"></td>
                                            <td colspan="5">Total Skor Penelitian</td>
                                            <td><input type="number" name="TotalSkorPenelitianPointB"
                                                    id="TotalSkorPenelitianPointB" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 1</td>
                                            <td><input type="number" name="TotalKelebihaB1" id="TotalKelebihaB1"
                                                    readonly>
                                            </td>
                                            <td colspan="3" rowspan="7">Nilai Penelitian</td>
                                            <td rowspan="7"><input type="number" name="NilaiPenelitian"
                                                    id="NilaiPenelitian" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 2</td>
                                            <td><input type="number" name="TotalKelebihaB2" id="TotalKelebihaB2"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 3</td>
                                            <td><input type="number" name="TotalKelebihaB3" id="TotalKelebihaB3"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 5</td>
                                            <td><input type="number" name="TotalKelebihaB5" id="TotalKelebihaB5"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 6</td>
                                            <td><input type="number" name="TotalKelebihaB6" id="TotalKelebihaB6"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 7</td>
                                            <td><input type="number" name="TotalKelebihaB7" id="TotalKelebihaB7"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 9</td>
                                            <td><input type="number" name="TotalKelebihaB9" id="TotalKelebihaB9"
                                                    readonly>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 10</td>
                                            <td><input type="number" name="TotalKelebihaB10" id="TotalKelebihaB10"
                                                    readonly>
                                            </td>
                                            <td colspan="3" rowspan="8">Nilai Tambah Penelitian</td>
                                            <td rowspan="8"><input type="number" name="NilaiTambahPenelitian"
                                                    id="NilaiTambahPenelitian" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 11</td>
                                            <td><input type="number" name="TotalKelebihaB11" id="TotalKelebihaB11"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 12</td>
                                            <td><input type="number" name="TotalKelebihaB12" id="TotalKelebihaB12"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 13</td>
                                            <td><input type="number" name="TotalKelebihaB13" id="TotalKelebihaB13"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 14</td>
                                            <td><input type="number" name="TotalKelebihaB14" id="TotalKelebihaB14"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 15</td>
                                            <td><input type="number" name="TotalKelebihaB15" id="TotalKelebihaB15"
                                                    readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 17</td>
                                            <td><input type="number" name="TotalKelebihaB17" id="TotalKelebihaB17"
                                                    readonly>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor</td>
                                            <td><input type="number" name="TotalKelebihanSkor" id="TotalKelebihanSkor"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="6">Nilai Total Penelitian & Karya Ilmiah</td>
                                            <td><input type="number" name="NilaiTotalPenelitiandanKaryaIlmiah"
                                                    id="NilaiTotalPenelitiandanKaryaIlmiah" readonly></td>
                                        </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end">
                                        <button type="reset" class="btn btn-danger btn-sm mb-2">Reset</button>
                                        <button type="submit" class="btn btn-primary btn-sm mb-2">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('JavaScript')
    <script src="{{ asset('Assets/js/Input-point/ScorPointB.js') }}"></script>
    @endpush
</x-app-layout>
