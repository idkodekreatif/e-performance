<x-app-layout title="Admin">
    @push('style')
    @endpush
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Control</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">User Management</a></li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th><strong>NO.</strong></th>
                            <th><strong>NAME</strong></th>
                            <th><strong>EMAIL</strong></th>
                            <th><strong>ACTION</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $number => $user)
                        <tr>
                            <td><strong>{{ ++$number }}</strong></td>
                            <td>
                                <div class="d-flex align-items-center"><span class="w-space-no">{{ $user->name }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"><span class="w-space-no">{{ $user->email
                                        }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('users.show', $user->id) }}"
                                        class="btn btn-primary shadow btn-xs me-1">Roles</a>
                                    {{-- <a href="" class="btn btn-primary shadow btn-xs me-1">Permissions</a> --}}
                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}"
                                        onsubmit="return confirm('Are you sure delete user?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('JavaScript')
    @endpush
</x-app-layout>
