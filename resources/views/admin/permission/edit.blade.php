<x-app-layout title="Update Permission">
    @push('style')
    @endpush

    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Control</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Permission</a></li>
        </ol>
    </div>

    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="input-group contacts-search mb-4">
            {{-- <input type="text" class="form-control" placeholder="Search here...">
            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
            --}}
        </div>
        <div class="mb-2">
            <a href="{{ route('permission.index') }}" class="btn btn-primary btn-sm">All Permission</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="basic-form">
                <form method="POST" action="{{ route('permission.update', $permission) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label class="form-label" for="name">Update Permission</label>
                        <input type="text" id="name" value="{{ $permission->name }}" name="name"
                            class="form-control input-rounded" placeholder="Permission" required>
                    </div>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="row">
                        <div class="col">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-sm mb-2">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Roles</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                @if ($permission->roles)
                @foreach ($permission->roles as $permission_role)
                <form method="POST"
                    action="{{ route('permission.role.remove', [$permission->id, $permission_role->id]) }}"
                    onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <div class="d-flex float-start mb-2 mr-2">
                        <button type="submit" class="btn btn-primary light btn-xs">{{ $permission_role->name
                            }}</button>
                    </div>
                </form>
                @endforeach
                @endif

                <form method="POST" action="{{ route('permissions.roles', $permission->id) }}">
                    @csrf

                    {{-- <label class="form-label" for="role">Roles</label> --}}
                    <select class="default-select form-control wide mb-3" name="role" id="role">
                        @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    <div class="row">
                        <div class="col">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-sm mb-2">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('JavaScript')
    @endpush
</x-app-layout>
