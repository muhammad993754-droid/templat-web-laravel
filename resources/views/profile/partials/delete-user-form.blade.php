<div class="tab-pane fade" id="delete-account">
    <div class="card border-danger">
        <div class="card-header text-danger">
            <h5 class="card-title mb-0">Delete Account</h5>
        </div>
        <div class="card-body">
            <p class="text-muted mb-4">
                Once your account is deleted, all of its resources and data will be permanently deleted.
                Before deleting your account, please download any data or information that you wish to retain.
            </p>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                Delete Account
            </button>
        </div>
    </div>
</div>

{{-- Confirm Delete Modal --}}
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <p class="text-muted">
                        Once your account is deleted, all of its resources and data will be permanently deleted.
                        Please enter your password to confirm you would like to permanently delete your account.
                    </p>
                    <div class="mb-3">
                        <label for="delete_password" class="form-label">Password</label>
                        <input id="delete_password" type="password" name="password"
                            class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                            placeholder="Enter your password" />
                        @error('password', 'userDeletion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
