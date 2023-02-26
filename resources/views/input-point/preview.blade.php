<x-app-layout title="Preview">
    @push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
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
                                    <input id="" name="" type="number" value="{{ number_format($data->TotalSkorPendidikanPointA, 3) }}" class="form-control"
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
                                    <input id="" name="" type="number" value="{{ number_format($data->NilaiTotalPendidikanDanPengajaran, 2) }}" class="form-control"
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
                                    <input id="" name="" type="number" value="{{ number_format($data->TotalSkorPenelitianPointB, 3) }}" class="form-control"
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
                                    <input id="" name="" type="number" value="{{ number_format($data->NilaiTotalPenelitiandanKaryaIlmiah, 2) }}" class="form-control"
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
                                    <input id="" name="" type="number" value="{{ number_format($data->TotalSkorPengabdianKepadaMasyarakat, 3) }}" class="form-control"
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
                                    <input id="" name="" type="number" value="{{ number_format($data->NilaiTotalPengabdianKepadaMasyarakat, 2) }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
            $a = (float)$data->NilaiTotalPendidikanDanPengajaran;
            $b = (float)$data->NilaiTotalPenelitiandanKaryaIlmiah;
            $c = (float)$data->NilaiTotalPengabdianKepadaMasyarakat;
            // SUM Point ( A,B,C )
            $total_Ntu = $a + $b + $c;
            $d = (float)$data->ResultSumNilaiTotalUnsurPenunjang;
            $e = (float)$data->NilaiUnsurPengabdian;
            // SUM Point ( D,E )
            $total_Ntd = $d + $e;
            // SUM Point Nilai Kinerja Dosen
            $total_Nkd = $total_Ntu + $total_Ntd;
        ?>

        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Nilai Total UNSUR UTAMA</label>
                                    <input id="" name="" type="number" value="<?php echo number_format((float)$total_Ntu, 2, '.', '')  ?>" class="form-control"
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
                                    <input id="" name="" type="number" value="{{ number_format($data->TotalSkorUnsurPenunjang, 3) }}" class="form-control"
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
                                    <input id="" name="" type="number" value="{{ number_format($data->ResultSumNilaiTotalUnsurPenunjang, 2) }}" class="form-control"
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
                                    <input id="" name="" type="number" value="{{ number_format($data->SumSkor, 3) }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                                <td>
                                    <label for="">Nilai Total Unsur Pengabdian kpd Institusi dan Pengembangan Diri</label>
                                    <input id="" name="" type="number" value="{{ number_format($data->NilaiUnsurPengabdian, 2) }}" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Nilai Total Unsur Non-Tri Dharma</label>
                                    <input id="" name="" type="number" value="<?php echo number_format((float)$total_Ntd, 2, '.', '') ?>" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <label for="">Nilai Kinerja Dosen</label>
                                    <input id="" name="" type="number" value="<?php echo number_format((float)$total_Nkd, 2, '.', '')  ?>" class="form-control"
                                    aria-label="output_point" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a href="{{ route('point-E') }}" class="btn btn-primary float-left">Kembali</a>
        <a href="{{ route('raport', Auth::user()->id) }}" id="link" class="btn btn-primary">Raport</a>
    </div>

    @push('JavaScript')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        // Ambil elemen a href
        var link = document.getElementById('link');

        // Tambahkan event listener untuk event click pada elemen tersebut
        link.addEventListener('click', function(event) {
          event.preventDefault(); // Mencegah a href dari berperilaku default

          // Tampilkan SweetAlert untuk konfirmasi
          swal({
            title: "Apakah kamu yakin?",
            text: "Setelah pindah halaman, kamu tidak akan kembali ke halaman ini lagi!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, pindah halaman!",
            cancelButtonText: "Batal",
            closeOnConfirm: false
          },
          function(){
            // Jika tombol "Ya" diklik, pindah ke halaman baru
            window.location.href = link.href;
          });
        });
      </script>
    @endpush
</x-app-layout>
