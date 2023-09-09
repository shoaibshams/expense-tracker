<!-- Modal -->
<div
    wire:ignore.self
    class="modal fade"
    id="deleteModal"
    tabindex="-1"
    aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Confirm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary close-btn" data-bs-dismiss="modal">Close</button>
                <button
                    type="button"
                    wire:click="delete()"
                    class="btn btn-danger close-modal"
                    data-bs-dismiss="modal">Yes, Delete
                </button>
            </div>
        </div>
    </div>
</div>
