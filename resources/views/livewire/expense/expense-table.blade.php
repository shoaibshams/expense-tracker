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

    <div class="row bg-gradient">
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
                        <a href="{{ route('expense.edit', $expense->id) }}" class="btn btn-primary" wire:navigate>
                            <i class="fa fa-edit"></i>
                        </a>
                        <button
                            class="btn btn-danger"
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

    <x-modals.delete />
</div>
