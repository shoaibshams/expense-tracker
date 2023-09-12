<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-4">

        <x-layouts.breadcrumb heading="Transactions" sub-heading="Manage your income and expense transactions" />

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
            <div class="card border-0 shadow mb-2">
                <div class="bg-gray-800 card-title p-2 text-white">
                    <strong class="mb-1">Today</strong>
                </div>
                <div class="card-body pt-1">
                    <div class="d-block">
                        <div class="d-flex align-items-center me-5">
                            <div class="icon-shape icon-sm icon-shape-success rounded me-3">
                                <i class="fa fa-wallet fa-2x"></i>
                            </div>
                            <div class="d-block">
                                <strong class="mb-0 text-success">Income</strong>
                                <h5 class="mb-0">33.50%</h5>
                            </div>
                        </div>
                        <div class="d-flex align-items-center pt-3">
                            <div class="icon-shape icon-sm icon-shape-warning rounded me-3">
                                <i class="fa fa-money-bill-wave-alt fa-2x"></i>
                            </div>
                            <div class="d-block">
                                <strong class="mb-0 text-danger">Expense</strong>
                                <h5 class="mb-0">9,567</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modals.delete/>
</div>
