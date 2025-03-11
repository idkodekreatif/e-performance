<x-app-layout title="Search Data Rekap">

{{-- @section('content') --}}
<div class="container">
    <h3 class="mb-4">Rekap Data Poin dan Predikat</h3>
    @foreach ($resultArray as $result)
    <div class="user-report">
        {{-- <h3>{{ $result['user_name'] }}</h3> --}}
        <p>Total NTU:  {{ $result['total_Ntu'] }}</p>
        <p>Total NTD: {{ $result['total_Ntd'] }}</p>
        <p>Total NKD: {{ $result['total_Nkd'] }}</p>
        <p>Predikat: {{ $result['predikat'] }}</p>
        <!-- Tampilkan hasil lainnya jika perlu -->
    </div>
@endforeach


    {{-- @if ($resultArray) --}}
    {{-- <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">Raport User</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                    <tr>
                        <td>Nilai Total UNSUR UTAMA</td>
                        <td>
                            {{ $resultArray['total_Ntu'] }}
                        </td>
                    </tr>
                    <tr>
                        <td>Nilai Total Unsur Non-Tri Dharma</td>
                        <td>
                            {{ $resultArray['total_Ntd'] }}
                        </td>
                    </tr>
                    <tr>
                        <td>Nilai Kinerja Dosen</td>
                        <td>
                            {{ $resultArray['total_Nkd'] }}
                        </td>
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
                            <td>
                                {{ $resultArray['a'] }}
                            </td>
                            <td>11.69</td>
                            <td>
                                {{ $resultArray['NtAFinalSum'] }}
                            </td>
                            <td>
                                {{ $resultArray['outputHasilPDP'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>PENELITIAN DAN KARYA ILMIAH</td>
                            <td>
                                {{ $resultArray['b'] }}
                            </td>
                            <td>4.26</td>
                            <td>
                                {{ $resultArray['NTiFinalSum'] }}
                            </td>
                            <td>
                                {{ $resultArray['OutputHasilPki'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>PENGABDIAN KEPADA MASYARAKAT</td>
                            <td>
                                {{ $resultArray['c'] }}
                            </td>
                            <td>1.20</td>
                            <td>
                                {{ $resultArray['NTiFinalSumPkm'] }}
                            </td>
                            <td>
                                {{ $resultArray['OutputHasilPkm'] }}
                            </td>
                        </tr>
                        <tr>
                            <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                            <td>
                                {{ $resultArray['total_Ntd'] }}
                            </td>
                            <td>2.17</td>
                            <td>
                                {{ $resultArray['SUMUnsurPenungjang'] }}
                            </td>
                            <td>
                                {{ $resultArray['OutputHasilUnsurPenunjang'] }}
                            </td>
                        </tr>
                        <tr style="font-weight:bold">
                            <td>NILAI KINERJA TOTAL</td>
                            <td colspan="4">
                                {{ $resultArray['SumNkt'] }}
                            </td>
                        </tr>
                        <tr style="font-weight:bold">
                            <td>STANDAR KINERJA TOTAL</td>
                            <td colspan="4">
                                {{ $resultArray['sum_Skt'] }}
                            </td>
                        </tr>
                        <tr style="font-weight:bold">
                            <td>PREDIKAT</td>
                            <td colspan="4">
                                {{ $resultArray['predikat'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div> --}}
    {{-- @else --}}
        {{-- <div class="alert alert-warning mt-4">
            Silakan pilih nama terlebih dahulu untuk melihat rekap data.
        </div> --}}
    {{-- @endif --}}
</div>
{{-- @endsection --}}
</x-app-layout>
