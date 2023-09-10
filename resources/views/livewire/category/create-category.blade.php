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
                    <li class="breadcrumb-item" aria-current="page">Categories</li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
            <h2 class="h4">Create a new category</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
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
                                @error('form.icon')
                                <small class="text-danger">{{ $message }}</small> @enderror
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
                                @error('form.name')
                                <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <label class="small mb-1" for="type">Type</label>
                                <select class="form-control" wire:model="form.type" id="type">
                                    <option value="income">Income</option>
                                    <option value="expense">Expense</option>
                                </select>
                                @error('form.type')
                                <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
