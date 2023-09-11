<div>
    <x-layouts.breadcrumb />
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-header bg-gray-800 text-white p-3">
                    <span class="h4">Create a new category</span>
                </div>
                <div class="card-body">
                    <form wire:submit="save">
                        <div class="row mb-4">
                            <div class="col-lg-3 col-sm-6">
                                <label class="small mb-1" for="icon">Icon</label>
                                <select
                                    class="form-control"
                                    wire:model="form.icon"
                                    id="icon">
                                    @foreach(ICONS as $icon)
                                        <option value="{{ $icon }}">{{ $icon }}</option>
                                    @endforeach
                                </select>
                                @error('form.icon')<small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <label class="small mb-1" for="category">Category</label>
                                <input
                                    class="form-control"
                                    wire:model="form.name"
                                    id="category"
                                    type="text"
                                    placeholder="Enter category"
                                    value="">
                                @error('form.name')<small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <label class="small mb-1" for="type">Type</label>
                                <select class="form-control" wire:model="form.type" id="type">
                                    <option value="income">Income</option>
                                    <option value="expense">Expense</option>
                                </select>
                                @error('form.type')<small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
