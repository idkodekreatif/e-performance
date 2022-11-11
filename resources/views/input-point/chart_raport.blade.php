<x-app-layout title="Raport Chart">
    @push('style')
    @endpush

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Simple pie chart</h4>
        </div>
        <div class="card-body">
            <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist chartlist-chart"></div>
        </div>

        @push('JavaScript')
        <!-- Chart Chartist plugin files -->
        <script src="{{ asset('Assets/vendor/chartist/js/chartist.min.js') }}"></script>
        <script src="{{ asset('Assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('Assets/js/plugins-init/chartist-init.js') }}"></script>
        @endpush
</x-app-layout>
