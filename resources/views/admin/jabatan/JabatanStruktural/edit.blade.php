<x-app-layout title="Edit Jabatan Struktural">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('jabatan-struktural.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Jabatan Struktural</label>
                    <input type="text" name="name" class="form-control" required value="{{ old('name', $item->name) }}" placeholder="Contoh: Dekan">
                </div>

                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <input type="text" name="level" class="form-control" value="{{ old('level', $item->level) }}" placeholder="Contoh: Universitas / Fakultas / Prodi / Unit">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="Opsional">{{ old('description', $item->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('jabatan-struktural.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
