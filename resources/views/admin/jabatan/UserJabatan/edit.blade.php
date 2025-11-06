<x-app-layout title="Edit Jabatan dan Unit Kerja User">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('jabatan.pegawai.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama User</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jabatan Fungsional</label>
                    <select name="jabfung_ids[]" class="form-select" multiple>
                        @foreach($jabfungList as $jab)
                            <option value="{{ $jab->id }}" {{ $user->jabfung->contains($jab->id) ? 'selected' : '' }}>
                                {{ $jab->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jabatan Struktural</label>
                    <select name="jabstruk_ids[]" class="form-select" multiple>
                        @foreach($jabstrukList as $jab)
                            <option value="{{ $jab->id }}" {{ $user->jabstruk->contains($jab->id) ? 'selected' : '' }}>
                                {{ $jab->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Unit Kerja</label>
                    <select name="unit_kerja_ids[]" class="form-select" multiple>
                        @foreach($unitList as $unit)
                            <option value="{{ $unit->id }}" {{ $user->unitKerja->contains($unit->id) ? 'selected' : '' }}>
                                {{ $unit->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('jabatan.pegawai.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</x-app-layout>
