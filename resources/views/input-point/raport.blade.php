<x-app-layout title="Raport Dosen">
    @push('style')
    @endpush

    <div class="col-xl col-lg">
        {{-- Breadcrumb --}}
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#">Point</a></li>
                <li class="breadcrumb-item"><a href="#">Raport</a></li>
            </ol>
        </div>

        {{-- Form Pilih Periode --}}
        <div class="card shadow mb-3">
            <div class="card-body">
                <form action="{{ route('raport', ['user_id' => request('user_id') ?? $user_id]) }}" method="GET" class="row g-2 align-items-end">
                    <div class="col-md-6">
                        <label for="period_id" class="form-label">Pilih Periode:</label>
                        <select name="period_id" id="period_id" class="form-control" required>
                            @foreach ($periods as $period)
                            <option value="{{ $period->id }}" {{ request('period_id')==$period->id ? 'selected' : '' }}>
                                {{ $period->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="user_id" value="{{ request('user_id') ?? $user_id }}">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-info w-100">
                            <i class="fa fa-search"></i> Lihat Raport
                        </button>
                    </div>
                    <div class="col-md-2 text-end">
                        <a href="{{ route('raport', [
                                    'user_id' => auth()->id(),
                                    'period_id' => $selectedPeriodId,
                                    'download' => 'pdf'
                                ]) }}" class="btn btn-primary w-100" target="_blank">
                            <i class="fa fa-print"></i> Cetak PDF
                        </a>
                    </div>
                </form>
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
        <td>Jabatan Fungsional</td>
        <td>
            @forelse ($jabfung as $jf)
                {{ $jf->name }}@if (!$loop->last), @endif
            @empty
                Non-JAD
            @endforelse
        </td>
    </tr>
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
                                <th>Poin Penilaian</th>
                                <th>Komponen</th>
                                <th>Nilai Total</th>
                                <th>Standar</th>
                                <th>Persentase Capaian</th>
                                <th>Predikat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>A.</td>
                                <td>PENDIDIKAN DAN PENGAJARAN</td>
                                <td>{{ $resultArray['a'] ?? '-' }}</td>
                                <td>{{ $resultArray['standar_a'] ?? '0.00' }}</td>
                                <td>{{ $resultArray['NtAFinalSum'] ?? '-' }}%</td>
                                <td>{{ $resultArray['outputHasilPDP'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td>B.</td>
                                <td>PENELITIAN DAN KARYA ILMIAH</td>
                                <td>{{ $resultArray['b'] ?? '-' }}</td>
                                <td>{{ $resultArray['standar_b'] ?? '0.00' }}</td>
                                <td>{{ $resultArray['NTiFinalSum'] ?? '-' }}%</td>
                                <td>{{ $resultArray['OutputHasilPki'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td>C.</td>
                                <td>PENGABDIAN KEPADA MASYARAKAT</td>
                                <td>{{ $resultArray['c'] ?? '-' }}</td>
                                <td>{{ $resultArray['standar_c'] ?? '0.00' }}</td>
                                <td>{{ $resultArray['NTiFinalSumPkm'] ?? '-' }}%</td>
                                <td>{{ $resultArray['OutputHasilPkm'] ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td>D dan E</td>
                                <td>UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                                <td>{{ $resultArray['total_Ntd'] ?? '-' }}</td>
                                <td>{{ $resultArray['standar_d'] ?? '0.00' }}</td>
                                <td>{{ $resultArray['SUMUnsurPenungjang'] ?? '-' }}%</td>
                                <td>{{ $resultArray['OutputHasilUnsurPenunjang'] ?? '-' }}</td>
                            </tr>
                            <tr class="fw-bold">
                                <td colspan="2">NILAI KINERJA TOTAL</td>
                                <td colspan="4">{{ $resultArray['SumNkt'] ?? '-' }}</td>
                            </tr>
                            <tr class="fw-bold">
                                <td colspan="2">STANDAR KINERJA TOTAL</td>
                                <td colspan="4">{{ $resultArray['sum_Skt'] ?? '-' }}</td>
                            </tr>
                            <tr class="fw-bold">
                                <td colspan="2">PREDIKAT</td>
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
