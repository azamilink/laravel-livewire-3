<div>
    Name: <br>
    <input type="text" wire:model.live="name" /> <br>

    Message: <br>
    <textarea wire:model.live='message'></textarea> <br>

    Marital Status: <br>
    Single <input type="radio" value="Single" wire:model.live="marital_status">
    Married <input type="radio" value="Married" wire:model.live="marital_status"> <br>

    Favourite Color: <br>
    Red <input type="checkbox" value="Red" wire:model.live="colors" /> <br>
    Green <input type="checkbox" value="Green" wire:model.live="colors" /> <br>
    Blue <input type="checkbox" value="Blue" wire:model.live="colors" /> <br>

    Favourite Fruit: <br>
    <select wire:model.live="fruit">
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Manggo">Manggo</option>
        <option value="Banana">Banana</option>
    </select>

    <hr>
    Name : {{ $name }} <br>
    Message : {{ $message }} <br>
    Marital status : {{ $marital_status }} <br>
    Favourite Color : {{ $colors }} <br>
    Favourite Fruit : {{ $fruit }} <br>
</div>
