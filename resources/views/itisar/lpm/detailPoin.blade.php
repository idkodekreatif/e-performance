<x-app-layout title="Detail Poin Penilaian LPM">
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail Poin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">LPM</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('Lpm.raport', Auth::user()->id) }}"
                    class="btn btn-primary btn-sm mb-2 float-end">Raport</a>
            </div>
        </div>
        <form action="javascript:void(0)" id="my-form" method="POST" enctype="multipart/form-data">
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
                                        <td>Tidak pernah dapat menyelesaikan tugas pelayanan dengan baik dan sikap
                                            kurang sopan serta kurang memuaskan baik untuk pelayanan internal maupun
                                            eksternal organisasi</td>
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
                                    <tr>
                                        <td>1</td>
                                        <td>Mengkoordinasikan dan melaksanakan pengembangan instrumen monitoring dan
                                            evaluasi serta audit mutu internal dan
                                            eksternal di seluruh satuan kerja</td>
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
                                        <td>2</td>
                                        <td>Mengkoordinasikan dan melaksanakan uji validitas dan reliabilitas instrumen
                                            monitoring dan evaluasi</td>
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
                                        <td>3</td>
                                        <td>Mengkoordinasikan dan melaksanakan monitoring dan evaluasi serta audit mutu
                                            internal dan eksternal di seluruh satuan
                                            kerja</td>
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
                                        <td>4</td>
                                        <td>Mengkoordinasikan dan merumuskan tindakan koreksi untuk memelihara dan
                                            meningkatkan mutu secara berkelanjutan;</td>
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
                                        <td>5</td>
                                        <td>Mengkoordinasikan dan mewujudkan tingkat layanan yang dapat
                                            memuaskan stakeholders;</td>
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
                                    <tr>
                                        <td>6</td>
                                        <td>Melakukan pengarsipan seluruh dokumen produk kegiatan dalam bentuk hardcopy
                                            maupun softcopy;
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
                                        <td>7</td>
                                        <td>Mengkoordinasikan dan menyusun dokumen SPMI/SPME yang meliputi Kebijakan ,
                                            Manual Mutu , Standart dan Formulir
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
                                        <td>8</td>
                                        <td>Mengkoordinasikan dan menyusun Dokumen Standart Operating Procedure (SOP)
                                            kegiatan asessmen;
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
                                        <td>9</td>
                                        <td>Mengkoordinasikan dan melakukan Asesmen terhadap kegiatan di bidang akademik
                                            dan non akademik;
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
                                        <td>10</td>
                                        <td>Mengkoordinasikan dan menyiapkan pengisian borang akreditasi institusi dan
                                            borang akreditasi prodi
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
                                        <td>11</td>
                                        <td>Mengkoordinasikan dan melakukan pendampingan serta memfasilitasi pengisian
                                            borang akreditasi institusi dan prodi.
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
                                        <td>12</td>
                                        <td>Mengkoordinasikan dan membantu penyediaan data untuk pengisian borang
                                            akreditasi institusi dan prodi
                                        </td>
                                        <td><input type="radio"
                                                {{ $data->kinerja_kompetensi_12 == '1' ? 'checked' : '' }}
                                                class="kinerja_kompetensi_12" name="kinerja_kompetensi_12"
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
                                        <td>13</td>
                                        <td>Mengkoordinasikan dan melakukan simulasi penghitungan nilai akreditasi
                                            institusi dan prodi
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
                                        <td>14</td>
                                        <td>Menyusun laporan Koordinator SPMI/SPME sebagai pertanggung jawaban kepada
                                            atasan
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
                                            <label for="formFileSm" class="form-label text-danger">* Laporan
                                                Bulanan</label>

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
                                        <td>15</td>
                                        <td>Menyususn rencana kerja dan anggaran tahunan (RKAT) pada bidangnya.
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
                                            <label for="formFileSm" class="form-label text-danger">* Dokumen
                                                RKAT</label>

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
                                        <td class="table-primary"><label for="">Nilai Rata-rata</label><input
                                                id="output_total_nilai_rata_rata_kinerja_kompetensi"
                                                name="output_total_nilai_rata_rata_kinerja_kompetensi" type="number"
                                                value="{{ number_format($data->output_total_nilai_rata_rata_kinerja_kompetensi, 2) }}"
                                                aria-label="output_total_nilai_rata_rata_kinerja_kompetensi" readonly>
                                        </td>
                                        <td class="table-primary"><label for="">Nilai Sementara</label><input
                                                id="output_total_sementara_kinerja_kompetensi"
                                                name="output_total_sementara_kinerja_kompetensi" type="number"
                                                value="{{ number_format($data->output_total_sementara_kinerja_kompetensi, 2) }}"
                                                aria-label="output_total_sementara_kinerja_kompetensi" readonly></td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end">
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
    @endpush
</x-app-layout>
