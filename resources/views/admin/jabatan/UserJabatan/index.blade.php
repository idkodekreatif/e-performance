<x-app-layout title="Data pegawai">

    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h5>Daftar pegawai</h5>
            {{-- Jika ingin tambah pegawai bisa ditambahkan tombol --}}
            {{-- <a href="{{ route('pegawais.create') }}" class="btn btn-primary btn-sm">+ Tambah User</a> --}}
        </div>

        <div class="card-body">
            <table id="usersTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan Fungsional</th>
                        <th>Jabatan Struktural</th>
                        <th>Unit Kerja</th>
                        <th width="130px">Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody> <!-- DataTables via AJAX -->
            </table>
        </div>
    </div>

    @push('JavaScript')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#usersTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('jabatan.pegawai.data') }}", // route untuk ambil data via JSON
                        type: "GET"
                    },
                    columns: [{
                            data: 'name'
                        },
                        {
                            data: 'email'
                        },
                        {
                            data: 'jabfung',
                            render: function(data) {
                                if (!data || !Array.isArray(data) || data.length === 0) return '-';
                                return data.map(j => j.name).join(', ');
                            }
                        },
                        {
                            data: 'jabstruk',
                            render: function(data) {
                                if (!data || !Array.isArray(data) || data.length === 0) return '-';
                                return data.map(j => j.name).join(', ');
                            }
                        },
                        {
                            data: 'unitKerja',
                            render: function(data) {
                                if (!data || !Array.isArray(data) || data.length === 0) return '-';
                                return data.map(u => u.name).join(', ');
                            }
                        },
                        {
                            data: 'id',
                            render: function(data) {
                                return `
                <a href="/admin/jabatan/pegawai/edit/${data}" class="btn btn-warning btn-sm">Edit</a>
            `;
                            }
                        }
                    ],

                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ data",
                        zeroRecords: "Data tidak ditemukan",
                        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                        paginate: {
                            next: "›",
                            previous: "‹"
                        }
                    }
                });
            });
        </script>
    @endpush

</x-app-layout>
