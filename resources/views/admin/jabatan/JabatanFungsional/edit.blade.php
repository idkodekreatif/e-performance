<x-app-layout title="Edit Jabatan Fungsional">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('jabfung.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Jabatan Fungsional</label>
                    <input type="text" name="name" class="form-control"
                           value="{{ old('name', $item->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" rows="3" class="form-control">{{ old('description', $item->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('jabfung.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
