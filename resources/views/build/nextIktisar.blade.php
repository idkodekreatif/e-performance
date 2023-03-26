<x-app-layout title="build">
    @push('style')
        <link rel="stylesheet" href="{{ asset('Assets/vendor/select2/css/select2.min.css') }}">
        <link href="{{ asset('Assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Ka. Sub. Biro Administrasi Akademik</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col">
                {{-- <a href="{{ route('ka.baak.raport', Auth::user()->id) }}"
                    class="btn btn-primary btn-sm mb-2 float-end">Raport</a> --}}
                <a href="{{ route('edit.ka.baak') }}" class="btn btn-primary btn-sm mb-2 mr-2 float-end">Edit</a>
            </div>
        </div>
        <form action="javascript:void(0)" id="my-form" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card shadow">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Nama</h4>
                        <p class="text-danger">* Select One Name...</p>
                    </div>

                    <select id="single-select" name="UserId">
                        <option value="">-- Select One --</option>
                        <option value="">ini perlu di perbaiki</option>
                    </select>
                </div>
            </div>

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
                                            kurang sopan
                                            serta kurang memuaskan baik untuk pelayanan internal maupun eksternal
                                            organisasi</td>
                                        <td>Kurang dapat menyelesaikan tugas pelayanan dengan baik dan sikap kurang
                                            sopan serta
                                            kurang memuaskan baik untuk pelayanan internal maupun eksternal organisasi
                                        </td>
                                        <td>Ada kalanya dapat menyelesaikan tugas pelayanan dengan cukup baik dan sikap
                                            cukup sopan
                                            serta cukup memuaskan baik untuk pelayanan internal maupun eksternal
                                            organisasi</td>
                                        <td>Pada umumnya dapat menyelesaikan tugas pelayanan dengan baik dan sikap sopan
                                            serta
                                            memuaskan baik untuk pelayanan internal maupun eksternal organisasi</td>
                                        <td>Selalu dapat menyelesaikan tugas pelayanan sebaik-baiknya dan tidak segan
                                            membantu
                                            menyelesaikan pekerjaan tambahan dengan sikap sopan dan sangat memuaskan
                                            baik untuk
                                            pelayanan internal maupun eksternal organisasi</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 1</td>
                                        <td>Orientasi Pelayanan</td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_5"
                                                value="5" onclick="sumPoint();">
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
                                            menyalahgunakan
                                            wewenangnya tetapi kurang berani menanggung resiko dari tindakan yang
                                            dilakukan.</td>
                                        <td>Kurang jujur, kurang ikhlas dalam melaksanakan tugas dan sering
                                            menyalahgunakan
                                            wewenangnya tetapi kurang berani menanggung resiko dari tindakan yang
                                            dilakukan</td>
                                        <td>Ada kalanya dalam melaksanakan tugas bersifat cukup jujur, cukup ikhlas dan
                                            kadang-kadang menyalahgunakan wewenangnya serta cukup berani menanggung
                                            resiko dari
                                            tindakan yang dilakukan</td>
                                        <td>Pada umumnya dalam melaksanakan tugas bersifat jujur, ikhlas dan tidak
                                            pernah
                                            menyalahgunakan wewenangnya tetapi berani menanggung resiko dari tindakan
                                            yang dilakukan
                                        </td>
                                        <td>Tidak pernah dapat menyelesaikan tugas pelayanan dengan baik dan sikap
                                            kurang sopan
                                            serta kurang memuaskan baik untuk pelayanan internal maupun eksternal
                                            organisasi</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 2</td>
                                        <td>Integritas</td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_5"
                                                value="5" onclick="sumPoint();">
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
                                            yang ada untuk
                                            kepentingan IKBIS dari pada kepentingan pribadi atau golongan sesuai dengan
                                            tugas dan
                                            fungsi.</td>
                                        <td>Kurang berusaha dalam bersungguh-sungguh mencurahkan segala kemampuan yang
                                            ada untuk
                                            kepentingan IKBIS dari pada kepentingan pribadi atau golongan sesuai dengan
                                            tugas dan
                                            fungsi.</td>
                                        <td>Kadang-kadang berusaha dengan sungguh-sungguh mencurahkan segala kemampuan
                                            yang ada
                                            untuk kepentingan IKBIS dari pada kepentingan pribadi atau golongan sesuai
                                            dengan tugas
                                            dan fungsi.</td>
                                        <td>Pada umumnya berusaha dengan sungguh-sungguh mencurahkan segala kemampuan
                                            yang ada untuk
                                            kepentingan IKBIS dari pada kepentingan pribadi atau golongan sesuai dengan
                                            tugas dan
                                            fungsi.</td>
                                        <td>Selalu berusaha dengan sungguh-sungguh mencurahkan segala kemampuan yang ada
                                            untuk
                                            kepentingan IKBIS dari pada kepentingan pribadi atau golongan sesuai dengan
                                            tugas dan
                                            fungsi.</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 3</td>
                                        <td>Komitmen</td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_5"
                                                value="5" onclick="sumPoint();">
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
                                            tanggung jawab dan
                                            selalu mentaati ketentuan jam kerja serta mampu menyimpan dan/ atau
                                            memelihara
                                            barang-barang milik Institut yang dipercayakan kepadanya dengan cukup baik,
                                            serta tidak
                                            masuk atau terlambat masuk kerja dan lebih cepat pulang dari ketentuan jam
                                            kerja tanpa
                                            alasan yang sah selama 13 sampai dengan 22 hari kerja</td>
                                        <td>Kurang mentaati segala aturan yang berlaku di IKBIS dengan rasa tanggung
                                            jawab dan
                                            selalu mentaati ketentuan jam kerja serta mampu menyimpan dan/ atau
                                            memelihara
                                            barang-barang milik Institut yang dipercayakan kepadanya dengan cukup baik,
                                            serta tidak
                                            masuk atau terlambat masuk kerja dan lebih cepat pulang dari ketentuan jam
                                            kerja tanpa
                                            alasan yang sah selama 6 sampai dengan 12 hari kerja</td>
                                        <td>Adakalanya mentaati segala aturan yang berlaku di IKBIS dengan rasa tanggung
                                            jawab dan
                                            selalu mentaati ketentuan jam kerja serta mampu menyimpan dan/ atau
                                            memelihara
                                            barang-barang milik Institut yang dipercayakan kepadanya dengan cukup baik,
                                            serta tidak
                                            masuk atau terlambat masuk kerja dan lebih cepat pulang dari ketentuan jam
                                            kerja tanpa
                                            alasan yang sah selama 1 sampai dengan 5 hari kerja</td>
                                        <td>Pada umumnya mentaati segala aturan yang berlaku di IKBIS dengan rasa
                                            tanggung jawab dan
                                            selalu mentaati ketentuan jam kerja serta mampu menyimpan dan/ atau
                                            memelihara
                                            barang-barang milik Institut yang dipercayakan kepadanya dengan baik.</td>
                                        <td>Selalu mentaati segala aturan yang berlaku di IKBIS dengan rasa tanggung
                                            jawab dan
                                            selalu mentaati ketentuan jam kerja serta mampu menyimpan dan/ atau
                                            memelihara
                                            barang-barang milik Institut yang dipercayakan kepadanya dengan
                                            sebaik-baiknya.</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 4</td>
                                        <td>Disiplin</td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_5"
                                                value="5" onclick="sumPoint();">
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
                                            dalam maupun
                                            di luar organisasi serta tidak menghargai dan menerima pendapat orang lain,
                                            tidak
                                            bersedia menerima keputusan yang diambil secara sah yang telah menjadi
                                            keputusan bersama
                                        </td>
                                        <td>Kurang mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di dalam
                                            maupun di
                                            luar organisasi serta kurang menghargai dan menerima pendapat orang lain,
                                            kurang
                                            bersedia menerima keputusan yang diambil secara sah yang telah menjadi
                                            keputusan bersama
                                        </td>
                                        <td>Ada kalanya mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di
                                            dalam maupun
                                            di luar organisasi serta ada kalanya menghargai dan menerima pendapat orang
                                            lain,
                                            kadang-kadang bersedia menerima keputusan yang diambil secara sah yang telah
                                            menjadi
                                            keputusan bersama</td>
                                        <td>Pada umumnya mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di
                                            dalam maupun
                                            di luar organisasi serta menghargai dan menerima pendapat orang lain,
                                            bersedia menerima
                                            keputusan yang diambil secara sah yang telah menjadi keputusan bersama</td>
                                        <td>Selalu mampu bekerja sama dengan rekan kerja, atasan, bawahan baik di dalam
                                            maupun di
                                            luar organisasi serta menghargai dan menerima pendapat orang lain, bersedia
                                            menerima
                                            keputusan yang diambil secara sah yang telah menjadi keputusan bersama</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 5</td>
                                        <td>Kerjasama</td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_5"
                                                value="5" onclick="sumPoint();">
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
                                            baik, tidak
                                            mampu 1 Buruk 12 menggerakkan tim kerja untuk mencapai kinerja yang tinggi,
                                            tidak mampu
                                            menggugah semangat dan menggerakkan bawahan dalam melaksanakan tugas serta
                                            tidak mampu
                                            mengambil keputusan dengan cepat dan tepat</td>
                                        <td>Kurang bertindak tegas dan terkadang memihak, kurang mampu memberikan
                                            teladan yang baik,
                                            kurang mampu menggerakkan tim kerja untuk mencapai kinerja yang tinggi,
                                            serta kurang
                                            mampu menggugah semangat dan menggerakkan bawahan dalam melaksanakan tugas
                                            serta kurang
                                            mampu mengambil keputusan dengan cepat dan tepat</td>
                                        <td>Adakalanya bertindak tegas dan tidak memihak, memberikan teladan, cukup
                                            mampu
                                            menggerakkan tim kerja untuk mencapai kinerja yang tinggi, serta cukup mampu
                                            menggugah
                                            semangat dan menggerakkan bawahan dalam melaksanakan tugas serta cukup mampu
                                            mengambil
                                            keputusan dengan cepat dan tepat</td>
                                        <td>Pada umumnya bertindak tegas dan tidak memihak, memberikan teladan yang
                                            baik, kemampuan
                                            menggerakkan tim kerja untuk mencapai kinerja yang tinggi, mampu menggugah
                                            semangat dan
                                            menggerakkan bawahan dalam melaksanakan tugas serta mampu mengambil
                                            keputusan dengan
                                            cepat dan tepat</td>
                                        <td>Selalu bertindak tegas dan tidak memihak, memberikan teladan yang baik,
                                            kemampuan
                                            menggerakkan tim kerja untuk mencapai kinerja yang tinggi, mampu menggugah
                                            semangat dan
                                            menggerakkan bawahan dalam melaksanakan tugas serta mampu mengambil
                                            keputusan dengan
                                            cepat dan tepat</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Question 6</td>
                                        <td>Kepemimpinan (Hanya yang menduduki Jabatan Struktural)</td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_5"
                                                value="5" onclick="sumPoint();">
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
                                                name="output_point_1" type="number" value="0"
                                                aria-label="output_point" readonly></td>
                                        <td><label for="">Point 2</label><input id="output_point_2"
                                                name="output_point_2" type="number" value="0"
                                                aria-label="output_point" readonly></td>
                                        <td><label for="">Point 3</label><input id="output_point_3"
                                                name="output_point_3" type="number" value="0"
                                                aria-label="output_point" readonly></td>
                                        <td><label for="">Point 4</label><input id="output_point_4"
                                                name="output_point_4" type="number" value="0"
                                                aria-label="output_point" readonly></td>
                                        <td><label for="">Point 5</label><input id="output_point_5"
                                                name="output_point_5" type="number" value="0"
                                                aria-label="output_point" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="table-primary">
                                            <label for="">Total</label>
                                            <input id="output_total_point_kinerja_perilaku"
                                                name="output_total_point_kinerja_perilaku" type="number"
                                                value="0" aria-label="output_total_point_kinerja_perilaku"
                                                readonly>
                                        </td>
                                        <td class="table-primary">
                                            <label for="">Nilai Rata-rata</label>
                                            <input id="output_total_nilai_rata_rata_kinerja_perilaku"
                                                name="output_total_nilai_rata_rata_kinerja_perilaku" type="number"
                                                value="0"
                                                aria-label="output_total_nilai_rata_rata_kinerja_perilaku" readonly>
                                        </td>
                                        <td class="table-primary">
                                            <label for="">Nilai Sementara</label>
                                            <input id="output_total_sementara_kinerja_perilaku"
                                                name="output_total_sementara_kinerja_perilaku" type="number"
                                                value="0" aria-label="output_total_sementara_kinerja_perilaku"
                                                readonly>
                                        </td>
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
                        <div class="justify-content-center text-center">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4>Item Kinerja</h4>
                                </div>
                                <div class="col-md-6">
                                    <h4>Penilaian Kinerja</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Bobot (%)</h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>Action</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md">
                                            <h5>1</h5>
                                        </div>
                                        <div class="col-md">
                                            <h5>2</h5>
                                        </div>
                                        <div class="col-md">
                                            <h5>3</h5>
                                        </div>
                                        <div class="col-md">
                                            <h5>4</h5>
                                        </div>
                                        <div class="col-md">
                                            <h5>5</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-1">
                                </div>
                            </div>

                            {{-- Start Form clone --}}
                            <div class="row" style="display:none">
                                <div class="col-md-3">
                                    <input type="text" name="jenis-pekerjaan[]"
                                        class="form-control input-default jenis-pekerjaan"
                                        placeholder="Keterangan Pekerjaan">
                                </div>
                                <div class="col-md-6">
                                    <div class="row mt-3">
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question_1"
                                                value="1" onclick="sumQuestion();">
                                        </div>
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question_1"
                                                value="2" onclick="sumQuestion();">
                                        </div>
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question_1"
                                                value="3" onclick="sumQuestion();">
                                        </div>
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question_1"
                                                value="4" onclick="sumQuestion();">
                                        </div>
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question_1"
                                                value="5" onclick="sumQuestion();">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" name="jumlah-bobot[]" class="form-control input-default "
                                        placeholder="Jumlah Bobot (%)">
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-danger btn-sm" id="DeleteRow"><i
                                            class="fa-sharp fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                            {{-- End Form clone --}}

                            <div class="parent-col"></div>

                            <div class="row mt-2">
                                <div class="col-md-3 mt-4">
                                    <div class="row">
                                        <div class="col-md">
                                            {{-- Btn Add Row --}}
                                            <button class="btn btn-primary rounded-circle" id="rowAdder"><i
                                                    class="fa-sharp fa-solid fa-plus"></i></button>
                                            {{-- End btn add  Row --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="row ">
                                        <div class="col-md">
                                            <h6>Poin 1</h6>
                                            <input type="number" name="poin-1"
                                                class="form-control form-control-sm poin-1" placeholder="Poin 1">
                                        </div>
                                        <div class="col-md">
                                            <h6>Poin 2</h6>
                                            <input type="number" name="poin-2"
                                                class="form-control form-control-sm poin-2" placeholder="Poin 2">
                                        </div>
                                        <div class="col-md">
                                            <h6>Poin 3</h6>
                                            <input type="number" name="poin-3"
                                                class="form-control form-control-sm poin-3" placeholder="Poin 3">
                                        </div>
                                        <div class="col-md">
                                            <h6>Poin 4</h6>
                                            <input type="number" name="poin-4"
                                                class="form-control form-control-sm poin-4" placeholder="Poin 4">
                                        </div>
                                        <div class="col-md">
                                            <h6>Poin 5</h6>
                                            <input type="number" name="poin-5"
                                                class="form-control form-control-sm poin-5" placeholder="Poin 5">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <h6>Total</h6>
                                            <input type="number" name="jumlah-bobot"
                                                class="form-control form-control-sm jumlah-bobot"
                                                placeholder="Total Poin">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-2">
                                    {{-- Btn Save --}}
                                    <div class="warning-message text-danger"></div>
                                    <button class="btn btn-primary btn-sm save">
                                        <i class="fa-sharp fa-solid fa-floppy-disk">Simpan</i>
                                    </button>
                                    {{-- end btn save --}}
                                </div>
                                <div class="col-md-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </form>
    </div>

    @push('JavaScript')
        <script src="{{ asset('Assets/js/itisar/kinerjaPerilaku/PointKinerjaPerilakuV2x6.js') }}"></script>
        <script src="{{ asset('Assets/js/itisar/Baak/PointKinerjaKompetensi.js') }}"></script>
        <script src="{{ asset('Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('Assets/vendor/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('Assets/js/plugins-init/select2-init.js') }}"></script>
        <script src="{{ asset('Assets/js/custom.min.js') }}"></script>
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

        <script>
            $(document).ready(function() {
                // Add new row
                $('#rowAdder').on('click', function() {
                    var newRow = '<div class="row">' +
                        '<div class="col-md-3">' +
                        '<input type="text" name="jenis-pekerjaan[]" class="form-control input-default jenis-pekerjaan" placeholder="Keterangan Pekerjaan">' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<div class="row mt-3">' +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[]" value="1" onclick="sumQuestion();">' +
                        '</div>' +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[]" value="2" onclick="sumQuestion();">' +
                        '</div>' +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[]" value="3" onclick="sumQuestion();">' +
                        '</div>' +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[]" value="4" onclick="sumQuestion();">' +
                        '</div>' +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[]" value="5" onclick="sumQuestion();">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-2">' +
                        '<input type="number" name="jumlah-bobot[]" class="form-control input-default bobot" placeholder="Jumlah Bobot (%)">' +
                        '</div>' +
                        '<div class="col-md-1">' +
                        '<button class="btn btn-danger btn-sm deleteRow"><i class="fa-sharp fa-solid fa-trash"></i></button>' +
                        '</div>' +
                        '</div>';
                    $('.parent-col').append(newRow);
                });

                // Delete row
                $('.parent-col').on('click', '.deleteRow', function() {
                    // get the value of the deleted row's bobot input
                    var deletedBobotValue = parseInt($(this).closest('.row').find('.bobot').val());

                    // subtract the deletedBobotValue from the totalBobot
                    var totalBobot = parseInt($('.jumlah-bobot').val()) - deletedBobotValue;

                    // update the value of the jumlah-bobot input
                    $('.jumlah-bobot').val(totalBobot);

                    if (totalBobot < 100) {
                        // disable the Save button
                        $('button.save').prop('disabled', true);

                        // show the warning message
                        $('.warning-message').text(
                            'Total Bobot must be equal or greater than 100 to save the data');
                    } else {
                        // enable the Save button
                        $('button.save').prop('disabled', false);

                        // clear the warning message
                        $('.warning-message').text('');
                    }

                    // remove the deleted row
                    $(this).closest('.row').remove();
                });



                // Sum point
                function sumQuestion() {
                    var total = 0;
                    $('.question:checked').each(function() {
                        total += parseInt($(this).val());
                    });
                    $('.poin-1').val(total);
                }

                $('.parent-col').on('click', '.question', sumQuestion);

                // function sumQuestion() {
                //     var points = [0, 0, 0, 0, 0];
                //     var questions = document.getElementsByClassName('question');
                //     for (var i = 0; i < questions.length; i++) {
                //         var question = questions[i];
                //         if (question.checked) {
                //             var value = parseInt(question.value);
                //             points[value - 1]++;
                //         }
                //     }

                //     var poin1 = document.getElementsByName('poin-1')[0];
                //     var poin2 = document.getElementsByName('poin-2')[0];
                //     var poin3 = document.getElementsByName('poin-3')[0];
                //     var poin4 = document.getElementsByName('poin-4')[0];
                //     var poin5 = document.getElementsByName('poin-5')[0];

                //     poin1.value = parseInt(poin1.value) + points[0];
                //     poin2.value = parseInt(poin2.value) + points[1];
                //     poin3.value = parseInt(poin3.value) + points[2];
                //     poin4.value = parseInt(poin4.value) + points[3];
                //     poin5.value = parseInt(poin5.value) + points[4];

                // }

                // Sum bobot ( nilai bobot / jumlah row parent * 8-% )
                // function sumBobot() {
                //     var totalBobot = 0;
                //     var rowLength = $('.parent-col .row').length;
                //     $('.parent-col .bobot').each(function() {
                //         var bobotValue = parseInt($(this).val());
                //         if (!isNaN(bobotValue)) {
                //             totalBobot += bobotValue;
                //         }
                //     });
                //     var bobotWeight = totalBobot / rowLength * 0.8;
                //     $('.jumlah-bobot').val(bobotWeight.toFixed(2));
                // }

                // $('.parent-col').on('keyup', '.bobot', sumBobot);

                // function sumBobot() {
                //     var totalBobot = 0;
                //     $('.parent-col .bobot').each(function() {
                //         var bobotValue = parseInt($(this).val());
                //         if (!isNaN(bobotValue)) {
                //             totalBobot += bobotValue;
                //         }
                //     });
                //     $('.jumlah-bobot').val(totalBobot);
                // }

                // $('.parent-col').on('keyup', '.bobot', sumBobot);

                function sumBobot() {
                    var totalBobot = 0;
                    $('.parent-col .bobot').each(function() {
                        var bobotValue = parseInt($(this).val());
                        if (!isNaN(bobotValue)) {
                            totalBobot += bobotValue;
                        }
                    });

                    $('.jumlah-bobot').val(totalBobot);

                    if (totalBobot < 100) {
                        // disable the Save button
                        $('button.save').prop('disabled', true);

                        // show the warning message
                        $('.warning-message').text('Total Bobot must be equal or greater than 100% to save the data');
                    } else {
                        // enable the Save button
                        $('button.save').prop('disabled', false);

                        // clear the warning message
                        $('.warning-message').text('');
                    }
                }

                // call the sumBobot function on keyup event of .bobot element
                $('.parent-col').on('keyup', '.bobot', sumBobot);



            });
        </script>
    @endpush
</x-app-layout>
