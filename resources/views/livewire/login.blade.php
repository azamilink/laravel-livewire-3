<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text text-center">Login</h5>
            <form wire:submit='login'>
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" type="email" wire:model="form.email" id="email" class="email">
                    @error('form.email')
                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" type="password" wire:model="form.password" id="password" class="password">
                    @error('form.password')
                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info float-end">Login</button>
            </form>
        </div>
    </div>
</div>
