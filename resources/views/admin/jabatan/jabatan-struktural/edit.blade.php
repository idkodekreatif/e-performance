<x-app-layout title="Edit Jabatan Struktural">

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('jabatan-struktural.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Jabatan</label>
                    <input type="text" name="name" class="form-control"
                        value="{{ old('name', $item->name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Sub. Koordinator</label>
                    <input type="text" name="level" class="form-control"
                        value="{{ old('level', $item->level) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Unit Kerja</label>
                    <select name="unit_kerja_id" class="form-control">
                        <option value="">-- Pilih --</option>
                        @foreach ($unitKerja as $uk)
                            <option value="{{ $uk->id }}"
                                {{ $uk->id == $item->unit_kerja_id ? 'selected' : '' }}>
                                {{ $uk->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description', $item->description) }}</textarea>
                </div>

                <button class="btn btn-primary">Perbarui</button>
                <a href="{{ route('jabatan-struktural.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</x-app-layout>
