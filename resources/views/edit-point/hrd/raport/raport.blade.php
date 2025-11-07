<x-app-layout title="Raport">
    @push('style')
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Point</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raport</a></li>
            </ol>
        </div>

        {{-- Tombol Generate PDF hanya jika parameter tersedia --}}
        @if (isset($users->id) && isset($period_id))
            <a href="{{ route('generate.pdf', ['id' => $users->id, 'period_id' => $period_id]) }}"
                class="btn btn-primary mb-3">Generate PDF</a>
        @endif

        {{-- Profile User --}}
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Profile</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-hover">
                        <thead>
                            <tr style="font-weight:bold">
                                <td>NAMA</td>
                                <td>EMAIL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $users->name }}</td>
                                <td>{{ $users->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Nilai Raport --}}
        <div class="card shadow mt-4">
            <div class="card-header">
                <h4 class="card-title">Raport User</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    {{-- Nilai Total --}}
                    <table class="table table-bordered border-2 table-sm text-center table-hover">
                        <tr>
                            <td>JABATAN FUNGSIONAL</td>
                            <td>{{ $resultArray['jabfung'] }}</td>
                        </tr>
                        <tr>
                            <td>Nilai Total UNSUR UTAMA</td>
                            <td>{{ $resultArray['total_Ntu'] }}</td>
                        </tr>
                        <tr>
                            <td>Nilai Total Unsur Non-Tri Dharma</td>
                            <td>{{ $resultArray['total_Ntd'] }}</td>
                        </tr>
                        <tr>
                            <td>Nilai Kinerja Dosen</td>
                            <td>{{ $resultArray['total_Nkd'] }}</td>
                        </tr>
                    </table>

                    {{-- Detail Komponen --}}
                    <table class="table table-bordered border-2 table-sm text-center table-hover">
                        <thead>
                            <tr>
                                <td>Poin Penilaian</td>
                                <td>Komponen</td>
                                <td>Nilai Total</td>
                                <td>Standar</td>
                                <td>Persentase Capaian terhadap standar (%)</td>
                                <td>Predikat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A.</td>
                                <td>PENDIDIKAN DAN PENGAJARAN</td>
                                <td>{{ $resultArray['a'] }}</td>
                                <td>{{ $resultArray['standar_a'] ?? '0.00' }}</td>
                                <td>{{ $resultArray['NtAFinalSum'] }}</td>
                                <td>{{ $resultArray['outputHasilPDP'] }}</td>
                            </tr>
                            <tr>
                                <td>B.</td>
                                <td>PENELITIAN DAN KARYA ILMIAH</td>
                                <td>{{ $resultArray['b'] }}</td>
                                <td>{{ $resultArray['standar_b'] ?? '0.00' }}</td>
                                <td>{{ $resultArray['NTiFinalSum'] }}</td>
                                <td>{{ $resultArray['OutputHasilPki'] }}</td>
                            </tr>
                            <tr>
                                <td>C.</td>
                                <td>PENGABDIAN KEPADA MASYARAKAT</td>
                                <td>{{ $resultArray['c'] }}</td>
                                <td>{{ $resultArray['standar_c'] ?? '0.00' }}</td>
                                <td>{{ $resultArray['NTiFinalSumPkm'] }}</td>
                                <td>{{ $resultArray['OutputHasilPkm'] }}</td>
                            </tr>
                            <tr>
                                <td>D dan E</td>
                                <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                                <td>{{ $resultArray['total_Ntd'] }}</td>
                                <td>{{ $resultArray['standar_d'] ?? '0.00' }}</td>
                                <td>{{ $resultArray['SUMUnsurPenungjang'] }}</td>
                                <td>{{ $resultArray['OutputHasilUnsurPenunjang'] }}</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td  colspan="2">NILAI KINERJA TOTAL</td>
                                <td colspan="4">{{ $resultArray['SumNkt'] }}</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td  colspan="2">STANDAR KINERJA TOTAL</td>
                                <td colspan="4">{{ $resultArray['sum_Skt'] }}</td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td  colspan="2">PREDIKAT</td>
                                <td colspan="4">{{ $resultArray['predikat'] }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @push('JavaScript')
    @endpush
</x-app-layout>
