<x-app-layout title="Raport">
    @push('style')

    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Point</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raport</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Raport User</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @foreach ($data as $data)
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Tendik/Dosen</td>
                                <td>Fakultas</td>
                                <td>Prodi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>Tendik</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <tr>
                            <td>Nilai Total UNSUR UTAMA</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>Nilai Total Unsur Non-Tri Dharma</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>Nilai Kinerja Dosen</td>
                            <td>244</td>
                        </tr>
                    </table>

                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Nilai Total</td>
                                <td>Standar</td>
                                <td>Persentase Capaian terhadap standar (%)</td>
                                <td>Predikat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PENDIDIKAN DAN PENGAJARAN</td>
                                <td>{{ $data->NilaiTotalPendidikanDanPengajaran }}</td>
                                <td>11.69</td>
                                <td>105.99</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>PENELITIAN DAN KARYA ILMIAH</td>
                                <td>{{ $data->NilaiTotalPenelitiandanKaryaIlmiah }}</td>
                                <td>4.26</td>
                                <td>100.00</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>PENGABDIAN KEPADA MASYARAKAT</td>
                                <td>{{ $data->NilaiTotalPengabdianKepadaMasyarakat }}</td>
                                <td>1.20</td>
                                <td>100.00</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                                <td>1.84</td>
                                <td>2.17</td>
                                <td>84.66</td>
                                <td>Cukup</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>NILAI KINERJA TOTAL</td>
                                <td colspan="4">19.69</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>STANDAR KINERJA TOTAL</td>
                                <td colspan="4">19.32</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>PERSENTASE CAPAIAN TOTAL (%)</td>
                                <td colspan="4">101.90</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td>PREDIKAT</td>
                                <td colspan="4">BAIK</td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @push('JavaScript')

    @endpush
</x-app-layout>
