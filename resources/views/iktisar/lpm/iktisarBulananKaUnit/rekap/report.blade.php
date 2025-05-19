<x-app-layout title="Report">
    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="card-title">Rekap Data Raport</h4>

                @if($data->isNotEmpty())
                    <div class="table-responsive">
                        <table id="reportTable" class="table table-bordered text-center">
                            <thead class="table-light">
                                <tr>
                                    <th rowspan="2" class="align-middle">No</th>
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
                                        <td></td> {{-- Nomor urut akan otomatis diisi oleh DataTables --}}
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ number_format($DataUserKinerjaPerilaku, 2, '.', '') }}</td>
                                        <td>{{ number_format($DataUserKinerjaKompetensi, 2, '.', '') }}</td>
                                        <td>{{ number_format($resultSumPerilakuKompetensi, 2, '.', '') }}</td>
                                        <td>{{ $OutPutPredikatKompetensi }}</td>
                                        <td>{{ $item->created_insert }}</td>
                                        <td>
                                            <a href="{{ route('lpm.report.detail', ['user_id' => $item->user_id, 'created_insert' => $item->created_insert]) }}" class="btn btn-danger btn-sm">
                                    Show
                                </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-danger">Data tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </div>

    @push('JavaScript')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                var table = $('#reportTable').DataTable({
                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ data",
                        zeroRecords: "Data tidak ditemukan",
                        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                        paginate: {
                            next: "›",
                            previous: "‹"
                        }
                    },
                    scrollX: true,
                    autoWidth: false,
                    columnDefs: [
                        {
                            targets: 0,
                            searchable: false,
                            orderable: false,
                        }
                    ],
                    order: [[1, 'asc']], // Urutkan berdasarkan nama
                    initComplete: function () {
                        // Tambahkan select filter untuk kolom "Predikat" (index ke-6: No, Nama, Email, Perilaku, Kompetensi, Nilai Kinerja, Predikat)
                        this.api().columns(6).every(function () {
                            var column = this;
                            var select = $('<select class="form-select form-select-sm"><option value="">Filter Predikat</option></select>')
                                .appendTo($(column.header()).empty())
                                .on('change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                    column.search(val ? '^' + val + '$' : '', true, false).draw();
                                });

                            column.data().unique().sort().each(function (d) {
                                select.append('<option value="' + d + '">' + d + '</option>')
                            });
                        });
                    }
                });

                // Tambah nomor urut di kolom pertama
                table.on('order.dt search.dt', function () {
                    table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            });
        </script>
    @endpush
</x-app-layout>
