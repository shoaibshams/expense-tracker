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
                        <button
                                class="btn btn-danger"
                                wire:click="setDeleteId({{ $category->id }})"
                                data-toggle="modal"
                                data-target="#deleteModal">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div
            wire:ignore.self
            class="modal fade"
            id="deleteModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="deleteModalLabel"
            aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button
                            type="button"
                            wire:click="delete()"
                            class="btn btn-danger close-modal"
                            data-dismiss="modal">Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
