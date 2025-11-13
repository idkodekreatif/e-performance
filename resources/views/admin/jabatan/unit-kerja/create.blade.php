<x-app-layout title="Tambah Unit Kerja">

    <div class="card shadow">
        <div class="card-header">
            <h5 class="mb-0">Tambah Unit Kerja</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('unit-kerja.store') }}" method="POST">
                @csrf

                <!-- Nama Unit -->
                <div class="mb-3">
                    <label class="form-label">Nama Unit Kerja <span class="text-danger">*</span></label>
                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                        required
                        placeholder="Contoh: Fakultas Teknik">

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tipe -->
                <div class="mb-3">
                    <label class="form-label">Tipe</label>
                    <select
                        name="type"
                        class="form-select @error('type') is-invalid @enderror">

                        <option value="" selected>— Pilih Tipe (opsional) —</option>
                        <option value="Universitas" {{ old('type') == 'Universitas' ? 'selected' : '' }}>Universitas</option>
                        <option value="Fakultas" {{ old('type') == 'Fakultas' ? 'selected' : '' }}>Fakultas</option>
                        <option value="Prodi" {{ old('type') == 'Prodi' ? 'selected' : '' }}>Program Studi</option>
                        <option value="Unit" {{ old('type') == 'Unit' ? 'selected' : '' }}>Unit</option>

                    </select>

                    @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea
                        name="description"
                        rows="3"
                        class="form-control @error('description') is-invalid @enderror"
                        placeholder="Opsional">{{ old('description') }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('unit-kerja.index') }}" class="btn btn-secondary">Kembali</a>
                </div>

            </form>
        </div>
    </div>

</x-app-layout>
