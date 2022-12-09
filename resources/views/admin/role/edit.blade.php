<x-app-layout title="Update Role">
    @push('style')
    @endpush
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Control</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Role</a></li>
        </ol>
    </div>

    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="input-group contacts-search mb-4">
            {{-- <input type="text" class="form-control" placeholder="Search here...">
            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
            --}}
        </div>
        <div class="mb-2">
            <a href="{{ route('role.index') }}" class="btn btn-primary btn-sm">All Role</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="basic-form">
                <form method="POST" action="{{ route('role.update', $role->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label class="form-label" for="name">Update Role</label>
                        <input type="text" id="name" value="{{ $role->name }}" name="name"
                            class="form-control input-rounded" placeholder="Role" required>
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
            <h4 class="card-title">Role Permission</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                @if ($role->permissions)
                @foreach ($role->permissions as $role_permission)
                <form method="POST" action="{{ route('role.permission.revoke', [$role->id, $role_permission->id]) }}"
                    onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger shadow btn-xs">{{ $role_permission->name
                        }}</button>
                </form>
                @endforeach
                @endif

                <form method="POST" action="{{ route('role.permissions', $role->id) }}">
                    @csrf

                    <label class="form-label" for="permission">Permission</label>
                    <select class="default-select form-control wide mb-3" name="permission" id="permission">
                        @foreach ($permissions as $permission)
                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
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
