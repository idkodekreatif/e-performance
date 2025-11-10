<x-app-layout title="Tambah Jabatan Struktural">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('jabatan-struktural.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Jabatan Struktural</label>
                    <input type="text" name="name" class="form-control" required placeholder="Contoh: Dekan">
                </div>

                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <input type="text" name="level" class="form-control" placeholder="Contoh: Universitas / Fakultas / Prodi / Unit">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="Opsional"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('jabatan-struktural.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
