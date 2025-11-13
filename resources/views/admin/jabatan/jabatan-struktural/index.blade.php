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
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Jabatan</th>
                        <th>Sub. Koordinator</th>
                        <th>Unit Kerja</th>
                        <th>Deskripsi</th>
                        <th width="130px">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    @push('JavaScript')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            let table = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('jabatan-struktural.data') }}",
                columns: [
                    { data: 'name' },
                    { data: 'level', defaultContent: '-' },
                    { data: 'unitKerja', defaultContent: '-' },
                    { data: 'description', defaultContent: '-' },
                    { data: 'action', orderable: false, searchable: false }
                ]
            });

            function deleteData(url) {
                if (!confirm("Yakin ingin menghapus?")) return;

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        alert(res.message);
                        table.ajax.reload();
                    },
                    error: function() {
                        alert("Gagal menghapus data");
                    }
                });
            }
        </script>
    @endpush

</x-app-layout>
