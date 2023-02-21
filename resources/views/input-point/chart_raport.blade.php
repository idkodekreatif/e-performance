<x-app-layout title="Raport Chart">
    @push('style')
    @endpush
    <div class="row page-titles shadow">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Laporan</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Chart</a></li>
        </ol>
    </div>

    <div class="mb-2">
        <form action="" method="get" class="row g-5">
            <div class="d-flex justify-content-end align-items-center flex-wrap">
                <div class="col-auto">
                    <input type="text" name="keyword" class="form-control input-default" value=""
                        placeholder="Enter a Keyword">
                </div>
                <div class="col-auto">
                    <select name="User_Name" id="User_Name"
                        class="form-nice-select me-sm-2 default-select form-control wide">
                        <option value="">-- Select Nama --</option>
                        @if (!empty($resultGetUsersName))
                        @foreach ($resultGetUsersName as $User_Name)
                        <option value="{{ $User_Name->id }}">{{ $User_Name->name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-auto">
                    <select name="fakultas" id="fakultas"
                        class="form-nice-select me-sm-2 default-select form-control wide">
                        <option value="">-- Select Fakultas --</option>
                        <option value="FB">Fakultas Bisnis</option>
                        <option value="FK">Fakultas Kesehatan</option>
                    </select>
                </div>
                <div class="col-auto">
                    <select name="prodi" id="prodi" class="form-nice-select me-sm-2 default-select form-control wide">
                        <option value="">-- Select Prodi --</option>
                        <option value="GZ">S1 Gizi</option>
                        <option value="PR">S1 Keperawatan</option>
                        <option value="BD">D3 Kebidanan</option>
                        <option value="MN">S1 Manajemen</option>
                        <option value="AK">S1 Akuntansi</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary ml-2 shadow">Search</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title">Laporan</h4>
                </div>
                {{-- {{ dd($messagesArray) }} --}}
                <div class="card-body">
                    <canvas id="barChart_1"></canvas>
                    <div id="container"></div>
                    <div style="color: rgb(206, 206, 206)"></div>
                </div>
            </div>
        </div>
    </div>

    @push('JavaScript')
    <script>
        // var arr = @json($messagesArray);
        var arr = {!! json_encode($messagesArray) !!}
        var arrStringName = arr.map(obj => obj.name);
        var arrStringPendidikanDanPengajaran = arr.map(obj => obj.PendidikanDanPengajaran);
        var arrStringPenelitianDanKaryaIlmiah = arr.map(obj => obj.PenelitianDanKaryaIlmiah);
        var arrStringPengabdianMasyarakat = arr.map(obj => obj.PengabdianMasyarakat);
        var arrStringPengabdianInstitusiDanPengembanganDiri = arr.map(obj => obj.PengabdianInstitusiDanPengembanganDiri);
        var arrStringresult_capaian_total = arr.map(obj => obj.result_capaian_total);
        var arrStringPredikat = arr.map(obj => obj.predikat);

        // console.log(arr);
        // console.log(arrStringName);
        // console.log(arrStringNilaiKinerjaTotal);
        // console.log(arrStringPendidikanDanPengajaran);
        // console.log(arrStringPenelitianDanKaryaIlmiah);
        // console.log(arrStringPengabdianMasyarakat);
        // console.log(arrStringPengabdianInstitusiDanPengembanganDiri);
        // console.log(arrStringStandartKinerjaTotal);
        // console.log(arrStringresult_capaian_total);
        // console.log(arrStringPredikat);
    </script>

    <!-- Chart ChartJS plugin files -->
    <script src="{{ asset('Assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins-init/chartjs-aggregat.js') }}"></script>
    @endpush
</x-app-layout>
