<x-app-layout title="Tambah Jabatan Struktural">

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('jabatan-struktural.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Jabatan</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Sub. Koordinator</label>
                    <input type="text" name="level" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Unit Kerja</label>
                    <select name="unit_kerja_id" class="form-control">
                        <option value="">-- Pilih --</option>
                        @foreach ($unitKerja as $uk)
                            <option value="{{ $uk->id }}">{{ $uk->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="{{ route('jabatan-struktural.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>

</x-app-layout>
