<x-app-layout title="Form Point C">
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point C</a></li>
            </ol>
        </div>
        @endrole
        @role('dosen|hrd')
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Forms </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Point C</a></li>
            </ol>
        </div>
        @endrole
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point C</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <div class="table-responsive">
                        <form id="my-form" action="{{ route('update.Point-C', [$data->new_user_id]) }}" method="POST"
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

                                    <tr>
                                        <td>C</td>
                                        <td colspan="10" class="text-start">PENGABDIAN KEPADA MASYARAKAT</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi anggota/pengurus dalam organisasi skala lokal</td>
                                        <td>Menjadi anggota/pengurus dalam organisasi tingkat kota/kabupaten</td>
                                        <td>Menjadi anggota/pengurus dalam organisasi tingkat nasional</td>
                                        <td>Menjadi anggota/pengurus dalam organisasi tingkat internasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                kartu anggota atau akses ke jurnal/website tertentu</label>
                                            <input class="@error('fileC1') is-invalid @enderror" name="fileC1"
                                                id="formFileSm" type="file">

                                            @if($data->fileC1)
                                            <a href="{{ asset('storage/'.$data->fileC1) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC1"
                                                value="{{ $data->scorC1 }}" name="scorC1" type="number" aria-label="C1"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC1" value="{{ $data->scorMaxC1 }}"
                                                name="scorMaxC1" type="number" aria-label="C1" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC1" value="{{ $data->scorSubItemC1 }}"
                                                name="scorSubItemC1" type="number" aria-label="C1" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.1</td>
                                        <td>Dosen berperan sebagai pengurus atau anggota organisasi sosial
                                            kemasyarakatan (termasuk RT, RW, parpol, organisasi
                                            keagamaan, dll)
                                        </td>
                                        <td><input type="radio" {{$data->C1 == "1" ? "checked" : ""}} class="C1"
                                            name="C1" id="C1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C1 == "2" ? "checked" : ""}} class="C1"
                                            name="C1" id="C1" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C1 == "3" ? "checked" : ""}} class="C1"
                                            name="C1" id="C1" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C1 == "4" ? "checked" : ""}} class="C1"
                                            name="C1" id="C1" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C1 == "5" ? "checked" : ""}} class="C1"
                                            name="C1" id="C1" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC1_2_in }}"
                                                name="JumlahYangDihasilkanC1_2" id="JumlahYangDihasilkanC1_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC1_3_in }}"
                                                name="JumlahYangDihasilkanC1_3" id="JumlahYangDihasilkanC1_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC1_4_in }}"
                                                name="JumlahYangDihasilkanC1_4" id="JumlahYangDihasilkanC1_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC1_5_in }}"
                                                name="JumlahYangDihasilkanC1_5" id="JumlahYangDihasilkanC1_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC1 }}"
                                                name="JumlahSkorYangDiHasilkanC1" id="JumlahSkorYangDiHasilkanC1"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC1 }}"
                                                name="SkorTambahanJumlahSkorC1" id="SkorTambahanJumlahSkorC1" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC1_2 }}"
                                                name="SkorTambahanC1_2" id="SkorTambahanC1_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC1_3 }}"
                                                name="SkorTambahanC1_3" id="SkorTambahanC1_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC1_4 }}"
                                                name="SkorTambahanC1_4" id="SkorTambahanC1_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC1_5 }}"
                                                name="SkorTambahanC1_5" id="SkorTambahanC1_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC1 }}"
                                                name="SkorTambahanJumlahC1" id="SkorTambahanJumlahC1" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC1 }}"
                                                name="SkorTambahanJumlahBobotSubItemC1"
                                                id="SkorTambahanJumlahBobotSubItemC1" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali / Menjadi anggota organisasi sosial kemasyarakatan secara
                                            otomatis</td>
                                        <td>Menjadi anggota aktif</td>
                                        <td>Menjadi Ketua Bidang / Ketua Seksi</td>
                                        <td>Menjadi Pengurus Inti (Sekretaris / Bendahara / Wakil Ketua)</td>
                                        <td>Menjadi Ketua Umum Organisasi / Penasihat / Penanggungjawab
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload SK
                                                Pengangkatan dosen sebagai pengurus dalam organisasi
                                                kemasyarakatan tertentu</label>
                                            <input class="@error('fileC2') is-invalid @enderror" name="fileC2"
                                                id="formFileSm" type="file">

                                            @if($data->fileC2)
                                            <a href="{{ asset('storage/'.$data->fileC2) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC2"
                                                value="{{ $data->scorC2 }}" name="scorC2" type="number" aria-label="C2"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC2" value="{{ $data->scorMaxC2 }}"
                                                name="scorMaxC2" type="number" aria-label="C2" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC2" value="{{ $data->scorSubItemC2 }}"
                                                name="scorSubItemC2" type="number" aria-label="C2" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.2</td>
                                        <td>Peranan dosen dalam organisasi sosial kemasyarakatan
                                        </td>
                                        <td><input type="radio" {{$data->C2 == "1" ? "checked" : ""}} class="C2"
                                            name="C2" id="C2" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C2 == "2" ? "checked" : ""}} class="C2"
                                            name="C2" id="C2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C2 == "3" ? "checked" : ""}} class="C2"
                                            name="C2" id="C2" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C2 == "4" ? "checked" : ""}} class="C2"
                                            name="C2" id="C2" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C2 == "5" ? "checked" : ""}} class="C2"
                                            name="C2" id="C2" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC2_2_in }}"
                                                name="JumlahYangDihasilkanC2_2" id="JumlahYangDihasilkanC2_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC2_3_in }}"
                                                name="JumlahYangDihasilkanC2_3" id="JumlahYangDihasilkanC2_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC2_4_in }}"
                                                name="JumlahYangDihasilkanC2_4" id="JumlahYangDihasilkanC2_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC2_5_in }}"
                                                name="JumlahYangDihasilkanC2_5" id="JumlahYangDihasilkanC2_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC2 }}"
                                                name="JumlahSkorYangDiHasilkanC2" id="JumlahSkorYangDiHasilkanC2"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC2 }}"
                                                name="SkorTambahanJumlahSkorC2" id="SkorTambahanJumlahSkorC2" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC2_2 }}"
                                                name="SkorTambahanC2_2" id="SkorTambahanC2_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC2_3 }}"
                                                name="SkorTambahanC2_3" id="SkorTambahanC2_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC2_4 }}"
                                                name="SkorTambahanC2_4" id="SkorTambahanC2_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC2_5 }}"
                                                name="SkorTambahanC2_5" id="SkorTambahanC2_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC2 }}"
                                                name="SkorTambahanJumlahC2" id="SkorTambahanJumlahC2" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC2 }}"
                                                name="SkorTambahanJumlahBobotSubItemC2"
                                                id="SkorTambahanJumlahBobotSubItemC2" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah menyampaikan orasi ilmiah</td>
                                        <td>Pernah menyampaikan orasi ilmiah 1 kali di lingkup IKBIS sendiri</td>
                                        <td>Pernah menyampaikan orasi ilmiah 1 kali di luar IKBIS sendiri</td>
                                        <td>Pernah menyampaikan orasi ilmiah lebih dari 1 kali di lingkup IKBIS sendiri
                                        </td>
                                        <td>Pernah menyampaikan orasi ilmiah lebih dari 1 kali di luar IKBIS sendiri
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                undangan/surat keterangan telah melakukan orasi
                                                ilmiah, dan makalah yang disampaikan</label>
                                            <input class="@error('fileC3') is-invalid @enderror" name="fileC3"
                                                id="formFileSm" type="file">

                                            @if($data->fileC3)
                                            <a href="{{ asset('storage/'.$data->fileC3) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC3"
                                                value="{{ $data->scorC3 }}" name="scorC3" type="number" aria-label="C3"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC3" value="{{ $data->scorMaxC3 }}"
                                                name="scorMaxC3" type="number" aria-label="C3" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC3" value="{{ $data->scorSubItemC3 }}"
                                                name="scorSubItemC3" type="number" aria-label="C3" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.3</td>
                                        <td>Dosen menyampaikan orasi ilmiah dalam forum-forum kegiatan tradisi akademik
                                            seperti dies natalis, wisuda, simposium
                                            nasional, dll
                                        </td>
                                        <td><input type="radio" {{$data->C3 == "1" ? "checked" : ""}} class="C3"
                                            name="C3" id="C3" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C3 == "2" ? "checked" : ""}} class="C3"
                                            name="C3" id="C3" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C3 == "3" ? "checked" : ""}} class="C3"
                                            name="C3" id="C3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C3 == "4" ? "checked" : ""}} class="C3"
                                            name="C3" id="C3" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C3 == "5" ? "checked" : ""}} class="C3"
                                            name="C3" id="C3" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah orasi ilmiah (>1)</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC3_4_in }}"
                                                name="JumlahYangDihasilkanC3_4" id="JumlahYangDihasilkanC3_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC3_5_in }}"
                                                name="JumlahYangDihasilkanC3_5" id="JumlahYangDihasilkanC3_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC3 }}"
                                                name="JumlahSkorYangDiHasilkanC3" id="JumlahSkorYangDiHasilkanC3"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC3 }}"
                                                name="SkorTambahanJumlahSkorC3" id="SkorTambahanJumlahSkorC3" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC3_4 }}"
                                                name="SkorTambahanC3_4" id="SkorTambahanC3_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC3_5 }}"
                                                name="SkorTambahanC3_5" id="SkorTambahanC3_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC3 }}"
                                                name="SkorTambahanJumlahC3" id="SkorTambahanJumlahC3" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC3 }}"
                                                name="SkorTambahanJumlahBobotSubItemC3"
                                                id="SkorTambahanJumlahBobotSubItemC3" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>menjadi pembicara/instruktur/pengajar/juri dalam kegiatan skala lokal</td>
                                        <td>menjadi pembicara/instruktur/pengajar/juri dalam kegiatan tingkat
                                            kota/kabupaten</td>
                                        <td>menjadi pembicara/instruktur/pengaja/juri dalam kegiatan tingkat regional
                                        </td>
                                        <td>menjadi pembicara/instruktur/pengaja/juri dalam kegiatan tingkat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat Tugas
                                                atau SK atau sertifikat yang menandakan dosen telah
                                                berperan serta dalam kegiatan pengabdian kepada
                                                masyarakat</label>
                                            <input class="@error('fileC4') is-invalid @enderror" name="fileC4"
                                                id="formFileSm" type="file">

                                            @if($data->fileC4)
                                            <a href="{{ asset('storage/'.$data->fileC4) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC4"
                                                value="{{ $data->scorC4 }}" name="scorC4" type="number" aria-label="C4"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC4" value="{{ $data->scorMaxC4 }}"
                                                name="scorMaxC4" type="number" aria-label="C4" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC4" value="{{ $data->scorSubItemC4 }}"
                                                name="scorSubItemC4" type="number" aria-label="C4" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.4</td>
                                        <td>Dosen menjadi pembicara, instruktur ,pengajar pada seminar, lokakarya,
                                            dan
                                            aktivitas belajar mengajar untuk pengembangan
                                            suatu lembaga sosial kemasyarakatan di dalam/luar IKBIS, baik masyarakat
                                            umum maupun masyarakat kampus
                                        </td>
                                        <td><input type="radio" {{$data->C4 == "1" ? "checked" : ""}} class="C4"
                                            name="C4" id="C4" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C4 == "2" ? "checked" : ""}} class="C4"
                                            name="C4" id="C4" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C4 == "3" ? "checked" : ""}} class="C4"
                                            name="C4" id="C4" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C4 == "4" ? "checked" : ""}} class="C4"
                                            name="C4" id="C4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C4 == "5" ? "checked" : ""}} class="C4"
                                            name="C4" id="C4" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kegiatan yang dilakukan</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC4_2_in }}"
                                                name="JumlahYangDihasilkanC4_2" id="JumlahYangDihasilkanC4_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC4_3_in }}"
                                                name="JumlahYangDihasilkanC4_3" id="JumlahYangDihasilkanC4_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC4_4_in }}"
                                                name="JumlahYangDihasilkanC4_4" id="JumlahYangDihasilkanC4_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC4_5_in }}"
                                                name="JumlahYangDihasilkanC4_5" id="JumlahYangDihasilkanC4_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC4 }}"
                                                name="JumlahSkorYangDiHasilkanC4" id="JumlahSkorYangDiHasilkanC4"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC4 }}"
                                                name="SkorTambahanJumlahSkorC4" id="SkorTambahanJumlahSkorC4" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC4_2 }}"
                                                name="SkorTambahanC4_2" id="SkorTambahanC4_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC4_3 }}"
                                                name="SkorTambahanC4_3" id="SkorTambahanC4_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC4_4 }}"
                                                name="SkorTambahanC4_4" id="SkorTambahanC4_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC4_5 }}"
                                                name="SkorTambahanC4_5" id="SkorTambahanC4_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC4 }}"
                                                name="SkorTambahanJumlahC4" id="SkorTambahanJumlahC4" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC4 }}"
                                                name="SkorTambahanJumlahBobotSubItemC4"
                                                id="SkorTambahanJumlahBobotSubItemC4" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menjadi salah satu instruktur dalam rangkaian kegiatan yang dilaksanakan
                                        </td>
                                        <td>Menjadi instruktur utama dalam kegiatan yang dilaksanakan</td>
                                        <td>Menjadi salah satu pembicara dalam suatu seminar/diskusi panel yang
                                            dilaksanakan
                                        </td>
                                        <td>Menjadi pembicara utama dalam suatu seminar/diskusi panel yang dilaksanakan
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat Tugas
                                                atau SK atau sertifikat yang menandakan dosen telah
                                                berperan serta dalam kegiatan pengabdian kepada
                                                masyarakat</label>
                                            <input class="@error('fileC5') is-invalid @enderror" name="fileC5"
                                                id="formFileSm" type="file">

                                            @if($data->fileC5)
                                            <a href="{{ asset('storage/'.$data->fileC5) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC5"
                                                value="{{ $data->scorC5 }}" name="scorC5" type="number" aria-label="C5"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC5" value="{{ $data->scorMaxC5 }}"
                                                name="scorMaxC5" type="number" aria-label="C5" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC5" value="{{ $data->scorSubItemC5 }}"
                                                name="scorSubItemC5" type="number" aria-label="C5" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.5</td>
                                        <td>Peranan dosen dalam kegiatan seminar/lokakarya dan aktivitas belajar
                                            mengajar untuk pengembangan suatu lembaga sosial
                                            kemasyarakatan di dalam/luar IKBIS, baik masyarakat umum maupun masyarakat
                                            kampus
                                        </td>
                                        <td><input type="radio" {{$data->C5 == "1" ? "checked" : ""}} class="C5"
                                            name="C5" id="C5" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C5 == "2" ? "checked" : ""}} class="C5"
                                            name="C5" id="C5" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C5 == "3" ? "checked" : ""}} class="C5"
                                            name="C5" id="C5" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C5 == "4" ? "checked" : ""}} class="C5"
                                            name="C5" id="C5" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C5 == "5" ? "checked" : ""}} class="C5"
                                            name="C5" id="C5" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah ormas yang diikuti</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC5_2_in }}"
                                                name="JumlahYangDihasilkanC5_2" id="JumlahYangDihasilkanC5_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC5_3_in }}"
                                                name="JumlahYangDihasilkanC5_3" id="JumlahYangDihasilkanC5_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC5_4_in }}"
                                                name="JumlahYangDihasilkanC5_4" id="JumlahYangDihasilkanC5_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC5_5_in }}"
                                                name="JumlahYangDihasilkanC5_5" id="JumlahYangDihasilkanC5_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC5 }}"
                                                name="JumlahSkorYangDiHasilkanC5" id="JumlahSkorYangDiHasilkanC5"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC5 }}"
                                                name="SkorTambahanJumlahSkorC5" id="SkorTambahanJumlahSkorC5" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC5_2 }}"
                                                name="SkorTambahanC5_2" id="SkorTambahanC5_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC5_3 }}"
                                                name="SkorTambahanC5_3" id="SkorTambahanC5_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC5_4 }}"
                                                name="SkorTambahanC5_4" id="SkorTambahanC5_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC5_5 }}"
                                                name="SkorTambahanC5_5" id="SkorTambahanC5_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC5 }}"
                                                name="SkorTambahanJumlahC5" id="SkorTambahanJumlahC5" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC5 }}"
                                                name="SkorTambahanJumlahBobotSubItemC5"
                                                id="SkorTambahanJumlahBobotSubItemC5" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Memberikan konsultasi kepada organisasi kemasyarakatan lokal
                                        </td>
                                        <td>Memberikan konsultasi kepada organisasi kemasyarakatan tingkat
                                            kota/kabupaten</td>
                                        <td>Memberikan konsultasi kepada organisasi kemasyarakatan tingkat regional
                                        </td>
                                        <td>Memberikan konsultasi kepada organisasi kemasyarakatan tingkat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Surat
                                                Keterangan dari organisasi yang memanfaatkan jasa dosen</label>
                                            <input class="@error('fileC6') is-invalid @enderror" name="fileC6"
                                                id="formFileSm" type="file">

                                            @if($data->fileC6)
                                            <a href="{{ asset('storage/'.$data->fileC6) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC6"
                                                value="{{ $data->scorC6 }}" name="scorC6" type="number" aria-label="C6"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC6" value="{{ $data->scorMaxC6 }}"
                                                name="scorMaxC6" type="number" aria-label="C6" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC6" value="{{ $data->scorSubItemC6 }}"
                                                name="scorSubItemC6" type="number" aria-label="C6" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.6</td>
                                        <td>Dosen memberikan pelayanan konsultasi untuk meningkatkan kesejahteraan
                                            masyarakat (sifatnya nirlaba)
                                        </td>
                                        <td><input type="radio" {{$data->C6 == "1" ? "checked" : ""}} class="C6"
                                            name="C6" id="C6" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C6 == "2" ? "checked" : ""}} class="C6"
                                            name="C6" id="C6" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C6 == "3" ? "checked" : ""}} class="C6"
                                            name="C6" id="C6" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C6 == "4" ? "checked" : ""}} class="C6"
                                            name="C6" id="C6" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C6 == "5" ? "checked" : ""}} class="C6"
                                            name="C6" id="C6" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah ormas yang dilayani</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC6_2_in }}"
                                                name="JumlahYangDihasilkanC6_2" id="JumlahYangDihasilkanC6_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC6_3_in }}"
                                                name="JumlahYangDihasilkanC6_3" id="JumlahYangDihasilkanC6_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC6_4_in }}"
                                                name="JumlahYangDihasilkanC6_4" id="JumlahYangDihasilkanC6_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC6_5_in }}"
                                                name="JumlahYangDihasilkanC6_5" id="JumlahYangDihasilkanC6_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC6 }}"
                                                name="JumlahSkorYangDiHasilkanC6" id="JumlahSkorYangDiHasilkanC6"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC6 }}"
                                                name="SkorTambahanJumlahSkorC6" id="SkorTambahanJumlahSkorC6" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC6_2 }}"
                                                name="SkorTambahanC6_2" id="SkorTambahanC6_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC6_3 }}"
                                                name="SkorTambahanC6_3" id="SkorTambahanC6_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC6_4 }}"
                                                name="SkorTambahanC6_4" id="SkorTambahanC6_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC6_5 }}"
                                                name="SkorTambahanC6_5" id="SkorTambahanC6_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC6 }}"
                                                name="SkorTambahanJumlahC6" id="SkorTambahanJumlahC6" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC6 }}"
                                                name="SkorTambahanJumlahBobotSubItemC6"
                                                id="SkorTambahanJumlahBobotSubItemC6" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Menyusun panduan dan disebarluaskan kepada masyarakat lokal
                                        </td>
                                        <td>Menyusun panduan dan disebarluaskan kepada masyarakat tingkat kota/kabupaten
                                        </td>
                                        <td>Menyusun panduan dan disebarluaskan kepada masyarakat tingkat regional
                                        </td>
                                        <td>Menyusun panduan dan disebarluaskan pada masyarakat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                panduan praktis</label>
                                            <input class="@error('fileC7') is-invalid @enderror" name="fileC7"
                                                id="formFileSm" type="file">

                                            @if($data->fileC7)
                                            <a href="{{ asset('storage/'.$data->fileC7) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC7')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC7"
                                                value="{{ $data->scorC7 }}" name="scorC7" type="number" aria-label="C7"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC7" value="{{ $data->scorMaxC7 }}"
                                                name="scorMaxC7" type="number" aria-label="C7" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC7" value="{{ $data->scorSubItemC7 }}"
                                                name="scorSubItemC7" type="number" aria-label="C7" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.7</td>
                                        <td>Dosen menulis karya pengabdian kepada masyarakat dalam bentuk panduan
                                            praktis/terapan untuk dapat dimanfaatkan oleh
                                            masyarakat dan tidak dipublikasikan
                                        </td>
                                        <td><input type="radio" {{$data->C7 == "1" ? "checked" : ""}} class="C7"
                                            name="C7" id="C7" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C7 == "2" ? "checked" : ""}} class="C7"
                                            name="C7" id="C7" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C7 == "3" ? "checked" : ""}} class="C7"
                                            name="C7" id="C7" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C7 == "4" ? "checked" : ""}} class="C7"
                                            name="C7" id="C7" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C7 == "5" ? "checked" : ""}} class="C7"
                                            name="C7" id="C7" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah karya yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC7_2_in }}"
                                                name="JumlahYangDihasilkanC7_2" id="JumlahYangDihasilkanC7_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC7_3_in }}"
                                                name="JumlahYangDihasilkanC7_3" id="JumlahYangDihasilkanC7_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC7_4_in }}"
                                                name="JumlahYangDihasilkanC7_4" id="JumlahYangDihasilkanC7_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC7_5_in }}"
                                                name="JumlahYangDihasilkanC7_5" id="JumlahYangDihasilkanC7_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC7 }}"
                                                name="JumlahSkorYangDiHasilkanC7" id="JumlahSkorYangDiHasilkanC7"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC7 }}"
                                                name="SkorTambahanJumlahSkorC7" id="SkorTambahanJumlahSkorC7" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC7_2 }}"
                                                name="SkorTambahanC7_2" id="SkorTambahanC7_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC7_3 }}"
                                                name="SkorTambahanC7_3" id="SkorTambahanC7_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC7_4 }}"
                                                name="SkorTambahanC7_4" id="SkorTambahanC7_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC7_5 }}"
                                                name="SkorTambahanC7_5" id="SkorTambahanC7_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC7 }}"
                                                name="SkorTambahanJumlahC7" id="SkorTambahanJumlahC7" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC7 }}"
                                                name="SkorTambahanJumlahBobotSubItemC7"
                                                id="SkorTambahanJumlahBobotSubItemC7" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Karya dosen dipublikasikan di tingkat lokal dalam jurnal/buku/prosiding
                                        </td>
                                        <td>Karya dosen dipublikasikan di tingkat regional dalam jurnal/buku/prosiding
                                        </td>
                                        <td>Karya dosen dipublikasikan di tingkat nasional dalam jurnal/buku/prosiding
                                        </td>
                                        <td>Karya dosen dipublikasikan di tingkat internasional dalam
                                            jurnal/buku/prosiding
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Bukti fisik
                                                buku/makalah/artikel yang dipublikasikan</label>
                                            <input class="@error('fileC8') is-invalid @enderror" name="fileC8"
                                                id="formFileSm" type="file">

                                            @if($data->fileC8)
                                            <a href="{{ asset('storage/'.$data->fileC8) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC8')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC8"
                                                value="{{ $data->scorC8 }}" name="scorC8" type="number" aria-label="C8"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC8" value="{{ $data->scorMaxC8 }}"
                                                name="scorMaxC8" type="number" aria-label="C8" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC8" value="{{ $data->scorSubItemC8 }}"
                                                name="scorSubItemC8" type="number" aria-label="C8" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.8</td>
                                        <td>Dosen menulis karya pengabdian kepada masyarakat dalam bentuk panduan
                                            praktis/terapan untuk dapat dimanfaatkan oleh
                                            masyarakat dan tidak dipublikasikan
                                        </td>
                                        <td><input type="radio" {{$data->C8 == "1" ? "checked" : ""}} class="C8"
                                            name="C8" id="C8" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C8 == "2" ? "checked" : ""}} class="C8"
                                            name="C8" id="C8" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C8 == "3" ? "checked" : ""}} class="C8"
                                            name="C8" id="C8" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C8 == "4" ? "checked" : ""}} class="C8"
                                            name="C8" id="C8" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C8 == "5" ? "checked" : ""}} class="C8"
                                            name="C8" id="C8" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah karya yang dihasilkan</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC8_2_in }}"
                                                name="JumlahYangDihasilkanC8_2" id="JumlahYangDihasilkanC8_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC8_3_in }}"
                                                name="JumlahYangDihasilkanC8_3" id="JumlahYangDihasilkanC8_3"
                                                onkeyup="sum()" placeholder="0">
                                        </td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC8_4_in }}"
                                                name="JumlahYangDihasilkanC8_4" id="JumlahYangDihasilkanC8_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC8_5_in }}"
                                                name="JumlahYangDihasilkanC8_5" id="JumlahYangDihasilkanC8_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC8 }}"
                                                name="JumlahSkorYangDiHasilkanC8" id="JumlahSkorYangDiHasilkanC8"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC8 }}"
                                                name="SkorTambahanJumlahSkorC8" id="SkorTambahanJumlahSkorC8" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC8_2 }}"
                                                name="SkorTambahanC8_2" id="SkorTambahanC8_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC8_3 }}"
                                                name="SkorTambahanC8_3" id="SkorTambahanC8_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC8_4 }}"
                                                name="SkorTambahanC8_4" id="SkorTambahanC8_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC8_5 }}"
                                                name="SkorTambahanC8_5" id="SkorTambahanC8_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC8 }}"
                                                name="SkorTambahanJumlahC8" id="SkorTambahanJumlahC8" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC8 }}"
                                                name="SkorTambahanJumlahBobotSubItemC8"
                                                id="SkorTambahanJumlahBobotSubItemC8" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak sama sekali</td>
                                        <td>Melaksanakan kegiatan praktik nyata di dalam lingkup internal kampus
                                        </td>
                                        <td>Melaksanakan kegiatan praktik nyata di tingkat lokal
                                        </td>
                                        <td>Melaksanakan kegiatan praktik nyata di tingkat kota/kabupaten
                                        </td>
                                        <td>Melaksanakan kegiatan praktik nyata di tingkat nasional
                                        </td>
                                        <td rowspan="2">
                                            <label for="formFileSm" class="form-label text-danger">* Upload Laporan
                                                kegiatan pengabdian masyarakat</label>
                                            <input class="@error('fileC9') is-invalid @enderror" name="fileC9"
                                                id="formFileSm" type="file">

                                            @if($data->fileC9)
                                            <a href="{{ asset('storage/'.$data->fileC9) }}" target="_blank">Preview</a>
                                            @else
                                            N/A
                                            @endif

                                            @error('fileC9')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                        <td rowspan="2" class="bg-warning"><input id="scorC9"
                                                value="{{ $data->scorC9 }}" name="scorC9" type="number" aria-label="C9"
                                                readonly></td>
                                        <td rowspan="2"><input id="scorMaxC9" value="{{ $data->scorMaxC9 }}"
                                                name="scorMaxC9" type="number" aria-label="C9" readonly>
                                        </td>
                                        <td rowspan="2"><input id="scorSubItemC9" value="{{ $data->scorSubItemC9 }}"
                                                name="scorSubItemC9" type="number" aria-label="C9" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>C.9</td>
                                        <td>Dosen melaksanakan implementasi pendidikan dan penelitian melalui praktik
                                            nyata di lapangan untuk dimanfaatkan kepada
                                            masyarakat
                                        </td>
                                        <td><input type="radio" {{$data->C9 == "1" ? "checked" : ""}} class="C9"
                                            name="C9" id="C9" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C9 == "2" ? "checked" : ""}} class="C9"
                                            name="C9" id="C9" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C9 == "3" ? "checked" : ""}} class="C9"
                                            name="C9" id="C9" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C9 == "4" ? "checked" : ""}} class="C9"
                                            name="C9" id="C9" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" {{$data->C9 == "5" ? "checked" : ""}} class="C9"
                                            name="C9" id="C9" value="5" onclick="sum();">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"></td>
                                        <td>Jumlah kegiatan yang dilakukan</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC9_2_in }}"
                                                name="JumlahYangDihasilkanC9_2" id="JumlahYangDihasilkanC9_2"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC9_3_in }}"
                                                name="JumlahYangDihasilkanC9_3" id="JumlahYangDihasilkanC9_3"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC9_4_in }}"
                                                name="JumlahYangDihasilkanC9_4" id="JumlahYangDihasilkanC9_4"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td><input type="number" value="{{ $data->JumlahYangDihasilkanC9_5_in }}"
                                                name="JumlahYangDihasilkanC9_5" id="JumlahYangDihasilkanC9_5"
                                                onkeyup="sum()" placeholder="0"></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->JumlahSkorYangDiHasilkanC9 }}"
                                                name="JumlahSkorYangDiHasilkanC9" id="JumlahSkorYangDiHasilkanC9"
                                                readonly></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahSkorC9 }}"
                                                name="SkorTambahanJumlahSkorC9" id="SkorTambahanJumlahSkorC9" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Skor Tambahan dari Jumlah</td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC9_2 }}"
                                                name="SkorTambahanC9_2" id="SkorTambahanC9_2" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC9_3 }}"
                                                name="SkorTambahanC9_3" id="SkorTambahanC9_3" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC9_4 }}"
                                                name="SkorTambahanC9_4" id="SkorTambahanC9_4" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanC9_5 }}"
                                                name="SkorTambahanC9_5" id="SkorTambahanC9_5" readonly>
                                        </td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahC9 }}"
                                                name="SkorTambahanJumlahC9" id="SkorTambahanJumlahC9" readonly></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="number" value="{{ $data->SkorTambahanJumlahBobotSubItemC9 }}"
                                                name="SkorTambahanJumlahBobotSubItemC9"
                                                id="SkorTambahanJumlahBobotSubItemC9" readonly></td>
                                    </tr>


                                    <tr>
                                        <td colspan="5"></td>
                                        <td colspan="5">Total Skor Pengabdian Kepada Masyarakat</td>
                                        <td><input type="number"
                                                value="{{ $data->TotalSkorPengabdianKepadaMasyarakat }}"
                                                name="TotalSkorPengabdianKepadaMasyarakat"
                                                id="TotalSkorPengabdianKepadaMasyarakat" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 1</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC1 }}"
                                                name="TotalKelebihaC1" id="TotalKelebihaC1" readonly>
                                        </td>
                                        <td colspan="3" rowspan="4">Nilai Pengabdian Kepada Masyarakat</td>
                                        <td rowspan="4"><input type="number"
                                                value="{{ $data->NilaiPengabdianKepadaMasyarakat }}"
                                                name="NilaiPengabdianKepadaMasyarakat"
                                                id="NilaiPengabdianKepadaMasyarakat" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 2</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC2 }}"
                                                name="TotalKelebihaC2" id="TotalKelebihaC2" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 3</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC3 }}"
                                                name="TotalKelebihaC3" id="TotalKelebihaC3" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 4</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC4 }}"
                                                name="TotalKelebihaC4" id="TotalKelebihaC4" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 5</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC5 }}"
                                                name="TotalKelebihaC5" id="TotalKelebihaC5" readonly>
                                        </td>
                                        <td colspan="3" rowspan="6">Nilai Tambah Pengabdian kepada Masyarakat</td>
                                        <td rowspan="6"><input type="number" value="{{ $data->NilaiTambahPengabdianKepadaMasyarakat }}"
                                                name="NilaiTambahPengabdianKepadaMasyarakat" id="NilaiTambahPengabdianKepadaMasyarakat" readonly></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 6</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC6 }}"
                                                name="TotalKelebihaC6" id="TotalKelebihaC6" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 7</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC7 }}"
                                                name="TotalKelebihaC7" id="TotalKelebihaC7" readonly>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 8</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC8 }}"
                                                name="TotalKelebihaC8" id="TotalKelebihaC8" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td colspan="2">Total Kelebihan Skor No. 9</td>
                                        <td><input type="number" value="{{ $data->TotalKelebihaC9 }}"
                                                name="TotalKelebihaC9" id="TotalKelebihaC9" readonly>
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
                                        <td colspan="6">Nilai Total Pengabdian Kepada Masyarakat</td>
                                        <td><input type="number"
                                                value="{{ $data->NilaiTotalPengabdianKepadaMasyarakat }}"
                                                name="NilaiTotalPengabdianKepadaMasyarakat"
                                                id="NilaiTotalPengabdianKepadaMasyarakat" readonly></td>
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
    <script src="{{ asset('Assets/js/Input-point/ScorPointC.js') }}"></script>

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
