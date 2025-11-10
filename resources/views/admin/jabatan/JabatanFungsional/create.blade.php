<x-app-layout title="Tambah Jabatan Fungsional">

    <div class="card shadow">
        <div class="card-header">
            <h5>Tambah Jabatan Fungsional</h5>
        </div>

        <form action="{{ route('jabfung.store') }}" method="POST">
            @csrf
            <div class="card-body">
                @include('admin.jabatan.JabatanFungsional.form')
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('jabfung.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>

</x-app-layout>
