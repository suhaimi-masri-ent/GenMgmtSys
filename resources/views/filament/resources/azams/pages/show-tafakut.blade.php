<x-filament-panels::page>

<div class="p-4 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold mb-4">Markaz: {{ $this->record->ahbab->mohallah->halqah->markaz->name}}</h2>

</div>
<x-filament::input.wrapper>
    <x-filament::input
        type="text"
        wire:model="name"
    />
</x-filament::input.wrapper>
<x-filament::fieldset>
    <x-slot name="label">
        Address
    </x-slot>
    
    {{-- Form fields --}}
</x-filament::fieldset>
    
        <x-filament::button>
            Submit
        </x-filament::button>
</x-filament-panels::page>
