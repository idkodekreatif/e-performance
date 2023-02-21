<x-app-layout title="Form Point B">
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
        @role('it'|'superuser')
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Forms </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point B</a></li>
            </ol>
        </div>
        @endrole
        @role('dosen|hrd')
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point B</a></li>
            </ol>
        </div>
        @endrole
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point B</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="table-responsive">
                        <form id="my-form" action="{{ route('update.Point-B', [$data->user_id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
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

                                                @if($data->fileB1)
                                                <a href="{{ asset('storage/'.$data->fileB1) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB1"
                                                    value="{{ $data->scorB1 }}" name="scorB1" type="number"
                                                    aria-label="B1" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB1" value="{{ $data->scorMaxB1 }}"
                                                    name="scorMaxB1" type="number" aria-label="B1" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB1"
                                                    value="{{ number_format($data->scorSubItemB1, 3) }}"
                                                    name="scorSubItemB1" type="number" aria-label="B1" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.1</td>
                                            <td>Dosen memiliki karya yang telah dipatenkan atau diakui secara nasional
                                                maupun internasional
                                            </td>
                                            <td><input type="radio" {{$data->B1 == "1" ? "checked" : ""}} class="B1"
                                                name="B1" id="B1" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B1 == "2" ? "checked" : ""}} class="B1"
                                                name="B1" id="B1" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B1 == "3" ? "checked" : ""}} class="B1"
                                                name="B1" id="B1" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B1 == "4" ? "checked" : ""}} class="B1"
                                                name="B1" id="B1" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B1 == "5" ? "checked" : ""}} class="B1"
                                                name="B1" id="B1" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB1_2_in }}"
                                                    name="JumlahYangDihasilkanB1_2" id="JumlahYangDihasilkanB1_2"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB1_3_in }}"
                                                    name="JumlahYangDihasilkanB1_3" id="JumlahYangDihasilkanB1_3"
                                                    onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB1_4_in }}"
                                                    name="JumlahYangDihasilkanB1_4" id="JumlahYangDihasilkanB1_4"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB1_5_in }}"
                                                    name="JumlahYangDihasilkanB1_5" id="JumlahYangDihasilkanB1_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB1 }}"
                                                    name="JumlahSkorYangDiHasilkanB1" id="JumlahSkorYangDiHasilkanB1"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB1, 3) }}"
                                                    name="SkorTambahanJumlahSkorB1" id="SkorTambahanJumlahSkorB1"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB1_2 }}"
                                                    name="SkorTambahanB1_2" id="SkorTambahanB1_2" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB1_3 }}"
                                                    name="SkorTambahanB1_3" id="SkorTambahanB1_3" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB1_4 }}"
                                                    name="SkorTambahanB1_4" id="SkorTambahanB1_4" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB1_5 }}"
                                                    name="SkorTambahanB1_5" id="SkorTambahanB1_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB1 }}"
                                                    name="SkorTambahanJumlahB1" id="SkorTambahanJumlahB1" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB1, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB1"
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

                                                @if($data->fileB2)
                                                <a href="{{ asset('storage/'.$data->fileB2) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB2"
                                                    value="{{ $data->scorB2 }}" name="scorB2" type="number"
                                                    aria-label="B2" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB2" value="{{ $data->scorMaxB2 }}"
                                                    name="scorMaxB2" type="number" aria-label="B2" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB2"
                                                    value="{{ number_format($data->scorSubItemB2, 3) }}"
                                                    name="scorSubItemB2" type="number" aria-label="B2" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.2</td>
                                            <td>Dosen menghasilkan monograf yang relevan dengan bidang kelimuan
                                            </td>
                                            <td><input type="radio" {{$data->B2 == "1" ? "checked" : ""}} class="B2"
                                                name="B2" id="B2" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B2 == "2" ? "checked" : ""}} class="B2"
                                                name="B2" id="B2" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B2 == "3" ? "checked" : ""}} class="B2"
                                                name="B2" id="B2" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B2 == "4" ? "checked" : ""}} class="B2"
                                                name="B2" id="B2" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B2 == "5" ? "checked" : ""}} class="B2"
                                                name="B2" id="B2" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB2_4_in }}"
                                                    name="JumlahYangDihasilkanB2_4" id="JumlahYangDihasilkanB2_4"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB2_5_in }}"
                                                    name="JumlahYangDihasilkanB2_5" id="JumlahYangDihasilkanB2_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB2 }}"
                                                    name="JumlahSkorYangDiHasilkanB2" id="JumlahSkorYangDiHasilkanB2"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB2, 3) }}"
                                                    name="SkorTambahanJumlahSkorB2" id="SkorTambahanJumlahSkorB2"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB2_4 }}"
                                                    name="SkorTambahanB2_4" id="SkorTambahanB2_4" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB2_5}}"
                                                    name="SkorTambahanB2_5" id="SkorTambahanB2_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB2 }}"
                                                    name="SkorTambahanJumlahB2" id="SkorTambahanJumlahB2" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB2, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB2"
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

                                                @if($data->fileB3)
                                                <a href="{{ asset('storage/'.$data->fileB3) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB3"
                                                    value="{{ $data->scorB3 }}" name="scorB3" type="number"
                                                    aria-label="B3" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB3" value="{{ $data->scorMaxB3 }}"
                                                    name="scorMaxB3" type="number" aria-label="B3" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB3"
                                                    value="{{ number_format($data->scorSubItemB3, 3) }}"
                                                    name="scorSubItemB3" type="number" aria-label="B3" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.3</td>
                                            <td>Dosen menghasilkan buku referensi yang relevan dengan bidang keilmuan
                                            </td>
                                            <td><input type="radio" {{$data->B3 == "1" ? "checked" : ""}} class="B3"
                                                name="B3" id="B3" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B3 == "2" ? "checked" : ""}} class="B3"
                                                name="B3" id="B3" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B3 == "3" ? "checked" : ""}} class="B3"
                                                name="B3" id="B3" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B3 == "4" ? "checked" : ""}} class="B3"
                                                name="B3" id="B3" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B3 == "5" ? "checked" : ""}} class="B3"
                                                name="B3" id="B3" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB3_4_in }}"
                                                    name="JumlahYangDihasilkanB3_4" id="JumlahYangDihasilkanB3_4"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB3_5_in }}"
                                                    name="JumlahYangDihasilkanB3_5" id="JumlahYangDihasilkanB3_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB3 }}"
                                                    name="JumlahSkorYangDiHasilkanB3" id="JumlahSkorYangDiHasilkanB3"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorB3 }}"
                                                    name="SkorTambahanJumlahSkorB3" id="SkorTambahanJumlahSkorB3"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB3_4 }}"
                                                    name="SkorTambahanB3_4" id="SkorTambahanB3_4" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB3_5 }}"
                                                    name="SkorTambahanB3_5" id="SkorTambahanB3_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB3 }}"
                                                    name="SkorTambahanJumlahB3" id="SkorTambahanJumlahB3" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB3, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB3"
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

                                                @if($data->fileB4)
                                                <a href="{{ asset('storage/'.$data->fileB4) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB4')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB4"
                                                    value="{{ $data->scorB4 }}" name="scorB4" type="number"
                                                    aria-label="B4" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB4" value="{{ $data->scorMaxB4 }}"
                                                    type="number" name="scorMaxB4" aria-label="B4" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB4"
                                                    value="{{ number_format($data->scorSubItemB4, 3) }}"
                                                    name="scorSubItemB4" type="number" aria-label="B4" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.4</td>
                                            <td>Peran Dosen sebagai Penulis Utama/tunggal, Monograf/Buku yang
                                                diterbitkan
                                            </td>
                                            <td><input type="radio" {{$data->B4 == "1" ? "checked" : ""}} class="B4"
                                                name="B4" id="B4" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B4 == "2" ? "checked" : ""}} class="B4"
                                                name="B4" id="B4" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B4 == "3" ? "checked" : ""}} class="B4"
                                                name="B4" id="B4" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B4 == "4" ? "checked" : ""}} class="B4"
                                                name="B4" id="B4" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B4 == "5" ? "checked" : ""}} class="B4"
                                                name="B4" id="B4" value="5"
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

                                                @if($data->fileB5)
                                                <a href="{{ asset('storage/'.$data->fileB5) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB5')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB5"
                                                    value="{{ $data->scorB5 }}" name="scorB5" type="number"
                                                    aria-label="B5" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB5" value="{{ $data->scorMaxB5 }}"
                                                    name="scorMaxB5" type="number" aria-label="B5" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB5"
                                                    value="{{ number_format($data->scorSubItemB5, 3) }}"
                                                    name="scorSubItemB5" type="number" aria-label="B5" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.5</td>
                                            <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah Internasional
                                            </td>
                                            <td><input type="radio" {{$data->B5 == "1" ? "checked" : ""}} class="B5"
                                                name="B5" id="B5" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B5 == "2" ? "checked" : ""}} class="B5"
                                                name="B5" id="B5" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B5 == "3" ? "checked" : ""}} class="B5"
                                                name="B5" id="B5" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B5 == "4" ? "checked" : ""}} class="B5"
                                                name="B5" id="B5" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B5 == "5" ? "checked" : ""}} class="B5"
                                                name="B5" id="B5" value="5"
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
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB5_5_in }}"
                                                    name="JumlahYangDihasilkanB5_5" id="JumlahYangDihasilkanB5_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB5 }}"
                                                    name="JumlahSkorYangDiHasilkanB5" id="JumlahSkorYangDiHasilkanB5"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB5, 3) }}"
                                                    name="SkorTambahanJumlahSkorB5" id="SkorTambahanJumlahSkorB5"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB5_5 }}"
                                                    name="SkorTambahanB5_5" id="SkorTambahanB5_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB5 }}"
                                                    name="SkorTambahanJumlahB5" id="SkorTambahanJumlahB5" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB5, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB5"
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

                                                @if($data->fileB6)
                                                <a href="{{ asset('storage/'.$data->fileB6) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB6')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB6"
                                                    value="{{ $data->scorB6 }}" name="scorB6" type="number"
                                                    aria-label="B6" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB6" value="{{ $data->scorMaxB6 }}"
                                                    name="scorMaxB6" type="number" aria-label="B6" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB6"
                                                    value="{{ number_format($data->scorSubItemB6, 3) }}"
                                                    name="scorSubItemB6" type="number" aria-label="B6" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.6</td>
                                            <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah nasional
                                                terakreditasi
                                            </td>
                                            <td><input type="radio" {{$data->B6 == "1" ? "checked" : ""}} class="B6"
                                                name="B6" id="B6" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B6 == "2" ? "checked" : ""}} class="B6"
                                                name="B6" id="B6" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B6 == "3" ? "checked" : ""}} class="B6"
                                                name="B6" id="B6" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B6 == "4" ? "checked" : ""}} class="B6"
                                                name="B6" id="B6" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B6 == "5" ? "checked" : ""}} class="B6"
                                                name="B6" id="B6" value="5"
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
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB6_5 }}"
                                                    name="JumlahYangDihasilkanB6_5" id="JumlahYangDihasilkanB6_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB6 }}"
                                                    name="JumlahSkorYangDiHasilkanB6" id="JumlahSkorYangDiHasilkanB6"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB6, 3) }}"
                                                    name="SkorTambahanJumlahSkorB6" id="SkorTambahanJumlahSkorB6"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB6_5 }}"
                                                    name="SkorTambahanB6_5" id="SkorTambahanB6_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB6 }}"
                                                    name="SkorTambahanJumlahB6" id="SkorTambahanJumlahB6" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB6, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB6"
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
                                                @if($data->fileB7)
                                                <a href="{{ asset('storage/'.$data->fileB7) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB7')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB7"
                                                    value="{{ $data->scorB7 }}" name="scorB7" type="number"
                                                    aria-label="B7" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB7" value="{{ $data->scorMaxB7 }}"
                                                    name="scorMaxB7" type="number" aria-label="B7" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB7"
                                                    value="{{ number_format($data->scorSubItemB7, 3) }}"
                                                    name="scorSubItemB7" type="number" aria-label="B7" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.7</td>
                                            <td>Dosen menulis artikel yang diterbitkan dalam Jurnal Ilmiah Nasional
                                                tidak
                                                terakreditasi / Jurnal Ilmiah Nasional
                                                ber-ISSN
                                            </td>
                                            <td><input type="radio" {{$data->B7 == "1" ? "checked" : ""}} class="B7"
                                                name="B7" id="B7" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B7 == "2" ? "checked" : ""}} class="B7"
                                                name="B7" id="B7" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B7 == "3" ? "checked" : ""}} class="B7"
                                                name="B7" id="B7" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B7 == "4" ? "checked" : ""}} class="B7"
                                                name="B7" id="B7" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B7 == "5" ? "checked" : ""}} class="B7"
                                                name="B7" id="B7" value="5"
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
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB7_5_in }}"
                                                    name="JumlahYangDihasilkanB7_5" id="JumlahYangDihasilkanB7_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB7 }}"
                                                    name="JumlahSkorYangDiHasilkanB7" id="JumlahSkorYangDiHasilkanB7"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB7, 3) }}"
                                                    name="SkorTambahanJumlahSkorB7" id="SkorTambahanJumlahSkorB7"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB7_5 }}"
                                                    name="SkorTambahanB7_5" id="SkorTambahanB7_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB7 }}"
                                                    name="SkorTambahanJumlahB7" id="SkorTambahanJumlahB7" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB7, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB7"
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

                                                @if($data->fileB8)
                                                <a href="{{ asset('storage/'.$data->fileB8) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB8')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB8"
                                                    value="{{ $data->scorB8 }}" name="scorB8" type="number"
                                                    aria-label="B8" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB8" value="{{ $data->scorMaxB8 }}"
                                                    name="scorMaxB8" type="number" aria-label="B8" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB8"
                                                    value="{{ number_format($data->scorSubItemB8, 3) }}"
                                                    name="scorSubItemB8" type="number" aria-label="B8" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.8</td>
                                            <td>Peran Dosen sebagai Penulis Utama/tunggal, dari jurnal yang diterbitkan
                                            </td>
                                            <td><input type="radio" {{$data->B8 == "1" ? "checked" : ""}} class="B8"
                                                name="B8" id="B8" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B8 == "2" ? "checked" : ""}} class="B8"
                                                name="B8" id="B8" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B8 == "3" ? "checked" : ""}} class="B8"
                                                name="B8" id="B8" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B8 == "4" ? "checked" : ""}} class="B8"
                                                name="B8" id="B8" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B8 == "5" ? "checked" : ""}} class="B8"
                                                name="B8" id="B8" value="5"
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

                                                @if($data->fileB9)
                                                <a href="{{ asset('storage/'.$data->fileB9) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB9')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB9"
                                                    value="{{ $data->scorB9 }}" name="scorB9" type="number"
                                                    aria-label="B9" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB9" value="{{ $data->scorMaxB9 }}"
                                                    name="scorMaxB9" type="number" aria-label="B9" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB9"
                                                    value="{{ number_format($data->scorSubItemB9, 3) }}"
                                                    name="scorSubItemB9" type="number" aria-label="B9" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.9</td>
                                            <td>Dosen membuat makalah dipresentasikan dalam seminar dan dimuat dalam
                                                prosiding internasional
                                            </td>
                                            <td><input type="radio" {{$data->B9 == "1" ? "checked" : ""}} class="B9"
                                                name="B9" id="B9" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B9 == "2" ? "checked" : ""}} class="B9"
                                                name="B9" id="B9" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B9 == "3" ? "checked" : ""}} class="B9"
                                                name="B9" id="B9" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B9 == "4" ? "checked" : ""}} class="B9"
                                                name="B9" id="B9" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B9 == "5" ? "checked" : ""}} class="B9"
                                                name="B9" id="B9" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah kelebihan karya makalah (>2 makalah)</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB9_3_in }}"
                                                    name="JumlahYangDihasilkanB9_3" id="JumlahYangDihasilkanB9_3"
                                                    onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB9_5_in }}"
                                                    name="JumlahYangDihasilkanB9_5" id="JumlahYangDihasilkanB9_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB9 }}"
                                                    name="JumlahSkorYangDiHasilkanB9" id="JumlahSkorYangDiHasilkanB9"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB9, 3) }}"
                                                    name="SkorTambahanJumlahSkorB9" id="SkorTambahanJumlahSkorB9"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB9_3 }}"
                                                    name="SkorTambahanB9_3" id="SkorTambahanB9_3" readonly>
                                            </td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB9_5 }}"
                                                    name="SkorTambahanB9_5" id="SkorTambahanB9_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB9 }}"
                                                    name="SkorTambahanJumlahB9" id="SkorTambahanJumlahB9" readonly></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB9, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB9"
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

                                                @if($data->fileB10)
                                                <a href="{{ asset('storage/'.$data->fileB10) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB10')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB10"
                                                    value="{{ $data->scorB10 }}" name="scorB10" type="number"
                                                    aria-label="B10" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB10" value="{{ $data->scorMaxB10 }}"
                                                    name="scorMaxB10" type="number" aria-label="B10" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB10"
                                                    value="{{ number_format($data->scorSubItemB10, 3) }}"
                                                    name="scorSubItemB10" type="number" aria-label="B10" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.10</td>
                                            <td>Dosen membuat makalah dipresentasikan dalam seminar dan dimuat dalam
                                                prosiding nasional/lokal
                                            </td>
                                            <td><input type="radio" {{$data->B10 == "1" ? "checked" : ""}} class="B10"
                                                name="B10" id="B10" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B10 == "2" ? "checked" : ""}} class="B10"
                                                name="B10" id="B10" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B10 == "3" ? "checked" : ""}} class="B10"
                                                name="B10" id="B10" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B10 == "4" ? "checked" : ""}} class="B10"
                                                name="B10" id="B10" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B10 == "5" ? "checked" : ""}} class="B10"
                                                name="B10" id="B10" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah kelebihan karya makalah (>4 makalah)</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB10_3_in }}"
                                                    name="JumlahYangDihasilkanB10_3" id="JumlahYangDihasilkanB10_3"
                                                    onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB10_5_in }}"
                                                    name="JumlahYangDihasilkanB10_5" id="JumlahYangDihasilkanB10_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB10 }}"
                                                    name="JumlahSkorYangDiHasilkanB10" id="JumlahSkorYangDiHasilkanB10"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB10, 3) }}"
                                                    name="SkorTambahanJumlahSkorB10" id="SkorTambahanJumlahSkorB10"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB10_3 }}"
                                                    name="SkorTambahanB10_3" id="SkorTambahanB10_3" readonly>
                                            </td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB10_5 }}"
                                                    name="SkorTambahanB10_5" id="SkorTambahanB10_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB10 }}"
                                                    name="SkorTambahanJumlahB10" id="SkorTambahanJumlahB10" readonly>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB10, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB10"
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

                                                @if($data->fileB11)
                                                <a href="{{ asset('storage/'.$data->fileB11) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB11')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB11"
                                                    value="{{ $data->scorB11 }}" name="scorB11" type="number"
                                                    aria-label="B11" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB11" value="{{ $data->scorMaxB11 }}"
                                                    name="scorMaxB11" type="number" aria-label="B11" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB11"
                                                    value="{{ number_format($data->scorSubItemB11, 3) }}"
                                                    name="scorSubItemB11" type="number" aria-label="B11" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.11</td>
                                            <td>Dosen membuat POSTER dipresentasikan dalam seminar dan prosiding
                                                internasional
                                            </td>
                                            <td><input type="radio" {{$data->B11 == "1" ? "checked" : ""}} class="B11"
                                                name="B11" id="B11" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B11 == "2" ? "checked" : ""}} class="B11"
                                                name="B11" id="B11" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B11 == "3" ? "checked" : ""}} class="B11"
                                                name="B11" id="B11" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B11 == "4" ? "checked" : ""}} class="B11"
                                                name="B11" id="B11" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B11 == "5" ? "checked" : ""}} class="B11"
                                                name="B11" id="B11" value="5"
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
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB11_5_in }}"
                                                    name="JumlahYangDihasilkanB11_5" id="JumlahYangDihasilkanB11_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB11 }}"
                                                    name="JumlahSkorYangDiHasilkanB11" id="JumlahSkorYangDiHasilkanB11"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB11, 3) }}"
                                                    name="SkorTambahanJumlahSkorB11" id="SkorTambahanJumlahSkorB11"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB11_5 }}"
                                                    name="SkorTambahanB11_5" id="SkorTambahanB11_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB11 }}"
                                                    name="SkorTambahanJumlahB11" id="SkorTambahanJumlahB11" readonly>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB11, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB11"
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

                                                @if($data->fileB12)
                                                <a href="{{ asset('storage/'.$data->fileB12) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB12')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB12"
                                                    value="{{ $data->scorB12 }}" name="scorB12" type="number"
                                                    aria-label="B12" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB12" value="{{ $data->scorMaxB12 }}"
                                                    name="scorMaxB12" type="number" aria-label="B12" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB12"
                                                    value="{{ number_format($data->scorSubItemB12, 3) }}"
                                                    name="scorSubItemB12" type="number" aria-label="B12" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.12</td>
                                            <td>Dosen membuat POSTER dipresentasikan dalam seminar dan prosiding
                                                Nasional
                                            </td>
                                            <td><input type="radio" {{$data->B12 == "1" ? "checked" : ""}} class="B12"
                                                name="B12" id="B12" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B12 == "2" ? "checked" : ""}} class="B12"
                                                name="B12" id="B12" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B12 == "3" ? "checked" : ""}} class="B12"
                                                name="B12" id="B12" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B12 == "4" ? "checked" : ""}} class="B12"
                                                name="B12" id="B12" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B12 == "5" ? "checked" : ""}} class="B12"
                                                name="B12" id="B12" value="5"
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
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB12_5_in }}"
                                                    name="JumlahYangDihasilkanB12_5" id="JumlahYangDihasilkanB12_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB12 }}"
                                                    name="JumlahSkorYangDiHasilkanB12" id="JumlahSkorYangDiHasilkanB12"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB12, 3) }}"
                                                    name="SkorTambahanJumlahSkorB12" id="SkorTambahanJumlahSkorB12"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB12_5 }}"
                                                    name="SkorTambahanB12_5" id="SkorTambahanB12_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB12 }}"
                                                    name="SkorTambahanJumlahB12" id="SkorTambahanJumlahB12" readonly>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB12, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB12"
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

                                                @if($data->fileB13)
                                                <a href="{{ asset('storage/'.$data->fileB13) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB13')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB13"
                                                    value="{{ $data->scorB13 }}" name="scorB13" type="number"
                                                    aria-label="B13" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB13" value="{{ $data->scorMaxB13 }}"
                                                    name="scorMaxB13" type="number" aria-label="B13" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB13"
                                                    value="{{ number_format($data->scorSubItemB13, 3) }}"
                                                    name="scorSubItemB13" type="number" aria-label="B13" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.13</td>
                                            <td>Dosen menulis opini dalam Koran/Majalah populer / umum
                                            </td>
                                            <td><input type="radio" {{$data->B13 == "1" ? "checked" : ""}} class="B13"
                                                name="B13" id="B13" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B13 == "2" ? "checked" : ""}} class="B13"
                                                name="B13" id="B13" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B13 == "3" ? "checked" : ""}} class="B13"
                                                name="B13" id="B13" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B13 == "4" ? "checked" : ""}} class="B13"
                                                name="B13" id="B13" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B13 == "5" ? "checked" : ""}} class="B13"
                                                name="B13" id="B13" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB13_3_in }}"
                                                    name="JumlahYangDihasilkanB13_3" id="JumlahYangDihasilkanB13_3"
                                                    onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB13_4_in }}"
                                                    name="JumlahYangDihasilkanB13_4" id="JumlahYangDihasilkanB13_4"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB13_5_in }}"
                                                    name="JumlahYangDihasilkanB13_5" id="JumlahYangDihasilkanB13_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB13 }}"
                                                    name="JumlahSkorYangDiHasilkanB13" id="JumlahSkorYangDiHasilkanB13"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB13, 3) }}"
                                                    name="SkorTambahanJumlahSkorB13" id="SkorTambahanJumlahSkorB13"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB13_3 }}"
                                                    name="SkorTambahanB13_3" id="SkorTambahanB13_3" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB13_4 }}"
                                                    name="SkorTambahanB13_4" id="SkorTambahanB13_4" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB13_5 }}"
                                                    name="SkorTambahanB13_5" id="SkorTambahanB13_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB13 }}"
                                                    name="SkorTambahanJumlahB13" id="SkorTambahanJumlahB13" readonly>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB13, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB13"
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

                                                @if($data->fileB14)
                                                <a href="{{ asset('storage/'.$data->fileB14) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB14')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB14"
                                                    value="{{ $data->scorB14 }}" name="scorB14" type="number"
                                                    aria-label="B14" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB14" value="{{ $data->scorMaxB14 }}"
                                                    name="scorMaxB14" type="number" aria-label="B14" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB14"
                                                    value="{{ number_format($data->scorSubItemB14, 3) }}"
                                                    name="scorSubItemB14" type="number" aria-label="B14" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.14</td>
                                            <td>Dosen menghasilkan penelitian/pemikiran yang tidak dipublikasikan, tapi
                                                digunakan untuk kepentingan tertentu (dibukukan
                                                dan disimpan dalam perpustakaan PT)
                                            </td>
                                            <td><input type="radio" {{$data->B14 == "1" ? "checked" : ""}} class="B14"
                                                name="B14" id="B14" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B14 == "2" ? "checked" : ""}} class="B14"
                                                name="B14" id="B14" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B14 == "3" ? "checked" : ""}} class="B14"
                                                name="B14" id="B14" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B14 == "4" ? "checked" : ""}} class="B14"
                                                name="B14" id="B14" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B14 == "5" ? "checked" : ""}} class="B14"
                                                name="B14" id="B14" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB14_2_in }}"
                                                    name="JumlahYangDihasilkanB14_2" id="JumlahYangDihasilkanB14_2"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB14_3_in }}"
                                                    name="JumlahYangDihasilkanB14_3" id="JumlahYangDihasilkanB14_3"
                                                    onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB14_4_in }}"
                                                    name="JumlahYangDihasilkanB14_4" id="JumlahYangDihasilkanB14_4"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB14_5_in }}"
                                                    name="JumlahYangDihasilkanB14_5" id="JumlahYangDihasilkanB14_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB14 }}"
                                                    name="JumlahSkorYangDiHasilkanB14" id="JumlahSkorYangDiHasilkanB14"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB14, 3) }}"
                                                    name="SkorTambahanJumlahSkorB14" id="SkorTambahanJumlahSkorB14"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB14_2 }}"
                                                    name="SkorTambahanB14_2" id="SkorTambahanB14_2" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB14_3 }}"
                                                    name="SkorTambahanB14_3" id="SkorTambahanB14_3" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB14_4 }}"
                                                    name="SkorTambahanB14_4" id="SkorTambahanB14_4" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB14_5 }}"
                                                    name="SkorTambahanB14_5" id="SkorTambahanB14_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB14 }}"
                                                    name="SkorTambahanJumlahB14" id="SkorTambahanJumlahB14" readonly>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB14, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB14"
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

                                                @if($data->fileB15)
                                                <a href="{{ asset('storage/'.$data->fileB15) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB15')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB15"
                                                    value="{{ $data->scorB15 }}" name="scorB15" type="number"
                                                    aria-label="B15" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB15" value="{{ $data->scorMaxB15 }}"
                                                    name="scorMaxB15" type="number" aria-label="B15" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB15"
                                                    value="{{ number_format($data->scorSubItemB15, 3) }}"
                                                    name="scorSubItemB15" type="number" aria-label="B15" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.15</td>
                                            <td>Dosen membuat proposal penelitian, karya/desain teknologi, seni dan
                                                sastra
                                                dengan dana hibah
                                            </td>
                                            <td><input type="radio" {{$data->B15 == "1" ? "checked" : ""}} class="B15"
                                                name="B15" id="B15" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B15 == "2" ? "checked" : ""}} class="B15"
                                                name="B15" id="B15" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B15 == "3" ? "checked" : ""}} class="B15"
                                                name="B15" id="B15" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B15 == "4" ? "checked" : ""}} class="B15"
                                                name="B15" id="B15" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B15 == "5" ? "checked" : ""}} class="B15"
                                                name="B15" id="B15" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB15_3_in }}"
                                                    name="JumlahYangDihasilkanB15_3" id="JumlahYangDihasilkanB15_3"
                                                    onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB15_4_in }}"
                                                    name="JumlahYangDihasilkanB15_4" id="JumlahYangDihasilkanB15_4"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB15_5 }}"
                                                    name="JumlahYangDihasilkanB15_5" id="JumlahYangDihasilkanB15_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB15 }}"
                                                    name="JumlahSkorYangDiHasilkanB15" id="JumlahSkorYangDiHasilkanB15"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB15, 3) }}"
                                                    name="SkorTambahanJumlahSkorB15" id="SkorTambahanJumlahSkorB15"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB15_3 }}"
                                                    name="SkorTambahanB15_3" id="SkorTambahanB15_3" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB15_4 }}"
                                                    name="SkorTambahanB15_4" id="SkorTambahanB15_4" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB15_5 }}"
                                                    name="SkorTambahanB15_5" id="SkorTambahanB15_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB15 }}"
                                                    name="SkorTambahanJumlahB15" id="SkorTambahanJumlahB15" readonly>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB15, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB15"
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

                                                @if($data->fileB16)
                                                <a href="{{ asset('storage/'.$data->fileB16) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB16')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB16"
                                                    value="{{ $data->scorB16 }}" name="scorB16" type="number"
                                                    aria-label="B16" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB16" value="{{ $data->scorMaxB16 }}"
                                                    name="scorMaxB16" type="number" aria-label="B16" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB16"
                                                    value="{{ number_format($data->scorSubItemB16, 3) }}"
                                                    name="scorSubItemB16" type="number" aria-label="B16" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.16</td>
                                            <td>Peran Dosen dlm pembuatan proposal penelitian, karya/disain teknologi,
                                                seni
                                                dan sastra
                                            </td>
                                            <td><input type="radio" {{$data->B16 == "1" ? "checked" : ""}} class="B16"
                                                name="B16" id="B16" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B16 == "2" ? "checked" : ""}} class="B16"
                                                name="B16" id="B16" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B16 == "3" ? "checked" : ""}} class="B16"
                                                name="B16" id="B16" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B16 == "4" ? "checked" : ""}} class="B16"
                                                name="B16" id="B16" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B16 == "5" ? "checked" : ""}} class="B16"
                                                name="B16" id="B16" value="5"
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

                                                @if($data->fileB17)
                                                <a href="{{ asset('storage/'.$data->fileB17) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB17')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB17"
                                                    value="{{ $data->scorB17 }}" name="scorB17" type="number"
                                                    aria-label="B17" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB17" value="{{ $data->scorMaxB17 }}"
                                                    name="scorMaxB17" type="number" aria-label="B17" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB17"
                                                    value="{{ number_format($data->scorSubItemB17, 3) }}"
                                                    name="scorSubItemB17" type="number" aria-label="B17" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.17</td>
                                            <td>Dosen melakukan penelitian dengan dana hibah
                                            </td>
                                            <td><input type="radio" {{$data->B17 == "1" ? "checked" : ""}} class="B17"
                                                name="B17" id="B17" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B17 == "2" ? "checked" : ""}} class="B17"
                                                name="B17" id="B17" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B17 == "3" ? "checked" : ""}} class="B17"
                                                name="B17" id="B17" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B17 == "4" ? "checked" : ""}} class="B17"
                                                name="B17" id="B17" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B17 == "5" ? "checked" : ""}} class="B17"
                                                name="B17" id="B17" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"></td>
                                            <td>Jumlah yang dihasilkan</td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB17_2_in }}"
                                                    name="JumlahYangDihasilkanB17_2" id="JumlahYangDihasilkanB17_2"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB17_3_in }}"
                                                    name="JumlahYangDihasilkanB17_3" id="JumlahYangDihasilkanB17_3"
                                                    onkeyup="sum()" placeholder="0">
                                            </td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB17_4_in }}"
                                                    name="JumlahYangDihasilkanB17_4" id="JumlahYangDihasilkanB17_4"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td><input type="number" value="{{ $data->JumlahYangDihasilkanB17_5_in }}"
                                                    name="JumlahYangDihasilkanB17_5" id="JumlahYangDihasilkanB17_5"
                                                    onkeyup="sum()" placeholder="0"></td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanB17 }}"
                                                    name="JumlahSkorYangDiHasilkanB17" id="JumlahSkorYangDiHasilkanB17"
                                                    readonly></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahSkorB17, 3) }}"
                                                    name="SkorTambahanJumlahSkorB17" id="SkorTambahanJumlahSkorB17"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Skor Tambahan dari Jumlah</td>
                                            <td></td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB17_2 }}"
                                                    name="SkorTambahanB17_2" id="SkorTambahanB17_2" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB17_3 }}"
                                                    name="SkorTambahanB17_3" id="SkorTambahanB17_3" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB17_4 }}"
                                                    name="SkorTambahanB17_4" id="SkorTambahanB17_4" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanB17_5 }}"
                                                    name="SkorTambahanB17_5" id="SkorTambahanB17_5" readonly>
                                            </td>
                                            <td><input type="number" value="{{ $data->SkorTambahanJumlahB17 }}"
                                                    name="SkorTambahanJumlahB17" id="SkorTambahanJumlahB17" readonly>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->SkorTambahanJumlahBobotSubItemB17, 3) }}"
                                                    name="SkorTambahanJumlahBobotSubItemB17"
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

                                                @if($data->fileB18)
                                                <a href="{{ asset('storage/'.$data->fileB18) }}"
                                                    target="_blank">Preview</a>
                                                @else
                                                N/A
                                                @endif

                                                @error('fileB18')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </td>
                                            <td rowspan="2" class="bg-warning"><input id="scorB18"
                                                    value="{{ $data->scorB18 }}" name="scorB18" type="number"
                                                    aria-label="B18" readonly></td>
                                            <td rowspan="2"><input id="scorMaxB18" value="{{ $data->scorMaxB18 }}"
                                                    name="scorMaxB18" type="number" aria-label="B18" readonly>
                                            </td>
                                            <td rowspan="2"><input id="scorSubItemB18"
                                                    value="{{ number_format($data->scorSubItemB18, 3) }}"
                                                    name="scorSubItemB18" type="number" aria-label="B18" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>B.18</td>
                                            <td>Peran Dosen dalam penelitian
                                            </td>
                                            <td><input type="radio" {{$data->B18 == "1" ? "checked" : ""}} class="B18"
                                                name="B18" id="B18" value="1"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B18 == "2" ? "checked" : ""}} class="B18"
                                                name="B18" id="B18" value="2"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B18 == "3" ? "checked" : ""}} class="B18"
                                                name="B18" id="B18" value="3"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B18 == "4" ? "checked" : ""}} class="B18"
                                                name="B18" id="B18" value="4"
                                                onclick="sum();">
                                            </td>
                                            <td><input type="radio" {{$data->B18 == "5" ? "checked" : ""}} class="B18"
                                                name="B18" id="B18" value="5"
                                                onclick="sum();">
                                            </td>
                                        </tr>


                                        <tr>
                                            <td colspan="5"></td>
                                            <td colspan="5">Total Skor Penelitian</td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->TotalSkorPenelitianPointB, 3) }}"
                                                    name="TotalSkorPenelitianPointB" id="TotalSkorPenelitianPointB"
                                                    readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 1</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB1 }}"
                                                    name="TotalKelebihaB1" id="TotalKelebihaB1" readonly>
                                            </td>
                                            <td colspan="3" rowspan="7">Nilai Penelitian</td>
                                            <td rowspan="7"><input type="number" value="{{ $data->NilaiPenelitian }}"
                                                    name="NilaiPenelitian" id="NilaiPenelitian" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 2</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB2 }}"
                                                    name="TotalKelebihaB2" id="TotalKelebihaB2" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 3</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB3 }}"
                                                    name="TotalKelebihaB3" id="TotalKelebihaB3" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 5</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB5 }}"
                                                    name="TotalKelebihaB5" id="TotalKelebihaB5" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 6</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB6 }}"
                                                    name="TotalKelebihaB6" id="TotalKelebihaB6" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 7</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB7 }}"
                                                    name="TotalKelebihaB7" id="TotalKelebihaB7" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 9</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB9 }}"
                                                    name="TotalKelebihaB9" id="TotalKelebihaB9" readonly>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 10</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB10 }}"
                                                    name="TotalKelebihaB10" id="TotalKelebihaB10" readonly>
                                            </td>
                                            <td colspan="3" rowspan="8">Nilai Tambah Penelitian</td>
                                            <td rowspan="8"><input type="number"
                                                    value="{{ $data->NilaiTambahPenelitian }}"
                                                    name="NilaiTambahPenelitian" id="NilaiTambahPenelitian" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 11</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB11 }}"
                                                    name="TotalKelebihaB11" id="TotalKelebihaB11" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 12</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB12 }}"
                                                    name="TotalKelebihaB12" id="TotalKelebihaB12" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 13</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB13 }}"
                                                    name="TotalKelebihaB13" id="TotalKelebihaB13" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 14</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB14 }}"
                                                    name="TotalKelebihaB14" id="TotalKelebihaB14" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 15</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB15 }}"
                                                    name="TotalKelebihaB15" id="TotalKelebihaB15" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor No. 17</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihaB17 }}"
                                                    name="TotalKelebihaB17" id="TotalKelebihaB17" readonly>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">Total Kelebihan Skor</td>
                                            <td><input type="number" value="{{ $data->TotalKelebihanSkor }}"
                                                    name="TotalKelebihanSkor" id="TotalKelebihanSkor" readonly></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="6">Nilai Total Penelitian & Karya Ilmiah</td>
                                            <td><input type="number"
                                                    value="{{ number_format($data->NilaiTotalPenelitiandanKaryaIlmiah, 2) }}"
                                                    name="NilaiTotalPenelitiandanKaryaIlmiah"
                                                    id="NilaiTotalPenelitiandanKaryaIlmiah" readonly></td>
                                        </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end">
                                        <button type="submit" onclick="event.preventDefault(); confirmSubmit();" class="btn btn-primary btn-sm mb-2">Simpan</button>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan menyimpan data tersebut.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('my-form').submit();
                } else {
                    Swal.fire('Data batal disimpan');
                }
            });
        }
    </script>
    @endpush
</x-app-layout>
