<x-app-layout title="Form Point D">
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point D</a></li>
            </ol>
        </div>
        @endrole
        @role('dosen|hrd')
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point D</a></li>
            </ol>
        </div>
        @endrole
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point D</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="table-responsive">
                        <form id="my-form" action="{{ route('update.Point-D', [$data->new_user_id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <table class="table table-bordered border-2 table-sm text-center table-sm">
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
                                    <tr>
                                        <td>D</td>
                                        <td colspan="10" class="text-start">UNSUR PENUNJANG</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi anggota senat fakultas</td>
                                        <td>Menjadi anggota senat Institusi</td>
                                        <td>Menjadi Ketua/Sekretaris Senat fakultas</td>
                                        <td>Menjadi Ketua/Sekretaris Senat Institusi</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK Yayasan
                                                yang menyatakan keanggotaan dalam Senat Akademik</label>
                                            <input class="@error('fileD1') is-invalid @enderror" name="fileD1"
                                                id="formFileSm" type="file">

                                            @if($data->fileD1)
                                            <a href="{{ asset('storage/'.$data->fileD1) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD1"
                                                value="{{ $data->scorD1 }}" name="scorD1" type="number" aria-label="D1"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD1" value="{{ $data->scorMaxD1 }}"
                                                name="scorMaxD1" type="number" aria-label="D1" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD1" value="{{ $data->scorSubItemD1 }}"
                                                name="scorSubItemD1" type="number" aria-label="D1" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.1</td>
                                        <td>Dosen menjadi ketua, sekretaris atau anggota senat fakultas/Institusi</td>
                                        <td><input type="radio" {{$data->D1 == "1" ? "checked" : ""}} class="D1"
                                            name="D1" id="D1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D1 == "2" ? "checked" : ""}} class="D1"
                                            name="D1" id="D1" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D1 == "3" ? "checked" : ""}} class="D1"
                                            name="D1" id="D1" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D1 == "4" ? "checked" : ""}} class="D1"
                                            name="D1" id="D1" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D1 == "5" ? "checked" : ""}} class="D1"
                                            name="D1" id="D1" value="5" onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Terlibat dalam Kepanitiaan Kegiatan Internal / Lokal</td>
                                        <td>Terlibat dalam Kepanitiaan Kegiatan Regional</td>
                                        <td>Terlibat dalam Kepanitiaan Kegiatan Nasional</td>
                                        <td>Terlibat dalam Kepanitiaan Kegiatan Internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK atau
                                                Surat Tugas yang menyatakan keanggotaan dosen</label>
                                            <input class="@error('fileD2') is-invalid @enderror" name="fileD2"
                                                id="formFileSm" type="file">

                                            @if($data->fileD2)
                                            <a href="{{ asset('storage/'.$data->fileD2) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD2"
                                                value="{{ $data->scorD2 }}" name="scorD2" type="number" aria-label="D2"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD2" value="{{ $data->scorMaxD2 }}"
                                                name="scorMaxD2" type="number" aria-label="D2" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD2" value="{{ $data->scorSubItemD2 }}"
                                                name="scorSubItemD2" type="number" aria-label="D2" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.2</td>
                                        <td>Dosen menjadi anggota pada kepanitiaan tertentu (terkait Tri Dharma)
                                        </td>
                                        <td><input type="radio" {{$data->D2 == "1" ? "checked" : ""}} class="D2"
                                            name="D2" id="D2" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D2 == "2" ? "checked" : ""}} class="D2"
                                            name="D2" id="D2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D2 == "3" ? "checked" : ""}} class="D2"
                                            name="D2" id="D2" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D2 == "4" ? "checked" : ""}} class="D2"
                                            name="D2" id="D2" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D2 == "5" ? "checked" : ""}} class="D2"
                                            name="D2" id="D2" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kepanitiaan yang diikuti</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD2_2_in }}"
                                                name="JumlahYangDihasilkanD2_2" id="JumlahYangDihasilkanD2_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD2_3_in }}"
                                                name="JumlahYangDihasilkanD2_3" id="JumlahYangDihasilkanD2_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD2_4_in }}"
                                                name="JumlahYangDihasilkanD2_4" id="JumlahYangDihasilkanD2_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD2_5_in }}"
                                                name="JumlahYangDihasilkanD2_5" id="JumlahYangDihasilkanD2_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD2 }}"
                                                name="JumlahSkorYangDiHasilkanD2" id="JumlahSkorYangDiHasilkanD2"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD2 }}"
                                                name="SkorTambahanJumlahSkorD2" id="SkorTambahanJumlahSkorD2" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD2_2 }}"
                                                name="SkorTambahanD2_2" id="SkorTambahanD2_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD2_3 }}"
                                                name="SkorTambahanD2_3" id="SkorTambahanD2_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD2_4 }}"
                                                name="SkorTambahanD2_4" id="SkorTambahanD2_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD2_5 }}"
                                                name="SkorTambahanD2_5" id="SkorTambahanD2_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD2 }}"
                                                name="SkorTambahanJumlahD2" id="SkorTambahanJumlahD2" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD2 }}"
                                                name="SkorTambahanJumlahBobotSubItemD2"
                                                id="SkorTambahanJumlahBobotSubItemD2" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi anggota dari suatu bidang kerja</td>
                                        <td>Menjadi Ketua bidang/Koordinator suatu bidang kerja</td>
                                        <td>Menjadi Pengurus inti (Sekretaris / Bendahara) dalam kegiatan</td>
                                        <td>Menjadi Ketua/Wakil Ketua dalam kegiatan
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pengangkatan dosen sebagai pengurus dalam organisasi
                                                kemasyarakatan tertentu</label>
                                            <input class="@error('fileD3') is-invalid @enderror" name="fileD3"
                                                id="formFileSm" type="file">

                                            @if($data->fileD3)
                                            <a href="{{ asset('storage/'.$data->fileD3) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD3"
                                                value="{{ $data->scorD3 }}" name="scorD3" type="number" aria-label="D3"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD3" value="{{ $data->scorMaxD3 }}"
                                                name="scorMaxD3" type="number" aria-label="D3" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD3" value="{{ $data->scorSubItemD3 }}"
                                                name="scorSubItemD3" type="number" aria-label="D3" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.3</td>
                                        <td>Peranan dosen dalam kepanitiaan tertentu
                                        </td>
                                        <td><input type="radio" {{$data->D3 == "1" ? "checked" : ""}} class="D3"
                                            name="D3" id="D3" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D3 == "2" ? "checked" : ""}} class="D3"
                                            name="D3" id="D3" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D3 == "3" ? "checked" : ""}} class="D3"
                                            name="D3" id="D3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D3 == "4" ? "checked" : ""}} class="D3"
                                            name="D3" id="D3" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D3 == "5" ? "checked" : ""}} class="D3"
                                            name="D3" id="D3" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah peranan dosen dalam kepanitiaan</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD3_2_in }}"
                                                name="JumlahYangDihasilkanD3_2" id="JumlahYangDihasilkanD3_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD3_3_in }}"
                                                name="JumlahYangDihasilkanD3_3" id="JumlahYangDihasilkanD3_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD3_4_in }}"
                                                name="JumlahYangDihasilkanD3_4" id="JumlahYangDihasilkanD3_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD3_5_in }}"
                                                name="JumlahYangDihasilkanD3_5" id="JumlahYangDihasilkanD3_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD3 }}"
                                                name="JumlahSkorYangDiHasilkanD3" id="JumlahSkorYangDiHasilkanD3"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD3 }}"
                                                name="SkorTambahanJumlahSkorD3" id="SkorTambahanJumlahSkorD3" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD3_2 }}"
                                                name="SkorTambahanD3_2" id="SkorTambahanD3_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD3_3 }}"
                                                name="SkorTambahanD3_3" id="SkorTambahanD3_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD3_4 }}"
                                                name="SkorTambahanD3_4" id="SkorTambahanD3_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD3_5 }}"
                                                name="SkorTambahanD3_5" id="SkorTambahanD3_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD3 }}"
                                                name="SkorTambahanJumlahD3" id="SkorTambahanJumlahD3" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD3 }}"
                                                name="SkorTambahanJumlahBobotSubItemD3"
                                                id="SkorTambahanJumlahBobotSubItemD3" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Pernah menjadi mitra bestari/reviewer pada 1 tahun penilaian yang lampau
                                        </td>
                                        <td>Sedang menjadi mitra bestari/reviewer jurnal ilmiah tidak terakreditasi</td>
                                        <td>Sedang menjadi mitra bestari/reviewer jurnal ilmiah nasional terakreditasi
                                        </td>
                                        <td>Sedang menjadi mitra bestari/reviewer jurnal ilmiah internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat
                                                Keterangan dan Bukti Jurnal</label>
                                            <input class="@error('fileD4') is-invalid @enderror" name="fileD4"
                                                id="formFileSm" type="file">

                                            @if($data->fileD4)
                                            <a href="{{ asset('storage/'.$data->fileD4) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD4"
                                                value="{{ $data->scorD4 }}" name="scorD4" type="number" aria-label="D4"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD4" value="{{ $data->scorMaxD4 }}"
                                                name="scorMaxD4" type="number" aria-label="D4" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD4" value="{{ $data->scorSubItemD4 }}"
                                                name="scorSubItemD4" type="number" aria-label="D4" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.4</td>
                                        <td>Dosen menjadi mitra bestari/reviewer dalam jurnal ilmiah
                                        </td>
                                        <td><input type="radio" {{$data->D4 == "1" ? "checked" : ""}} class="D4"
                                            name="D4" id="D4" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D4 == "2" ? "checked" : ""}} class="D4"
                                            name="D4" id="D4" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D4 == "3" ? "checked" : ""}} class="D4"
                                            name="D4" id="D4" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D4 == "4" ? "checked" : ""}} class="D4"
                                            name="D4" id="D4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D4 == "5" ? "checked" : ""}} class="D4"
                                            name="D4" id="D4" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah jurnal</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD4_3_in }}"
                                                name="JumlahYangDihasilkanD4_3" id="JumlahYangDihasilkanD4_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD4_4_in }}"
                                                name="JumlahYangDihasilkanD4_4" id="JumlahYangDihasilkanD4_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD4_5_in }}"
                                                name="JumlahYangDihasilkanD4_5" id="JumlahYangDihasilkanD4_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD4 }}"
                                                name="JumlahSkorYangDiHasilkanD4" id="JumlahSkorYangDiHasilkanD4"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD4 }}"
                                                name="SkorTambahanJumlahSkorD4" id="SkorTambahanJumlahSkorD4" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD4_3 }}"
                                                name="SkorTambahanD4_3" id="SkorTambahanD4_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD4_4 }}"
                                                name="SkorTambahanD4_4" id="SkorTambahanD4_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD4_5 }}"
                                                name="SkorTambahanD4_5" id="SkorTambahanD4_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD4 }}"
                                                name="SkorTambahanJumlahD4" id="SkorTambahanJumlahD4" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD4 }}"
                                                name="SkorTambahanJumlahBobotSubItemD4"
                                                id="SkorTambahanJumlahBobotSubItemD4" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Pernah menjadi redaktur/editor pada 1 tahun penilaian yang lampau</td>
                                        <td>Sedang menjadi redaktur/editor terbitan lokal</td>
                                        <td>Sedang menjadi redaktur/editor terbitan nasional
                                        </td>
                                        <td>Sedang menjadi redaktur/editor terbitan internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat
                                                Keterangan dan Bukti Majalah/terbitan populer lainnya</label>
                                            <input class="@error('fileD5') is-invalid @enderror" name="fileD5"
                                                id="formFileSm" type="file">

                                            @if($data->fileD5)
                                            <a href="{{ asset('storage/'.$data->fileD5) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD5"
                                                value="{{ $data->scorD5 }}" name="scorD5" type="number" aria-label="D5"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD5" name="scorMaxD5"
                                                value="{{ $data->scorMaxD5 }}" type="number" aria-label="D5" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD5" value="{{ $data->scorSubItemD5 }}"
                                                name="scorSubItemD5" type="number" aria-label="D5" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.5</td>
                                        <td>Dosen menjadi redaktur/editor dalam suatu terbitan populer yang terkait erat
                                            dengan bidang keilmuannya
                                        </td>
                                        <td><input type="radio" {{$data->D5 == "1" ? "checked" : ""}} class="D5"
                                            name="D5" id="D5" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D5 == "2" ? "checked" : ""}} class="D5"
                                            name="D5" id="D5" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D5 == "3" ? "checked" : ""}} class="D5"
                                            name="D5" id="D5" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D5 == "4" ? "checked" : ""}} class="D5"
                                            name="D5" id="D5" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D5 == "5" ? "checked" : ""}} class="D5"
                                            name="D5" id="D5" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah terbitan populer</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD5_3_in }}"
                                                name="JumlahYangDihasilkanD5_3" id="JumlahYangDihasilkanD5_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD5_4_in }}"
                                                name="JumlahYangDihasilkanD5_4" id="JumlahYangDihasilkanD5_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD5_5_in }}"
                                                name="JumlahYangDihasilkanD5_5" id="JumlahYangDihasilkanD5_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD5 }}"
                                                name="JumlahSkorYangDiHasilkanD5" id="JumlahSkorYangDiHasilkanD5"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD5 }}"
                                                name="SkorTambahanJumlahSkorD5" id="SkorTambahanJumlahSkorD5" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD5_3 }}"
                                                name="SkorTambahanD5_3" id="SkorTambahanD5_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD5_4 }}"
                                                name="SkorTambahanD5_4" id="SkorTambahanD5_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD5_5 }}"
                                                name="SkorTambahanD5_5" id="SkorTambahanD5_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD5 }}"
                                                name="SkorTambahanJumlahD5" id="SkorTambahanJumlahD5" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD5 }}"
                                                name="SkorTambahanJumlahBobotSubItemD5"
                                                id="SkorTambahanJumlahBobotSubItemD5" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi anggota di tingkat nasional
                                        </td>
                                        <td>Menjadi anggota di tingkat internasional</td>
                                        <td>Menjadi pengurus di tingkat nasional
                                        </td>
                                        <td>Menjadi pengurus di tingkat internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Kartu
                                                Keanggotaan / Surat Keterangan anggota</label>
                                            <input class="@error('fileD6') is-invalid @enderror" name="fileD6"
                                                id="formFileSm" type="file">

                                            @if($data->fileD6)
                                            <a href="{{ asset('storage/'.$data->fileD6) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD6"
                                                value="{{ $data->scorD6 }}" name="scorD6" type="number" aria-label="D6"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD6" value="{{ $data->scorMaxD6 }}"
                                                name="scorMaxD6" type="number" aria-label="D6" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD6" value="{{ $data->scorSubItemD6 }}"
                                                name="scorSubItemD6" type="number" aria-label="D6" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.6</td>
                                        <td>Dosen menjadi anggota organisasi asosiasi profesi, yang terkait bidang
                                            keilmuannya
                                        </td>
                                        <td><input type="radio" {{$data->D6 == "1" ? "checked" : ""}} class="D6"
                                            name="D6" id="D6" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D6 == "2" ? "checked" : ""}} class="D6"
                                            name="D6" id="D6" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D6 == "3" ? "checked" : ""}} class="D6"
                                            name="D6" id="D6" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D6 == "4" ? "checked" : ""}} class="D6"
                                            name="D6" id="D6" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D6 == "5" ? "checked" : ""}} class="D6"
                                            name="D6" id="D6" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah organisasi asosiasi profesi</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD6_2_in }}"
                                                name="JumlahYangDihasilkanD6_2" id="JumlahYangDihasilkanD6_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD6_3_in }}"
                                                name="JumlahYangDihasilkanD6_3" id="JumlahYangDihasilkanD6_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD6_4_in }}"
                                                name="JumlahYangDihasilkanD6_4" id="JumlahYangDihasilkanD6_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD6_5_in }}"
                                                name="JumlahYangDihasilkanD6_5" id="JumlahYangDihasilkanD6_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD6 }}"
                                                name="JumlahSkorYangDiHasilkanD6" id="JumlahSkorYangDiHasilkanD6"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD6 }}"
                                                name="SkorTambahanJumlahSkorD6" id="SkorTambahanJumlahSkorD6" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD6_2 }}"
                                                name="SkorTambahanD6_2" id="SkorTambahanD6_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD6_3 }}"
                                                name="SkorTambahanD6_3" id="SkorTambahanD6_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD6_4 }}"
                                                name="SkorTambahanD6_4" id="SkorTambahanD6_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD6_5 }}"
                                                name="SkorTambahanD6_5" id="SkorTambahanD6_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD6 }}"
                                                name="SkorTambahanJumlahD6" id="SkorTambahanJumlahD6" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD6 }}"
                                                name="SkorTambahanJumlahBobotSubItemD6"
                                                id="SkorTambahanJumlahBobotSubItemD6" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi anggota delegasi dalam 1 pertemuan internasional
                                        </td>
                                        <td>Menjadi anggota delegasi dalam 2 pertemuan internasional</td>
                                        <td>Menjadi anggota delegasi dalam 3 pertemuan internasional
                                        </td>
                                        <td>Menjadi anggota delegasi dalam 4 pertemuan internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat Tugas
                                                yang menyatakan dosen menjadi anggota delegasi
                                                internasional</label>
                                            <input class="@error('fileD7') is-invalid @enderror" name="fileD7"
                                                id="formFileSm" type="file">

                                            @if($data->fileD7)
                                            <a href="{{ asset('storage/'.$data->fileD7) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD7')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD7"
                                                value="{{ $data->scorD7 }}" name="scorD7" type="number" aria-label="D7"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD7" value="{{ $data->scorMaxD7 }}"
                                                name="scorMaxD7" type="number" aria-label="D7" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD7" value="{{ $data->scorSubItemD7 }}"
                                                name="scorSubItemD7" type="number" aria-label="D7" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.7</td>
                                        <td>Dosen menjadi anggota delegasi nasional dalam pertemuan internasional
                                        </td>
                                        <td><input type="radio" {{$data->D7 == "1" ? "checked" : ""}} class="D7"
                                            name="D7" id="D7" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D7 == "2" ? "checked" : ""}} class="D7"
                                            name="D7" id="D7" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D7 == "3" ? "checked" : ""}} class="D7"
                                            name="D7" id="D7" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D7 == "4" ? "checked" : ""}} class="D7"
                                            name="D7" id="D7" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D7 == "5" ? "checked" : ""}} class="D7"
                                            name="D7" id="D7" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah (>4 pertemuan internasional)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD7_5_in }}"
                                                name="JumlahYangDihasilkanD7_5" id="JumlahYangDihasilkanD7_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD7 }}"
                                                name="JumlahSkorYangDiHasilkanD7" id="JumlahSkorYangDiHasilkanD7"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD7 }}"
                                                name="SkorTambahanJumlahSkorD7" id="SkorTambahanJumlahSkorD7" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD7_5 }}"
                                                name="SkorTambahanD7_5" id="SkorTambahanD7_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD7 }}"
                                                name="SkorTambahanJumlahD7" id="SkorTambahanJumlahD7" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD7 }}"
                                                name="SkorTambahanJumlahBobotSubItemD7"
                                                id="SkorTambahanJumlahBobotSubItemD7" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi peserta dalam suatu pertemuan ilmiah internal IKBIS (minimal 5
                                            pertemuan internal)
                                        </td>
                                        <td>Menjadi peserta dalam suatu pertemuan ilmiah tingkat lokal dan regional dan
                                            minimal 4 kali dalam pertemuan internal
                                        </td>
                                        <td>Menjadi peserta dalam suatu pertemuan ilmiah tingkat nasional dan minimal 3
                                            kali dalam pertemuan internal / menjadi
                                            moderator di tingkat lokal dan regional
                                        </td>
                                        <td>Menjadi peserta dalam suatu pertemuan ilmiah tingkat internasional dan
                                            minimal 2 kali dalam pertemuan internal / menjadi
                                            moderator di tingkat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Presensi
                                                Forum Komunikasi Ilmiah dan Sertifikat Seminar</label>
                                            <input class="@error('fileD8') is-invalid @enderror" name="fileD8"
                                                id="formFileSm" type="file">

                                            @if($data->fileD8)
                                            <a href="{{ asset('storage/'.$data->fileD8) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD8')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD8"
                                                value="{{ $data->scorD8 }}" name="scorD8" type="number" aria-label="D8"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD8" value="{{ $data->scorMaxD8 }}"
                                                name="scorMaxD8" type="number" aria-label="D8" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD8" value="{{ $data->scorSubItemD8 }}"
                                                name="scorSubItemD8" type="number" aria-label="D8" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.8</td>
                                        <td>Dosen berperan serta dalam pertemuan ilmiah (misalnya: Seminar, Simposium)
                                        </td>
                                        <td><input type="radio" {{$data->D8 == "1" ? "checked" : ""}} class="D8"
                                            name="D8" id="D8" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D8 == "2" ? "checked" : ""}} class="D8"
                                            name="D8" id="D8" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D8 == "3" ? "checked" : ""}} class="D8"
                                            name="D8" id="D8" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D8 == "4" ? "checked" : ""}} class="D8"
                                            name="D8" id="D8" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D8 == "5" ? "checked" : ""}} class="D8"
                                            name="D8" id="D8" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah pertemuan ilmiah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD8_3_in }}"
                                                name="JumlahYangDihasilkanD8_3" id="JumlahYangDihasilkanD8_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD8_4_in }}"
                                                name="JumlahYangDihasilkanD8_4" id="JumlahYangDihasilkanD8_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD8_5_in }}"
                                                name="JumlahYangDihasilkanD8_5" id="JumlahYangDihasilkanD8_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD8 }}"
                                                name="JumlahSkorYangDiHasilkanD8" id="JumlahSkorYangDiHasilkanD8"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD8 }}"
                                                name="SkorTambahanJumlahSkorD8" id="SkorTambahanJumlahSkorD8" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD8_3 }}"
                                                name="SkorTambahanD8_3" id="SkorTambahanD8_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD8_4 }}"
                                                name="SkorTambahanD8_4" id="SkorTambahanD8_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD8_5 }}"
                                                name="SkorTambahanD8_5" id="SkorTambahanD8_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD8 }}"
                                                name="SkorTambahanJumlahD8" id="SkorTambahanJumlahD8" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD8 }}"
                                                name="SkorTambahanJumlahBobotSubItemD8"
                                                id="SkorTambahanJumlahBobotSubItemD8" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Mendapatkan tanda jasa/penghargaan internal IKBIS
                                        </td>
                                        <td>Mendapatkan tanda jasa/penghargaan tingkat lokal (kota/kabupaten)
                                        </td>
                                        <td>Mendapatkan tanda jasa/penghargaan tingkat nasional
                                        </td>
                                        <td>Mendapatkan tanda jasa/penghargaan tingkat internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Piagam
                                                Penghargaan dan atau SK yang menyertai</label>
                                            <input class="@error('fileD9') is-invalid @enderror" name="fileD9"
                                                id="formFileSm" type="file">

                                            @if($data->fileD9)
                                            <a href="{{ asset('storage/'.$data->fileD9) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD9')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD9"
                                                value="{{ $data->scorD9 }}" name="scorD9" type="number" aria-label="D9"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxD9" value="{{ $data->scorMaxD9 }}"
                                                name="scorMaxD9" type="number" aria-label="D9" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD9" value="{{ $data->scorSubItemD9 }}"
                                                name="scorSubItemD9" type="number" aria-label="D9" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.9</td>
                                        <td>Dosen mendapatkan tanda jasa/penghargaan
                                        </td>
                                        <td><input type="radio" {{$data->D9 == "1" ? "checked" : ""}} class="D9"
                                            name="D9" id="D9" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D9 == "2" ? "checked" : ""}} class="D9"
                                            name="D9" id="D9" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D9 == "3" ? "checked" : ""}} class="D9"
                                            name="D9" id="D9" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D9 == "4" ? "checked" : ""}} class="D9"
                                            name="D9" id="D9" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D9 == "5" ? "checked" : ""}} class="D9"
                                            name="D9" id="D9" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah tanda jasa</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD9_2_in }}"
                                                name="JumlahYangDihasilkanD9_2" id="JumlahYangDihasilkanD9_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD9_3_in }}"
                                                name="JumlahYangDihasilkanD9_3" id="JumlahYangDihasilkanD9_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD9_4_in }}"
                                                name="JumlahYangDihasilkanD9_4" id="JumlahYangDihasilkanD9_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD9_5_in }}"
                                                name="JumlahYangDihasilkanD9_5" id="JumlahYangDihasilkanD9_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD9 }}"
                                                name="JumlahSkorYangDiHasilkanD9" id="JumlahSkorYangDiHasilkanD9"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD9 }}"
                                                name="SkorTambahanJumlahSkorD9" id="SkorTambahanJumlahSkorD9" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD9_2 }}"
                                                name="SkorTambahanD9_2" id="SkorTambahanD9_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD9_3 }}"
                                                name="SkorTambahanD9_3" id="SkorTambahanD9_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD9_4 }}"
                                                name="SkorTambahanD9_4" id="SkorTambahanD9_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD9_5 }}"
                                                name="SkorTambahanD9_5" id="SkorTambahanD9_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD9 }}"
                                                name="SkorTambahanJumlahD9" id="SkorTambahanJumlahD9" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD9 }}"
                                                name="SkorTambahanJumlahBobotSubItemD9"
                                                id="SkorTambahanJumlahBobotSubItemD9" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Pernah menulis buku pelajaran SMA ke bawah pada tahun penilaian sebelumnya
                                        </td>
                                        <td>Menulis buku SD atau setingkat
                                        </td>
                                        <td>Menulis buku SMP atau setingkat
                                        </td>
                                        <td>Menulis buku SMA atau setingkat
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti Fisik
                                                Buku</label>
                                            <input class="@error('fileD10') is-invalid @enderror" name="fileD10"
                                                id="formFileSm" type="file">

                                            @if($data->fileD10)
                                            <a href="{{ asset('storage/'.$data->fileD10) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD10')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD10"
                                                value="{{ $data->scorD10 }}" name="scorD10" type="number"
                                                aria-label="D10" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD10" value="{{ $data->scorMaxD10 }}"
                                                name="scorMaxD10" type="number" aria-label="D10" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD10" value="{{ $data->scorSubItemD10 }}"
                                                name="scorSubItemD10" type="number" aria-label="D10" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.10</td>
                                        <td>Dosen menulis buku pelajaran SMA ke bawah yang diterbitkan dan diedarkan
                                            secara nasional
                                        </td>
                                        <td><input type="radio" {{$data->D10 == "1" ? "checked" : ""}} class="D10"
                                            name="D10" id="D10" value="1"
                                            onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D10 == "2" ? "checked" : ""}} class="D10"
                                            name="D10" id="D10" value="2"
                                            onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D10 == "3" ? "checked" : ""}} class="D10"
                                            name="D10" id="D10" value="3"
                                            onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D10 == "4" ? "checked" : ""}} class="D10"
                                            name="D10" id="D10" value="4"
                                            onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D10 == "5" ? "checked" : ""}} class="D10"
                                            name="D10" id="D10" value="5"
                                            onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah buku yang diterbitkan</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD10_3_in }}"
                                                name="JumlahYangDihasilkanD10_3" id="JumlahYangDihasilkanD10_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD10_4_in }}"
                                                name="JumlahYangDihasilkanD10_4" id="JumlahYangDihasilkanD10_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD10_5_in }}"
                                                name="JumlahYangDihasilkanD10_5" id="JumlahYangDihasilkanD10_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD10 }}"
                                                name="JumlahSkorYangDiHasilkanD10" id="JumlahSkorYangDiHasilkanD10"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD10 }}"
                                                name="SkorTambahanJumlahSkorD10" id="SkorTambahanJumlahSkorD10"
                                                readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD10_3 }}"
                                                name="SkorTambahanD10_3" id="SkorTambahanD10_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD10_4 }}"
                                                name="SkorTambahanD10_4" id="SkorTambahanD10_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD10_5 }}"
                                                name="SkorTambahanD10_5" id="SkorTambahanD10_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD10 }}"
                                                name="SkorTambahanJumlahD10" id="SkorTambahanJumlahD10" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD10 }}"
                                                name="SkorTambahanJumlahBobotSubItemD10"
                                                id="SkorTambahanJumlahBobotSubItemD10" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak diperhitungkan
                                        </td>
                                        <td>Tidak Sama Sekali</td>
                                        <td>Berprestasi di tingkat lokal/regional
                                        </td>
                                        <td>Berprestasi di tingkat nasional
                                        </td>
                                        <td>Berprestasi di tingkat internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Piagam
                                                Penghargaan dan atau SK yang menyertai</label>
                                            <input class="@error('fileD11') is-invalid @enderror" name="fileD11"
                                                id="formFileSm" type="file">

                                            @if($data->fileD11)
                                            <a href="{{ asset('storage/'.$data->fileD11) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileD11')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD11"
                                                value="{{ $data->scorD11 }}" name="scorD11" type="number"
                                                aria-label="D11" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD11" value="{{ $data->scorMaxD11 }}"
                                                name="scorMaxD11" type="number" aria-label="D11" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD11" value="{{ $data->scorSubItemD11 }}"
                                                name="scorSubItemD11" type="number" aria-label="D11" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.11</td>
                                        <td>Dosen memiliki prestasi di bidang olah raga/kesenian/humaniora (menjadi duta
                                            besar organisasi tertentu atau negara
                                            tertentu)
                                        </td>
                                        <td><input type="radio" {{$data->D11 == "1" ? "checked" : ""}} class="D11"
                                            name="D11" id="D11" value="1"
                                            onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D11 == "2" ? "checked" : ""}} class="D11"
                                            name="D11" id="D11" value="2"
                                            onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D11 == "3" ? "checked" : ""}} class="D11"
                                            name="D11" id="D11" value="3"
                                            onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D11 == "4" ? "checked" : ""}} class="D11"
                                            name="D11" id="D11" value="4"
                                            onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->D11 == "5" ? "checked" : ""}} class="D11"
                                            name="D11" id="D11" value="5"
                                            onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah prestasi</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD11_3_in }}"
                                                name="JumlahYangDihasilkanD11_3" id="JumlahYangDihasilkanD11_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD11_4_in }}"
                                                name="JumlahYangDihasilkanD11_4" id="JumlahYangDihasilkanD11_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanD11_5_in }}"
                                                name="JumlahYangDihasilkanD11_5" id="JumlahYangDihasilkanD11_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanD11 }}"
                                                name="JumlahSkorYangDiHasilkanD11" id="JumlahSkorYangDiHasilkanD11"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorD11 }}"
                                                name="SkorTambahanJumlahSkorD11" id="SkorTambahanJumlahSkorD11"
                                                readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD11_3 }}"
                                                name="SkorTambahanD11_3" id="SkorTambahanD11_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD11_4 }}"
                                                name="SkorTambahanD11_4" id="SkorTambahanD11_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanD11_5 }}"
                                                name="SkorTambahanD11_5" id="SkorTambahanD11_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahD11 }}"
                                                name="SkorTambahanJumlahD11" id="SkorTambahanJumlahD11" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemD11 }}"
                                                name="SkorTambahanJumlahBobotSubItemD11"
                                                id="SkorTambahanJumlahBobotSubItemD11" readonly></td>
                                    </tr>


                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Unsur Penunjang</td>
                                        <td><input type="number" value="{{ $data->TotalSkorUnsurPenunjang }}"
                                                name="TotalSkorUnsurPenunjang" id="TotalSkorUnsurPenunjang" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 2</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD2 }}"
                                                name="TotalKelebihaD2" id="TotalKelebihaD2" readonly>
                                        </td>
                                        <td colspan="3" rowspan="4">Nilai Unsur Penunjang</td>
                                        <td rowspan="4"><input type="number" value="{{ $data->NilaiUnsurPenunjang }}"
                                                name="NilaiUnsurPenunjang" id="NilaiUnsurPenunjang" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 3</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD3 }}"
                                                name="TotalKelebihaD3" id="TotalKelebihaD3" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 4</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD4 }}"
                                                name="TotalKelebihaD4" id="TotalKelebihaD4" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 5</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD5 }}"
                                                name="TotalKelebihaD5" id="TotalKelebihaD5" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 6</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD6 }}"
                                                name="TotalKelebihaD6" id="TotalKelebihaD6" readonly>
                                        </td>
                                        <td colspan="3" rowspan="7">Nilai Tambah Unsur Penunjang</td>
                                        <td rowspan="7"><input type="number"
                                                value="{{ $data->NilaiTambahUnsurPenunjang }}"
                                                name="NilaiTambahUnsurPenunjang" id="NilaiTambahUnsurPenunjang"
                                                readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 7</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD7 }}"
                                                name="TotalKelebihaD7" id="TotalKelebihaD7" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 8</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD8 }}"
                                                name="TotalKelebihaD8" id="TotalKelebihaD8" readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 9</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD9 }}"
                                                name="TotalKelebihaD9" id="TotalKelebihaD9" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 10</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD10 }}"
                                                name="TotalKelebihaD10" id="TotalKelebihaD10" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 11</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaD11 }}"
                                                name="TotalKelebihaD11" id="TotalKelebihaD11" readonly>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihanSkor }}"
                                                name="TotalKelebihanSkor" id="TotalKelebihanSkor" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total Unsur Penunjang</td>
                                        <td><input type="number" value="{{ $data->ResultSumNilaiTotalUnsurPenunjang }}"
                                                name="ResultSumNilaiTotalUnsurPenunjang"
                                                id="ResultSumNilaiTotalUnsurPenunjang" readonly></td>
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
    <script src="{{ asset('Assets/js/Input-point/ScorPointD.js') }}"></script>

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
