<div class="row">

    <x-layouts.breadcrumb />

    <div class="col-md-12">
        <!-- Account details card-->
        <div class="card mb-4">
            <div class="card-header bg-gray-800 text-white p-3">
                <span class="h4">Edit Category</span>
            </div>
            <div class="card-body">
                <form wire:submit="update">
                    <div class="row gx-3 mb-3">
                        <div class="col-md-3">
                            <label class="small mb-1" for="icon">Icon</label>
                            <select class="form-control" wire:model="form.icon" id="icon">
                                @foreach(ICONS as $icon)
                                    <option value="{{ $icon }}">{{ $icon }}</option>
                                @endforeach
                            </select>
                            @error('form.icon') <small class="text-danger">{{ $message }}</small>  @enderror
                        </div>

                        <div class="col-md-3">
                            <label class="small mb-1" for="category">Category</label>
                            <input
                                    class="form-control"
                                    wire:model="form.name"
                                    id="category"
                                    type="text"
                                    placeholder="Enter category"
                                    value="">
                            @error('form.name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-3">
                            <label class="small mb-1" for="type">Type</label>
                            <select class="form-control" wire:model="form.type" id="type">
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                            </select>
                            @error('form.type') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                    </div>

                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
