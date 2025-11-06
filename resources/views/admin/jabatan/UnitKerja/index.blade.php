<x-app-layout title="Data Unit Kerja">

    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h5>Daftar Unit Kerja</h5>
            <a href="{{ route('unit-kerja.create') }}" class="btn btn-primary btn-sm">+ Tambah Unit Kerja</a>
        </div>

        <div class="card-body">
            <table id="unitKerjaTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Unit</th>
                        <th>Tipe</th>
                        <th>Deskripsi</th>
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
            $(document).ready(function () {
                $('#unitKerjaTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('unit-kerja.data') }}",
                        type: "GET"
                    },
                    columns: [
                        { data: 'name' },
                        { data: 'type', defaultContent: '-' },
                        { data: 'description', defaultContent: '-' },
                        {
                            data: 'id',
                            render: function (data) {
                                return `
                                    <a href="/admin/unit-kerja/edit/${data}" class="btn btn-warning btn-sm">Edit</a>
                                    <button onclick="deleteUnitKerja(${data})" class="btn btn-danger btn-sm">Delete</button>
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

            function deleteUnitKerja(id) {
                if (confirm("Yakin ingin menghapus unit kerja ini?")) {
                    fetch(`/admin/unit-kerja/delete/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Accept': 'application/json'
                        }
                    })
                        .then(res => res.json())
                        .then(data => {
                            alert(data.message || 'Unit kerja berhasil dihapus');
                            $('#unitKerjaTable').DataTable().ajax.reload();
                        })
                        .catch(() => alert('Terjadi kesalahan!'));
                }
            }
        </script>
    @endpush

</x-app-layout>
