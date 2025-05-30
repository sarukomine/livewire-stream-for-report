<div>
    <button wire:click="begin">Start count-down</button>

    <h1>Count: <span wire:stream="count">{{ $start }}</span></h1>
</div>
