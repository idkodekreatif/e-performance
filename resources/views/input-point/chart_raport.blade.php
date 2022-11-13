<x-app-layout title="Raport Chart">
    @push('style')
    @endpush

    <div class="row">
        <div class="col-xl-6 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Bar Chart</h4>
                </div>
                {{-- {{ dd($messagesArray) }} --}}
                <div class="card-body">
                    <canvas id="barChart_1"></canvas>
                    <div id="container"></div>
                    <div style="color: rgb(206, 206, 206)"></div>
                </div>
            </div>
        </div>
    </div>

    @push('JavaScript')
    <script>
        // var arr = @json($messagesArray);
        var arr = {!! json_encode($messagesArray) !!}
        var arrStringName = arr.map(obj => obj.name);
        var arrStringNilaiKinerjaTotal = arr.map(obj => obj.NilaiKinerjaTotal);
        var arrStringStandartKinerjaTotal = arr.map(obj => obj.StandartKinerjaTotal);
        var arrStringresult_capaian_total = arr.map(obj => obj.result_capaian_total);
        var arrStringPredikat = arr.map(obj => obj.predikat);

        // console.log(arr);
        // console.log(arrStringName);
        // console.log(arrStringNilaiKinerjaTotal);
        // console.log(arrStringStandartKinerjaTotal);
        // console.log(arrStringresult_capaian_total);
        // console.log(arrStringPredikat);
    </script>

    <!-- Chart ChartJS plugin files -->
    <script src="{{ asset('Assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins-init/chartjs-aggregat.js') }}"></script>
    @endpush
</x-app-layout>
