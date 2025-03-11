<x-app-layout title="Search Data Rekap">
    @push('style')
        <link rel="stylesheet" href="{{ asset('Assets/vendor/select2/css/select2.min.css') }}">
        <link href="{{ asset('Assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type=number] {
                -moz-appearance: textfield;
            }
        </style>
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Rekap</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Search Data Rekap</a></li>
            </ol>
        </div>
        <form action="{{ route('rekap.search') }}" method="POST">
            @csrf
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md">
                            <label class="form-label">Name</label>
                            <select id="single-select" name="id" class="form-select">
                                <option value="">-- Select Name --</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm mt-2">Cari</button>
                </div>
            </div>
        </form>
    </div>


    @push('JavaScript')
        <script src="{{ asset('Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('Assets/vendor/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('Assets/js/plugins-init/select2-init.js') }}"></script>
        <script src="{{ asset('Assets/js/custom.min.js') }}"></script>
    @endpush
</x-app-layout>
