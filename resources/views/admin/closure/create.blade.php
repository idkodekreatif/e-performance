<x-app-layout title="Create Penutupan Periode">
    @push('style')
    @endpush
    <div class="row page-titles shadow">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Penutupan Periode</a></li>
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
            <a href="{{ route('closure.index') }}" class="btn btn-primary btn-sm">All Penutupan Periode</a>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="basic-form">
                <form method="POST" action="{{ route('closure.store') }}">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label" for="name">Nama Periode</label>
                        <select class="default-select form-control wide mb-3" name="period_id">
                            <option>--- Select ---</option>
                            @foreach ($periods as $period)
                                <option value="{{ $period->id }}">{{ $period->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('period_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="mb-2">
                        <label class="form-label" for="closure_date">Tanggal Penutupan</label>
                        <input type="date" id="closure_date" name="closure_date" class="form-control input-rounded">
                    </div>

                    @error('closure_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="mb-2">
                        <label class="form-label" for="description">Tanggal Selesai</label>
                        <textarea class="form-control" name="description" placeholder="Type your message..."></textarea>
                    </div>

                    @error('description')
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
