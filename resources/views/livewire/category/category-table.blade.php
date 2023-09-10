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
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </nav>
            <h2 class="h4">Categories</h2>
            <p class="mb-0">Manage your income and expense categories</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a
                href="{{ route('category.create') }}"
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
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Search categories">
                </div>
                <select class="form-select fmxw-200 d-none d-md-inline" wire:model.live="type">
                    <option value="">All</option>
                    <option value="income">Income</option>
                    <option value="expense">Expense</option>
                </select>
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
                <th class="border-bottom">Icon</th>
                <th class="border-bottom">Name</th>
                <th class="border-bottom">Type</th>
                <th class="border-bottom">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $index => $category)
                <tr wire:key="{{ $category->id }}">
                    <td>{{ $index + $categories->firstItem() }}</td>
                    <td><i class="{{ $category->icon }}"></i></td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->type }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary" wire:navigate>
                            <i class="fa fa-edit"></i>
                        </a>
                        <button
                            class="btn btn-danger"
                            wire:click="setDeleteId({{ $category->id }})"
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
            {{ $categories->links() }}
        </div>
    </div>

    <x-modals.delete/>
</div>
