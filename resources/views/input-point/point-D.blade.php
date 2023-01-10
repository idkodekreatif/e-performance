<x-app-layout title="Form Input Point D">
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point D</a></li>
            </ol>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point D</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="table-responsive">
                        <form action="{{ route('store.pointd') }}" method="POST" enctype="multipart/form-data">
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

                                            @error('fileD1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD1" name="scorD1"
                                                type="number" aria-label="D1" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD1" name="scorMaxD1" type="number"
                                                aria-label="D1" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD1" name="scorSubItemD1" type="number"
                                                aria-label="D1" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.1</td>
                                        <td>Dosen menjadi ketua, sekretaris atau anggota senat fakultas/Institusi</td>
                                        <td><input type="radio" class="D1" name="D1" id="D1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D1" name="D1" id="D1" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D1" name="D1" id="D1" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D1" name="D1" id="D1" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D1" name="D1" id="D1" value="5" onclick="sum();">
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

                                            @error('fileD2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD2" name="scorD2"
                                                type="number" aria-label="D2" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD2" name="scorMaxD2" type="number"
                                                aria-label="D2" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD2" name="scorSubItemD2" type="number"
                                                aria-label="D2" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.2</td>
                                        <td>Dosen menjadi anggota pada kepanitiaan tertentu (terkait Tri Dharma)
                                        </td>
                                        <td><input type="radio" class="D2" name="D2" id="D2" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D2" name="D2" id="D2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D2" name="D2" id="D2" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D2" name="D2" id="D2" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D2" name="D2" id="D2" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kepanitiaan yang diikuti</td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD2_2"
                                                id="JumlahYangDihasilkanD2_2" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD2_3"
                                                id="JumlahYangDihasilkanD2_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD2_4"
                                                id="JumlahYangDihasilkanD2_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD2_5"
                                                id="JumlahYangDihasilkanD2_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD2"
                                                id="JumlahSkorYangDiHasilkanD2" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD2"
                                                id="SkorTambahanJumlahSkorD2" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD2_2" id="SkorTambahanD2_2" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD2_3" id="SkorTambahanD2_3" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD2_4" id="SkorTambahanD2_4" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD2_5" id="SkorTambahanD2_5" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD2" id="SkorTambahanJumlahD2"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD2"
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

                                            @error('fileD3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD3" name="scorD3"
                                                type="number" aria-label="D3" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD3" name="scorMaxD3" type="number"
                                                aria-label="D3" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD3" name="scorSubItemD3" type="number"
                                                aria-label="D3" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.3</td>
                                        <td>Peranan dosen dalam kepanitiaan tertentu
                                        </td>
                                        <td><input type="radio" class="D3" name="D3" id="D3" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D3" name="D3" id="D3" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D3" name="D3" id="D3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D3" name="D3" id="D3" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D3" name="D3" id="D3" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah peranan dosen dalam kepanitiaan</td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD3_2"
                                                id="JumlahYangDihasilkanD3_2" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD3_3"
                                                id="JumlahYangDihasilkanD3_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD3_4"
                                                id="JumlahYangDihasilkanD3_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD3_5"
                                                id="JumlahYangDihasilkanD3_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD3"
                                                id="JumlahSkorYangDiHasilkanD3" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD3"
                                                id="SkorTambahanJumlahSkorD3" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD3_2" id="SkorTambahanD3_2" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD3_3" id="SkorTambahanD3_3" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD3_4" id="SkorTambahanD3_4" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD3_5" id="SkorTambahanD3_5" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD3" id="SkorTambahanJumlahD3"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD3"
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

                                            @error('fileD4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD4" name="scorD4"
                                                type="number" aria-label="D4" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD4" name="scorMaxD4" type="number"
                                                aria-label="D4" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD4" name="scorSubItemD4" type="number"
                                                aria-label="D4" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.4</td>
                                        <td>Dosen menjadi mitra bestari/reviewer dalam jurnal ilmiah
                                        </td>
                                        <td><input type="radio" class="D4" name="D4" id="D4" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D4" name="D4" id="D4" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D4" name="D4" id="D4" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D4" name="D4" id="D4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D4" name="D4" id="D4" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah jurnal</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD4_3"
                                                id="JumlahYangDihasilkanD4_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD4_4"
                                                id="JumlahYangDihasilkanD4_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD4_5"
                                                id="JumlahYangDihasilkanD4_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD4"
                                                id="JumlahSkorYangDiHasilkanD4" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD4"
                                                id="SkorTambahanJumlahSkorD4" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD4_3" id="SkorTambahanD4_3" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD4_4" id="SkorTambahanD4_4" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD4_5" id="SkorTambahanD4_5" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD4" id="SkorTambahanJumlahD4"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD4"
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

                                            @error('fileD5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD5" name="scorD5"
                                                type="number" aria-label="D5" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD5" name="scorMaxD5" type="number"
                                                aria-label="D5" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD5" name="scorSubItemD5" type="number"
                                                aria-label="D5" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.5</td>
                                        <td>Dosen menjadi redaktur/editor dalam suatu terbitan populer yang terkait erat
                                            dengan bidang keilmuannya
                                        </td>
                                        <td><input type="radio" class="D5" name="D5" id="D5" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D5" name="D5" id="D5" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D5" name="D5" id="D5" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D5" name="D5" id="D5" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D5" name="D5" id="D5" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah terbitan populer</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD5_3"
                                                id="JumlahYangDihasilkanD5_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD5_4"
                                                id="JumlahYangDihasilkanD5_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD5_5"
                                                id="JumlahYangDihasilkanD5_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD5"
                                                id="JumlahSkorYangDiHasilkanD5" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD5"
                                                id="SkorTambahanJumlahSkorD5" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD5_3" id="SkorTambahanD5_3" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD5_4" id="SkorTambahanD5_4" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD5_5" id="SkorTambahanD5_5" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD5" id="SkorTambahanJumlahD5"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD5"
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

                                            @error('fileD6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD6" name="scorD6"
                                                type="number" aria-label="D6" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD6" name="scorMaxD6" type="number"
                                                aria-label="D6" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD6" name="scorSubItemD6" type="number"
                                                aria-label="D6" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.6</td>
                                        <td>Dosen menjadi anggota organisasi asosiasi profesi, yang terkait bidang
                                            keilmuannya
                                        </td>
                                        <td><input type="radio" class="D6" name="D6" id="D6" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D6" name="D6" id="D6" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D6" name="D6" id="D6" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D6" name="D6" id="D6" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D6" name="D6" id="D6" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah organisasi asosiasi profesi</td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD6_2"
                                                id="JumlahYangDihasilkanD6_2" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD6_3"
                                                id="JumlahYangDihasilkanD6_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD6_4"
                                                id="JumlahYangDihasilkanD6_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD6_5"
                                                id="JumlahYangDihasilkanD6_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD6"
                                                id="JumlahSkorYangDiHasilkanD6" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD6"
                                                id="SkorTambahanJumlahSkorD6" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD6_2" id="SkorTambahanD6_2" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD6_3" id="SkorTambahanD6_3" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD6_4" id="SkorTambahanD6_4" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD6_5" id="SkorTambahanD6_5" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD6" id="SkorTambahanJumlahD6"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD6"
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

                                            @error('fileD7')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD7" name="scorD7"
                                                type="number" aria-label="D7" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD7" name="scorMaxD7" type="number"
                                                aria-label="D7" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD7" name="scorSubItemD7" type="number"
                                                aria-label="D7" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.7</td>
                                        <td>Dosen menjadi anggota delegasi nasional dalam pertemuan internasional
                                        </td>
                                        <td><input type="radio" class="D7" name="D7" id="D7" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D7" name="D7" id="D7" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D7" name="D7" id="D7" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D7" name="D7" id="D7" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D7" name="D7" id="D7" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah (>4 pertemuan internasional)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD7_5"
                                                id="JumlahYangDihasilkanD7_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD7"
                                                id="JumlahSkorYangDiHasilkanD7" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD7"
                                                id="SkorTambahanJumlahSkorD7" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD7_5" id="SkorTambahanD7_5" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD7" id="SkorTambahanJumlahD7"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD7"
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

                                            @error('fileD8')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD8" name="scorD8"
                                                type="number" aria-label="D8" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD8" name="scorMaxD8" type="number"
                                                aria-label="D8" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD8" name="scorSubItemD8" type="number"
                                                aria-label="D8" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.8</td>
                                        <td>Dosen berperan serta dalam pertemuan ilmiah (misalnya: Seminar, Simposium)
                                        </td>
                                        <td><input type="radio" class="D8" name="D8" id="D8" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D8" name="D8" id="D8" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D8" name="D8" id="D8" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D8" name="D8" id="D8" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D8" name="D8" id="D8" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah pertemuan ilmiah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD8_3"
                                                id="JumlahYangDihasilkanD8_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD8_4"
                                                id="JumlahYangDihasilkanD8_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD8_5"
                                                id="JumlahYangDihasilkanD8_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD8"
                                                id="JumlahSkorYangDiHasilkanD8" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD8"
                                                id="SkorTambahanJumlahSkorD8" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD8_3" id="SkorTambahanD8_3" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD8_4" id="SkorTambahanD8_4" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD8_5" id="SkorTambahanD8_5" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD8" id="SkorTambahanJumlahD8"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD8"
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

                                            @error('fileD9')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD9" name="scorD9"
                                                type="number" aria-label="D9" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD9" name="scorMaxD9" type="number"
                                                aria-label="D9" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD9" name="scorSubItemD9" type="number"
                                                aria-label="D9" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.9</td>
                                        <td>Dosen mendapatkan tanda jasa/penghargaan
                                        </td>
                                        <td><input type="radio" class="D9" name="D9" id="D9" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D9" name="D9" id="D9" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D9" name="D9" id="D9" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D9" name="D9" id="D9" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D9" name="D9" id="D9" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah tanda jasa</td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD9_2"
                                                id="JumlahYangDihasilkanD9_2" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD9_3"
                                                id="JumlahYangDihasilkanD9_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD9_4"
                                                id="JumlahYangDihasilkanD9_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD9_5"
                                                id="JumlahYangDihasilkanD9_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD9"
                                                id="JumlahSkorYangDiHasilkanD9" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD9"
                                                id="SkorTambahanJumlahSkorD9" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD9_2" id="SkorTambahanD9_2" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD9_3" id="SkorTambahanD9_3" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD9_4" id="SkorTambahanD9_4" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD9_5" id="SkorTambahanD9_5" readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD9" id="SkorTambahanJumlahD9"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD9"
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

                                            @error('fileD10')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD10" name="scorD10"
                                                type="number" aria-label="D10" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD10" name="scorMaxD10" type="number"
                                                aria-label="D10" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD10" name="scorSubItemD10" type="number"
                                                aria-label="D10" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.10</td>
                                        <td>Dosen menulis buku pelajaran SMA ke bawah yang diterbitkan dan diedarkan
                                            secara nasional
                                        </td>
                                        <td><input type="radio" class="D10" name="D10" id="D10" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D10" name="D10" id="D10" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D10" name="D10" id="D10" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D10" name="D10" id="D10" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D10" name="D10" id="D10" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah buku yang diterbitkan</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD10_3"
                                                id="JumlahYangDihasilkanD10_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD10_4"
                                                id="JumlahYangDihasilkanD10_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD10_5"
                                                id="JumlahYangDihasilkanD10_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD10"
                                                id="JumlahSkorYangDiHasilkanD10" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD10"
                                                id="SkorTambahanJumlahSkorD10" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD10_3" id="SkorTambahanD10_3"
                                                readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD10_4" id="SkorTambahanD10_4"
                                                readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD10_5" id="SkorTambahanD10_5"
                                                readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD10" id="SkorTambahanJumlahD10"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD10"
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

                                            @error('fileD11')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorD11" name="scorD11"
                                                type="number" aria-label="D11" readonly></td>
                                        <td rowspan="2"><input id="scorMaxD11" name="scorMaxD11" type="number"
                                                aria-label="D11" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemD11" name="scorSubItemD11" type="number"
                                                aria-label="D11" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>D.11</td>
                                        <td>Dosen memiliki prestasi di bidang olah raga/kesenian/humaniora (menjadi duta
                                            besar organisasi tertentu atau negara
                                            tertentu)
                                        </td>
                                        <td><input type="radio" class="D11" name="D11" id="D11" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D11" name="D11" id="D11" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D11" name="D11" id="D11" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D11" name="D11" id="D11" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="D11" name="D11" id="D11" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah prestasi</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD11_3"
                                                id="JumlahYangDihasilkanD11_3" onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" name="JumlahYangDihasilkanD11_4"
                                                id="JumlahYangDihasilkanD11_4" onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" name="JumlahYangDihasilkanD11_5"
                                                id="JumlahYangDihasilkanD11_5" onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" name="JumlahSkorYangDiHasilkanD11"
                                                id="JumlahSkorYangDiHasilkanD11" readonly></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahSkorD11"
                                                id="SkorTambahanJumlahSkorD11" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanD11_3" id="SkorTambahanD11_3"
                                                readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD11_4" id="SkorTambahanD11_4"
                                                readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanD11_5" id="SkorTambahanD11_5"
                                                readonly>
                                        </td>
                                        <td><input type="number" name="SkorTambahanJumlahD11" id="SkorTambahanJumlahD11"
                                                readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" name="SkorTambahanJumlahBobotSubItemD11"
                                                id="SkorTambahanJumlahBobotSubItemD11" readonly></td>
                                    </tr>


                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Unsur Penunjang</td>
                                        <td><input type="number" name="TotalSkorUnsurPenunjang"
                                                id="TotalSkorUnsurPenunjang" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 2</td>
                                        <td><input type="number" name="TotalKelebihaD2" id="TotalKelebihaD2" readonly>
                                        </td>
                                        <td colspan="3" rowspan="4">Nilai Unsur Penunjang</td>
                                        <td rowspan="4"><input type="number" name="NilaiUnsurPenunjang"
                                                id="NilaiUnsurPenunjang" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 3</td>
                                        <td><input type="number" name="TotalKelebihaD3" id="TotalKelebihaD3" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 4</td>
                                        <td><input type="number" name="TotalKelebihaD4" id="TotalKelebihaD4" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 5</td>
                                        <td><input type="number" name="TotalKelebihaD5" id="TotalKelebihaD5" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 6</td>
                                        <td><input type="number" name="TotalKelebihaD6" id="TotalKelebihaD6" readonly>
                                        </td>
                                        <td colspan="3" rowspan="7">Nilai Tambah Unsur Penunjang</td>
                                        <td rowspan="7"><input type="number" name="NilaiTambahUnsurPenunjang"
                                                id="NilaiTambahUnsurPenunjang" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 7</td>
                                        <td><input type="number" name="TotalKelebihaD7" id="TotalKelebihaD7" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 8</td>
                                        <td><input type="number" name="TotalKelebihaD8" id="TotalKelebihaD8" readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 9</td>
                                        <td><input type="number" name="TotalKelebihaD9" id="TotalKelebihaD9" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 10</td>
                                        <td><input type="number" name="TotalKelebihaD10" id="TotalKelebihaD10" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 11</td>
                                        <td><input type="number" name="TotalKelebihaD11" id="TotalKelebihaD11" readonly>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor</td>
                                        <td><input type="number" name="TotalKelebihanSkor" id="TotalKelebihanSkor"
                                                readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="6">Nilai Total Unsur Penunjang</td>
                                        <td><input type="number" name="ResultSumNilaiTotalUnsurPenunjang"
                                                id="ResultSumNilaiTotalUnsurPenunjang" readonly></td>
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
    <script src="{{ asset('Assets/js/Input-point/ScorPointD.js') }}"></script>
    @endpush
</x-app-layout>
