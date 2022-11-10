<x-app-layout title="Raport Chart">
    @push('style')
    @endpush

    <div class="row">
        <div class="col-xl-6 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Bar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="barChart_1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pie Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="pie_chart"></canvas>
                </div>
            </div>
        </div>
    </div>

    @push('JavaScript')
    <!-- Chart ChartJS plugin files -->
    <script src="{{ asset('Assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins-init/chartjs-init.js') }}"></script>
    @endpush
</x-app-layout>
