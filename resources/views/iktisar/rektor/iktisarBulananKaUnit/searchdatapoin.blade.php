<x-app-layout title="Search Data poin">
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Point Staff</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Search IKTISAR Bulanan</a></li>
            </ol>
        </div>
        {{-- <div class="row">
            <div class="col">
                <a href="{{ route('ka.baak') }}" class="btn btn-primary btn-sm mb-2 float-end">Point</a>
            </div>
        </div> --}}

        <form action="{{ route('iktisar.bulanan.rektor.poin') }}" method="GET">
            <div class="card shadow">
                <div class="card-body">
                    <div class="mt-3">
                        <input type="date" class="form-control input-rounded" name="tanggalInput">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm mt-2">Search</button>
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
