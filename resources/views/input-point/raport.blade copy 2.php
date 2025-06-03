<x-app-layout title="Raport">
    @push('style')
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#">Point</a></li>
                <li class="breadcrumb-item"><a href="#">Raport</a></li>
            </ol>
        </div>

        {{-- Form Pilih Periode --}}
       <form action="{{ route('raport', ['user_id' => request('user_id') ?? $user_id]) }}" method="GET">

            <label for="period_id">Pilih Periode:</label>
            <select name="period_id" id="period_id" class="form-control mb-2" required>
                @foreach ($periods as $period)
                    <option value="{{ $period->id }}" {{ request('period_id') == $period->id ? 'selected' : '' }}>
                        {{ $period->name }}
                    </option>
                @endforeach
            </select>
            <input type="hidden" name="user_id" value="{{ request('user_id') ?? $user_id }}">
            <button type="submit" class="btn btn-info">Lihat Raport</button>
        </form>

        {{-- Tombol Cetak PDF --}}
        <div class="row mb-2">
            <div class="col">
                <a href="{{ route('raport.pdf', auth()->id()) }}" class="btn btn-primary btn-sm float-end" target="_blank">
                    <i class="fa fa-print"></i> CETAK PDF
                </a>
            </div>
        </div>

        {{-- Tabel Raport --}}
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Raport User</h4>
            </div>
            <div class="card-body">
                @if (!empty($resultArray))
                    <div class="table-responsive">

                        {{-- Tabel Ringkasan --}}
                        <table class="table table-bordered text-center table-sm mb-4">
                            <tr>
                                <td>Nilai Total UNSUR UTAMA</td>
                                <td>{{ $resultArray['total_Ntu'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td>Nilai Total Unsur Non-Tri Dharma</td>
                                <td>{{ $resultArray['total_Ntd'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td>Nilai Kinerja Dosen</td>
                                <td>{{ $resultArray['total_Nkd'] ?? '-' }}</td>
                            </tr>
                        </table>

                        {{-- Tabel Detail --}}
                        <table class="table table-bordered text-center table-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>Komponen</th>
                                    <th>Nilai Total</th>
                                    <th>Standar</th>
                                    <th>Persentase Capaian</th>
                                    <th>Predikat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PENDIDIKAN DAN PENGAJARAN</td>
                                    <td>{{ $resultArray['a'] ?? '-' }}</td>
                                    <td>11.69</td>
                                    <td>{{ $resultArray['NtAFinalSum'] ?? '-' }}</td>
                                    <td>{{ $resultArray['outputHasilPDP'] ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>PENELITIAN DAN KARYA ILMIAH</td>
                                    <td>{{ $resultArray['b'] ?? '-' }}</td>
                                    <td>4.26</td>
                                    <td>{{ $resultArray['NTiFinalSum'] ?? '-' }}</td>
                                    <td>{{ $resultArray['OutputHasilPki'] ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>PENGABDIAN KEPADA MASYARAKAT</td>
                                    <td>{{ $resultArray['c'] ?? '-' }}</td>
                                    <td>1.20</td>
                                    <td>{{ $resultArray['NTiFinalSumPkm'] ?? '-' }}</td>
                                    <td>{{ $resultArray['OutputHasilPkm'] ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                                    <td>{{ $resultArray['total_Ntd'] ?? '-' }}</td>
                                    <td>2.17</td>
                                    <td>{{ $resultArray['SUMUnsurPenungjang'] ?? '-' }}</td>
                                    <td>{{ $resultArray['OutputHasilUnsurPenunjang'] ?? '-' }}</td>
                                </tr>
                                <tr class="fw-bold">
                                    <td>NILAI KINERJA TOTAL</td>
                                    <td colspan="4">{{ $resultArray['SumNkt'] ?? '-' }}</td>
                                </tr>
                                <tr class="fw-bold">
                                    <td>STANDAR KINERJA TOTAL</td>
                                    <td colspan="4">{{ $resultArray['sum_Skt'] ?? '-' }}</td>
                                </tr>
                                {{-- <tr class="fw-bold">
                                    <td>PERSENTASE CAPAIAN TOTAL (%)</td>
                                    <td colspan="4">{{ $resultArray['result_PCT'] ?? '-' }}</td>
                                </tr> --}}
                                <tr class="fw-bold">
                                    <td>PREDIKAT</td>
                                    <td colspan="4">{{ $resultArray['predikat'] ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-center text-muted">Belum ada data raport untuk periode yang dipilih.</p>
                @endif
            </div>
        </div>
    </div>

    @push('JavaScript')
    @endpush
</x-app-layout>
