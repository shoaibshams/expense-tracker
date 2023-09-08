<div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Expense</h1>
        <a
            href="{{ route('expense.create') }}"
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
            wire:navigate>
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Add new
        </a>
    </div>

    <div class="row">
        <div class="col-md-9">
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                @foreach($expenses as $index => $expense)
                    <tr wire:key="{{ $expense->id }}">
                        <td>{{ $index + $expenses->firstItem() }}</td>
                        <td>{{ $expense->date->format('d-m-Y') }}</td>
                        <td>{{ $expense->category->name }}</td>
                        <td>{{ $expense->amount }}</td>
                        <td>{{ $expense->description }}</td>
                        <td>
                            <a href="{{ route('expense.edit', $expense->id) }}" class="btn btn-sm btn-primary" wire:navigate>
                                <i class="fa fa-edit"></i>
                            </a>
                            <button
                                class="btn btn-sm btn-danger"
                                wire:click="setDeleteId({{ $expense->id }})"
                                data-toggle="modal"
                                data-target="#deleteModal">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $expenses->links() }}
        </div>
        <div class="col-md-3">
            <div class="card border-left-info shadow py-2 mb-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Current Month Expenses
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($current_month_expenses) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-left-warning shadow py-2 mb-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Current Year Expenses
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($current_year_expenses) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-left-danger shadow py-2 mb-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Total Expenses
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($total_expenses) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calculator fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modals.delete />
</div>
