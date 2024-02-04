<div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Images Upload</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit='uploadImages' id="form-upload" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="filename" class="form-label">File</label>
                                    <input class="form-control" type="file" name="file" id="filename" wire:model='images' multiple>
                                    @error('images')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-info float-end">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('js')
    <script>
        window.Livewire.on('imagesUploaded', () => {
            $('#form-upload')[0].reset();
        })
    </script>
@endpush
