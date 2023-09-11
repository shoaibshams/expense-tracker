<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg
                                    class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                <path
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                </ol>
            </nav>
            <h2 class="h4">Transactions</h2>
            <p class="mb-0">Manage your income and expense transactions</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a
                    href="{{ route('transaction.create') }}"
                    class="btn btn-sm btn-gray-800 d-inline-flex align-items-center"
                    wire:navigate>
                <i class="fa fa-plus me-1"></i>
                Add New
            </a>
            <div class="btn-group ms-2 ms-lg-3">
                <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
                <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
            </div>
        </div>
    </div>

    <div class="table-settings mb-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-9 col-lg-8 d-md-flex">
                <div class="input-group me-2 me-lg-3 fmxw-200">
                    <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                    </span>
                    <input type="date" wire:model.live="date" class="form-control">
                </div>

                <div class="input-group me-2 me-lg-3 fmxw-200">
                    <span class="input-group-text">
                        <i class="fa fa-table"></i>
                    </span>
                    <select class="form-select" wire:model.live="type">
                        <option value="">All Type</option>
                        <option value="income">Income</option>
                        <option value="expense">Expense</option>
                    </select>
                </div>

                <div class="input-group me-2 me-lg-3 fmxw-200">
                    <span class="input-group-text">
                        <i class="fa fa-list"></i>
                    </span>
                    <select class="form-select" wire:model.live="category_id">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-3 col-lg-4 d-flex justify-content-end">
                <select class="form-select fmxw-100" wire:model.live="per_page">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <table class="table user-table table-hover align-items-center">
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
                @forelse($transactions as $index => $transaction)
                    <tr wire:key="{{ $transaction->id }}">
                        <td>{{ $index + $transactions->firstItem() }}</td>
                        <td>{{ $transaction->date->format('d-m-Y') }}</td>
                        <td>{{ $transaction->category->name }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->description }}</td>
                        <td>
                            <a
                                href="{{ route('transaction.edit', $transaction->id) }}"
                                class="btn btn-sm btn-primary"
                                wire:navigate>
                                <i class="fa fa-edit"></i>
                            </a>
                            <button
                                class="btn btn-sm btn-danger"
                                wire:click="setDeleteId({{ $transaction->id }})"
                                data-toggle="modal"
                                data-target="#deleteModal">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-danger text-center" colspan="6">No record found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{ $transactions->links() }}
        </div>

        <div class="col-md-3">
            <div class="card border-left-info shadow py-2 mb-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Current Month Expenses
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($current_month_transactions) }}</div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($current_year_transactions) }}</div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($total_transactions) }}</div>
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
