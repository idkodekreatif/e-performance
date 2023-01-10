<x-app-layout title="Admin Permission">
    @push('style')
    @endpush
    <div class="row page-titles shadow">
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
            <a href="{{ route('permission.create') }}" class="btn btn-primary btn-sm">Create Permission</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th><strong>NO.</strong></th>
                            <th><strong>NAME</strong></th>
                            <th><strong>ACTION</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $number => $permission)
                        <tr>
                            <td><strong>{{ ++$number }}</strong></td>
                            <td>
                                <div class="d-flex align-items-center"><span class="w-space-no">{{ $permission->name
                                        }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('permission.edit', $permission->id) }}"
                                        class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <form method="POST" action="{{ route('permission.destroy', $permission->id) }}"
                                        onsubmit="return confirm('Are you sure?')">
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
