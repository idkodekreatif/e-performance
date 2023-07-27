<x-app-layout title="Create Periode">
    @push('style')
    @endpush
    <div class="row page-titles shadow">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Periode</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Create</a></li>
        </ol>
    </div>

    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="input-group contacts-search mb-4">
            {{-- <input type="text" class="form-control" placeholder="Search here...">
            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
            --}}
        </div>
        <div class="mb-2">
            <a href="{{ route('period.index') }}" class="btn btn-primary btn-sm">All Periode</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="basic-form">
                <form method="POST" action="{{ route('period.store') }}">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label" for="name">Nama Periode</label>
                        <input type="text" id="name" name="name" class="form-control input-rounded"
                            placeholder="Nama Periode">
                    </div>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="mb-2">
                        <label class="form-label" for="start_date">Tanggal Mulai</label>
                        <input type="date" id="start_date" name="start_date" class="form-control input-rounded">
                    </div>

                    @error('start_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="mb-2">
                        <label class="form-label" for="end_date">Tanggal Selesai</label>
                        <input type="date" id="naend_dateme" name="end_date" class="form-control input-rounded">
                    </div>

                    @error('end_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="row">
                        <div class="col">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-sm mb-2">Simpan</button>
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
