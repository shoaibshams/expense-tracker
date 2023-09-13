<div class="card border-0 shadow mb-2">
    <div class="bg-gray-800 card-title p-2 text-white">
        <strong class="mb-1">{{ $title ?? 'Title' }}</strong>
    </div>
    <div class="card-body pt-1">
        <div class="d-block">
            <div class="d-flex align-items-center me-5">
                <div class="icon-shape icon-sm icon-shape-success rounded me-3">
                    <i class="fa fa-wallet fa-2x"></i>
                </div>
                <div class="d-block">
                    <strong class="mb-0 text-success">Income</strong>
                    <h5 class="mb-0">{{ number_format($income ?? 0) }}</h5>
                </div>
            </div>
            <div class="d-flex align-items-center pt-3">
                <div class="icon-shape icon-sm icon-shape-danger rounded me-3">
                    <i class="fa fa-money-bill-wave-alt fa-2x"></i>
                </div>
                <div class="d-block">
                    <strong class="mb-0 text-danger">Expense</strong>
                    <h5 class="mb-0">{{ number_format($expense ?? 0) }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>