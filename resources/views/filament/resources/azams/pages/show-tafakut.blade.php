@vite(['resources/css/app.css', 'resources/js/app.js'])

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

        <x-filament::section>
    <x-slot name="heading">
        User details
    </x-slot>

    {{-- Content --}}
</x-filament::section>

<table>
    <thead>
        <tr>
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Name</th>
            <th class="border px-4 py-2">Email</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td class="border px-4 py-2">1</td>
                <td class="border px-4 py-2">John Doe</td>
                <td class="border px-4 py-2">apa@saja.com</td>
            </tr>
    </tbody>
</table>

<x-filament::section> 
    <x-filament::card>
        Card 1
    </x-filament::card>
    <x-filament::card>
        Card 2
    </x-filament::card>
</x-filament::section>

</x-filament-panels::page>
