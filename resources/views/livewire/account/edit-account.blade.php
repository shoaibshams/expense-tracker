<div class="row">

    <x-layouts.breadcrumb />

    <div class="col-md-12">
        <!-- Account details card-->
        <div class="card mb-4">
            <div class="card-header bg-gray-800 text-white p-3">
                <span class="h4">Edit Account</span>
            </div>
            <div class="card-body">
                <form wire:submit="update">
                    <div class="row mb-4">
                        <div class="col-lg-3 col-sm-6">
                            <label class="small mb-1" for="name">Account Name</label>
                            <input
                                    class="form-control"
                                    wire:model="form.name"
                                    id="name"
                                    type="text"
                                    placeholder="Enter account"
                                    value="">
                            @error('form.name')<small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <label class="small mb-1" for="code">Account Code</label>
                            <input
                                    class="form-control"
                                    wire:model="form.code"
                                    id="code"
                                    type="text"
                                    placeholder="Enter account"
                                    value="">
                            @error('form.code')<small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-sm-6">
                            <label class="small mb-1" for="description">Description</label>
                            <input
                                    class="form-control"
                                    wire:model="form.description"
                                    id="description"
                                    type="text"
                                    placeholder="Enter account"
                                    value="">
                            @error('form.description')<small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                    </div>

                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
