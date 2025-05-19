<x-app-layout title="Data Jabatan">
    @push('style')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between">
            <h5>Daftar Jabatan</h5>
            <a href="{{ route('jabatan.create') }}" class="btn btn-primary btn-sm">+ Tambah Jabatan</a>
        </div>
        <div class="card-body">
            <table id="jabatanTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Jabatan</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jabatan as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->description }}</td>
                       <td>
    <a href="{{ route('jabatan.edit', $row->id) }}" class="btn btn-sm btn-warning">Edit</a>
    <button onclick="deleteJabatan({{ $row->id }})" class="btn btn-sm btn-danger">Delete</button>
</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('JavaScript')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
       <script>
    $(document).ready(function () {
        $('#jabatanTable').DataTable({
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

    // ✅ Fungsi delete dipindah ke luar scope jQuery
    function deleteJabatan(id) {
        if (confirm("Yakin ingin menghapus jabatan ini?")) {
            fetch(`/admin/jabatan/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) throw new Error('Terjadi kesalahan saat menghapus');
                return response.json();
            })
            .then(data => {
                alert(data.success || 'Jabatan berhasil dihapus.');
                location.reload();
            })
            .catch(error => {
                alert(error.message);
            });
        }
    }
</script>

    @endpush
</x-app-layout>
