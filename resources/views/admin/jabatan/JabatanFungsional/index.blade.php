<x-app-layout title="Data Jabatan Fungsional">

    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h5>Daftar Jabatan Fungsional</h5>
            <a href="{{ route('jabfung.create') }}" class="btn btn-primary btn-sm">+ Tambah Jabfung</a>
        </div>

        <div class="card-body">
            <table id="jabfungTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Jabatan</th>
                        <th>Golongan</th>
                        <th>Angka Kredit</th>
                        <th>Deskripsi</th>
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
            $(document).ready(function () {
                $('#jabfungTable').DataTable({
                    ajax: "{{ route('jabfung.data') }}",
                    columns: [
                        { data: 'name' },
                        {
                            data: null,
                            render: row => `${row.golongan_min ?? '-'} - ${row.golongan_max ?? '-'}`
                        },
                        {
                            data: null,
                            render: row => `${row.angka_kredit_min} → ${row.angka_kredit_next}`
                        },
                        { data: 'description', defaultContent: '-' },
                        {
                            data: 'id',
                            render: id => `
                                <a href="/admin/jabfung/edit/${id}" class="btn btn-warning btn-sm">Edit</a>
                                <button onclick="deleteJabfung(${id})" class="btn btn-danger btn-sm">Delete</button>
                            `
                        }
                    ]
                });
            });

            function deleteJabfung(id) {
                if (confirm("Yakin ingin menghapus?")) {
                    fetch(`/admin/jabfung/delete/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            alert(data.message);
                            $('#jabfungTable').DataTable().ajax.reload();
                        });
                }
            }
        </script>
    @endpush

</x-app-layout>
