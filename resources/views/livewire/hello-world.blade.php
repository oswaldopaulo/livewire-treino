<div>
    {{--    <input wire:model.debounce.1000ms="name" type="text">--}}
    {{--   onblur <input wire:model.lazy="name" type="text">--}}
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting" multiple>
        <option>Ola</option>
        <option>Xau</option>
        <option>Adeus</option>
    </select>
    {{  implode(', ',$greeting) }} {{ $name }} @if($loud)
        !
    @endif

    <form action="#" wire:submit.prevent="$set('name','Lavinia')">

        <button>Reset Name</button>
    </form>
</div>
