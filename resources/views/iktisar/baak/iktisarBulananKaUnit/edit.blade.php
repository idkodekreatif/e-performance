<x-app-layout title="IKTISAR Bulanan || Staff">
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">IKTISAR Bulanan {{ $users->name }}</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col">
                {{-- <a href="{{ route('ka.baak.raport', Auth::user()->id) }}"
                    class="btn btn-primary btn-sm mb-2 float-end">Raport</a> --}}
                {{-- <a href="{{ route('edit.ka.baak') }}" class="btn btn-primary btn-sm mb-2 mr-2 float-end">Edit</a> --}}
            </div>
        </div>

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
                                    {{ $users->name }}
                                </td>
                                <td>
                                    {{ $users->email }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <form action="{{ route('iktisar.bulanan.baak.kaunit.update', $iktisarStaffBulananPerilaku->id) }}"
            id="my-form" method="POST" enctype="multipart/form-iktisarStaffBulananPerilaku">
            @csrf
            @method('PUT')

            {{-- <div class="card shadow">
                <div class="card-body">
                    <div class="mb-4">
                        <h4 class="card-title">Nama</h4>
                        <p class="text-danger">* Select One Name...</p>
                    </div>

                    <select id="single-select" name="UserId">
                        <option value="">-- Select One --</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}

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
                                                value="1"
                                                {{ $iktisarStaffBulananPerilaku->q1 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_2"
                                                value="2"
                                                {{ $iktisarStaffBulananPerilaku->q1 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_3"
                                                value="3"
                                                {{ $iktisarStaffBulananPerilaku->q1 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_4"
                                                value="4"
                                                {{ $iktisarStaffBulananPerilaku->q1 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q1" name="q1" id="q1_5"
                                                value="5"
                                                {{ $iktisarStaffBulananPerilaku->q1 == '5' ? 'checked' : '' }}
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
                                                value="1"
                                                {{ $iktisarStaffBulananPerilaku->q2 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_2"
                                                value="2"
                                                {{ $iktisarStaffBulananPerilaku->q2 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_3"
                                                value="3"
                                                {{ $iktisarStaffBulananPerilaku->q2 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_4"
                                                value="4"
                                                {{ $iktisarStaffBulananPerilaku->q2 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q2" name="q2" id="q2_5"
                                                value="5"
                                                {{ $iktisarStaffBulananPerilaku->q2 == '5' ? 'checked' : '' }}
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
                                                value="1"
                                                {{ $iktisarStaffBulananPerilaku->q3 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_2"
                                                value="2"
                                                {{ $iktisarStaffBulananPerilaku->q3 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_3"
                                                value="3"
                                                {{ $iktisarStaffBulananPerilaku->q3 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_4"
                                                value="4"
                                                {{ $iktisarStaffBulananPerilaku->q3 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q3" name="q3" id="q3_5"
                                                value="5"
                                                {{ $iktisarStaffBulananPerilaku->q3 == '5' ? 'checked' : '' }}
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
                                                value="1"
                                                {{ $iktisarStaffBulananPerilaku->q4 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_2"
                                                value="2"
                                                {{ $iktisarStaffBulananPerilaku->q4 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_3"
                                                value="3"
                                                {{ $iktisarStaffBulananPerilaku->q4 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_4"
                                                value="4"
                                                {{ $iktisarStaffBulananPerilaku->q4 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q4" name="q4" id="q4_5"
                                                value="5"
                                                {{ $iktisarStaffBulananPerilaku->q4 == '5' ? 'checked' : '' }}
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
                                                value="1"
                                                {{ $iktisarStaffBulananPerilaku->q5 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_2"
                                                value="2"
                                                {{ $iktisarStaffBulananPerilaku->q5 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_3"
                                                value="3"
                                                {{ $iktisarStaffBulananPerilaku->q5 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_4"
                                                value="4"
                                                {{ $iktisarStaffBulananPerilaku->q5 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q5" name="q5" id="q5_5"
                                                value="5"
                                                {{ $iktisarStaffBulananPerilaku->q5 == '5' ? 'checked' : '' }}
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
                                                value="1"
                                                {{ $iktisarStaffBulananPerilaku->q6 == '1' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_2"
                                                value="2"
                                                {{ $iktisarStaffBulananPerilaku->q6 == '2' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_3"
                                                value="3"
                                                {{ $iktisarStaffBulananPerilaku->q6 == '3' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_4"
                                                value="4"
                                                {{ $iktisarStaffBulananPerilaku->q6 == '4' ? 'checked' : '' }}
                                                onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="q6" name="q6" id="q6_5"
                                                value="5"
                                                {{ $iktisarStaffBulananPerilaku->q6 == '5' ? 'checked' : '' }}
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
                                                value="{{ $iktisarStaffBulananPerilaku->output_point_1 }}"
                                                aria-label="output_point" readonly></td>
                                        <td><label for="">Point 2</label><input id="output_point_2"
                                                name="output_point_2" type="number"
                                                value="{{ $iktisarStaffBulananPerilaku->output_point_2 }}"
                                                aria-label="output_point" readonly></td>
                                        <td><label for="">Point 3</label><input id="output_point_3"
                                                name="output_point_3" type="number"
                                                value="{{ $iktisarStaffBulananPerilaku->output_point_3 }}"
                                                aria-label="output_point" readonly></td>
                                        <td><label for="">Point 4</label><input id="output_point_4"
                                                name="output_point_4" type="number"
                                                value="{{ $iktisarStaffBulananPerilaku->output_point_4 }}"
                                                aria-label="output_point" readonly></td>
                                        <td><label for="">Point 5</label><input id="output_point_5"
                                                name="output_point_5" type="number"
                                                value="{{ $iktisarStaffBulananPerilaku->output_point_5 }}"
                                                aria-label="output_point" readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="table-primary">
                                            <label for="">Total</label>
                                            <input id="output_total_point_kinerja_perilaku"
                                                name="output_total_point_kinerja_perilaku" type="number"
                                                value="{{ $iktisarStaffBulananPerilaku->output_total_point_kinerja_perilaku }}"
                                                aria-label="output_total_point_kinerja_perilaku" readonly>
                                        </td>
                                        <td class="table-primary"><label for="">Nilai Rata-rata</label><input
                                                id="output_total_nilai_rata_rata_kinerja_perilaku"
                                                name="output_total_nilai_rata_rata_kinerja_perilaku" type="number"
                                                value="{{ number_format($iktisarStaffBulananPerilaku->output_total_nilai_rata_rata_kinerja_perilaku, 2) }}"
                                                aria-label="output_total_nilai_rata_rata_kinerja_perilaku" readonly>
                                        </td>
                                        <td class="table-primary"><label for="">Nilai Sementara</label><input
                                                id="output_total_sementara_kinerja_perilaku"
                                                name="output_total_sementara_kinerja_perilaku" type="number"
                                                value="{{ number_format($iktisarStaffBulananPerilaku->output_total_sementara_kinerja_perilaku, 2) }}"
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
                            <div class="row mt-2 row-question" style="display:none">
                                <div class="col-md-3 mt-2">
                                    <input type="text" name="jenisPekerjaan"
                                        class="form-control input-default jenis-pekerjaan"
                                        placeholder="Keterangan Pekerjaan">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="row mt-3">
                                        {{-- Insert Poin 1 --}}
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question1"
                                                value="1" onclick="sumQuestion();">
                                        </div>
                                        {{-- End insert poin 1 --}}
                                        {{-- insert poin 2 --}}
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question2"
                                                value="2" onclick="sumQuestion();">
                                        </div>
                                        {{-- End insert poin 2 --}}
                                        {{-- insert poin 3 --}}
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question3"
                                                value="3" onclick="sumQuestion();">
                                        </div>
                                        {{-- End insert poin 3 --}}
                                        {{-- insert poin 4 --}}
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question4"
                                                value="4" onclick="sumQuestion();">
                                        </div>
                                        {{-- End insert poin 4 --}}
                                        {{-- insert poin 5 --}}
                                        <div class="col-md">
                                            <input type="radio" class="question" name="question[]" id="question5"
                                                value="5" onclick="sumQuestion();">
                                        </div>
                                        {{-- End insert poin 5 --}}
                                    </div>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <input type="number" name="jumlahBobot" class="form-control input-default "
                                        placeholder="Jumlah Bobot (%)">
                                </div>
                                <div class="col-md-1 mt-2">
                                    <button class="btn btn-danger btn-sm" id="DeleteRow"><i
                                            class="fa-sharp fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                            {{-- End Form clone --}}

                            <div class="parent-col mt-2"></div>

                            <div class="row mt-2">
                                <div class="col-md-3 mt-4">
                                    <div class="row">
                                        <div class="col-md">
                                            {{-- Btn Add Row --}}
                                            <button type=button class="btn btn-primary rounded-circle"
                                                id="rowAdder"><i class="fa-sharp fa-solid fa-plus"></i></button>
                                            {{-- End btn add  Row --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="row ">
                                        {{-- Output Total Poin 1 --}}
                                        <div class="col-md">
                                            <h6>Poin 1</h6>
                                            <input type="number" name="poin1"
                                                class="form-control form-control-sm poin1"
                                                value="{{ $iktisarStaffBulananPerilaku->total_poin1 }}"
                                                placeholder="Poin 1" readonly>
                                        </div>
                                        {{-- End Output Total Poin 1 --}}

                                        {{-- Output Total Poin 2 --}}
                                        <div class="col-md">
                                            <h6>Poin 2</h6>
                                            <input type="number" name="poin2"
                                                class="form-control form-control-sm poin2"
                                                value="{{ $iktisarStaffBulananPerilaku->total_poin2 }}"
                                                placeholder="Poin 2" readonly>
                                        </div>
                                        {{-- End Output Total Poin 2 --}}

                                        {{-- Output Total Poin 3 --}}
                                        <div class="col-md">
                                            <h6>Poin 3</h6>
                                            <input type="number" name="poin3"
                                                class="form-control form-control-sm poin3"
                                                value="{{ $iktisarStaffBulananPerilaku->total_poin3 }}"
                                                placeholder="Poin 3" readonly>
                                        </div>
                                        {{-- End Output Total Poin 3 --}}

                                        {{-- Output Total Poin 4 --}}
                                        <div class="col-md">
                                            <h6>Poin 4</h6>
                                            <input type="number" name="poin4"
                                                class="form-control form-control-sm poin4"
                                                value="{{ $iktisarStaffBulananPerilaku->total_poin4 }}"
                                                placeholder="Poin 4" readonly>
                                        </div>
                                        {{-- End Output Total Poin 4 --}}

                                        {{-- Output Total Poin 5 --}}
                                        <div class="col-md">
                                            <h6>Poin 5</h6>
                                            <input type="number" name="poin5"
                                                class="form-control form-control-sm poin5"
                                                value="{{ $iktisarStaffBulananPerilaku->total_poin5 }}"
                                                placeholder="Poin 5" readonly>
                                        </div>
                                        {{-- End Output Total Poin 5 --}}
                                    </div>
                                </div>
                                <div class="col-md-2 mt-3">
                                    <div class="row">
                                        <div class="col-md">
                                            <h6>Total Bobot (%)</h6>
                                            <input type="number" name="totalBobot"
                                                value="{{ $iktisarStaffBulananPerilaku->total_bobot }}"
                                                class="form-control form-control-sm jumlah-bobot"
                                                placeholder="Total Poin" readonly required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>
                            </div>

                            <div class="card shadow" style="display:none">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md">
                                            <Label>total SUM</Label>
                                            <input type="text" name="totalSum"
                                                value="{{ number_format($iktisarStaffBulananPerilaku->total_poin_kali_bobot, 2) }}"
                                                class="form-control input-default total-sum"
                                                placeholder="input-default" readonly>
                                        </div>
                                        <div class="col-md">
                                            <Label>total Nilai (*80%)</Label>
                                            <input type="text" name="totalPresentase"
                                                value="{{ number_format($iktisarStaffBulananPerilaku->total_nilai_presentase, 2) }}"
                                                class="form-control input-default total-presentase"
                                                placeholder="input-default" readonly>
                                        </div>
                                    </div>
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
                                    <button type="submit" onclick="event.preventDefault(); confirmSubmit();"
                                        class="btn btn-primary btn-sm save">
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
        {{-- <script src="{{ asset('Assets/js/iktisar/dynamicFormEdit.js') }}"></script> --}}
        <script src="{{ asset('Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('Assets/vendor/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('Assets/js/plugins-init/select2-init.js') }}"></script>
        <script src="{{ asset('Assets/js/custom.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmSubmit() {
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda akan menyimpan iktisarStaffBulananPerilaku tersebut.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Simpan',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('my-form').submit();
                    } else {
                        Swal.fire('iktisarStaffBulananPerilaku batal disimpan');
                    }
                });
            }
        </script>
        <script>
            $(document).ready(function() {
                // Document edit view
                $(document).ready(function() {
                    @foreach ($iktisarStaffBulananKompetensi as $key => $data)
                        var rowCount = $(".row-question").length;
                        var newRow =
                            '<div class="row mt-2 row-question row-hitung">' +
                            '<div class="col-md-3 mt-2">' +
                            '<input type="text" name="jenisPekerjaan[]"  value="{{ $data->jenis_pekerjaan }}" class="form-control input-default jenis-pekerjaan" placeholder="Keterangan Pekerjaan">' +
                            "</div>" +
                            '<div class="col-md-6 mt-2">' +
                            '<div class="row mt-3">' +
                            '<div class="col-md">' +
                            '<input type="radio" {{ $data->question == '1' ? 'checked' : '' }} class="question" name="question[' +
                            rowCount +
                            ']" id="question1" value="1" onclick="sumQuestion();">' +
                            "</div>" +
                            '<div class="col-md">' +
                            '<input type="radio" {{ $data->question == '2' ? 'checked' : '' }} class="question" name="question[' +
                            rowCount +
                            ']"  id="question2" value="2" onclick="sumQuestion();">' +
                            "</div>" +
                            '<div class="col-md">' +
                            '<input type="radio" {{ $data->question == '3' ? 'checked' : '' }} class="question" name="question[' +
                            rowCount +
                            ']"  id="question3" value="3" onclick="sumQuestion();">' +
                            "</div>" +
                            '<div class="col-md">' +
                            '<input type="radio" {{ $data->question == '4' ? 'checked' : '' }} class="question" name="question[' +
                            rowCount +
                            ']"  id="question4" value="4" onclick="sumQuestion();">' +
                            "</div>" +
                            '<div class="col-md">' +
                            '<input type="radio" {{ $data->question == '5' ? 'checked' : '' }} class="question" name="question[' +
                            rowCount +
                            ']"  id="question5" value="5" onclick="sumQuestion();">' +
                            "</div>" +
                            "</div>" +
                            "</div>" +
                            '<div class="col-md-2 mt-2">' +
                            '<input type="number" name="jumlahBobot[]" value="{{ $data->nilai_bobot }}" class="form-control input-default bobot" placeholder="Jumlah Bobot (%)">' +
                            "</div>" +
                            '<div class="col-md-1 mt-2">' +
                            '<button type="button" class="btn btn-danger btn-sm deleteRow"><i class="fa-sharp fa-solid fa-trash"></i></button>' +
                            "</div>" +
                            "</div>";
                        $(".parent-col").append(newRow);
                    @endforeach
                });

                $("#rowAdder").on("click", function() {
                    var rowCount = $(".row-question")
                        .length; // menghitung jumlah baris yang sudah ada dan menambahkannya dengan 1
                    var newRow =
                        '<div class="row mt-2 row-question row-hitung">' +
                        '<div class="col-md-3 mt-2">' +
                        '<input type="text" name="jenisPekerjaan[]" class="form-control input-default jenis-pekerjaan" placeholder="Keterangan Pekerjaan">' +
                        "</div>" +
                        '<div class="col-md-6 mt-2">' +
                        '<div class="row mt-3">' +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[' +
                        rowCount +
                        ']" id="question1" value="1" onclick="sumQuestion();">' +
                        "</div>" +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[' +
                        rowCount +
                        ']"  id="question2" value="2" onclick="sumQuestion();">' +
                        "</div>" +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[' +
                        rowCount +
                        ']"  id="question3" value="3" onclick="sumQuestion();">' +
                        "</div>" +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[' +
                        rowCount +
                        ']"  id="question4" value="4" onclick="sumQuestion();">' +
                        "</div>" +
                        '<div class="col-md">' +
                        '<input type="radio" class="question" name="question[' +
                        rowCount +
                        ']"  id="question5" value="5" onclick="sumQuestion();">' +
                        "</div>" +
                        "</div>" +
                        "</div>" +
                        '<div class="col-md-2 mt-2">' +
                        '<input type="number" name="jumlahBobot[]" class="form-control input-default bobot" placeholder="Jumlah Bobot (%)">' +
                        "</div>" +
                        '<div class="col-md-1 mt-2">' +
                        '<button type="button" class="btn btn-danger btn-sm deleteRow"><i class="fa-sharp fa-solid fa-trash"></i></button>' +
                        "</div>" +
                        "</div>";
                    $(".parent-col").append(newRow);
                });


                // Delete row
                $(".parent-col").on("click", ".deleteRow", function() {
                    // get the value of the deleted row's bobot input
                    var deletedBobotValue = parseInt(
                        $(this).closest(".row-question").find(".bobot").val()
                    );

                    // subtract the deletedBobotValue from the totalBobot
                    var totalBobot = parseInt($(".jumlah-bobot").val()) - deletedBobotValue;

                    // update the value of the jumlah-bobot input
                    $(".jumlah-bobot").val(totalBobot);

                    if (
                        $(".parent-col").length === 0 ||
                        ($(".jumlah-bobot").val() !== "" && totalBobot <= 0) ||
                        totalBobot < 10 ||
                        totalBobot > 100
                    ) {
                        // disable the Save button
                        $("button.save").prop("disabled", true);

                        // show the warning message
                        $(".warning-message").text(
                            "Total Bobot must be equal or greater than 100 to save the data"
                        );
                    } else {
                        // enable the Save button
                        $("button.save").prop("disabled", false);

                        // clear the warning message
                        $(".warning-message").text("");
                    }

                    // remove the deleted row
                    $(this).closest(".row-question").remove();
                });

                // Fungsi untuk menghitung jumlah poin
                function sumQuestion() {
                    var rowCount = $(".row-question").length;
                    var poin1 = 0;
                    var poin2 = 0;
                    var poin3 = 0;
                    var poin4 = 0;
                    var poin5 = 0;

                    for (var i = 1; i <= rowCount; i++) {
                        var question = $('input[name="question[' + i + ']"]:checked');
                        var nilaiValuePoin = question.val();
                        if (
                            typeof nilaiValuePoin === "string" &&
                            !isNaN(parseInt(nilaiValuePoin))
                        ) {
                            nilaiValuePoin = parseInt(nilaiValuePoin);
                            if (question.attr("id") == "question1") {
                                poin1 += nilaiValuePoin;
                            } else if (question.attr("id") == "question2") {
                                poin2 += nilaiValuePoin;
                            } else if (question.attr("id") == "question3") {
                                poin3 += nilaiValuePoin;
                            } else if (question.attr("id") == "question4") {
                                poin4 += nilaiValuePoin;
                            } else if (question.attr("id") == "question5") {
                                poin5 += nilaiValuePoin;
                            }
                        }
                    }

                    $(".poin1").val(poin1);
                    $(".poin2").val(poin2);
                    $(".poin3").val(poin3);
                    $(".poin4").val(poin4);
                    $(".poin5").val(poin5);
                }

                $(".parent-col").on("click", ".question", sumQuestion);

                function sumBobot() {
                    var totalBobot = 0;
                    $(".parent-col .bobot").each(function() {
                        var nilaiBobotValue = parseInt($(this).val());
                        if (!isNaN(nilaiBobotValue)) {
                            totalBobot += nilaiBobotValue;
                        }
                    });

                    $(".jumlah-bobot").val(totalBobot);
                    console.log("Total Bobot: " + totalBobot);

                    if (
                        $(".parent-col").length === 0 ||
                        ($(".jumlah-bobot").val() !== "" && totalBobot <= 0) ||
                        totalBobot < 100 ||
                        totalBobot > 100
                    ) {
                        // disable the Save button
                        $("button.save").prop("disabled", true);

                        // show the warning message
                        $(".warning-message").text(
                            "Total Bobot must be equal or greater than 100% to save the data"
                        );
                    } else {
                        // enable the Save button
                        $("button.save").prop("disabled", false);

                        // clear the warning message
                        $(".warning-message").text("");
                    }
                }

                // call the sumBobot function on keyup event of .bobot element
                $(".parent-col").on("keyup", ".bobot", sumBobot);

                $(".parent-col").on("keyup change", ".question, .bobot", function() {
                    var rowCount = $(".row-hitung").length;
                    var totalPoinXBobot = 0; // inisialisasi variabel total
                    $(".row-hitung").each(function(index) {
                        var resultValuePoin =
                            parseInt(
                                $(
                                    'input[name="question[' + (index + 1) + ']"]:checked'
                                ).val()
                            ) || 0;
                        var resultNilaiBobotValue =
                            parseFloat($(this).find(".bobot").val()) || 0;

                        var nilaiPersen = resultNilaiBobotValue / 100; // convert to percentage

                        var totalValue = resultValuePoin * nilaiPersen;
                        var resultTotalValuePoinXBobot = parseFloat(totalValue.toFixed(2));
                        console.log(
                            "Total Value Poin X Bobot " +
                            (index + 1) +
                            ": " +
                            resultTotalValuePoinXBobot
                        );

                        totalPoinXBobot +=
                            resultTotalValuePoinXBobot; // menambahkan nilai ke variabel total
                        var resultSum = totalPoinXBobot.toFixed(2); // memformat angka hingga 2 desimal
                        $(".total-sum").val(resultSum); // output interfaces: Total SUM: 4.30
                        console.log("Total SUM: " + resultSum); // output: Total SUM: 4.30

                        var kaliDelapanPuluPersen = (resultSum * 80) / 100;
                        var resultKaliDelapanPuluPersen = kaliDelapanPuluPersen.toFixed(
                            2); // memformat angka hingga 2 desimal
                        $(".total-presentase").val(resultKaliDelapanPuluPersen);
                        console.log("Total Persentase: " +
                            resultKaliDelapanPuluPersen); // output: Total Persentase: 3.44
                    });

                    sumQuestion();
                    sumBobot();
                });
            });
        </script>
    @endpush
</x-app-layout>
