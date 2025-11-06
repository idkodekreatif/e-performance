<x-app-layout title="Tambah Unit Kerja">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('unit-kerja.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Unit Kerja</label>
                    <input type="text" name="name" class="form-control" required placeholder="Contoh: Fakultas Teknik">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipe</label>
                    <input type="text" name="type" class="form-control" placeholder="Opsional: Universitas / Fakultas / Prodi / Unit">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="Opsional"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('unit-kerja.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
