<x-app-layout title="Edit Jabatan Fungsional">

    <div class="card shadow">
        <div class="card-header">
            <h5>Edit Jabatan Fungsional</h5>
        </div>

        <form action="{{ route('jabfung.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                @include('admin.jabatan.JabatanFungsional.form', ['item' => $item])
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('jabfung.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
    </div>

</x-app-layout>
