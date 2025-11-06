<x-app-layout title="Edit Unit Kerja">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('unit-kerja.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Unit Kerja</label>
                    <input type="text" name="name" class="form-control" required value="{{ $item->name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipe</label>
                    <input type="text" name="type" class="form-control" value="{{ $item->type }}" placeholder="Opsional: Universitas / Fakultas / Prodi / Unit">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="3" class="form-control" placeholder="Opsional">{{ $item->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="{{ route('unit-kerja.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
