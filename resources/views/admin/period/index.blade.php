<x-app-layout title="Admin Periode">
    @push('style')
    @endpush
    <div class="row page-titles shadow">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Periode</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Index</a></li>
        </ol>
    </div>
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="input-group contacts-search mb-4">
            {{-- <input type="text" class="form-control" placeholder="Search here...">
            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
            --}}
        </div>
        <div class="mb-2">
            <a href="{{ route('period.create') }}" class="btn btn-primary btn-sm">Create Periode</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th><strong>NO.</strong></th>
                            <th><strong>Nama Periode</strong></th>
                            <th><strong>Tanggal Mulai</strong></th>
                            <th><strong>Tanggal Selesai</strong></th>
                            <th><strong>Status</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periodes as $number => $period)
                            <tr>
                                <td><strong>{{ ++$number }}</strong></td>
                                <td>
                                    <div class="d-flex align-items-center"><span
                                            class="w-space-no">{{ $period->name }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center"><span
                                            class="w-space-no">{{ $period->start_date }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center"><span
                                            class="w-space-no">{{ $period->end_date }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @if ($period->is_closed == 0)
                                            <div class="d-flex align-items-center"><i
                                                    class="fa fa-circle text-success me-1"></i> Aktif</div>
                                        @else
                                            <div class="d-flex align-items-center"><i
                                                    class="fa fa-circle text-danger me-1"></i> Tidak Aktif</div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('period.edit', $period->id) }}"
                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <form action="{{ route('period.destroy', $period) }}" method="POST"
                                            action="{{ route('period.destroy', $period) }}"
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
