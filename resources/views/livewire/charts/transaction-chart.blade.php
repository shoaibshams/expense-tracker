<div class="col-12 mb-4">
    <div class="card bg-yellow-100 border-0 shadow">
        <div class="card-header d-sm-flex flex-row align-items-center flex-0">
            <div class="d-block mb-3 mb-sm-0">
                <div class="fs-5 fw-normal mb-2">Sales Value</div>
                <h2 class="fs-3 fw-extrabold">$10,567</h2>
                <div class="small mt-2">
                    <span class="fw-normal me-2">Yesterday</span>
                    <span class="fas fa-angle-up text-success"></span>
                    <span class="text-success fw-bold">10.57%</span>
                </div>
            </div>
            <div class="d-flex ms-auto">
                <a href="#" class="btn btn-secondary text-dark btn-sm me-2">Month</a>
                <a href="#" class="btn btn-dark btn-sm me-3">Week</a>
            </div>
        </div>
        <div class="card-body p-2">
            <div id="transaction-chart" class="ct-double-octave ct-series-g"></div>
        </div>
    </div>
</div>

@push('js')
    <script>
        new Chartist.Line('#transaction-chart', {
            labels: {!! $labels ?? '' !!},
            series: [
                {!! $income ?? '' !!},
                {!! $expense ?? '' !!},
            ]
        }, {
            low: 0,
            showArea: true,
            fullWidth: true,
            plugins: [
                Chartist.plugins.tooltip()
            ],
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end',
                showGrid: true
            },
            axisY: {
                // On the y-axis start means left and end means right
                showGrid: false,
                showLabel: false,
                labelInterpolationFnc: function(value) {
                    return '$' + (value / 1) + 'k';
                }
            }
        });
    </script>
@endpush