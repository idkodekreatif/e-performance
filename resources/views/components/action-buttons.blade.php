@props([
    'id',
    'editRoute' => null,
    'deleteRoute' => null,
    'showRoute' => null,
])

<div class="btn-group" role="group">

    {{-- Tombol Detail (Opsional) --}}
    @if ($showRoute)
        <a href="{{ route($showRoute, $id) }}" class="btn btn-sm btn-info">
            <i class="bi bi-eye"></i>
        </a>
    @endif

    {{-- Tombol Edit --}}
    @if ($editRoute)
        <a href="{{ route($editRoute, $id) }}" class="btn btn-sm btn-warning">
            <i class="bi bi-pencil-square"></i>
        </a>
    @endif

    {{-- Tombol Delete --}}
    @if ($deleteRoute)
        <form action="{{ route($deleteRoute, $id) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus data ini?')"
              style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">
                <i class="bi bi-trash"></i>
            </button>
        </form>
    @endif

</div>
