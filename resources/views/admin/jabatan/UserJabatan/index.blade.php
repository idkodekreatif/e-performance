<x-app-layout title="Data Pegawai">

    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h5>Daftar Pegawai</h5>
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
                <tbody></tbody>
            </table>
        </div>
    </div>

    @push('JavaScript')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            $(function () {
                $('#usersTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('jabatan.pegawai.data') }}",
                    columns: [
                        {data: 'name'},
                        {data: 'email'},
                        {data: 'jabfung', render: d => d?.length ? d.join(', ') : '-'},
                        {data: 'jabstruk', render: d => d?.length ? d.join(', ') : '-'},
                        {data: 'unitKerja', render: d => d?.length ? d.join(', ') : '-'},
                        {
                            data: 'id',
                            render: id => `
                                <a href="/admin/jabatan/pegawai/edit/${id}"
                                   class="btn btn-warning btn-sm">Edit</a>`
                        }
                    ],
                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ data",
                        zeroRecords: "Data tidak ditemukan",
                        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                        paginate: {next: "›", previous: "‹"}
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>
