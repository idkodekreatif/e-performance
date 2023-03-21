<x-app-layout title="Edit Penilaian Baak Fakultas Bisnis">
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Baak Fakultas Bisnis</a></li>
            </ol>
        </div>
        {{-- <div class="row">
            <div class="col">
                <a href="{{ route('baakFkBisnis.raport', Auth::user()->id) }}"
                    class="btn btn-primary btn-sm mb-2 float-end">Raport</a>
            </div>
        </div> --}}
        <form action="{{ route('update.baakFkBisnis', ['pointId' => $data->user_id]) }}" id="my-form" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title">KINERJA PERILAKU (20%)</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="table table-responsive table-bordered">
                            <table class="table table-responsive table-bordered border-2 text-center">
                                <thead>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Unsur Yang Dinilai</td>
                                        <td colspan="5">Kategori Penilaian</td>
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
                                    {{-- Questuin 1 --}}
                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah dapat menyelesaikan tugas pelayanan dengan baik dan sikap
                                            kurang sopan serta kurang memuaskan baik untuk pelayanan internal maupun
                                            eksternal organisasi</td>
                                        <td>Kurang dapat menyelesaikan tugas pelayanan dengan baik dan sikap kurang
                                            sopan serta kurang memuaskan baik untuk pelayanan internal maupun eksternal
                                            organisasi </td>
                                        <td>Ada kalanya dapat menyelesaikan tugas pelayanan dengan cukup baik dan sikap
                                            cukup sopan serta cukup memuaskan baik untuk pelayanan internal maupun
                                            eksternal organisasi</td>
                                        <td>Pada umumnya dapat menyelesaikan tugas pelayanan dengan baik dan sikap sopan
                                            serta memuaskan baik untuk pelayanan internal maupun eksternal organisasi
                                        </td>
                                        <td>Selalu dapat menyelesaikan tugas pelayanan sebaik-baiknya dan tidak segan
                                            membantu menyelesaikan pekerjaan tambahan dengan sikap sopan dan sangat
                                            memuaskan baik untuk pelayanan internal maupun eksternal organisasi</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 1</td>
                                        <td>Orientasi Pelayanan</td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_1"
                                                value="1" {{ $data->q1 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_2"
                                                value="2" {{ $data->q1 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_3"
                                                value="3" {{ $data->q1 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_4"
                                                value="4" {{ $data->q1 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_5"
                                                value="5" {{ $data->q1 == '5' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        @error('q1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </tr>

                                    {{-- Questuin 2 --}}
                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah jujur, tidak ikhlas dalam melaksanakan tugas dan selalu
                                            menyalahgunakan wewenangnya tetapi kurang berani menanggung resiko dari
                                            tindakan yang dilakukan.</td>
                                        <td>Kurang jujur, kurang ikhlas dalam melaksanakan tugas dan sering
                                            menyalahgunakan wewenangnya tetapi kurang berani menanggung resiko dari
                                            tindakan yang dilakukan</td>
                                        <td>Ada kalanya dalam melaksanakan tugas bersifat cukup jujur, cukup ikhlas dan
                                            kadang-kadang menyalahgunakan wewenangnya serta cukup berani menanggung
                                            resiko dari tindakan yang dilakukan</td>
                                        <td>Pada umumnya dalam melaksanakan tugas bersifat jujur, ikhlas dan tidak
                                            pernah menyalahgunakan wewenangnya tetapi berani menanggung resiko dari
                                            tindakan yang dilakukan</td>
                                        <td>Selalu dalam melaksanakan tugas bersifat jujur, ikhlas dan tidak pernah
                                            menyalahgunakan
                                            wewenangnya serta berani menanggung resiko dari tindakan yang dilakukan</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 2</td>
                                        <td>Integritas</td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_1"
                                                value="1" {{ $data->q2 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_2"
                                                value="2" {{ $data->q2 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_3"
                                                value="3" {{ $data->q2 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_4"
                                                value="4" {{ $data->q2 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_5"
                                                value="5" {{ $data->q2 == '5' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        @error('q2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </tr>

                                    {{-- Questuin 3 --}}
                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah berusaha dengan sungguh-sungguh mencurahkan segala kemampuan
                                            yang ada untuk kepentingan IKBIS dari pada kepentingan pribadi atau golongan
                                            sesuai dengan tugas dan fungsi.</td>
                                        <td>Kurang berusaha dalam bersungguh-sungguh mencurahkan segala kemampuan yang
                                            ada untuk kepentingan IKBIS dari pada kepentingan pribadi atau golongan
                                            sesuai dengan tugas dan fungsi.</td>
                                        <td>Kadang-kadang berusaha dengan sungguh-sungguh mencurahkan segala kemampuan
                                            yang ada untuk kepentingan IKBIS dari pada kepentingan pribadi atau golongan
                                            sesuai dengan tugas dan fungsi.</td>
                                        <td>Pada umumnya berusaha dengan sungguh-sungguh mencurahkan segala kemampuan
                                            yang ada untuk kepentingan IKBIS dari pada kepentingan pribadi atau golongan
                                            sesuai dengan tugas dan fungsi.</td>
                                        <td>Selalu berusaha dengan sungguh-sungguh mencurahkan segala kemampuan yang ada
                                            untuk kepentingan IKBIS dari pada kepentingan pribadi atau golongan sesuai
                                            dengan tugas dan fungsi.</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 3</td>
                                        <td>Komitmen</td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_1"
                                                value="1" {{ $data->q3 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_2"
                                                value="2" {{ $data->q3 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_3"
                                                value="3" {{ $data->q3 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_4"
                                                value="4" {{ $data->q3 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_5"
                                                value="5" {{ $data->q3 == '5' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        @error('q3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </tr>

                                    {{-- Questuin 4 --}}
                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah mentaati segala aturan yang berlaku di IKBIS dengan rasa
                                            tanggung jawab dan selalu mentaati ketentuan jam kerja serta mampu menyimpan
                                            dan/ atau memelihara barang-barang milik Institut yang dipercayakan
                                            kepadanya dengan cukup baik, serta tidak masuk atau terlambat masuk kerja
                                            dan lebih cepat pulang dari ketentuan jam kerja tanpa alasan yang sah selama
                                            13 sampai dengan 22 hari kerja</td>
                                        <td>Kurang mentaati segala aturan yang berlaku di IKBIS dengan rasa tanggung
                                            jawab dan selalu mentaati ketentuan jam kerja serta mampu menyimpan dan/
                                            atau memelihara barang-barang milik Institut yang dipercayakan kepadanya
                                            dengan cukup baik, serta tidak masuk atau terlambat masuk kerja dan lebih
                                            cepat pulang dari ketentuan jam kerja tanpa alasan yang sah selama 6 sampai
                                            dengan 12 hari kerja</td>
                                        <td>Adakalanya mentaati segala aturan yang berlaku di IKBIS dengan rasa tanggung
                                            jawab dan selalu mentaati ketentuan jam kerja serta mampu menyimpan dan/
                                            atau memelihara barang-barang milik Institut yang dipercayakan kepadanya
                                            dengan cukup baik, serta tidak masuk atau terlambat masuk kerja dan lebih
                                            cepat pulang dari ketentuan jam kerja tanpa alasan yang sah selama 1 sampai
                                            dengan 5 hari kerja</td>
                                        <td>Pada umumnya mentaati segala aturan yang berlaku di IKBIS dengan rasa
                                            tanggung jawab dan selalu mentaati ketentuan jam kerja serta mampu menyimpan
                                            dan/ atau memelihara barang-barang milik Institut yang dipercayakan
                                            kepadanya dengan baik.</td>
                                        <td>Selalu mentaati segala aturan yang berlaku di IKBIS dengan rasa tanggung
                                            jawab dan selalu mentaati ketentuan jam kerja serta mampu menyimpan dan/
                                            atau memelihara barang-barang milik Institut yang dipercayakan kepadanya
                                            dengan sebaik-baiknya.</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 4</td>
                                        <td>Disiplin</td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_1"
                                                value="1" {{ $data->q4 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_2"
                                                value="2" {{ $data->q4 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_3"
                                                value="3" {{ $data->q4 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_4"
                                                value="4" {{ $data->q4 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_5"
                                                value="5" {{ $data->q4 == '5' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        @error('q4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </tr>

                                    {{-- Questuin 5 --}}
                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di
                                            dalam maupun di luar organisasi serta tidak menghargai dan menerima pendapat
                                            orang lain, tidak bersedia menerima keputusan yang diambil secara sah yang
                                            telah menjadi keputusan bersama</td>
                                        <td>Kurang mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di dalam
                                            maupun di luar organisasi serta kurang menghargai dan menerima pendapat
                                            orang lain, kurang bersedia menerima keputusan yang diambil secara sah yang
                                            telah menjadi keputusan bersama</td>
                                        <td>Ada kalanya mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di
                                            dalam maupun di luar organisasi serta ada kalanya menghargai dan menerima
                                            pendapat orang lain, kadang-kadang bersedia menerima keputusan yang diambil
                                            secara sah yang telah menjadi keputusan bersama</td>
                                        <td>Pada umumnya mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di
                                            dalam maupun di luar organisasi serta menghargai dan menerima pendapat orang
                                            lain, bersedia menerima keputusan yang diambil secara sah yang telah menjadi
                                            keputusan bersama</td>
                                        <td>Selalu mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di dalam
                                            maupun di luar organisasi serta menghargai dan menerima pendapat orang lain,
                                            bersedia menerima keputusan yang diambil secara sah yang telah menjadi
                                            keputusan bersama</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 5</td>
                                        <td>Kerjasama</td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_1"
                                                value="1" {{ $data->q5 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_2"
                                                value="2" {{ $data->q5 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_3"
                                                value="3" {{ $data->q5 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_4"
                                                value="4" {{ $data->q5 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_5"
                                                value="5" {{ $data->q5 == '5' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        @error('q5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </tr>

                                    {{-- Questuin 6 --}}
                                    <tr>
                                        <td colspan="2">Deskripsi penilaian:</td>
                                        <td>Tidak pernah bertindak tegas dan memihak, tidak memberikan teladan yang
                                            baik, tidak mampu 1 Buruk 12 menggerakkan tim kerja untuk mencapai kinerja
                                            yang tinggi, tidak mampu menggugah semangat dan menggerakkan bawahan dalam
                                            melaksanakan tugas serta tidak mampu mengambil keputusan dengan cepat dan
                                            tepat</td>
                                        <td>Kurang bertindak tegas dan terkadang memihak, kurang mampu memberikan
                                            teladan yang baik, kurang mampu menggerakkan tim kerja untuk mencapai
                                            kinerja yang tinggi, serta kurang mampu menggugah semangat dan menggerakkan
                                            bawahan dalam melaksanakan tugas serta kurang mampu mengambil keputusan
                                            dengan cepat dan tepat</td>
                                        <td>Adakalanya bertindak tegas dan tidak memihak, memberikan teladan, cukup
                                            mampu menggerakkan tim kerja untuk mencapai kinerja yang tinggi, serta cukup
                                            mampu menggugah semangat dan menggerakkan bawahan dalam melaksanakan tugas
                                            serta cukup mampu mengambil keputusan dengan cepat dan tepat</td>
                                        <td>Pada umumnya bertindak tegas dan tidak memihak, memberikan teladan yang
                                            baik, kemampuan menggerakkan tim kerja untuk mencapai kinerja yang tinggi,
                                            mampu menggugah semangat dan menggerakkan bawahan dalam melaksanakan tugas
                                            serta mampu mengambil keputusan dengan cepat dan tepat</td>
                                        <td>Selalu bertindak tegas dan tidak memihak, memberikan teladan yang baik,
                                            kemampuan menggerakkan tim kerja untuk mencapai kinerja yang tinggi, mampu
                                            menggugah semangat dan menggerakkan bawahan dalam melaksanakan tugas serta
                                            mampu mengambil keputusan dengan cepat dan tepat</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 6</td>
                                        <td>Kepemimpinan (Hanya yang menduduki Jabatan Struktural)</td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_1"
                                                value="1" {{ $data->q6 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_2"
                                                value="2" {{ $data->q6 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_3"
                                                value="3" {{ $data->q6 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_4"
                                                value="4" {{ $data->q6 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_5"
                                                value="5" {{ $data->q6 == '5' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        @error('q6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </tr>

                                    <tr style="color:rgb(0, 0, 0); background-color:rgb(16, 215, 212)">
                                        <td colspan="8 text-center">TOTAL NILAI KINERJA PERILAKU</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"></td>
                                        <td><label for="">Point 1</label><input id="output_point_1"
                                                name="output_point_1" type="number"
                                                value="{{ $data->output_point_1 }}" aria-label="output_point"
                                                readonly></td>
                                        <td><label for="">Point 2</label><input id="output_point_2"
                                                name="output_point_2" type="number"
                                                value="{{ $data->output_point_2 }}" aria-label="output_point"
                                                readonly></td>
                                        <td><label for="">Point 3</label><input id="output_point_3"
                                                name="output_point_3" type="number"
                                                value="{{ $data->output_point_3 }}" aria-label="output_point"
                                                readonly></td>
                                        <td><label for="">Point 4</label><input id="output_point_4"
                                                name="output_point_4" type="number"
                                                value="{{ $data->output_point_4 }}" aria-label="output_point"
                                                readonly></td>
                                        <td><label for="">Point 5</label><input id="output_point_5"
                                                name="output_point_5" type="number"
                                                value="{{ $data->output_point_5 }}" aria-label="output_point"
                                                readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="table-primary">
                                            <label for="">Total</label>
                                            <input id="output_total_point_kinerja_perilaku"
                                                name="output_total_point_kinerja_perilaku" type="number"
                                                value="{{ $data->output_total_point_kinerja_perilaku }}"
                                                aria-label="output_total_point_kinerja_perilaku" readonly>
                                        </td>
                                        <td class="table-primary"><label for="">Nilai Rata-rata</label><input
                                                id="output_total_nilai_rata_rata_kinerja_perilaku"
                                                name="output_total_nilai_rata_rata_kinerja_perilaku" type="number"
                                                value="{{ number_format($data->output_total_nilai_rata_rata_kinerja_perilaku, 2) }}"
                                                aria-label="output_total_nilai_rata_rata_kinerja_perilaku" readonly>
                                        </td>
                                        <td class="table-primary"><label for="">Nilai Sementara</label><input
                                                id="output_total_sementara_kinerja_perilaku"
                                                name="output_total_sementara_kinerja_perilaku" type="number"
                                                value="{{ number_format($data->output_total_sementara_kinerja_perilaku, 2) }}"
                                                aria-label="output_total_sementara_kinerja_perilaku" readonly></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title">KINERJA KOMPETENSI (80%)</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="table table-responsive table-bordered">
                            <table class="table table-responsive table-bordered border-2 text-center">
                                <thead>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Unsur Yang Dinilai</td>
                                        <td colspan="5">Kategori Penilaian</td>
                                        <td rowspan="2">Bukti Pendukung</td>
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

                                    <tr class="table-primary">
                                        <td>1</td>
                                        <td>Pengolahan Data Mahasiswa</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Mengkoordinasikan dan memasukkan di siakad dan feeder, biodata mahasiswa dan
                                            orang tua meliputi : </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            << /td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Data diri mahasiswa: tempat tanggal lahir, agama, nama orang tua, alamat,
                                            nomer tlpn, agama, status perkawinan</td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_1 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_1 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_1 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_1 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_1 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_1') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_1" type="file">

                                            @if ($data->file_kinerja_kompetensi_1)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_1) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>B.</td>
                                        <td>Data orang tua: tempat tanggal lahir, status perkawinan, nomer tlpn, alamat,
                                            pekerjaan</td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_2 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_2 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_2 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_2 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_2 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_2') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_2" type="file">

                                            @if ($data->file_kinerja_kompetensi_2)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_2) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Mengkoordinasikan dan memberikan Nomer Induk Mahasiswa sesuai program studi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_3 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_3 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_3 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_3 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_3 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_3') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_3" type="file">

                                            @if ($data->file_kinerja_kompetensi_3)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_3) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>D.</td>
                                        <td> Mengkoordinasikan dan Membuatkan Arsip Manual sebagai Backup Program Siakad
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_4 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_4 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_4 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_4 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_4 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_4') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_4" type="file">

                                            @if ($data->file_kinerja_kompetensi_4)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_4) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_4')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>E.</td>
                                        <td>Mengkoordinasikan dan Memastikan data mahasiswa dan orang tua dengan benar
                                            sesuai ijazah, akte kelahiran, nomer induk kependudukan, Kartu Keluarg,
                                            karena</td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_5 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_5 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_5 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_5 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_5 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_5') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_5" type="file">

                                            @if ($data->file_kinerja_kompetensi_5)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_5) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_5')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>2</td>
                                        <td>Kartu Rencana Studi</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan pengumpulkan Jadwal kuliah dari Program Studi guna di
                                            masukan ke siakad sebagai Langkah awal Kartu rencana Studi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_6 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_6 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_6 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_6 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_6 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_6') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_6" type="file">

                                            @if ($data->file_kinerja_kompetensi_6)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_6) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_6')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td>Mengkoordinasikan dan Membuat jadwal kelas sesuai dengan yang di program
                                            siakad
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_7 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_7 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_7 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_7 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_7 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_7')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_7') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_7" type="file">

                                            @if ($data->file_kinerja_kompetensi_7)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_7) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_7')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Mengkoordinasikan dan Memasukan nama dosen pengajar atau dosen pengampu mata
                                            kuliah
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_8 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_8 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_8 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_8 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_8 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_8')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_8') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_8" type="file">

                                            @if ($data->file_kinerja_kompetensi_8)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_8) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_8')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>D.</td>
                                        <td>Mengkoordinasikan dan Mengkroscek mahasiswa yang sudah dan belum melakukan
                                            kartu rencana studi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_9 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_9 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_9 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_9 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_9 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_9')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_9') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_9" type="file">

                                            @if ($data->file_kinerja_kompetensi_9)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_9) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_9')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>E.</td>
                                        <td>Mengkoordinasikan dan Memasukan Kurikulum prodi ke Neo Feeder Sesuai dengan
                                            periode Ganjil dan periode genap
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_10 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_10" name="kinerja_kompetensi_10"
                                                id="kinerja_kompetensi_10_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_10 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_10" name="kinerja_kompetensi_10"
                                                id="kinerja_kompetensi_10_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_10 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_10" name="kinerja_kompetensi_10"
                                                id="kinerja_kompetensi_10_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_10 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_10" name="kinerja_kompetensi_10"
                                                id="kinerja_kompetensi_10_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_10 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_10" name="kinerja_kompetensi_10"
                                                id="kinerja_kompetensi_10_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_10')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_10') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_10" type="file">

                                            @if ($data->file_kinerja_kompetensi_10)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_10) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_10')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>F.</td>
                                        <td>Mengkoordinasikan dan Mencetak Kartu Rencana Studi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_11 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_11" name="kinerja_kompetensi_11"
                                                id="kinerja_kompetensi_11_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_11 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_11" name="kinerja_kompetensi_11"
                                                id="kinerja_kompetensi_11_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_11 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_11" name="kinerja_kompetensi_11"
                                                id="kinerja_kompetensi_11_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_11 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_11" name="kinerja_kompetensi_11"
                                                id="kinerja_kompetensi_11_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_11 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_11" name="kinerja_kompetensi_11"
                                                id="kinerja_kompetensi_11_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_11')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_11') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_11" type="file">

                                            @if ($data->file_kinerja_kompetensi_11)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_11) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_11')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>G.</td>
                                        <td>Mengkoordinasikan dan mengumpulkan Kartu Rencana Studi yang telah disahkan
                                            oleh Pembimbing Akademik dan Ka. Prodi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_12 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_10" name="kinerja_kompetensi_12"
                                                id="kinerja_kompetensi_12_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_12 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_12" name="kinerja_kompetensi_12"
                                                id="kinerja_kompetensi_12_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_12 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_12" name="kinerja_kompetensi_12"
                                                id="kinerja_kompetensi_12_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_12 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_12" name="kinerja_kompetensi_12"
                                                id="kinerja_kompetensi_12_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_12 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_12" name="kinerja_kompetensi_12"
                                                id="kinerja_kompetensi_12_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_12')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_12') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_12" type="file">

                                            @if ($data->file_kinerja_kompetensi_12)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_12) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_12')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-primary">3</td>
                                        <td>Kegiatan Belajar Mengajar</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan dan Membantu Dosen Membuatkan Absensi di Sistem Siakad
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_13 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_13" name="kinerja_kompetensi_13"
                                                id="kinerja_kompetensi_13_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_13 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_13" name="kinerja_kompetensi_13"
                                                id="kinerja_kompetensi_13_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_13 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_13" name="kinerja_kompetensi_13"
                                                id="kinerja_kompetensi_13_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_13 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_13" name="kinerja_kompetensi_13"
                                                id="kinerja_kompetensi_13_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_13 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_13" name="kinerja_kompetensi_13"
                                                id="kinerja_kompetensi_13_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_13')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_13') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_13" type="file">

                                            @if ($data->file_kinerja_kompetensi_13)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_13) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_13')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td>Mengkoordinasikan dan Membantu Administrasi yang di perlukan dalam proses
                                            Praktek Klinik dan Praktek Rumah Sakit sesuai prodi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_14 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_14" name="kinerja_kompetensi_14"
                                                id="kinerja_kompetensi_14_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_14 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_14" name="kinerja_kompetensi_14"
                                                id="kinerja_kompetensi_14_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_14 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_14" name="kinerja_kompetensi_14"
                                                id="kinerja_kompetensi_14_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_14 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_14" name="kinerja_kompetensi_14"
                                                id="kinerja_kompetensi_14_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_14 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_14" name="kinerja_kompetensi_14"
                                                id="kinerja_kompetensi_14_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_14')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_14') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_14" type="file">

                                            @if ($data->file_kinerja_kompetensi_14)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_14) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_14')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Mengkoordinasikan dan Mengkroscek dan Input Proses Pembelajaran di Siakad
                                            (Meliputi Cek Materi dan jumlah Pertemuan Dosen Dalam Mengajar di Sistem
                                            Siakad)
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_15 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_15" name="kinerja_kompetensi_15"
                                                id="kinerja_kompetensi_15_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_15 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_15" name="kinerja_kompetensi_15"
                                                id="kinerja_kompetensi_15_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_15 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_15" name="kinerja_kompetensi_15"
                                                id="kinerja_kompetensi_15_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_15 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_15" name="kinerja_kompetensi_15"
                                                id="kinerja_kompetensi_15_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_15 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_15" name="kinerja_kompetensi_15"
                                                id="kinerja_kompetensi_15_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_15')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_15') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_15" type="file">

                                            @if ($data->file_kinerja_kompetensi_15)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_15) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_15')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>D.</td>
                                        <td>Mengkoordinasikan dan Memastikan Status Aktif Dan Non Aktif Mahasiswa di Neo
                                            Feeder
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_16 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_16" name="kinerja_kompetensi_16"
                                                id="kinerja_kompetensi_16_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_16 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_16" name="kinerja_kompetensi_16"
                                                id="kinerja_kompetensi_16_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_16 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_16" name="kinerja_kompetensi_16"
                                                id="kinerja_kompetensi_16_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_16 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_16" name="kinerja_kompetensi_16"
                                                id="kinerja_kompetensi_16_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_16 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_16" name="kinerja_kompetensi_16"
                                                id="kinerja_kompetensi_16_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_16')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_16') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_16" type="file">

                                            @if ($data->file_kinerja_kompetensi_16)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_16) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_16')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>E.</td>
                                        <td>Mengkoordinasikan dan Memasukan Nilai Transfer Di Neo Feeder bagi mahasiswa
                                            alih jenjang dan mahasiswa Transfer agar di saat Permohonan Permintaan
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_17 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_17" name="kinerja_kompetensi_17"
                                                id="kinerja_kompetensi_17_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_17 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_17" name="kinerja_kompetensi_17"
                                                id="kinerja_kompetensi_17_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_17 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_17" name="kinerja_kompetensi_17"
                                                id="kinerja_kompetensi_17_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_17 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_17" name="kinerja_kompetensi_17"
                                                id="kinerja_kompetensi_17_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_17 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_17" name="kinerja_kompetensi_17"
                                                id="kinerja_kompetensi_17_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_17')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_17') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_17" type="file">

                                            @if ($data->file_kinerja_kompetensi_17)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_17) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_17')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>


                                    <tr class="table-primary">
                                        <td>4</td>
                                        <td>Surat Menyurat</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Surat Penelitian :Mengkoordinasikan dan Membuatkan Surat Penelitian Baik
                                            Skripsi, Tugas Mata Kuliah, Seminar dll
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_18 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_18" name="kinerja_kompetensi_18"
                                                id="kinerja_kompetensi_18_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_18 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_18" name="kinerja_kompetensi_18"
                                                id="kinerja_kompetensi_18_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_18 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_18" name="kinerja_kompetensi_18"
                                                id="kinerja_kompetensi_18_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_18 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_18" name="kinerja_kompetensi_18"
                                                id="kinerja_kompetensi_18_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_18 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_18" name="kinerja_kompetensi_18"
                                                id="kinerja_kompetensi_18_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_18')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_18') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_18" type="file">

                                            @if ($data->file_kinerja_kompetensi_18)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_18) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_18')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td> Surat Aktif Kuliah : Mengkoordinasikan dan Membuatkan Surat Aktif Kuliah
                                            Guna Keperluan, Beasiswa, Pekerjaan Orang Tua dll
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_19 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_19" name="kinerja_kompetensi_19"
                                                id="kinerja_kompetensi_19_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_19 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_19" name="kinerja_kompetensi_19"
                                                id="kinerja_kompetensi_19_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_19 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_19" name="kinerja_kompetensi_19"
                                                id="kinerja_kompetensi_19_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_19 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_19" name="kinerja_kompetensi_19"
                                                id="kinerja_kompetensi_19_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_19 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_19" name="kinerja_kompetensi_19"
                                                id="kinerja_kompetensi_19_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_19')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_19') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_19" type="file">

                                            @if ($data->file_kinerja_kompetensi_19)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_19) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_19')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td> Surat Validasi Ijazah : Mengkoordinasikan dan memvalidasi Keabsahan Ijazah,
                                            baik untuk Mencari Pekerjaan, Akreditasi Rumah Sakit, dan Kenaikan Pangkat
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_20 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_20" name="kinerja_kompetensi_20"
                                                id="kinerja_kompetensi_20_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_20 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_20" name="kinerja_kompetensi_20"
                                                id="kinerja_kompetensi_20_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_20 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_20" name="kinerja_kompetensi_20"
                                                id="kinerja_kompetensi_20_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_20 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_20" name="kinerja_kompetensi_20"
                                                id="kinerja_kompetensi_20_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_20 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_20" name="kinerja_kompetensi_20"
                                                id="kinerja_kompetensi_20_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_20')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_20') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_20" type="file">

                                            @if ($data->file_kinerja_kompetensi_20)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_20) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_20')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>D.</td>
                                        <td>Surat Cuti : Mengoordinasikan dan Membuatkan Surat Cuti Guna Penonaktif di
                                            Neo Feder
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_21 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_21" name="kinerja_kompetensi_21"
                                                id="kinerja_kompetensi_21_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_21 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_21" name="kinerja_kompetensi_21"
                                                id="kinerja_kompetensi_21_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_21 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_21" name="kinerja_kompetensi_21"
                                                id="kinerja_kompetensi_21_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_21 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_21" name="kinerja_kompetensi_21"
                                                id="kinerja_kompetensi_21_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_21 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_21" name="kinerja_kompetensi_21"
                                                id="kinerja_kompetensi_21_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_21')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_21') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_21" type="file">

                                            @if ($data->file_kinerja_kompetensi_21)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_21) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_21')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>E.</td>
                                        <td> Surat Aktif Kembali : Mengkoordinasikan dan Pengaktifan Kembali dan
                                            Pengelompokan Mahasiswa
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_22 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_22" name="kinerja_kompetensi_22"
                                                id="kinerja_kompetensi_22_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_22 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_22" name="kinerja_kompetensi_22"
                                                id="kinerja_kompetensi_22_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_22 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_22" name="kinerja_kompetensi_22"
                                                id="kinerja_kompetensi_22_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_22 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_22" name="kinerja_kompetensi_22"
                                                id="kinerja_kompetensi_22_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_22 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_22" name="kinerja_kompetensi_22"
                                                id="kinerja_kompetensi_22_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_22')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_22') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_22" type="file">

                                            @if ($data->file_kinerja_kompetensi_22)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_22) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_22')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>F.</td>
                                        <td>Surat Mutlak : Mengkoordinasikan dan Sebagai Syarat Pegawai Negeri Kenaikan
                                            Pangkat
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_23 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_23" name="kinerja_kompetensi_23"
                                                id="kinerja_kompetensi_23_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_23 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_23" name="kinerja_kompetensi_23"
                                                id="kinerja_kompetensi_23_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_23 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_23" name="kinerja_kompetensi_23"
                                                id="kinerja_kompetensi_23_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_23 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_23" name="kinerja_kompetensi_23"
                                                id="kinerja_kompetensi_23_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_23 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_23" name="kinerja_kompetensi_23"
                                                id="kinerja_kompetensi_23_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_23')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_23') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_23" type="file">

                                            @if ($data->file_kinerja_kompetensi_23)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_23) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_23')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>G. </td>
                                        <td>Mengkoordinasikan dan membuatkan surat administrasi yang di perlukan oleh
                                            program studi yang berhubungan dengan proses belajar mengajar
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_24 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_24" name="kinerja_kompetensi_24"
                                                id="kinerja_kompetensi_24_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_24 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_24" name="kinerja_kompetensi_24"
                                                id="kinerja_kompetensi_24_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_24 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_24" name="kinerja_kompetensi_24"
                                                id="kinerja_kompetensi_24_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_24 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_24" name="kinerja_kompetensi_24"
                                                id="kinerja_kompetensi_24_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_24 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_24" name="kinerja_kompetensi_24"
                                                id="kinerja_kompetensi_24_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_24')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_24') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_24" type="file">

                                            @if ($data->file_kinerja_kompetensi_24)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_24) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_24')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>5</td>
                                        <td>Kartu Hasil Studi </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan dan memproses Kartu Hasil Studi mulai dari pengumpulan
                                            nilai dari program studi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_25 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_25" name="kinerja_kompetensi_25"
                                                id="kinerja_kompetensi_25_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_25 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_25" name="kinerja_kompetensi_25"
                                                id="kinerja_kompetensi_25_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_25 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_25" name="kinerja_kompetensi_25"
                                                id="kinerja_kompetensi_25_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_25 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_25" name="kinerja_kompetensi_25"
                                                id="kinerja_kompetensi_25_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_25 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_25" name="kinerja_kompetensi_25"
                                                id="kinerja_kompetensi_25_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_25')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_25') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_25" type="file">

                                            @if ($data->file_kinerja_kompetensi_25)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_25) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_25')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td>Mengkoordinasikan dan Pengecekan nilai dan mata kuliah sesuai dengan yang di
                                            program di Neo Feeder
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_26 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_26" name="kinerja_kompetensi_26"
                                                id="kinerja_kompetensi_26_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_26 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_26" name="kinerja_kompetensi_26"
                                                id="kinerja_kompetensi_26_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_26 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_26" name="kinerja_kompetensi_26"
                                                id="kinerja_kompetensi_26_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_26 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_26" name="kinerja_kompetensi_26"
                                                id="kinerja_kompetensi_26_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_26 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_26" name="kinerja_kompetensi_26"
                                                id="kinerja_kompetensi_26_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_26')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_26') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_26" type="file">

                                            @if ($data->file_kinerja_kompetensi_26)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_26) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_26')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Mengkoordinasikan dan Memastikan Riwayat Pendidikan Sesuai dengan yang di
                                            Program ( Sarjana & Diploma) pada Neo Feeder
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_27 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_27" name="kinerja_kompetensi_27"
                                                id="kinerja_kompetensi_27_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_27 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_27" name="kinerja_kompetensi_27"
                                                id="kinerja_kompetensi_27_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_27 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_27" name="kinerja_kompetensi_27"
                                                id="kinerja_kompetensi_27_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_27 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_27" name="kinerja_kompetensi_27"
                                                id="kinerja_kompetensi_27_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_27 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_27" name="kinerja_kompetensi_27"
                                                id="kinerja_kompetensi_27_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_27')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_27') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_27" type="file">

                                            @if ($data->file_kinerja_kompetensi_27)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_27) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_27')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>D.</td>
                                        <td>Pengumpulan kartu rencana studi (arsip Manual)
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_28 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_28" name="kinerja_kompetensi_28"
                                                id="kinerja_kompetensi_28_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_28 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_28" name="kinerja_kompetensi_28"
                                                id="kinerja_kompetensi_28_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_28 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_28" name="kinerja_kompetensi_28"
                                                id="kinerja_kompetensi_28_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_28 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_28" name="kinerja_kompetensi_28"
                                                id="kinerja_kompetensi_28_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_28 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_28" name="kinerja_kompetensi_28"
                                                id="kinerja_kompetensi_28_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_28')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_28') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_28" type="file">

                                            @if ($data->file_kinerja_kompetensi_28)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_28) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_28')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>6</td>
                                        <td>Skripsi Dan Tugas LTA</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan dan Membantu administrasi Program studi untuk penjadwal
                                            dan kegiatan ujian baik Ujian Proposal dan ujian skripsi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_29 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_29" name="kinerja_kompetensi_29"
                                                id="kinerja_kompetensi_29_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_29 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_29" name="kinerja_kompetensi_29"
                                                id="kinerja_kompetensi_29_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_29 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_29" name="kinerja_kompetensi_29"
                                                id="kinerja_kompetensi_29_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_29 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_29" name="kinerja_kompetensi_29"
                                                id="kinerja_kompetensi_29_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_29 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_29" name="kinerja_kompetensi_29"
                                                id="kinerja_kompetensi_29_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_29')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_29') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_29" type="file">

                                            @if ($data->file_kinerja_kompetensi_29)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_29) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_29')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td>Mengkoordinasikan dan Pengumpulan nilai skripsi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_30 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_30" name="kinerja_kompetensi_30"
                                                id="kinerja_kompetensi_30_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_30 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_30" name="kinerja_kompetensi_30"
                                                id="kinerja_kompetensi_30_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_30 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_30" name="kinerja_kompetensi_30"
                                                id="kinerja_kompetensi_30_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_30 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_30" name="kinerja_kompetensi_30"
                                                id="kinerja_kompetensi_30_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_30 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_30" name="kinerja_kompetensi_30"
                                                id="kinerja_kompetensi_30_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_30')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_30') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_30" type="file">

                                            @if ($data->file_kinerja_kompetensi_30)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_30) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_30')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Mengkoordinasikan dan Memasukan judul skripsi, dosen penguji dan dosen
                                            pembimbing di neo feeder
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_31 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_31" name="kinerja_kompetensi_31"
                                                id="kinerja_kompetensi_31_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_31 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_31" name="kinerja_kompetensi_31"
                                                id="kinerja_kompetensi_31_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_31 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_31" name="kinerja_kompetensi_31"
                                                id="kinerja_kompetensi_31_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_31 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_31" name="kinerja_kompetensi_31"
                                                id="kinerja_kompetensi_31_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_31 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_31" name="kinerja_kompetensi_31"
                                                id="kinerja_kompetensi_31_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_31')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_31') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_31" type="file">

                                            @if ($data->file_kinerja_kompetensi_31)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_31) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_31')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>7</td>
                                        <td>Yudisium </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan dan Memastikan bahwa mahasiswa tersebut layak di yudisum
                                            (Riwayat Studi di Neo feeder Harus kita Cek Agar Sesuai Dengan Jenjang
                                            Sarjana
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_32 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_32" name="kinerja_kompetensi_32"
                                                id="kinerja_kompetensi_32_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_32 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_32" name="kinerja_kompetensi_32"
                                                id="kinerja_kompetensi_32_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_32 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_32" name="kinerja_kompetensi_32"
                                                id="kinerja_kompetensi_32_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_32 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_32" name="kinerja_kompetensi_32"
                                                id="kinerja_kompetensi_32_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_32 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_32" name="kinerja_kompetensi_32"
                                                id="kinerja_kompetensi_32_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_32')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_32') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_32" type="file">

                                            @if ($data->file_kinerja_kompetensi_32)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_32) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_32')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td> Mengkoordinasikan dan membuka pendaftaran dan jadwal yudisum
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_33 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_33" name="kinerja_kompetensi_33"
                                                id="kinerja_kompetensi_33_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_33 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_33" name="kinerja_kompetensi_33"
                                                id="kinerja_kompetensi_33_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_33 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_33" name="kinerja_kompetensi_33"
                                                id="kinerja_kompetensi_33_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_33 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_33" name="kinerja_kompetensi_33"
                                                id="kinerja_kompetensi_33_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_33 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_33" name="kinerja_kompetensi_33"
                                                id="kinerja_kompetensi_33_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_33')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_33') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_33" type="file">

                                            @if ($data->file_kinerja_kompetensi_33)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_33) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_33')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Mengkoordinasikan dan Membuatkan Surat Keterangan Lulus Sementara Sebelum
                                            Ijazah Jadi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_34 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_34" name="kinerja_kompetensi_34"
                                                id="kinerja_kompetensi_34_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_34 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_34" name="kinerja_kompetensi_34"
                                                id="kinerja_kompetensi_34_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_34 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_34" name="kinerja_kompetensi_34"
                                                id="kinerja_kompetensi_34_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_34 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_34" name="kinerja_kompetensi_34"
                                                id="kinerja_kompetensi_34_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_34 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_34" name="kinerja_kompetensi_34"
                                                id="kinerja_kompetensi_34_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_34')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_34') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_34" type="file">

                                            @if ($data->file_kinerja_kompetensi_34)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_34) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_34')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>8</td>
                                        <td>Penomeran Ijazah Nasional </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan dan Mengajukan ke PIN SIVIL LLDIKTI (mulai proses
                                            administrasi input sampai dengan keluar PIN)
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_35 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_35" name="kinerja_kompetensi_35"
                                                id="kinerja_kompetensi_35_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_35 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_35" name="kinerja_kompetensi_35"
                                                id="kinerja_kompetensi_35_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_35 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_35" name="kinerja_kompetensi_35"
                                                id="kinerja_kompetensi_35_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_35 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_35" name="kinerja_kompetensi_35"
                                                id="kinerja_kompetensi_35_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_35 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_35" name="kinerja_kompetensi_35"
                                                id="kinerja_kompetensi_35_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_35')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_35') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_35" type="file">

                                            @if ($data->file_kinerja_kompetensi_35)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_35) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_35')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>9</td>
                                        <td>Wisuda </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan dan Membukan pendafatarn wisuda, mulai dari administarasi
                                            kelengkapan wisuda sampai di gelar acara wisuda (meliputi, kegiatan
                                            administrasi mulai calon wisudawan sampai kepenetapan Wisudawan
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_36 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_36" name="kinerja_kompetensi_36"
                                                id="kinerja_kompetensi_36_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_36 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_36" name="kinerja_kompetensi_36"
                                                id="kinerja_kompetensi_36_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_36 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_36" name="kinerja_kompetensi_36"
                                                id="kinerja_kompetensi_36_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_36 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_36" name="kinerja_kompetensi_36"
                                                id="kinerja_kompetensi_36_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_36 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_36" name="kinerja_kompetensi_36"
                                                id="kinerja_kompetensi_36_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_36')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_36') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_36" type="file">

                                            @if ($data->file_kinerja_kompetensi_36)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_36) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_36')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>10</td>
                                        <td>Cetak Ijazah, Transkip dan SKPI </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan dan mencetak Ijazah, Transkip dan SKPI
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_37 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_37" name="kinerja_kompetensi_37"
                                                id="kinerja_kompetensi_37_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_37 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_37" name="kinerja_kompetensi_37"
                                                id="kinerja_kompetensi_37_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_37 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_37" name="kinerja_kompetensi_37"
                                                id="kinerja_kompetensi_37_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_37 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_37" name="kinerja_kompetensi_37"
                                                id="kinerja_kompetensi_37_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_37 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_37" name="kinerja_kompetensi_37"
                                                id="kinerja_kompetensi_37_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_37')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_37') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_37" type="file">

                                            @if ($data->file_kinerja_kompetensi_37)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_37) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_37')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td>Mengkoordinasikan dan Memproses Administrasi guna Keperluan cetak Ijazah
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_38 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_38" name="kinerja_kompetensi_38"
                                                id="kinerja_kompetensi_38_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_38 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_38" name="kinerja_kompetensi_38"
                                                id="kinerja_kompetensi_38_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_38 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_38" name="kinerja_kompetensi_38"
                                                id="kinerja_kompetensi_38_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_38 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_38" name="kinerja_kompetensi_38"
                                                id="kinerja_kompetensi_38_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_38 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_38" name="kinerja_kompetensi_38"
                                                id="kinerja_kompetensi_38_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_38')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_38') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_38" type="file">

                                            @if ($data->file_kinerja_kompetensi_38)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_38) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_38')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Mengkoordinasikan dan Memproses Legaliser Keabsahan Berkas
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_39 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_39" name="kinerja_kompetensi_39"
                                                id="kinerja_kompetensi_39_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_39 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_39" name="kinerja_kompetensi_39"
                                                id="kinerja_kompetensi_39_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_39 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_39" name="kinerja_kompetensi_39"
                                                id="kinerja_kompetensi_39_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_39 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_39" name="kinerja_kompetensi_39"
                                                id="kinerja_kompetensi_39_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_39 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_39" name="kinerja_kompetensi_39"
                                                id="kinerja_kompetensi_39_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_39')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_39') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_39" type="file">

                                            @if ($data->file_kinerja_kompetensi_39)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_39) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_39')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>D.</td>
                                        <td>Mengkoordinasikan dan Memproses Cetak Surat Keterangan Pendamping Ijazah
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_40 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_40" name="kinerja_kompetensi_40"
                                                id="kinerja_kompetensi_40_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_40 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_40" name="kinerja_kompetensi_40"
                                                id="kinerja_kompetensi_40_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_40 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_40" name="kinerja_kompetensi_40"
                                                id="kinerja_kompetensi_40_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_40 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_40" name="kinerja_kompetensi_40"
                                                id="kinerja_kompetensi_40_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_40 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_40" name="kinerja_kompetensi_40"
                                                id="kinerja_kompetensi_40_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_40')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_40') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_40" type="file">

                                            @if ($data->file_kinerja_kompetensi_40)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_40) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_40')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>11</td>
                                        <td>Kerjasama Dengan LLDIKTI</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Mengkoordinasikan dan Memproses Validasi Data Lulusan (Administrasi Menjadi
                                            Masiswa Alumni)
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_41 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_41" name="kinerja_kompetensi_41"
                                                id="kinerja_kompetensi_41_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_41 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_41" name="kinerja_kompetensi_41"
                                                id="kinerja_kompetensi_41_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_41 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_41" name="kinerja_kompetensi_41"
                                                id="kinerja_kompetensi_41_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_41 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_41" name="kinerja_kompetensi_41"
                                                id="kinerja_kompetensi_41_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_41 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_41" name="kinerja_kompetensi_41"
                                                id="kinerja_kompetensi_41_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_41')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_41') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_41" type="file">

                                            @if ($data->file_kinerja_kompetensi_41)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_41) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_41')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td>Mengkoordinasikan dan Pembukaan periode, perbaikan data mahasiswa
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_42 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_42" name="kinerja_kompetensi_42"
                                                id="kinerja_kompetensi_42_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_42 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_42" name="kinerja_kompetensi_42"
                                                id="kinerja_kompetensi_42_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_42 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_42" name="kinerja_kompetensi_42"
                                                id="kinerja_kompetensi_42_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_42 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_42" name="kinerja_kompetensi_42"
                                                id="kinerja_kompetensi_42_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_42 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_42" name="kinerja_kompetensi_42"
                                                id="kinerja_kompetensi_42_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_42')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_42') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_42" type="file">

                                            @if ($data->file_kinerja_kompetensi_42)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_42) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_42')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td> Mengkoordinasikan dan layanan yang berhubungan dengan administrasi Neo
                                            Feeder Institusi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_43 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_43" name="kinerja_kompetensi_43"
                                                id="kinerja_kompetensi_43_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_43 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_43" name="kinerja_kompetensi_43"
                                                id="kinerja_kompetensi_43_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_43 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_43" name="kinerja_kompetensi_43"
                                                id="kinerja_kompetensi_43_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_43 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_43" name="kinerja_kompetensi_43"
                                                id="kinerja_kompetensi_43_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_43 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_43" name="kinerja_kompetensi_43"
                                                id="kinerja_kompetensi_43_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_43')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_43') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_43" type="file">

                                            @if ($data->file_kinerja_kompetensi_43)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_43) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_43')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr class="table-primary">
                                        <td>12</td>
                                        <td>Ujian Kompetensi ( BNSP )</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>A.</td>
                                        <td>Pendaftaran Peserta pada akun Ujian Ukom BNSP
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_44 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_44" name="kinerja_kompetensi_44"
                                                id="kinerja_kompetensi_44_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_44 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_44" name="kinerja_kompetensi_44"
                                                id="kinerja_kompetensi_44_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_44 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_44" name="kinerja_kompetensi_44"
                                                id="kinerja_kompetensi_44_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_44 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_44" name="kinerja_kompetensi_44"
                                                id="kinerja_kompetensi_44_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_44 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_44" name="kinerja_kompetensi_44"
                                                id="kinerja_kompetensi_44_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_44')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_44') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_44" type="file">

                                            @if ($data->file_kinerja_kompetensi_44)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_44) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_44')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.</td>
                                        <td>Pengecekan tempat ujian Ukom (Mulai tahap Pembekalan sampai proses Ujian)
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_45 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_45" name="kinerja_kompetensi_45"
                                                id="kinerja_kompetensi_45_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_45 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_45" name="kinerja_kompetensi_45"
                                                id="kinerja_kompetensi_45_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_45 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_45" name="kinerja_kompetensi_45"
                                                id="kinerja_kompetensi_45_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_45 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_45" name="kinerja_kompetensi_45"
                                                id="kinerja_kompetensi_45_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_45 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_45" name="kinerja_kompetensi_45"
                                                id="kinerja_kompetensi_45_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_45')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_45') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_45" type="file">

                                            @if ($data->file_kinerja_kompetensi_45)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_45) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_45')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>C.</td>
                                        <td>Mengkoordinasikan dan Pencetakan Sertifikat Ujian Ukom
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_46 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_46" name="kinerja_kompetensi_46"
                                                id="kinerja_kompetensi_46_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_46 == '2' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_46" name="kinerja_kompetensi_46"
                                                id="kinerja_kompetensi_46_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_46 == '3' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_46" name="kinerja_kompetensi_46"
                                                id="kinerja_kompetensi_46_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_46 == '4' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_46" name="kinerja_kompetensi_46"
                                                id="kinerja_kompetensi_46_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_46 == '5' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_46" name="kinerja_kompetensi_46"
                                                id="kinerja_kompetensi_46_5" value="5" onclick="sum();">
                                        </td>
                                        @error('kinerja_kompetensi_46')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <td>
                                            <label for="formFileSm" class="form-label text-danger">* Cek fisik /
                                                Document</label>
                                            <input class="@error('file_kinerja_kompetensi_46') is-invalid @enderror"
                                                id="formFileSm" name="file_kinerja_kompetensi_46" type="file">

                                            @if ($data->file_kinerja_kompetensi_46)
                                                <a href="{{ asset('storage/' . $data->file_kinerja_kompetensi_46) }}"
                                                    target="_blank">Preview</a>
                                            @else
                                                N/A
                                            @endif

                                            @error('file_kinerja_kompetensi_46')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </td>
                                    </tr>



                                    <tr class="table-primary">
                                        <td colspan="8 text-center">TOTAL KINERJA KOMPETENSI</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"></td>
                                        <td><label for="">Point 1</label><input
                                                id="output_point_kinerja_kompetensi_1"
                                                name="output_point_kinerja_kompetensi_1" type="number"
                                                value="{{ $data->output_point_kinerja_kompetensi_1 }}"
                                                aria-label="output_point" readonly>
                                        </td>
                                        <td><label for="">Point 2</label><input
                                                id="output_point_kinerja_kompetensi_2"
                                                name="output_point_kinerja_kompetensi_2" type="number"
                                                value="{{ $data->output_point_kinerja_kompetensi_2 }}"
                                                aria-label="output_point" readonly>
                                        </td>
                                        <td><label for="">Point 3</label><input
                                                id="output_point_kinerja_kompetensi_3"
                                                name="output_point_kinerja_kompetensi_3" type="number"
                                                value="{{ $data->output_point_kinerja_kompetensi_3 }}"
                                                aria-label="output_point" readonly>
                                        </td>
                                        <td><label for="">Point 4</label><input
                                                id="output_point_kinerja_kompetensi_4"
                                                name="output_point_kinerja_kompetensi_4" type="number"
                                                value="{{ $data->output_point_kinerja_kompetensi_4 }}"
                                                aria-label="output_point" readonly>
                                        </td>
                                        <td><label for="">Point 5</label><input
                                                id="output_point_kinerja_kompetensi_5"
                                                name="output_point_kinerja_kompetensi_5" type="number"
                                                value="{{ $data->output_point_kinerja_kompetensi_5 }}"
                                                aria-label="output_point" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="table-primary"><label for="">Total</label><input
                                                id="output_total_point_kinerja_kompetensi"
                                                name="output_total_point_kinerja_kompetensi" type="number"
                                                value="{{ $data->output_total_point_kinerja_kompetensi }}"
                                                aria-label="output_total_point_kinerja_kompetensi" readonly></td>
                                        <td class="table-primary"><label for="">Nilai
                                                Rata-rata</label><input
                                                id="output_total_nilai_rata_rata_kinerja_kompetensi"
                                                name="output_total_nilai_rata_rata_kinerja_kompetensi"
                                                type="number"
                                                value="{{ number_format($data->output_total_nilai_rata_rata_kinerja_kompetensi, 2) }}"
                                                aria-label="output_total_nilai_rata_rata_kinerja_kompetensi" readonly>
                                        </td>
                                        <td class="table-primary"><label for="">Nilai
                                                Sementara</label><input id="output_total_sementara_kinerja_kompetensi"
                                                name="output_total_sementara_kinerja_kompetensi" type="number"
                                                value="{{ number_format($data->output_total_sementara_kinerja_kompetensi, 2) }}"
                                                aria-label="output_total_sementara_kinerja_kompetensi" readonly></td>
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
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @push('JavaScript')
        <script src="{{ asset('Assets/js/itisar/kinerjaPerilaku/PointKinerjaPerilakuV2x5.js') }}"></script>
        <script src="{{ asset('Assets/js/itisar/BiroAdministrasi/BaakBisnis/PointKinerjaKompetensi.js') }}"></script>
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
