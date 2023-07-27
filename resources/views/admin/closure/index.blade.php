<x-app-layout title="Admin Penutupan Periode">
    @push('style')
    @endpush
    <div class="row page-titles shadow">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Penutupan Periode</a></li>
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
            <a href="{{ route('closure.create') }}" class="btn btn-primary btn-sm">Tambah Penutupan Periode</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th><strong>NO.</strong></th>
                            <th><strong>Periode</strong></th>
                            <th><strong>Tanggal Penutupan</strong></th>
                            <th><strong>Deskripsi Penutupan</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($closures as $number => $closure)
                            <tr>
                                <td><strong>{{ ++$number }}</strong></td>
                                <td>
                                    <div class="d-flex align-items-center"><span
                                            class="w-space-no">{{ $closure->period->name }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="w-space-no">{{ \Carbon\Carbon::parse($closure->closure_date)->format('d-m-Y') }}</span>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center"><span
                                            class="w-space-no">{{ $closure->description }}</span>
                                    </div>
                                </td>
                                {{-- <td>
                                    <div class="d-flex align-items-center">
                                        @if ($period->is_closed == 0)
                                            <div class="d-flex align-items-center"><i
                                                    class="fa fa-circle text-success me-1"></i> Aktif</div>
                                        @else
                                            <div class="d-flex align-items-center"><i
                                                    class="fa fa-circle text-danger me-1"></i> Tidak Aktif</div>
                                        @endif
                                    </div>
                                </td> --}}
                                <td>
                                    <div class="d-flex">
                                        {{-- <a href="{{ route('period.edit', $period->id) }}"
                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a> --}}
                                        <form action="{{ route('closure.destroy', $closure) }}" method="POST"
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
