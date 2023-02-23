<x-app-layout title="Preview">
    @push('style')
    @endpush

    <div id="my-form" class="col-xl col-lg">
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
                                <?php
                                    $name = $data->name;
                                    $email = $data->email;
                                ?>
                                <td>
                                    <?php echo $name  ?>
                                </td>
                                <td>
                                    <?php echo $email  ?>
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
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Total Skor Pendidikan dan Pengajaran</label>
                                    <input id="" name="" type="number" value="{{ $data->TotalSkorPendidikanPointA }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Pendidikan dan Pengajaran</label>
                                    <input id="" name="" type="number" value="{{ $data->nilaiPendidikandanPengajaran }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Tambah Pendidikan dan Pengajaran</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiTambahPendidikanDanPengajaran }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Total Pendidikan & Pengajaran</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiTotalPendidikanDanPengajaran }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point B</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Total Skor Penelitian</label>
                                    <input id="" name="" type="number" value="{{ $data->TotalSkorPenelitianPointB }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Penelitian</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiPenelitian }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Tambah Penelitian</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiTambahPenelitian }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Total Penelitian & Karya Ilmiah</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiTotalPenelitiandanKaryaIlmiah }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point C</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Total Skor Pengabdian Kepada Masyarakat</label>
                                    <input id="" name="" type="number" value="{{ $data->TotalSkorPengabdianKepadaMasyarakat }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Pengabdian Kepada Masyarakat</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiPengabdianKepadaMasyarakat }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Tambah Pengabdian kepada Masyarakat</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiTambahPengabdianKepadaMasyarakat }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Total Pengabdian Kepada Masyarakat</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiTotalPengabdianKepadaMasyarakat }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point D</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Total Skor Unsur Penunjang</label>
                                    <input id="" name="" type="number" value="{{ $data->TotalSkorUnsurPenunjang }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Unsur Penunjang</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiUnsurPenunjang }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Tambah Unsur Penunjang</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiTambahUnsurPenunjang }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Total Unsur Penunjang</label>
                                    <input id="" name="" type="number" value="{{ $data->ResultSumNilaiTotalUnsurPenunjang }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Point E</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Total Skor Unsur Pengabdian kepada Institusi dan Pengembangan Diri</label>
                                    <input id="" name="" type="number" value="{{ $data->SumSkor }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Total Unsur Pengabdian kpd Institusi dan Pengembangan Diri</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiUnsurPengabdian }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                {{-- <td>
                                    <label for="">Nilai Tambah Unsur Penunjang</label>
                                    <input id="" name="" type="number" value="{{ $data->NilaiTambahUnsurPenunjang }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Total Unsur Penunjang</label>
                                    <input id="" name="" type="number" value="{{ $data->ResultSumNilaiTotalUnsurPenunjang }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td> --}}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="{{ route('point-E') }}" class="btn btn-primary float-left">Kembali</a>
        <a href="{{ route('raport', Auth::user()->id) }}" class="btn btn-primary" onclick="event.preventDefault(); confirmSubmit();">Raport</a>
    </div>

    @push('JavaScript')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmSubmit() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan meninggalkan halaman ini.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ya',
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
