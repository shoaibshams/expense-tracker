<div>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category</h1>
        <a href="{{ route('category.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Add new
        </a>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>

            @foreach($categories as $key => $category)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
