<div class="row pt-2">

    <div class="row">
        <livewire:charts.monthly-transaction-chart/>
    </div>

    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col"><h2 class="fs-5 fw-bold mb-0">Recent Transactions</h2></div>
                                <div class="col text-end">
                                    <a
                                        wire:navigate
                                        href="{{ route('transaction') }}"
                                        class="btn btn-sm btn-primary">
                                        See all
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                @forelse($transactions as $index => $transaction)
                                    <tr wire:key="{{ $transaction->id }}">
                                        <td>{{ $index + $transactions->firstItem() }}</td>
                                        <td>{{ $transaction->date->format('d-m-Y') }}</td>
                                        <td>{{ $transaction->category->name }}</td>
                                        <td>
                                            <span
                                                @class([
                                                'badge badge-pill',
                                                'bg-success' => $transaction->category->type === 'income',
                                                'bg-danger' => $transaction->category->type === 'expense'
                                                ])>
                                                {{ $transaction->category->type }}</span>
                                        </td>
                                        <td>{{ number_format($transaction->amount) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-danger text-center" colspan="6">No record found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6">
            <div class="col-12 px-0 mb-4">
                <livewire:charts.yearly-transaction-chart />
            </div>
        </div>
    </div>
</div>
