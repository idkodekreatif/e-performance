<x-app-layout title="Data Jabatan Struktural">

    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h5>Daftar Jabatan Struktural</h5>
            <a href="{{ route('jabatan-struktural.create') }}" class="btn btn-primary btn-sm">+ Tambah Jabstruk</a>
        </div>

        <div class="card-body">
            <table id="jabstrukTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Jabatan</th>
                        <th>Level</th>
                        <th>Deskripsi</th>
                        <th width="130px">Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody> <!-- DataTables by AJAX -->
            </table>
        </div>
    </div>

    @push('JavaScript')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#jabstrukTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('jabatan-struktural.data') }}",
                        type: "GET"
                    },
                    columns: [
                        { data: 'name' },
                        { data: 'level', defaultContent: '-' },
                        { data: 'description', defaultContent: '-' },
                        {
                            data: 'id',
                            render: function (data) {
                                return `
                                    <a href="/admin/jabatan-struktural/edit/${data}" class="btn btn-warning btn-sm">Edit</a>
                                    <button onclick="deleteJabstruk(${data})" class="btn btn-danger btn-sm">Delete</button>
                                `;
                            }
                        }
                    ],
                    language: {
                        search: "Cari:",
                        lengthMenu: "Tampilkan _MENU_ data",
                        zeroRecords: "Data tidak ditemukan",
                        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                        paginate: { next: "›", previous: "‹" }
                    }
                });
            });

            function deleteJabstruk(id) {
                if (confirm("Yakin ingin menghapus jabatan struktural ini?")) {
                    fetch(`/admin/jabatan-struktural/delete/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            alert(data.message);
                            $('#jabstrukTable').DataTable().ajax.reload();
                        })
                        .catch(() => alert('Terjadi kesalahan!'));
                }
            }
        </script>
    @endpush

</x-app-layout>
