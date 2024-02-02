<div>
    <button type="button" wire:click='addTwoNumbers(10,30)'>Sum</button> <br> <br>
    <textarea wire:keydown.enter='displayMessage($event.target.value)' rows="5"></textarea> <br> <br>

    <form wire:submit='getSum'>
        <input type="text" name="num1" wire:model='num1' />
        <input type="text" name="num1" wire:model='num2' />
        <button type="submit">Submit</button>
    </form>

    <hr>
    Sum : {{ $sum }} <br>
    Message : {{ $message }} <br>
    Result : {{ $result }} <br>
</div>
