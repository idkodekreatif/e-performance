<x-app-layout title="Report">
    @push('style')
    @endpush
    <div class="container">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Rekap Data Raport</h4>

            @if($data->isNotEmpty())
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th rowspan="2" class="align-middle">Nama</th>
                            <th rowspan="2" class="align-middle">Email</th>
                            <th colspan="5">Komponen Nilai</th>
                            <th rowspan="2" class="align-middle">Action</th>
                        </tr>
                        <tr>
                            <th>Perilaku</th>
                            <th>Kompetensi</th>
                            <th>Nilai Kinerja</th>
                            <th>Predikat</th>
                            <th>Tanggal Insert</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        @php
                        $DataUserKinerjaPerilaku = (float) $item->output_total_sementara_kinerja_perilaku;
                        $DataUserKinerjaKompetensi = (float) $item->total_nilai_presentase;
                        $resultSumPerilakuKompetensi = $DataUserKinerjaPerilaku + $DataUserKinerjaKompetensi;

                        if ($resultSumPerilakuKompetensi >= 5) {
                            $OutPutPredikatKompetensi = 'ISTIMEWA';
                        } elseif ($resultSumPerilakuKompetensi >= 4) {
                            $OutPutPredikatKompetensi = 'SANGAT BAIK';
                        } elseif ($resultSumPerilakuKompetensi >= 3) {
                            $OutPutPredikatKompetensi = 'BAIK';
                        } elseif ($resultSumPerilakuKompetensi >= 2) {
                            $OutPutPredikatKompetensi = 'CUKUP';
                        } else {
                            $OutPutPredikatKompetensi = 'KURANG';
                        }
                    @endphp
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ number_format($DataUserKinerjaPerilaku, 2, '.', '') }}</td>
                            <td>{{ number_format($DataUserKinerjaKompetensi, 2, '.', '') }}</td>
                            <td>{{ number_format($resultSumPerilakuKompetensi, 2, '.', '') }}</td>
                            <td>{{ $OutPutPredikatKompetensi }}</td>
                            <td>{{ $item->created_insert }}</td>
                            <td>
                                <a href="{{ route('bau.report.detail', ['user_id' => $item->user_id, 'created_insert' => $item->created_insert]) }}" class="btn btn-danger btn-sm">
                                    Show
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-danger">Data tidak ditemukan.</p>
            @endif
        </div>
    </div>
</div>
    @push('JavaScript')
    @endpush
</x-app-layout>
