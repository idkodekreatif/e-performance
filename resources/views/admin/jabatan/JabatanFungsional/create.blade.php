<x-app-layout title="Tambah Jabatan Fungsional">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('jabfung.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Jabatan Fungsional</label>
                    <input type="text" name="name" class="form-control" required placeholder="Contoh: Lektor Kepala">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="Opsional"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jabfung.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
