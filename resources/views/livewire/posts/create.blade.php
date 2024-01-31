{{-- Satu komponen harus dibungkus dalam 1 div --}}
<div>
    <x-flash-message />
    <form wire:submit='save'>
        <div class="mb-2">
            <label for="body" class="visually-hidden form-label">Description</label>
            <textarea placeholder="Apa yang anda pikirkan ?" wire:model="form.body" id="body" class="form-control" rows="5"></textarea>
            @error('form.body')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn btn-info" type="submit">Publish</button>
    </form>
</div>
