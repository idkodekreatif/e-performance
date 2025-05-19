<x-app-layout title="Update Jabatan">
    @push('style')
    @endpush

    <div class="row page-titles shadow">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Control</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Jabatan</a></li>
        </ol>
    </div>

    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="input-group contacts-search mb-4">
            {{-- <input type="text" class="form-control" placeholder="Search here...">
            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
            --}}
        </div>
        <div class="mb-2">
            {{-- <a href="{{ route('role.index') }}" class="btn btn-primary btn-sm">All Role</a> --}}
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="basic-form">
                <h2>Edit Jabatan untuk {{ $user->name }}</h2>

                <form action="{{ route('user-jabatan.updateRoleJabatan', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="jabatan_id" class="form-label">Pilih Jabatan</label>
                        <select name="jabatan_id" class="form-select">
                            <option value="">-- Tidak ada jabatan --</option>
                            @foreach ($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}"
                                    {{ $user->jabatan_id == $jabatan->id ? 'selected' : '' }}>
                                    {{ $jabatan->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('jabatan_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('user-jabatan.indexRoleJabatan') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    @push('JavaScript')
    @endpush
</x-app-layout>
