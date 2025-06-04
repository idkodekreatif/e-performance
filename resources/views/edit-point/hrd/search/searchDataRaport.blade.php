<x-app-layout title="Search Data Raport">
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Point</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Search Raport</a></li>
            </ol>
        </div>

        <form action="{{ route('raport.data.search.result') }}" method="GET">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        {{-- Select User --}}
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Name</label>
                            <select id="user-select" name="id" class="form-select">
                                <option value="">-- Select Name --</option>
                                @foreach ($users as $id => $name)
                                    <option value="{{ $id }}" {{ request('id') == $id ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Select Periode --}}
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Periode</label>
                            <select id="periode-select" name="period_id" class="form-select">
                                <option value="">-- Select Periode --</option>
                                @foreach ($allPeriods as $periode)
                                    <option value="{{ $periode->id }}" {{ request('period_id') == $periode->id ? 'selected' : '' }}>
                                        {{ $periode->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
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
        <script>
            $(document).ready(function () {
                $('#user-select').select2({
                    placeholder: "-- Select Name --",
                    allowClear: true
                });
                $('#periode-select').select2({
                    placeholder: "-- Select Periode --",
                    allowClear: true
                });
            });
        </script>
    @endpush
</x-app-layout>
