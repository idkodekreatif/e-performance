<x-app-layout title="HRD | Update Point A Lektor">
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
        @role('it' | 'superuser')
            <div class="row page-titles shadow">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Forms </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Point A Lektor</a></li>
                </ol>
            </div>
        @endrole
        @role('dosen|hrd')
            <div class="row page-titles shadow">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Point A</a></li>
                </ol>
            </div>
        @endrole

        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Profile</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <thead>
                            <tr style="font-weight:bold">
                                <td>NAMA</td>
                                <td>EMAIL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{ $data->name }}
                                </td>
                                <td>
                                    {{ $data->email }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point A</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="table-responsive">
                        <form id="my-form" action="{{ route('update.hrd.Point-A', [$data->new_user_id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="period_id" value="{{ $data->period_id }}">

                            <table class="table table-responsive table-bordered border-2 text-center">
                                <thead>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Komponen Kompetensi</td>
                                        <td colspan="5">Skor</td>
                                        <td rowspan="2">Bukti Pendukung</td>
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
                                        <td>A</td>
                                        <td colspan="10" class="text-start">PENDIDIKAN DAN PENGAJARAN</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Nilai rerata < 3.00 (KURANG)</td>
                                        <td>Nilai rerata>=3.00 - < 4.00 (CUKUP)</td>
                                        <td> Nilai rerata >=4.00 - < 4.60 (BAIK)</td>
                                        <td>Nilai rerata >=4.60 - < 4.80 (SANGAT BAIK)</td>
                                        <td>Nilai rerata >=4.80 - 5.00 (ISTIMEWA)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Hasil
                                                evaluasi perkuliahan</label>
                                            <input class="@error('fileA1') is-invalid @enderror" id="formFileSm"
                                                name="fileA1" type="file">

                                            @if ($data->fileA1)
                                                <a href="{{ asset('storage/' . $data->fileA1) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA1" name="scorA1"
                                                type="number" aria-label="A1" value="{{ $data->scorA1 }}" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorMaxA1" name="scorMaxA1" type="number"
                                                aria-label="A1" value="{{ $data->scorMaxA1 }}" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA1" name="scorSubItemA1" type="number"
                                                aria-label="A1" value="{{ number_format($data->scorSubItemA1, 3) }}"
                                                readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.1</td>
                                        <td>Nilai rerata evaluasi perkuliahan untuk sem. Gasal - sem. Genap</td>
                                        <td><input {{ $data->A1 == '1' ? 'checked' : '' }} type="radio" class="A1"
                                                name="A1" id="A1" value="1" onclick="sum();">
                                        </td>
                                        <td><input {{ $data->A1 == '2' ? 'checked' : '' }} type="radio"
                                                class="A1" name="A1" id="A1" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input {{ $data->A1 == '3' ? 'checked' : '' }} type="radio"
                                                class="A1" name="A1" id="A1" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input {{ $data->A1 == '4' ? 'checked' : '' }} type="radio"
                                                class="A1" name="A1" id="A1" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input {{ $data->A1 == '5' ? 'checked' : '' }} type="radio"
                                                class="A1" name="A1" id="A1" value="5"
                                                onclick="sum();">
                                        </td>
                                        @error('A1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak menyusun sama sekali</td>
                                        <td>Menyusun kurang dari 25% untuk mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk 25% - 50% dari mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk 51% - 75% dari mata kuliah yang diasuh</td>
                                        <td>Menyusun untuk lebih dari 75% mata kuliah yang diasuh</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Checklist
                                                RPS dari Prodi</label>
                                            <input class="@error('fileA2') is-invalid @enderror" id="formFileSm"
                                                name="fileA2" type="file">
                                            @if ($data->fileA2)
                                                <a href="{{ asset('storage/' . $data->fileA2) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA2" name="scorA2"
                                                type="number" value="{{ $data->scorA2 }}" aria-label="A2" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorMaxA2" value="{{ $data->scorMaxA2 }}"
                                                name="scorMaxA2" type="number" aria-label="A2" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA2"
                                                value="{{ number_format($data->scorSubItemA2, 3) }}"
                                                name="scorSubItemA2" type="number" aria-label="A2" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.2</td>
                                        <td>Dosen menyusun RPS dari setiap mata kuliah yang diasuhnya dalam satu tahun
                                            akademik</td>
                                        <td><input type="radio" {{ $data->A2 == '1' ? 'checked' : '' }}
                                                class="A2" name="A2" id="A2" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A2 == '2' ? 'checked' : '' }}
                                                class="A2" name="A2" id="A2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A2 == '3' ? 'checked' : '' }}
                                                class="A2" name="A2" id="A2" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A2 == '4' ? 'checked' : '' }}
                                                class="A2" name="A2" id="A2" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A2 == '5' ? 'checked' : '' }}
                                                class="A2" name="A2" id="A2" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Kurang dari 8 sks per Tahun Ajaran (semester Gasal dan Genap)</td>
                                        <td>Mengampu total 8 - 16 sks per Tahun Ajaran (semester Gasal dan Genap)</td>
                                        <td>Mengampu total 17 - 22 sks per Tahun Ajaran (semester Gasal dan Genap)</td>
                                        <td>Mengampu total 23 - 30 sks per Tahun Ajaran (semester Gasal dan Genap)</td>
                                        <td>Mengampu rata-rata 31 sks atau lebih, per Tahun Ajaran (semester Gasal dan
                                            Genap)
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Jumlah SKS
                                                (termasuk SKS Mengajar, Jabatan Struktural, dll)</label>
                                            <input class="@error('fileA3') is-invalid @enderror" id="formFileSm"
                                                name="fileA3" type="file">
                                            @if ($data->fileA3)
                                                <a href="{{ asset('storage/' . $data->fileA3) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA3"
                                                value="{{ $data->scorA3 }}" name="scorA3" type="number"
                                                aria-label="A3" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA3" value="{{ $data->scorMaxA3 }}"
                                                name="scorMaxA3" type="number" aria-label="A3" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA3"
                                                value="{{ number_format($data->scorSubItemA3, 3) }}"
                                                name="scorSubItemA3" type="number" aria-label="A3" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.3</td>
                                        <td>Dosen menjadi pengampu mata kuliah</td>
                                        <td><input type="radio" {{ $data->A3 == '1' ? 'checked' : '' }}
                                                class="A3" name="A3" id="A3" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A3 == '2' ? 'checked' : '' }}
                                                class="A3" name="A3" id="A3" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A3 == '3' ? 'checked' : '' }}
                                                class="A3" name="A3" id="A3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A3 == '4' ? 'checked' : '' }}
                                                class="A3" name="A3" id="A3" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A3 == '5' ? 'checked' : '' }}
                                                class="A3" name="A3" id="A3" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak membimbing mahasiswa sama sekali</td>
                                        <td>Membimbing 1 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing 2 - 3 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing 4 mata kuliah dengan tugas akhir seminar</td>
                                        <td>Membimbing >4 mata kuliah dengan tugas akhir seminar</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pembimbing dan Keterangan Prodi</label>
                                            <input class="@error('fileA4') is-invalid @enderror" id="formFileSm"
                                                name="fileA4" type="file">
                                            @if ($data->fileA4)
                                                <a href="{{ asset('storage/' . $data->fileA4) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA4')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA4"
                                                value="{{ $data->scorA4 }}" name="scorA4" type="number"
                                                aria-label="A4" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA4" value="{{ $data->scorMaxA4 }}"
                                                name="scorMaxA4" type="number" aria-label="A4" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA4"
                                                value="{{ number_format($data->scorSubItemA4, 3) }}"
                                                name="scorSubItemA4" type="number" aria-label="A4" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.4</td>
                                        <td>Dosen menjadi pembimbing seminar akhir mahasiswa dalam suatu mata kuliah
                                            yang mensyaratkan seminar dan pembuatan karya
                                            ilmiah tertentu untuk kelulusannya</td>
                                        <td><input type="radio" {{ $data->A4 == '1' ? 'checked' : '' }}
                                                class="A4" name="A4" id="A4" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A4 == '2' ? 'checked' : '' }}
                                                class="A4" name="A4" id="A4" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A4 == '3' ? 'checked' : '' }}
                                                class="A4" name="A4" id="A4" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A4 == '4' ? 'checked' : '' }}
                                                class="A4" name="A4" id="A4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A4 == '5' ? 'checked' : '' }}
                                                class="A4" name="A4" id="A4" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak membimbing mahasiswa PKL/ PPM/KKM</td>
                                        <td>Membimbing mahasiswa PKL/ PPM/KKM (0.5 Kelompok ATAU 4 - 7 mahasiswa PKL)
                                        </td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (1 Kelompok ATAU 8 - 10
                                            mahasiswa)</td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (1.5 Kelompok ATAU 11 - 15
                                            mahasiswa)</td>
                                        <td>Membimbing mahasiswa PKL dan/ atau PPM/KKM (2 Kelompok ATAU 16 - 20
                                            mahasiswa, atau lebih)
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pembimbingan</label>
                                            <input class="@error('fileA5') is-invalid @enderror" id="formFileSm"
                                                name="fileA5" type="file">
                                            @if ($data->fileA5)
                                                <a href="{{ asset('storage/' . $data->fileA5) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA5')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA5"
                                                value="{{ $data->scorA5 }}" name="scorA5" type="number"
                                                aria-label="A5" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA5" value="{{ $data->scorMaxA5 }}"
                                                name="scorMaxA5" type="number" aria-label="A5" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA5"
                                                value="{{ number_format($data->scorSubItemA5, 3) }}"
                                                name="scorSubItemA5" type="number" aria-label="A5" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.5</td>
                                        <td>Dosen membimbing Praktik Kerja Lapangan atau Program Pemberdayaan Masyarakat
                                            atau Kuliah Kerja Mahasiswa (1 kelompok PPM
                                            dihitung 2 mahasiswa)</td>
                                        <td><input type="radio" {{ $data->A5 == '1' ? 'checked' : '' }}
                                                class="A5" name="A5" id="A5" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A5 == '2' ? 'checked' : '' }}
                                                class="A5" name="A5" id="A5" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A5 == '3' ? 'checked' : '' }}
                                                class="A5" name="A5" id="A5" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A5 == '4' ? 'checked' : '' }}
                                                class="A5" name="A5" id="A5" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A5 == '5' ? 'checked' : '' }}
                                                class="A5" name="A5" id="A5" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang membimbing Skripsi</td>
                                        <td>Membimbing skripsi sebagai pembimbing pendamping (1 - 8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing pendamping (>8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing utama (1 - 8 lulusan)</td>
                                        <td>Membimbing skripsi sebagai pembimbing utama (>8 lulusan)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pembimbingan</label>
                                            <input class="@error('fileA6') is-invalid @enderror" id="formFileSm"
                                                name="fileA6" type="file">
                                            @if ($data->fileA6)
                                                <a href="{{ asset('storage/' . $data->fileA6) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA6')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA6"
                                                value="{{ $data->scorA6 }}" name="scorA6" type="number"
                                                aria-label="A6" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA6" value="{{ $data->scorMaxA6 }}"
                                                name="scorMaxA6" type="number" aria-label="A6" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA6"
                                                value="{{ number_format($data->scorSubItemA6, 3) }}"
                                                name="scorSubItemA6" type="number" aria-label="A6" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.6</td>
                                        <td>Dosen membimbing dalam menghasilkan Skripsi bagi mahasiswa strata 1 atau
                                            Tugas Akhir bagi mahasiswa diploma 3</td>
                                        <td><input type="radio" {{ $data->A6 == '1' ? 'checked' : '' }}
                                                class="A6" name="A6" id="A6" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A6 == '2' ? 'checked' : '' }}
                                                class="A6" name="A6" id="A6" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A6 == '3' ? 'checked' : '' }}
                                                class="A6" name="A6" id="A6" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A6 == '4' ? 'checked' : '' }}
                                                class="A6" name="A6" id="A6" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A6 == '5' ? 'checked' : '' }}
                                                class="A6" name="A6" id="A6" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah menguji dalam ujian akhir mahasiswa</td>
                                        <td>Dosen menjadi anggota penguji (1 - 8 mahasiswa)</td>
                                        <td>Dosen menjadi anggota penguji (> 8 mahasiswa)</td>
                                        <td>Dosen menjadi Ketua Penguji (1 - 8 mahasiswa)</td>
                                        <td>Dosen menjadi Ketua Penguji (> 8 mahasiswa)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                penunjukkan sebagai penguji</label>
                                            <input class="@error('fileA7') is-invalid @enderror" id="formFileSm"
                                                name="fileA7" type="file">
                                            @if ($data->fileA7)
                                                <a href="{{ asset('storage/' . $data->fileA7) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA7')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA7"
                                                value="{{ $data->scorA7 }}" name="scorA7" type="number"
                                                aria-label="A7" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA7" value="{{ $data->scorMaxA7 }}"
                                                name="scorMaxA7" type="number" aria-label="A7" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA7"
                                                value="{{ number_format($data->scorSubItemA7, 3) }}"
                                                name="scorSubItemA7" type="number" aria-label="A7" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.7</td>
                                        <td>Dosen bertugas sebagai penguji pada ujian akhir mahasiswa</td>
                                        <td><input type="radio" {{ $data->A7 == '1' ? 'checked' : '' }}
                                                class="A7" name="A7" id="A7" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A7 == '2' ? 'checked' : '' }}
                                                class="A7" name="A7" id="A7" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A7 == '3' ? 'checked' : '' }}
                                                class="A7" name="A7" id="A7" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A7 == '4' ? 'checked' : '' }}
                                                class="A7" name="A7" id="A7" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A7 == '5' ? 'checked' : '' }}
                                                class="A7" name="A7" id="A7" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Menjadi pembimbing akademik kurang dari 10 Mahasiswa</td>
                                        <td>Menjadi pembimbing akademik (10 - 17 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (18 - 24 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (25 - 30 mahasiswa)</td>
                                        <td>Menjadi pembimbing akademik (>30 mahasiswa)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK Dosen
                                                Pembimbing Akademik
                                                (Dosen PA/Dosen Wali)</label>
                                            <input class="@error('fileA8') is-invalid @enderror" id="formFileSm"
                                                name="fileA8" type="file">
                                            @if ($data->fileA8)
                                                <a href="{{ asset('storage/' . $data->fileA8) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA8')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA8"
                                                value="{{ $data->scorA8 }}" name="scorA8" type="number"
                                                aria-label="A8" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA8" value="{{ $data->scorMaxA8 }}"
                                                name="scorMaxA8" type="number" aria-label="A8" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA8"
                                                value="{{ number_format($data->scorSubItemA8, 3) }}"
                                                name="scorSubItemA8" type="number" aria-label="A8" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.8</td>
                                        <td>Dosen membimbing akademik /dosen pembimbing akademik (dosen PA/dosen wali)
                                        </td>
                                        <td><input type="radio" {{ $data->A8 == '1' ? 'checked' : '' }}
                                                class="A8" name="A8" id="A8" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A8 == '2' ? 'checked' : '' }}
                                                class="A8" name="A8" id="A8" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A8 == '3' ? 'checked' : '' }}
                                                class="A8" name="A8" id="A8" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A8 == '4' ? 'checked' : '' }}
                                                class="A8" name="A8" id="A8" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A8 == '5' ? 'checked' : '' }}
                                                class="A8" name="A8" id="A8" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Kurang dari 80% Jumlah mahasiswa yang dibimbingnya lancar
                                            (Jumlah mahasiswa melanjutkan studi/lulus < 80% )</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>80% s.d. < 100% Jumlah mahasiswa yang dibimbingnya lancar (Jumlah mahasiswa
                                                melanjutkan studi/lulus=80% s.d. <100%)</td>
                                        <td>Tidak diperhitungkan</td>
                                        <td>100% jumlah mahasiswa yang dibimbingnya lancar
                                            (Jumlah mahasiswa melanjutkan studi/lulus = 100%)</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Keterangan
                                                dari Prodi dan BAAK</label>
                                            <input class="@error('fileA9') is-invalid @enderror" id="formFileSm"
                                                name="fileA9" type="file">
                                            @if ($data->fileA9)
                                                <a href="{{ asset('storage/' . $data->fileA9) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA9')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA9"
                                                value="{{ $data->scorA9 }}" name="scorA9" type="number"
                                                aria-label="A9" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA9" value="{{ $data->scorMaxA9 }}"
                                                name="scorMaxA9" type="number" aria-label="A9" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA9"
                                                value="{{ number_format($data->scorSubItemA9, 3) }}"
                                                name="scorSubItemA9" type="number" aria-label="A9" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.9</td>
                                        <td>Dosen PA/Dosen Wali membimbing kelancaran studi mahasiswa yang dibimbingnya
                                        </td>
                                        <td><input type="radio" {{ $data->A9 == '1' ? 'checked' : '' }}
                                                class="A9" name="A9" id="A9" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A9 == '2' ? 'checked' : '' }}
                                                class="A9" name="A9" id="A9" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A9 == '3' ? 'checked' : '' }}
                                                class="A9" name="A9" id="A9" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A9 == '4' ? 'checked' : '' }}
                                                class="A9" name="A9" id="A9" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A9 == '5' ? 'checked' : '' }}
                                                class="A9" name="A9" id="A9" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang menjadi pembina kegiatan akademik maupun kemahasiswaan</td>
                                        <td>Menjadi pembina 1 (satu) kegiatan kemahasiswaan saja</td>
                                        <td>Menjadi penasihat akademik saja</td>
                                        <td>Menjadi penasihat akademik dan pembina 1 kegiatan kemahasiswaan</td>
                                        <td>Menjadi penasihat akademik dan pembina kegiatan kemahasiswaan lebih dari 1
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Keterangan
                                                dari Prodi</label>
                                            <input class="@error('fileA10') is-invalid @enderror" id="formFileSm"
                                                name="fileA10" type="file">
                                            @if ($data->fileA10)
                                                <a href="{{ asset('storage/' . $data->fileA10) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA10')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA10"
                                                value="{{ $data->scorA10 }}" name="scorA10" type="number"
                                                aria-label="A10" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA10" value="{{ $data->scorMaxA10 }}"
                                                name="scorMaxA10" type="number" aria-label="A10" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA10"
                                                value="{{ number_format($data->scorSubItemA10, 3) }}"
                                                name="scorSubItemA10" type="number" aria-label="A10" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.10</td>
                                        <td>Dosen menjadi pembina dalam kegiatan mahasiswa dalam bidang akademik dan
                                            kemahasiswaan
                                        </td>
                                        <td><input type="radio" {{ $data->A10 == '1' ? 'checked' : '' }}
                                                class="A10" name="A10" id="A10" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A10 == '2' ? 'checked' : '' }}
                                                class="A10" name="A10" id="A10" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A10 == '3' ? 'checked' : '' }}
                                                class="A10" name="A10" id="A10" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A10 == '4' ? 'checked' : '' }}
                                                class="A10" name="A10" id="A10" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A10 == '5' ? 'checked' : '' }}
                                                class="A10" name="A10" id="A10" value="5"
                                                onclick="sum();">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah mengusukan metode baru</td>
                                        <td>Pernah mengusulkan metode baru, namun tidak diimplementasikan</td>
                                        <td>Telah mengusulkan metode baru dan sedang dalam proses review oleh Dekan /
                                            Tim Kurikulum</td>
                                        <td>Metode baru yang diusulkan telah disetujui namun belum diterapkan dalam PT /
                                            Fakultas / Prodinya</td>
                                        <td>Metode baru yang diusulkan telah disetujui dan diimplementasikan dalam PT /
                                            Fakultas / Prodinya
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                tertulis terkait metode pembelajaran baru yang telah
                                                disampaikan</label>
                                            <input class="@error('fileA11') is-invalid @enderror" id="formFileSm"
                                                name="fileA11" type="file">
                                            @if ($data->fileA11)
                                                <a href="{{ asset('storage/' . $data->fileA11) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA11')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA11"
                                                value="{{ $data->scorA11 }}" name="scorA11" type="number"
                                                aria-label="A11" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA11" value="{{ $data->scorMaxA11 }}"
                                                name="scorMaxA11" type="number" aria-label="A11" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA11"
                                                value="{{ number_format($data->scorSubItemA11, 3) }}"
                                                name="scorSubItemA11" type="number" aria-label="A11" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.11</td>
                                        <td>Dosen berhasil menemukan metode pembelajaran yang inovatif, dilengkapi
                                            dengan media pembelajaran dan evaluasi
                                            pembelajaran yang tertulis dan tersimpan dalam perpustakaan IKBIS.
                                        </td>
                                        <td><input type="radio" {{ $data->A11 == '1' ? 'checked' : '' }}
                                                class="A11" name="A11" id="A11" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A11 == '2' ? 'checked' : '' }}
                                                class="A11" name="A11" id="A11" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A11 == '3' ? 'checked' : '' }}
                                                class="A11" name="A11" id="A11" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A11 == '4' ? 'checked' : '' }}
                                                class="A11" name="A11" id="A11" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A11 == '5' ? 'checked' : '' }}
                                                class="A11" name="A11" id="A11" value="5"
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
                                        <td><input type="number" value="{{ $data->tambahan_a11_in }}"
                                                name="JumlahYangDihasilkanA11_5" id="JumlahYangDihasilkanA11_5"
                                                onkeyup="sum()">
                                        </td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanA11_5 }}"
                                                name="JumlahSkorYangDiHasilkanA11_5"
                                                id="JumlahSkorYangDiHasilkanA11_5" readonly></td>
                                        <td></td>
                                        <td><input type="number"
                                                value="{{ number_format($data->JumlahSkorYangDiHasilkanBobotSubItemA11_5, 3) }}"
                                                name="JumlahSkorYangDiHasilkanBobotSubItemA11_5"
                                                id="JumlahSkorYangDiHasilkanBobotSubItemA11_5" readonly></td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanA11_5 }}"
                                                name="SkorTambahanA11_5" id="SkorTambahanA11_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahA11_5 }}"
                                                name="SkorTambahanJumlahA11_5" id="SkorTambahanJumlahA11_5" readonly>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number"
                                                value="{{ number_format($data->SkorTambahanJumlahBobotSubItemA11_5, 3) }}"
                                                name="SkorTambahanJumlahBobotSubItemA11_5"
                                                id="SkorTambahanJumlahBobotSubItemA11_5" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah menyusun bahan pengajaran sendiri</td>
                                        <td>Menyusun bahan pengajaran dalam bentuk naskah tutorial yang ditulis
                                            mengikuti kaidah tulisan ilmiah</td>
                                        <td>Membuat alat bantu dalam bentuk audio visual, atau model yang memudahkan
                                            proses pengajaran</td>
                                        <td>1 Karya Ilmiah Lektor</td>
                                        <td>Menyusun buku ajar/buku number untuk suatu mata kuliah, mengikuti kaidah
                                            buku
                                            number serta diterbitkan secara resmi dan
                                            disebarluaskan
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti
                                                fisik
                                                bahan pengajaran yang dihasilkan, dan jumlah mata
                                                kuliah diperhitungkan</label>
                                            <input class="@error('fileA12') is-invalid @enderror" id="formFileSm"
                                                name="fileA12" type="file">
                                            @if ($data->fileA12)
                                                <a href="{{ asset('storage/' . $data->fileA12) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA12')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA12"
                                                value="{{ $data->scorA12 }}" name="scorA12" type="number"
                                                aria-label="A12" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA12" value="{{ $data->scorMaxA12 }}"
                                                name="scorMaxA12" type="number" aria-label="A12" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA12"
                                                value="{{ number_format($data->scorSubItemA12, 3) }}"
                                                name="scorSubItemA12" type="number" aria-label="A12" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.12</td>
                                        <td>Dosen mengembangkan bahan pengajaran sebagai hasil pengembangan inovatif
                                            materi substansi pengajaran
                                        </td>
                                        <td><input type="radio" {{ $data->A12 == '1' ? 'checked' : '' }}
                                                class="A12" name="A12" id="A12" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A12 == '2' ? 'checked' : '' }}
                                                class="A12" name="A12" id="A12" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A12 == '3' ? 'checked' : '' }}
                                                class="A12" name="A12" id="A12" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A12 == '4' ? 'checked' : '' }}
                                                class="A12" name="A12" id="A12" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A12 == '5' ? 'checked' : '' }}
                                                class="A12" name="A12" id="A12" value="5"
                                                onclick="sum();">
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanA12_3_in }}"
                                                name="JumlahYangDihasilkanA12_3" id="JumlahYangDihasilkanA12_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanA12_4_in }}"
                                                name="JumlahYangDihasilkanA12_4" id="JumlahYangDihasilkanA12_4"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanA12_5_in }}"
                                                name="JumlahYangDihasilkanA12_5" id="JumlahYangDihasilkanA12_5"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanA12 }}"
                                                name="JumlahSkorYangDiHasilkanA12" id="JumlahSkorYangDiHasilkanA12"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number"
                                                value="{{ number_format($data->SkorTambahanJumlahSkorA12, 3) }}"
                                                name="SkorTambahanJumlahSkorA12" id="SkorTambahanJumlahSkorA12"
                                                readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanA12_3 }}"
                                                name="SkorTambahanA12_3" id="SkorTambahanA12_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanA12_4 }}"
                                                name="SkorTambahanA12_4" id="SkorTambahanA12_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanA12_5 }}"
                                                name="SkorTambahanA12_5" id="SkorTambahanA12_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahA12 }}"
                                                name="SkorTambahanJumlahA12" id="SkorTambahanJumlahA12" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number"
                                                value="{{ number_format($data->SkorTambahanJumlahBobotSubItemA12, 3) }}"
                                                name="SkorTambahanJumlahBobotSubItemA12"
                                                id="SkorTambahanJumlahBobotSubItemA12" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sedang menduduki jabatan struktural</td>
                                        <td>Sedang menjabat sebagai Kepala Program Studi, Ka. Sub. Lembaga </td>
                                        <td>Sedang menjabat sebagai Dekan, Ka. Lembaga, Ka. UPT</td>
                                        <td>Sedang menjabat sebagai Wakil Rektor</td>
                                        <td>Sedang menjabat sebagai Rektor</td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pengangkatan sebagai Pejabat Struktural</label>
                                            <input class="@error('fileA13') is-invalid @enderror" id="formFileSm"
                                                name="fileA13" type="file">
                                            @if ($data->fileA13)
                                                <a href="{{ asset('storage/' . $data->fileA13) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('fileA13')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorA13"
                                                value="{{ $data->scorA13 }}" name="scorA13" type="number"
                                                aria-label="A13" readonly></td>
                                        <td rowspan="2"><input id="scorMaxA13" value="{{ $data->scorMaxA13 }}"
                                                name="scorMaxA13" type="number" aria-label="A13" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemA13"
                                                value="{{ number_format($data->scorSubItemA13, 3) }}"
                                                name="scorSubItemA13" type="number" aria-label="A13" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>A.13</td>
                                        <td>Dosen menduduki jabatan struktural Akademik di perguruan tinggi
                                        </td>
                                        <td><input type="radio" {{ $data->A13 == '1' ? 'checked' : '' }}
                                                class="A13" name="A13" id="A13" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A13 == '2' ? 'checked' : '' }}
                                                class="A13" name="A13" id="A13" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A13 == '3' ? 'checked' : '' }}
                                                class="A13" name="A13" id="A13" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A13 == '4' ? 'checked' : '' }}
                                                class="A13" name="A13" id="A13" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{ $data->A13 == '5' ? 'checked' : '' }}
                                                class="A13" name="A13" id="A13" value="5"
                                                onclick="sum();">
                                    </tr>

                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Pendidikan dan Pengajaran</td>
                                        <td><input type="number"
                                                value="{{ number_format($data->TotalSkorPendidikanPointA, 3) }}"
                                                name="TotalSkorPendidikanPointA" id="TotalSkorPendidikanPointA"
                                                readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 11</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihanA11 }}"
                                                name="TotalKelebihanA11" id="TotalKelebihanA11" readonly>
                                        </td>
                                        <td colspan="3">Nilai Pendidikan dan Pengajaran</td>
                                        <td><input type="number" value="{{ $data->nilaiPendidikandanPengajaran }}"
                                                name="nilaiPendidikandanPengajaran" id="nilaiPendidikandanPengajaran"
                                                readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 12</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihanA12 }}"
                                                name="TotalKelebihanA12" id="TotalKelebihanA12" readonly>
                                        </td>
                                        <td colspan="3" rowspan="2">Nilai Tambah Pendidikan dan Pengajaran</td>
                                        <td rowspan="2"><input type="number"
                                                value="{{ $data->NilaiTambahPendidikanDanPengajaran }}"
                                                name="NilaiTambahPendidikanDanPengajaran"
                                                id="NilaiTambahPendidikanDanPengajaran" readonly></td>
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
                                        <td colspan="6">Nilai Total Pendidikan & Pengajaran</td>
                                        <td><input type="number"
                                                value="{{ number_format($data->NilaiTotalPendidikanDanPengajaran, 2) }}"
                                                name="NilaiTotalPendidikanDanPengajaran"
                                                id="NilaiTotalPendidikanDanPengajaran" readonly></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end">
                                        <button type="submit" onclick="event.preventDefault(); confirmSubmit();"
                                            class="btn btn-primary btn-sm mb-2">Simpan</button>
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
        <script src="{{ asset('Assets/js/Input-point/scorPointA.js') }}"></script>
        {{-- <script src="{{ asset('Assets/js/Input-point/scorPointAForm.js') }}"></script> --}}

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
