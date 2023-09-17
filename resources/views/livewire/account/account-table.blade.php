<div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-4">

        <x-layouts.breadcrumb heading="Accounts" sub-heading="Manage your cash and bank accounts." />

        <div class="btn-toolbar mb-2 mb-md-0">
            <a
                href="{{ route('account.create') }}"
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
                <div class="input-group me-2 me-lg-3 fmxw-300">
                <span class="input-group-text">
                    <i class="fa fa-search"></i>
                </span>
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Search account">
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

    <div class="card card-body shadow border-0 table-wrapper table-responsive">
        <table class="table user-table table-hover align-items-center">
            <thead>
            <tr>
                <th class="border-bottom">#</th>
                <th class="border-bottom">Name</th>
                <th class="border-bottom">Code</th>
                <th class="border-bottom">Opening Balance</th>
                <th class="border-bottom">Description</th>
                <th class="border-bottom">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($accounts as $index => $account)
                <tr wire:key="{{ $account->id }}">
                    <td>{{ $index + $accounts->firstItem() }}</td>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->code }}</td>
                    <td>{{ number_format($account->opening_balance) }}</td>
                    <td>{{ $account->description }}</td>
                    <td>
                        <a href="{{ route('account.edit', $account->id) }}" class="btn btn-primary" wire:navigate>
                            <i class="fa fa-edit"></i>
                        </a>
                        <button
                            class="btn btn-danger"
                            wire:click="setDeleteId({{ $account->id }})"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-2">
            {{ $accounts->links() }}
        </div>
    </div>

    <x-modals.delete/>
</div>
