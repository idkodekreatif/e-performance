<x-app-layout title="Form Penilaian Rektor | Ka. Lpm">
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Ka. Lpm</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('KaLpm.raport', Auth::user()->id) }}"
                    class="btn btn-primary btn-sm mb-2 float-end">Raport</a>
                <a href="{{ route('edit.KaLpm', Auth::user()->id) }}"
                    class="btn btn-primary btn-sm mb-2 mr-2 float-end">Edit</a>
            </div>
        </div>
        <form action="{{ route('store.KaLpm') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card shadow">
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
                                    <tr class="table-primary">
                                        <td>1</td>
                                        <td colspan="7" class="text-start">Orientasi Pelayanan</td>
                                    </tr>

                                    <tr>
                                        <td>1.1</td>
                                        <td>
                                            <p class="text-center">Selalu dapat menyelesaikan tugas pelayanan
                                                sebaik-baiknya dan tidak segan
                                                membantu menyelesaikan pekerjaan tambahan
                                                dengan sikap sopan dan sangat memuaskan baik untuk pelayanan internal
                                                maupun eksternal organisasi</p>
                                        </td>
                                        <td><input type="radio" class="Point1_1" name="Point1_1" id="Point1_1_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_1" name="Point1_1" id="Point1_1_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_1" name="Point1_1" id="Point1_1_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_1" name="Point1_1" id="Point1_1_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_1" name="Point1_1" id="Point1_1_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point1_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>

                                    <tr>
                                        <td>1.2</td>
                                        <td>
                                            <p class="text-center">Pada umumnya dapat menyelesaikan tugas pelayanan
                                                dengan baik dan sikap sopan serta memuaskan baik untuk pelayanan
                                                internal maupun eksternal organisasi</p>
                                        </td>
                                        <td><input type="radio" class="Point1_2" name="Point1_2" id="Point1_2_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_2" name="Point1_2" id="Point1_2_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_2" name="Point1_2" id="Point1_2_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_2" name="Point1_2" id="Point1_2_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_2" name="Point1_2" id="Point1_2_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point1_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>

                                    <tr>
                                        <td>1.3</td>
                                        <td>
                                            <p class="text-center">Ada kalanya dapat menyelesaikan tugas pelayanan
                                                dengan cukup baik dan sikap cukup sopan serta cukup memuaskan baik untuk
                                                pelayanan internal maupun eksternal organisasi</p>
                                        </td>
                                        <td><input type="radio" class="Point1_3" name="Point1_3" id="Point1_3_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_3" name="Point1_3" id="Point1_3_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_3" name="Point1_3" id="Point1_3_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_3" name="Point1_3" id="Point1_3_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_3" name="Point1_3" id="Point1_3_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point1_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>1.4</td>
                                        <td>
                                            <p class="text-center">Kurang dapat menyelesaikan tugas pelayanan dengan
                                                baik dan sikap kurang sopan serta kurang memuaskan baik untuk
                                                pelayanan internal maupun eksternal organisasi</p>
                                        </td>
                                        <td><input type="radio" class="Point1_4" name="Point1_4" id="Point1_4_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_4" name="Point1_4" id="Point1_4_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_4" name="Point1_4" id="Point1_4_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_4" name="Point1_4" id="Point1_4_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_4" name="Point1_4" id="Point1_4_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point1_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>1.5</td>
                                        <td>
                                            <p class="text-center">Tidak pernah dapat menyelesaikan tugas pelayanan
                                                dengan baik dan sikap kurang sopan serta kurang memuaskan baik untuk
                                                pelayanan internal maupun eksternal organisasi</p>
                                        </td>
                                        <td><input type="radio" class="Point1_5" name="Point1_5" id="Point1_5_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_5" name="Point1_5" id="Point1_5_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_5" name="Point1_5" id="Point1_5_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_5" name="Point1_5" id="Point1_5_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point1_5" name="Point1_5" id="Point1_5_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point1_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>

                                    <tr class="table-primary">
                                        <td>2</td>
                                        <td colspan="7" class="text-start">Integritas</td>
                                    </tr>

                                    <tr>
                                        <td>2.1</td>
                                        <td>
                                            <p class="text-center">Tidak pernah dapat menyelesaikan tugas pelayanan
                                                dengan baik dan sikap kurang sopan serta kurang memuaskan baik untuk
                                                pelayanan internal maupun eksternal organisasi</p>
                                        </td>
                                        <td><input type="radio" class="Point2_1" name="Point2_1" id="Point2_1_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_1" name="Point2_1" id="Point2_1_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_1" name="Point2_1" id="Point2_1_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_1" name="Point2_1" id="Point2_1_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_1" name="Point2_1" id="Point2_1_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point2_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>2.2</td>
                                        <td>
                                            <p class="text-center">Pada umumnya dalam melaksanakan tugas bersifat jujur,
                                                ikhlas dan tidak pernah menyalahgunakan wewenangnya tetapi berani
                                                menanggung resiko dari tindakan yang dilakukan</p>
                                        </td>
                                        <td><input type="radio" class="Point2_2" name="Point2_2" id="Point2_2_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_2" name="Point2_2" id="Point2_2_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_2" name="Point2_2" id="Point2_2_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_2" name="Point2_2" id="Point2_2_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_2" name="Point2_2" id="Point2_2_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point2_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>2.3</td>
                                        <td>
                                            <p class="text-center">Ada kalanya dalam melaksanakan tugas bersifat cukup
                                                jujur, cukup ikhlas dan kadang-kadang menyalahgunakan wewenangnya
                                                serta cukup berani menanggung resiko dari tindakan yang dilakukan</p>
                                        </td>
                                        <td><input type="radio" class="Point2_3" name="Point2_3" id="Point2_3_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_3" name="Point2_3" id="Point2_3_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_3" name="Point2_3" id="Point2_3_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_3" name="Point2_3" id="Point2_3_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_3" name="Point2_3" id="Point2_3_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point2_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>2.4</td>
                                        <td>
                                            <p class="text-center">Kurang jujur, kurang ikhlas dalam melaksanakan tugas
                                                dan sering menyalahgunakan wewenangnya tetapi kurang berani
                                                menanggung resiko dari tindakan yang dilakukan</p>
                                        </td>
                                        <td><input type="radio" class="Point2_4" name="Point2_4" id="Point2_4_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_4" name="Point2_4" id="Point2_4_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_4" name="Point2_4" id="Point2_4_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_4" name="Point2_4" id="Point2_4_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_4" name="Point2_4" id="Point2_4_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point2_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>2.5</td>
                                        <td>
                                            <p class="text-center">Tidak pernah jujur, tidak ikhlas dalam melaksanakan
                                                tugas dan selalu menyalahgunakan wewenangnya tetapi kurang berani
                                                menanggung resiko dari tindakan yang dilakukan.</p>
                                        </td>
                                        <td><input type="radio" class="Point2_5" name="Point2_5" id="Point2_5_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_5" name="Point2_5" id="Point2_5_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_5" name="Point2_5" id="Point2_5_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_5" name="Point2_5" id="Point2_5_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point2_5" name="Point2_5" id="Point2_5_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point2_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>

                                    <tr class="table-primary">
                                        <td>3</td>
                                        <td colspan="7" class="text-start">Komitmen</td>
                                    </tr>

                                    <tr>
                                        <td>3.1</td>
                                        <td>
                                            <p class="text-center">Selalu berusaha dengan sungguh-sungguh mencurahkan
                                                segala kemampuan yang ada untuk kepentingan IKBIS dari pada
                                                kepentingan pribadi atau golongan sesuai dengan tugas dan fungsi.</p>
                                        </td>
                                        <td><input type="radio" class="Point3_1" name="Point3_1" id="Point3_1_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_1" name="Point3_1" id="Point3_1_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_1" name="Point3_1" id="Point3_1_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_1" name="Point3_1" id="Point3_1_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_1" name="Point3_1" id="Point3_1_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point3_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>3.2</td>
                                        <td>
                                            <p class="text-center">Pada umumnya berusaha dengan sungguh-sungguh
                                                mencurahkan segala kemampuan yang ada untuk kepentingan IKBIS dari pada
                                                kepentingan pribadi atau golongan sesuai dengan tugas dan fungsi.</p>
                                        </td>
                                        <td><input type="radio" class="Point3_2" name="Point3_2" id="Point3_2_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_2" name="Point3_2" id="Point3_2_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_2" name="Point3_2" id="Point3_2_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_2" name="Point3_2" id="Point3_2_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_2" name="Point3_2" id="Point3_2_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point3_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>3.3</td>
                                        <td>
                                            <p class="text-center">Kadang-kadang berusaha dengan sungguh-sungguh
                                                mencurahkan segala kemampuan yang ada untuk kepentingan IKBIS dari pada
                                                kepentingan pribadi atau golongan sesuai dengan tugas dan fungsi.</p>
                                        </td>
                                        <td><input type="radio" class="Point3_3" name="Point3_3" id="Point3_3_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_3" name="Point3_3" id="Point3_3_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_3" name="Point3_3" id="Point3_3_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_3" name="Point3_3" id="Point3_3_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_3" name="Point3_3" id="Point3_3_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point3_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>3.4</td>
                                        <td>
                                            <p class="text-center">Kurang berusaha dalam bersungguh-sungguh mencurahkan
                                                segala kemampuan yang ada untuk kepentingan IKBIS dari pada
                                                kepentingan pribadi atau golongan sesuai dengan tugas dan fungsi.</p>
                                        </td>
                                        <td><input type="radio" class="Point3_4" name="Point3_4" id="Point3_4_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_4" name="Point3_4" id="Point3_4_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_4" name="Point3_4" id="Point3_4_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_4" name="Point3_4" id="Point3_4_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_4" name="Point3_4" id="Point3_4_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point3_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>3.5</td>
                                        <td>
                                            <p class="text-center">Tidak pernah berusaha dengan sungguh-sungguh
                                                mencurahkan segala kemampuan yang ada untuk kepentingan IKBIS dari pada
                                                kepentingan pribadi atau golongan sesuai dengan tugas dan fungsi.</p>
                                        </td>
                                        <td><input type="radio" class="Point3_5" name="Point3_5" id="Point3_5_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_5" name="Point3_5" id="Point3_5_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_5" name="Point3_5" id="Point3_5_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_5" name="Point3_5" id="Point3_5_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point3_5" name="Point3_5" id="Point3_5_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point3_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>

                                    <tr class="table-primary">
                                        <td>4</td>
                                        <td colspan="7" class="text-start">Disiplin</td>
                                    </tr>

                                    <tr>
                                        <td>4.1</td>
                                        <td>
                                            <p class="text-center">Selalu mentaati segala aturan yang berlaku di IKBIS
                                                dengan rasa tanggung jawab dan selalu mentaati ketentuan jam kerja
                                                serta mampu menyimpan dan/ atau memelihara barang-barang milik Institut
                                                yang dipercayakan kepadanya dengan
                                                sebaik-baiknya.</p>
                                        </td>
                                        <td><input type="radio" class="Point4_1" name="Point4_1" id="Point4_1_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_1" name="Point4_1" id="Point4_1_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_1" name="Point4_1" id="Point4_1_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_1" name="Point4_1" id="Point4_1_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_1" name="Point4_1" id="Point4_1_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point4_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>4.2</td>
                                        <td>
                                            <p class="text-center">Pada umumnya mentaati segala aturan yang berlaku di
                                                IKBIS dengan rasa tanggung jawab dan selalu mentaati ketentuan jam
                                                kerja serta mampu menyimpan dan/ atau memelihara barang-barang milik
                                                Institut yang dipercayakan kepadanya dengan baik.</p>
                                        </td>
                                        <td><input type="radio" class="Point4_2" name="Point4_2" id="Point4_2_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_2" name="Point4_2" id="Point4_2_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_2" name="Point4_2" id="Point4_2_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_2" name="Point4_2" id="Point4_2_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_2" name="Point4_2" id="Point4_2_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point4_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>4.3</td>
                                        <td>
                                            <p class="text-center">Adakalanya mentaati segala aturan yang berlaku di
                                                IKBIS dengan rasa tanggung jawab dan selalu mentaati ketentuan jam
                                                kerja serta mampu menyimpan dan/ atau memelihara barang-barang milik
                                                Institut yang dipercayakan kepadanya dengan cukup
                                                baik, serta tidak masuk atau terlambat masuk kerja dan lebih cepat
                                                pulang dari ketentuan jam kerja tanpa alasan yang sah
                                                selama 1 sampai dengan 5 hari kerja</p>
                                        </td>
                                        <td><input type="radio" class="Point4_3" name="Point4_3" id="Point4_3_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_3" name="Point4_3" id="Point4_3_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_3" name="Point4_3" id="Point4_3_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_3" name="Point4_3" id="Point4_3_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_3" name="Point4_3" id="Point4_3_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point4_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>4.4</td>
                                        <td>
                                            <p class="text-center">Kurang mentaati segala aturan yang berlaku di IKBIS
                                                dengan rasa tanggung jawab dan selalu mentaati ketentuan jam kerja
                                                serta mampu menyimpan dan/ atau memelihara barang-barang milik Institut
                                                yang dipercayakan kepadanya dengan cukup baik,
                                                serta tidak masuk atau terlambat masuk kerja dan lebih cepat pulang dari
                                                ketentuan jam kerja tanpa alasan yang sah
                                                selama 6 sampai dengan 12 hari kerja</p>
                                        </td>
                                        <td><input type="radio" class="Point4_4" name="Point4_4" id="Point4_4_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_4" name="Point4_4" id="Point4_4_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_4" name="Point4_4" id="Point4_4_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_4" name="Point4_4" id="Point4_4_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_4" name="Point4_4" id="Point4_4_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point4_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>4.5</td>
                                        <td>
                                            <p class="text-center">Tidak pernah mentaati segala aturan yang berlaku di
                                                IKBIS dengan rasa tanggung jawab dan selalu mentaati ketentuan jam
                                                kerja serta mampu menyimpan dan/ atau memelihara barang-barang milik
                                                Institut yang dipercayakan kepadanya dengan cukup
                                                baik, serta tidak masuk atau terlambat masuk kerja dan lebih cepat
                                                pulang dari ketentuan jam kerja tanpa alasan yang sah
                                                selama 13 sampai dengan 22 hari kerja</p>
                                        </td>
                                        <td><input type="radio" class="Point4_5" name="Point4_5" id="Point4_5_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_5" name="Point4_5" id="Point4_5_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_5" name="Point4_5" id="Point4_5_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_5" name="Point4_5" id="Point4_5_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point4_5" name="Point4_5" id="Point4_5_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point4_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>

                                    <tr class="table-primary">
                                        <td>5</td>
                                        <td colspan="7" class="text-start">Kerjasama</td>
                                    </tr>

                                    <tr>
                                        <td>5.1</td>
                                        <td>
                                            <p class="text-center">Selalu mampu bekerja sama dengan rekan kerja, atasan,
                                                bawahan baik di dalam maupun di luar organisasi serta menghargai
                                                dan menerima pendapat orang lain, bersedia menerima keputusan yang
                                                diambil secara sah yang telah menjadi keputusan
                                                bersama</p>
                                        </td>
                                        <td><input type="radio" class="Point5_1" name="Point5_1" id="Point5_1_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_1" name="Point5_1" id="Point5_1_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_1" name="Point5_1" id="Point5_1_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_1" name="Point5_1" id="Point5_1_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_1" name="Point5_1" id="Point5_1_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point5_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>5.2</td>
                                        <td>
                                            <p class="text-center">Pada umumnya mampu bekerja sama dengan rekan kerja,
                                                atasan, bawahan baik di dalam maupun di luar organisasi serta
                                                menghargai dan menerima pendapat orang lain, bersedia menerima keputusan
                                                yang diambil secara sah yang telah menjadi
                                                keputusan bersama</p>
                                        </td>
                                        <td><input type="radio" class="Point5_2" name="Point5_2" id="Point5_2_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_2" name="Point5_2" id="Point5_2_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_2" name="Point5_2" id="Point5_2_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_2" name="Point5_2" id="Point5_2_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_2" name="Point5_2" id="Point5_2_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point5_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>5.3</td>
                                        <td>
                                            <p class="text-center">Ada kalanya mampu bekerja sama dengan rekan kerja,
                                                atasan, bawahan baik di dalam maupun di luar organisasi serta ada
                                                kalanya menghargai dan menerima pendapat orang lain, kadang-kadang
                                                bersedia menerima keputusan yang diambil secara sah
                                                yang telah menjadi keputusan bersama</p>
                                        </td>
                                        <td><input type="radio" class="Point5_3" name="Point5_3" id="Point5_3_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_3" name="Point5_3" id="Point5_3_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_3" name="Point5_3" id="Point5_3_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_3" name="Point5_3" id="Point5_3_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_3" name="Point5_3" id="Point5_3_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point5_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>5.4</td>
                                        <td>
                                            <p class="text-center">Kurang mampu bekerja sama dengan rekan kerja, atasan,
                                                bawahan baik di dalam maupun di luar organisasi serta kurang
                                                menghargai dan menerima pendapat orang lain, kurang bersedia menerima
                                                keputusan yang diambil secara sah yang telah
                                                menjadi keputusan bersama</p>
                                        </td>
                                        <td><input type="radio" class="Point5_4" name="Point5_4" id="Point5_4_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_4" name="Point5_4" id="Point5_4_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_4" name="Point5_4" id="Point5_4_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_4" name="Point5_4" id="Point5_4_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_4" name="Point5_4" id="Point5_4_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point5_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>5.5</td>
                                        <td>
                                            <p class="text-center">Tidak pernah mampu bekerja sama dengan rekan kerja,
                                                atasan, bawahan baik di dalam maupun di luar organisasi serta tidak
                                                menghargai dan menerima pendapat orang lain, tidak bersedia menerima
                                                keputusan yang diambil secara sah yang telah
                                                menjadi keputusan bersama</p>
                                        </td>
                                        <td><input type="radio" class="Point5_5" name="Point5_5" id="Point5_5_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_5" name="Point5_5" id="Point5_5_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_5" name="Point5_5" id="Point5_5_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_5" name="Point5_5" id="Point5_5_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point5_5" name="Point5_5" id="Point5_5_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point5_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>

                                    <tr class="table-primary">
                                        <td>6</td>
                                        <td colspan="7" class="text-start">Kepemimpinan (Hanya yang menduduki Jabatan
                                            Struktural)</td>
                                    </tr>

                                    <tr>
                                        <td>6.1</td>
                                        <td>
                                            <p class="text-center">Selalu bertindak tegas dan tidak memihak, memberikan
                                                teladan yang baik, kemampuan menggerakkan tim kerja untuk mencapai
                                                kinerja yang tinggi, mampu menggugah semangat dan menggerakkan bawahan
                                                dalam melaksanakan tugas serta mampu mengambil
                                                keputusan dengan cepat dan tepat</p>
                                        </td>
                                        <td><input type="radio" class="Point6_1" name="Point6_1" id="Point6_1_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_1" name="Point6_1" id="Point6_1_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_1" name="Point6_1" id="Point6_1_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_1" name="Point6_1" id="Point6_1_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_1" name="Point6_1" id="Point6_1_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point6_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>6.2</td>
                                        <td>
                                            <p class="text-center">Pada umumnya bertindak tegas dan tidak memihak,
                                                memberikan teladan yang baik, kemampuan menggerakkan tim kerja untuk
                                                mencapai kinerja yang tinggi, mampu menggugah semangat dan menggerakkan
                                                bawahan dalam melaksanakan tugas serta mampu
                                                mengambil keputusan dengan cepat dan tepat</p>
                                        </td>
                                        <td><input type="radio" class="Point6_2" name="Point6_2" id="Point6_2_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_2" name="Point6_2" id="Point6_2_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_2" name="Point6_2" id="Point6_2_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_2" name="Point6_2" id="Point6_2_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_2" name="Point6_2" id="Point6_2_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point6_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>6.3</td>
                                        <td>
                                            <p class="text-center">Adakalanya bertindak tegas dan tidak memihak,
                                                memberikan teladan, cukup mampu menggerakkan tim kerja untuk mencapai
                                                kinerja yang tinggi, serta cukup mampu menggugah semangat dan
                                                menggerakkan bawahan dalam melaksanakan tugas serta cukup
                                                mampu mengambil keputusan dengan cepat dan tepat</p>
                                        </td>
                                        <td><input type="radio" class="Point6_3" name="Point6_3" id="Point6_3_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_3" name="Point6_3" id="Point6_3_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_3" name="Point6_3" id="Point6_3_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_3" name="Point6_3" id="Point6_3_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_3" name="Point6_3" id="Point6_3_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point6_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>6.4</td>
                                        <td>
                                            <p class="text-center">Kurang bertindak tegas dan terkadang memihak, kurang
                                                mampu memberikan teladan yang baik, kurang mampu menggerakkan tim
                                                kerja untuk mencapai kinerja yang tinggi, serta kurang mampu menggugah
                                                semangat dan menggerakkan bawahan dalam
                                                melaksanakan tugas serta kurang mampu mengambil keputusan dengan cepat
                                                dan tepat</p>
                                        </td>
                                        <td><input type="radio" class="Point6_4" name="Point6_4" id="Point6_4_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_4" name="Point6_4" id="Point6_4_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_4" name="Point6_4" id="Point6_4_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_4" name="Point6_4" id="Point6_4_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_4" name="Point6_4" id="Point6_4_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point6_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>
                                    <tr>
                                        <td>6.5</td>
                                        <td>
                                            <p class="text-center">Tidak pernah bertindak tegas dan memihak, tidak
                                                memberikan teladan yang baik, tidak mampu 1 Buruk 12 menggerakkan tim
                                                kerja untuk mencapai kinerja yang tinggi, tidak mampu menggugah semangat
                                                dan menggerakkan bawahan dalam melaksanakan
                                                tugas serta tidak mampu mengambil keputusan dengan cepat dan tepat</p>
                                        </td>
                                        <td><input type="radio" class="Point6_5" name="Point6_5" id="Point6_5_1"
                                                value="1" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_5" name="Point6_5" id="Point6_5_2"
                                                value="2" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_5" name="Point6_5" id="Point6_5_3"
                                                value="3" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_5" name="Point6_5" id="Point6_5_4"
                                                value="4" onclick="sumPoint();">
                                        </td>
                                        <td><input type="radio" class="Point6_5" name="Point6_5" id="Point6_5_5"
                                                value="5" onclick="sumPoint();">
                                        </td>
                                        @error('Point6_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </tr>

                                    <tr class="table-primary">
                                        <td colspan="8 text-center">TOTAL NILAI KINERJA PERILAKU</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"></td>
                                        <td><label for="">Point 1</label><input id="output_point_1"
                                                name="output_point_1" type="number" value="0" aria-label="output_point"
                                                readonly></td>
                                        <td><label for="">Point 2</label><input id="output_point_2"
                                                name="output_point_2" type="number" value="0" aria-label="output_point"
                                                readonly></td>
                                        <td><label for="">Point 3</label><input id="output_point_3"
                                                name="output_point_3" type="number" value="0" aria-label="output_point"
                                                readonly></td>
                                        <td><label for="">Point 4</label><input id="output_point_4"
                                                name="output_point_4" type="number" value="0" aria-label="output_point"
                                                readonly></td>
                                        <td><label for="">Point 5</label><input id="output_point_5"
                                                name="output_point_5" type="number" value="0" aria-label="output_point"
                                                readonly></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="table-primary"><label for="">Total</label><input
                                                id="output_total_point_kinerja_perilaku"
                                                name="output_total_point_kinerja_perilaku" type="number" value="0"
                                                aria-label="output_total_point_kinerja_perilaku" readonly></td>
                                        <td class="table-primary"><label for="">Nilai Rata-rata</label><input
                                                id="output_total_nilai_rata_rata_kinerja_perilaku"
                                                name="output_total_nilai_rata_rata_kinerja_perilaku" type="number"
                                                value="0" aria-label="output_total_nilai_rata_rata_kinerja_perilaku"
                                                readonly></td>
                                        <td class="table-primary"><label for="">Nilai Sementara</label><input
                                                id="output_total_sementara_kinerja_perilaku"
                                                name="output_total_sementara_kinerja_perilaku" type="number" value="0"
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
                                        <td>Menetapkan visi, misi, tujuan, sasaran dan tonggak-tonggak capaian Lembaga Penjaminan Mutu.</td>
                                        <td><input type="radio" class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
                                                id="kinerja_kompetensi_1_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_1" name="kinerja_kompetensi_1"
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

                                            @error('file_kinerja_kompetensi_1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Mengkoordinasikan dan mensosialisasikan visi, misi, tujuan, sasaran, tonggak-tonggak capaian di bidang penjaminan mutu;</td>
                                        <td><input type="radio" class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
                                                id="kinerja_kompetensi_2_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_2" name="kinerja_kompetensi_2"
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

                                            @error('file_kinerja_kompetensi_2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Memimpin implimentasi sistem penjaminan mutu internal maupun eksternal;</td>
                                        <td><input type="radio" class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
                                                id="kinerja_kompetensi_3_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_3" name="kinerja_kompetensi_3"
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

                                            @error('file_kinerja_kompetensi_3')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Melakukan pembinaan sivitas akademika dalam penjaminan mutu</td>
                                        <td><input type="radio" class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
                                                id="kinerja_kompetensi_4_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_4" name="kinerja_kompetensi_4"
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

                                            @error('file_kinerja_kompetensi_4')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Membina kerjasama dalam penjaminan mutu dengan pemangku kepentingan;</td>
                                        <td><input type="radio" class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
                                                id="kinerja_kompetensi_5_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_5" name="kinerja_kompetensi_5"
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

                                            @error('file_kinerja_kompetensi_5')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Melakukan pengembangan dan inovasi pengelolaan bidang penjaminan mutu.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
                                                id="kinerja_kompetensi_6_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_6" name="kinerja_kompetensi_6"
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

                                            @error('file_kinerja_kompetensi_6')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Menjamin terlaksananya siklus Sistem Penjaminan Mutu Internal (SPMI) dan Sistem Penjaminan Mutu ekstrenal (SPME).
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
                                                id="kinerja_kompetensi_7_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_7" name="kinerja_kompetensi_7"
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

                                            @error('file_kinerja_kompetensi_7')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Menindaklanjuti keluhan-keluhan stakeholder di bidang penjaminan mutu.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
                                                id="kinerja_kompetensi_8_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_8" name="kinerja_kompetensi_8"
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

                                            @error('file_kinerja_kompetensi_8')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Melakukan koordinasi dengan Pimpinan IKBIS terkait pelaksanaan Sistem Penjaminan Mutu
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_1" value="1" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_2" value="2" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_3" value="3" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
                                                id="kinerja_kompetensi_9_4" value="4" onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_9" name="kinerja_kompetensi_9"
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

                                            @error('file_kinerja_kompetensi_9')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Merencanakan program baik jangka menengah dan panjang dalam kegiatan di bidang penjaminan mutu.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_10"
                                                name="kinerja_kompetensi_10" id="kinerja_kompetensi_10_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_10"
                                                name="kinerja_kompetensi_10" id="kinerja_kompetensi_10_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_10"
                                                name="kinerja_kompetensi_10" id="kinerja_kompetensi_10_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_10"
                                                name="kinerja_kompetensi_10" id="kinerja_kompetensi_10_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_10"
                                                name="kinerja_kompetensi_10" id="kinerja_kompetensi_10_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_10')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Melaksanakan, memonitor dan mengevaluasi semua kegiatan di bidang penjaminan mutu.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_11"
                                                name="kinerja_kompetensi_11" id="kinerja_kompetensi_11_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_11"
                                                name="kinerja_kompetensi_11" id="kinerja_kompetensi_11_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_11"
                                                name="kinerja_kompetensi_11" id="kinerja_kompetensi_11_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_11"
                                                name="kinerja_kompetensi_11" id="kinerja_kompetensi_11_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_11"
                                                name="kinerja_kompetensi_11" id="kinerja_kompetensi_11_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_11')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Mengkoordinasikan, mensosialisasikan dan membudayakan semua kegiatan di bidang penjaminan mutu.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_10"
                                                name="kinerja_kompetensi_12" id="kinerja_kompetensi_12_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_12"
                                                name="kinerja_kompetensi_12" id="kinerja_kompetensi_12_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_12"
                                                name="kinerja_kompetensi_12" id="kinerja_kompetensi_12_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_12"
                                                name="kinerja_kompetensi_12" id="kinerja_kompetensi_12_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_12"
                                                name="kinerja_kompetensi_12" id="kinerja_kompetensi_12_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_12')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Menyiapkan konsep SPMI/SPME dan perangkat kelengkapannya, serta menyusunan perangkat monitoring dan evaluasi SPMI/SPME.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_13"
                                                name="kinerja_kompetensi_13" id="kinerja_kompetensi_13_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_13"
                                                name="kinerja_kompetensi_13" id="kinerja_kompetensi_13_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_13"
                                                name="kinerja_kompetensi_13" id="kinerja_kompetensi_13_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_13"
                                                name="kinerja_kompetensi_13" id="kinerja_kompetensi_13_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_13"
                                                name="kinerja_kompetensi_13" id="kinerja_kompetensi_13_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_13')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Mengawasi terselenggaranya monitoring dan evaluasi pelaksanaan SPMI/SPME di semua unit kerja
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_14"
                                                name="kinerja_kompetensi_14" id="kinerja_kompetensi_14_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_14"
                                                name="kinerja_kompetensi_14" id="kinerja_kompetensi_14_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_14"
                                                name="kinerja_kompetensi_14" id="kinerja_kompetensi_14_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_14"
                                                name="kinerja_kompetensi_14" id="kinerja_kompetensi_14_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_14"
                                                name="kinerja_kompetensi_14" id="kinerja_kompetensi_14_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_14')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Berkoordinasi dengan Unit lain terkait dengan perencanaan, penyusunan dan pelaksanaan penjaminan mutu;
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_15"
                                                name="kinerja_kompetensi_15" id="kinerja_kompetensi_15_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_15"
                                                name="kinerja_kompetensi_15" id="kinerja_kompetensi_15_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_15"
                                                name="kinerja_kompetensi_15" id="kinerja_kompetensi_15_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_15"
                                                name="kinerja_kompetensi_15" id="kinerja_kompetensi_15_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_15"
                                                name="kinerja_kompetensi_15" id="kinerja_kompetensi_15_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_15')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Merencanakan dan memimpin audit penjaminan mutu internal secara periodic.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_16"
                                                name="kinerja_kompetensi_16" id="kinerja_kompetensi_16_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_16"
                                                name="kinerja_kompetensi_16" id="kinerja_kompetensi_16_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_16"
                                                name="kinerja_kompetensi_16" id="kinerja_kompetensi_16_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_16"
                                                name="kinerja_kompetensi_16" id="kinerja_kompetensi_16_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_16"
                                                name="kinerja_kompetensi_16" id="kinerja_kompetensi_16_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_16')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Menyampaikan hasil pelaksanaan audit mutu internal ke Yayasan/Rektor.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_17"
                                                name="kinerja_kompetensi_17" id="kinerja_kompetensi_17_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_17"
                                                name="kinerja_kompetensi_17" id="kinerja_kompetensi_17_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_17"
                                                name="kinerja_kompetensi_17" id="kinerja_kompetensi_17_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_17"
                                                name="kinerja_kompetensi_17" id="kinerja_kompetensi_17_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_17"
                                                name="kinerja_kompetensi_17" id="kinerja_kompetensi_17_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_17')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Bersama Rektor merumuskan tindakan perbaikan sebagai umpan balik untuk peningkatan mutu berkelanjutan.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_18"
                                                name="kinerja_kompetensi_18" id="kinerja_kompetensi_18_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_18"
                                                name="kinerja_kompetensi_18" id="kinerja_kompetensi_18_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_18"
                                                name="kinerja_kompetensi_18" id="kinerja_kompetensi_18_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_18"
                                                name="kinerja_kompetensi_18" id="kinerja_kompetensi_18_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_18"
                                                name="kinerja_kompetensi_18" id="kinerja_kompetensi_18_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_18')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Mengkoordinasikan dan Merencanakan persiapan akreditasi Institusi dan akreditasi Program Studi
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_19"
                                                name="kinerja_kompetensi_19" id="kinerja_kompetensi_19_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_19"
                                                name="kinerja_kompetensi_19" id="kinerja_kompetensi_19_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_19"
                                                name="kinerja_kompetensi_19" id="kinerja_kompetensi_19_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_19"
                                                name="kinerja_kompetensi_19" id="kinerja_kompetensi_19_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_19"
                                                name="kinerja_kompetensi_19" id="kinerja_kompetensi_19_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_19')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Mengkoordinasikan dan memimpin pelaksanaan assesmen lapangan akreditasi institusi dan akreditasi Program Studi.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_20"
                                                name="kinerja_kompetensi_20" id="kinerja_kompetensi_20_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_20"
                                                name="kinerja_kompetensi_20" id="kinerja_kompetensi_20_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_20"
                                                name="kinerja_kompetensi_20" id="kinerja_kompetensi_20_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_20"
                                                name="kinerja_kompetensi_20" id="kinerja_kompetensi_20_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_20"
                                                name="kinerja_kompetensi_20" id="kinerja_kompetensi_20_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_20')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Mengendalikan dan mendistribusikan dokumen SPMI/SPME
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_21"
                                                name="kinerja_kompetensi_21" id="kinerja_kompetensi_21_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_21"
                                                name="kinerja_kompetensi_21" id="kinerja_kompetensi_21_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_21"
                                                name="kinerja_kompetensi_21" id="kinerja_kompetensi_21_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_21"
                                                name="kinerja_kompetensi_21" id="kinerja_kompetensi_21_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_21"
                                                name="kinerja_kompetensi_21" id="kinerja_kompetensi_21_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_21')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>Merumuskan strategi penyusunan asssesmen dan informasi mutu berdasar arah kebijakan lembaga yang meliputi bidang
                                        akademik, pengelolaan sumber daya,kemahasiswaan, alumni, promosi, kerja sama, organisasi dan penjaminan mutu;
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_22"
                                                name="kinerja_kompetensi_22" id="kinerja_kompetensi_22_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_22"
                                                name="kinerja_kompetensi_22" id="kinerja_kompetensi_22_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_22"
                                                name="kinerja_kompetensi_22" id="kinerja_kompetensi_22_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_22"
                                                name="kinerja_kompetensi_22" id="kinerja_kompetensi_22_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_22"
                                                name="kinerja_kompetensi_22" id="kinerja_kompetensi_22_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_22')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Melakukan pengarsipan seluruh dokumen produk kegiatan dalam bentuk hardcopy maupun softcopy.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_23"
                                                name="kinerja_kompetensi_23" id="kinerja_kompetensi_23_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_23"
                                                name="kinerja_kompetensi_23" id="kinerja_kompetensi_23_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_23"
                                                name="kinerja_kompetensi_23" id="kinerja_kompetensi_23_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_23"
                                                name="kinerja_kompetensi_23" id="kinerja_kompetensi_23_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_23"
                                                name="kinerja_kompetensi_23" id="kinerja_kompetensi_23_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_23')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Memastikan dokumen SPMI dan SPME tersusun dengan baik di seluruh unit.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_24"
                                                name="kinerja_kompetensi_24" id="kinerja_kompetensi_24_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_24"
                                                name="kinerja_kompetensi_24" id="kinerja_kompetensi_24_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_24"
                                                name="kinerja_kompetensi_24" id="kinerja_kompetensi_24_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_24"
                                                name="kinerja_kompetensi_24" id="kinerja_kompetensi_24_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_24"
                                                name="kinerja_kompetensi_24" id="kinerja_kompetensi_24_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_24')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>Melaksanakan pengembangan dan inovasi sistem penjaminan mutu internal dan sistem penjamina mutu eksternal berbasis
                                        teknologi informasi dan komunikasi;
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_25"
                                                name="kinerja_kompetensi_25" id="kinerja_kompetensi_25_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_25"
                                                name="kinerja_kompetensi_25" id="kinerja_kompetensi_25_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_25"
                                                name="kinerja_kompetensi_25" id="kinerja_kompetensi_25_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_25"
                                                name="kinerja_kompetensi_25" id="kinerja_kompetensi_25_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_25"
                                                name="kinerja_kompetensi_25" id="kinerja_kompetensi_25_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_25')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Melaksanakan monitoring dan evaaluasi terhadap pelaksanaan Sistem Penjaminan Mutu SPMI/SPME di seluruh unit;
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_26"
                                                name="kinerja_kompetensi_26" id="kinerja_kompetensi_26_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_26"
                                                name="kinerja_kompetensi_26" id="kinerja_kompetensi_26_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_26"
                                                name="kinerja_kompetensi_26" id="kinerja_kompetensi_26_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_26"
                                                name="kinerja_kompetensi_26" id="kinerja_kompetensi_26_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_26"
                                                name="kinerja_kompetensi_26" id="kinerja_kompetensi_26_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_26')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>Merencanakan, melaksanakan dan melaporkan kegiatan Audit Mutu Internal (AMI) berbasis SPMI/SPME di lingkungan IKBIS;
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_27"
                                                name="kinerja_kompetensi_27" id="kinerja_kompetensi_27_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_27"
                                                name="kinerja_kompetensi_27" id="kinerja_kompetensi_27_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_27"
                                                name="kinerja_kompetensi_27" id="kinerja_kompetensi_27_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_27"
                                                name="kinerja_kompetensi_27" id="kinerja_kompetensi_27_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_27"
                                                name="kinerja_kompetensi_27" id="kinerja_kompetensi_27_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_27')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>Menfasilitasi dan mendampingi pengajuan pengusulan program studi baru;
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_28"
                                                name="kinerja_kompetensi_28" id="kinerja_kompetensi_28_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_28"
                                                name="kinerja_kompetensi_28" id="kinerja_kompetensi_28_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_28"
                                                name="kinerja_kompetensi_28" id="kinerja_kompetensi_28_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_28"
                                                name="kinerja_kompetensi_28" id="kinerja_kompetensi_28_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_28"
                                                name="kinerja_kompetensi_28" id="kinerja_kompetensi_28_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_28')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Menyusun laporan lembaga penjaminan mutu sebagai pertanggung jawaban kepada atasan;
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_29"
                                                name="kinerja_kompetensi_29" id="kinerja_kompetensi_29_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_29"
                                                name="kinerja_kompetensi_29" id="kinerja_kompetensi_29_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_29"
                                                name="kinerja_kompetensi_29" id="kinerja_kompetensi_29_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_29"
                                                name="kinerja_kompetensi_29" id="kinerja_kompetensi_29_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_29"
                                                name="kinerja_kompetensi_29" id="kinerja_kompetensi_29_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_29')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Menyusun rencana kerja dan anggaran tahunan (RKAT) pada bidangnya.
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_30"
                                                name="kinerja_kompetensi_30" id="kinerja_kompetensi_30_1" value="1"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_30"
                                                name="kinerja_kompetensi_30" id="kinerja_kompetensi_30_2" value="2"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_30"
                                                name="kinerja_kompetensi_30" id="kinerja_kompetensi_30_3" value="3"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_30"
                                                name="kinerja_kompetensi_30" id="kinerja_kompetensi_30_4" value="4"
                                                onclick="sum();">
                                        </td>
                                        <td><input type="radio" class="kinerja_kompetensi_30"
                                                name="kinerja_kompetensi_30" id="kinerja_kompetensi_30_5" value="5"
                                                onclick="sum();">
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

                                            @error('file_kinerja_kompetensi_30')
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
                                        <td><label for="">Point 1</label><input id="output_point_kinerja_kompetensi_1"
                                                name="output_point_kinerja_kompetensi_1" type="number" value="0"
                                                aria-label="output_point" readonly>
                                        </td>
                                        <td><label for="">Point 2</label><input id="output_point_kinerja_kompetensi_2"
                                                name="output_point_kinerja_kompetensi_2" type="number" value="0"
                                                aria-label="output_point" readonly>
                                        </td>
                                        <td><label for="">Point 3</label><input id="output_point_kinerja_kompetensi_3"
                                                name="output_point_kinerja_kompetensi_3" type="number" value="0"
                                                aria-label="output_point" readonly>
                                        </td>
                                        <td><label for="">Point 4</label><input id="output_point_kinerja_kompetensi_4"
                                                name="output_point_kinerja_kompetensi_4" type="number" value="0"
                                                aria-label="output_point" readonly>
                                        </td>
                                        <td><label for="">Point 5</label><input id="output_point_kinerja_kompetensi_5"
                                                name="output_point_kinerja_kompetensi_5" type="number" value="0"
                                                aria-label="output_point" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="table-primary"><label for="">Total</label><input
                                                id="output_total_point_kinerja_kompetensi"
                                                name="output_total_point_kinerja_kompetensi" type="number" value="0"
                                                aria-label="output_total_point_kinerja_kompetensi" readonly></td>
                                        <td class="table-primary"><label for="">Nilai Rata-rata</label><input
                                                id="output_total_nilai_rata_rata_kinerja_kompetensi"
                                                name="output_total_nilai_rata_rata_kinerja_kompetensi" type="number"
                                                value="0" aria-label="output_total_nilai_rata_rata_kinerja_kompetensi"
                                                readonly></td>
                                        <td class="table-primary"><label for="">Nilai Sementara</label><input
                                                id="output_total_sementara_kinerja_kompetensi"
                                                name="output_total_sementara_kinerja_kompetensi" type="number" value="0"
                                                aria-label="output_total_sementara_kinerja_kompetensi" readonly></td>
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
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @push('JavaScript')
    <script src="{{ asset('Assets/js/itisar/rektor/KaLpm/PointKinerjaPerilaku.js') }}"></script>
    <script src="{{ asset('Assets/js/itisar/rektor/KaLpm/PointKinerjaKompetensi.js') }}"></script>
    <script src="{{ asset('Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('Assets/vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins-init/select2-init.js') }}"></script>
    <script src="{{ asset('Assets/js/custom.min.js') }}"></script>
    @endpush
</x-app-layout>
