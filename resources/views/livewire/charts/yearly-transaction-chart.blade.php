<div class="card border-0 shadow">
    <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
        <div class="d-block">
            <div class="h6 fw-normal text-gray mb-2">Year</div>
            <h2 class="h3 fw-extrabold"><?= date('Y');?></h2>
            <div class="small mt-2">
                <span @class(['fas','fa-angle-up text-success' => $percentage_difference > 0, 'fa-angle-down text-danger' => $percentage_difference <= 0])></span>
                <span @class(['fw-bold','text-success' => $percentage_difference > 0, 'text-danger' => $percentage_difference <= 0])>{{ number_format($percentage_difference, 2) }}%</span>
            </div>
        </div>
        <div class="d-block ms-auto">
            <div class="d-flex align-items-center text-end mb-2">
                <span class="dot rounded-circle bg-gray-800 me-2"></span>
                <span class="fw-normal small">Income </span>
            </div>
            <div class="d-flex align-items-center text-end">
                <span class="dot rounded-circle bg-secondary me-2"></span>
                <span class="fw-normal small">Expense </span>
            </div>
        </div>
    </div>
    <div class="card-body p-2">
        <div id="yearly-transaction-chart" style="height: 200px"></div>
    </div>
</div>


@push('js')
    <script>
        var chart = new Chartist.Bar('#yearly-transaction-chart', {
            labels: {!! $labels !!},
            series: [
                {!! $income !!},
                {!! $expense !!},
            ]
        }, {
            low: 0,
            showArea: true,
            plugins: [
                Chartist.plugins.tooltip()
            ],
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end'
            },
            axisY: {
                // On the y-axis start means left and end means right
                showGrid: false,
                showLabel: false,
                offset: 0
            }
        });
    </script>
@endpush
