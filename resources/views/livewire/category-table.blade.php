<div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
        <a
            href="{{ route('category.create') }}"
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
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="bg-white">
            @foreach($categories as $key => $category)
                <tr wire:key="{{ $category->id }}">
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary" wire:navigate>
                            <i class="fa fa-edit"></i>
                        </a>
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
