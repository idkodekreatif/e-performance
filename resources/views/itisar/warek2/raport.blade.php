<x-app-layout title="Raport Penilaian warek 2 | Ka. Bau">
    @push('style')
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles shadow">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Point</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Raport Ka. Bau</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('warek2.ka.bau') }}" class="btn btn-primary btn-sm mb-2 float-end">Point</a>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header">
                <h4 class="card-title">Raport Ka. Bau</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-2 table-sm text-center table-sm table-hover">
                        <thead>
                            <tr style="font-weight:bold">
                                <td>Komponen</td>
                                <td>PERILAKU</td>
                                <td>KOMPETENSI</td>
                                <td>NILAI KINERJA TOTAL</td>
                                <td>PREDIKAT</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-weight:bold">Nilai</td>
                                <td>1.10</td>
                                <td>
                                    2.2
                                </td>
                                <td>1.6</td>
                                <td style="font-weight:bold">CUKUP</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @push('JavaScript')
    @endpush
</x-app-layout>
