<div>
    Title <input type="text" wire:model.live='title' class="form-control" /> <br>
    Name <input type="text" wire:model.live='name' class="form-control" /> <br>

    <hr>
    <h3>Title : {{ $title }}</h3>
    <h3>Name : {{ $name }}</h3>

    <hr>
    <h3>Lifecycle Hooks Method</h3>
    @foreach ($infos as $info)
        <h4>{{ $info }}</h4>
    @endforeach
</div>
