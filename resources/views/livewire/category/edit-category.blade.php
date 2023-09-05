<div class="row">
    <div class="col-md-6">
        <!-- Account details card-->
        <div class="card mb-4">
            <div class="card-header">Edit Category</div>
            <div class="card-body">
                <form wire:submit="update">
                    <div class="row gx-3 mb-3">
                        <div class="col-md-12">
                            <label class="small mb-1" for="category">Category</label>
                            <input class="form-control" wire:model="form.name" id="category" type="text" placeholder="Enter category">
                            @error('form.name') <small class="text-danger">{{ $message }}</small>  @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
