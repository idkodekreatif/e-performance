<x-app-layout title="Users Management">
    @push('style')
    @endpush
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Control</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
        </ol>
    </div>

    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="input-group contacts-search mb-4">
            {{-- <input type="text" class="form-control" placeholder="Search here...">
            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
            --}}
        </div>
        <div class="mb-2">
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">Users</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-responsive-md">
                <thead>
                    <tr>
                        <th><strong>NAME</strong></th>
                        <th><strong>EMAIL</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center"><span class="w-space-no">{{ $user->name }}</span>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><span class="w-space-no">{{ $user->email
                                    }}</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Role</h4>
        </div>
        <div class="card-body">

            @if ($user->roles)
            @foreach ($user->roles as $user_role)
            <form method="POST" action="{{ route('users.roles.remove', [$user->id, $user_role->id]) }}"
                onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <div class="float-start mb-2">
                    <button type="submit" class="btn btn-primary light btn-xs">{{ $user_role->name
                        }}</button>
                </div>
            </form>
            @endforeach
            @endif

            <form method="POST" action="{{ route('users.roles', $user->id) }}">
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
                            <button type="submit" class="btn btn-primary btn-sm mb-2">Assign</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Permissions</h4>
        </div>
        <div class="card-body">
            @if ($user->permissions)
            @foreach ($user->permissions as $user_permission)
            <form method="POST" action="{{ route('users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <div class="d-flex float-start mb-2 mr-2">
                    <button type="submit" class="btn btn-primary light btn-xs">{{ $user_permission->name }}</button>
                </div>
            </form>
            @endforeach
            @endif

            <form method="POST" action="{{ route('users.permissions', $user->id) }}">
                @csrf
                {{-- <label class="form-label" for="permission">Permission</label> --}}
                <select class="default-select form-control wide mb-3" name="permission" id="permission">
                    @foreach ($permissions as $permission)
                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                    @endforeach
                </select>
                <div class="row">
                    <div class="col">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-sm mb-2">Assign</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @push('JavaScript')
    @endpush
</x-app-layout>
