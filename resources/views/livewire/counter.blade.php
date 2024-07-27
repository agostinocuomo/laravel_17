<div>
    <h1>{{ $count }}</h1>
 
    <button wire:click="increment">+</button>
 
    <button wire:click="decrement">-</button>

    <button wire:click="resetCounter">Reset</button>

    <button wire:click="incrementn(25)">Add 25</button>

    <button wire:click="incrementn(50)">Add 50</button>

    <button wire:click="decrementn(25)">less 25</button>

    <button wire:click="decrementn(50)">less 50</button>
</div>
