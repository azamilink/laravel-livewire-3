<div>
    @foreach ($posts as $post)
        <livewire:posts.block :post="$post" wire:key="{{ $post->id }}" laz />
    @endforeach
</div>
