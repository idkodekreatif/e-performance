<x-app-layout title="Admin Jabatan User">
    @push('style')
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    @endpush

    <div class="row page-titles shadow">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Control</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Penilai</a></li>
        </ol>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table id="table-user-jabatan" class="display responsive nowrap table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Penilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->jabatan->name ?? '-' }}</td>
                            <td>
                                <a href="{{ route('user-jabatan.editRoleJabatan', $user->id) }}" class="btn btn-primary btn-sm">Edit Jabatan</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('JavaScript')
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#table-user-jabatan').DataTable({
                    responsive: true,
                    pageLength: 10,
                    lengthMenu: [5, 10, 25, 50, 100],
                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ data per halaman",
                        zeroRecords: "Data tidak ditemukan",
                        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                        infoEmpty: "Tidak ada data",
                        infoFiltered: "(difilter dari total _MAX_ data)",
                        paginate: {
                            first: "Pertama",
                            last: "Terakhir",
                            next: "›",
                            previous: "‹"
                        },
                    },
                    columnDefs: [
                        { responsivePriority: 1, targets: 0 },
                        { responsivePriority: 2, targets: -1 }
                    ]
                });
            });
        </script>
    @endpush
</x-app-layout>
