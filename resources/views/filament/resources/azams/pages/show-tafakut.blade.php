@vite(['resources/css/app.css', 'resources/js/app.js'])



<x-filament-panels::page>


        <x-filament::input.wrapper>
            <label> 
                <x-filament::input.checkbox {{ $this->record->pengendali }} /> Pengendali </label>
            
            <label>
                <x-filament::input.checkbox {{ $this->record->tertib }}  /> Tertib </label>
        </x-filament::input.wrapper>


        <x-filament::button>
            Submit
        </x-filament::button>
        
<x-filament::section>
    <x-slot name="heading">
        <p style="text-align:center;">Borang Tafaqud</p>
    </x-slot>

    <x-filament::fieldset>
        <x-slot name="label">
            Butir Diri
        </x-slot>
        <table>
                <tr>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">Nama Penuh</label></td>
                    <td class="px-2 py-2" style="width:40%; border-bottom: 1px dotted black;">{{ $this->record->ahbab->fullname  }}</td>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">Gelaran</label></td>
                    <td class="px-2 py-2" style="width:40%; border-bottom: 1px dotted black;">{{ $this->record->ahbab->nickname  }}</td>
                </tr>
                <tr>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">Tarikh Lahir</label></td>
                    <td class="px-2 py-2" style="width:40%; border-bottom: 1px dotted black;">
                        {{ date('d F ', strtotime($this->record->ahbab->dob))  }}
                        {{ $yearBirth = date('Y', strtotime($this->record->ahbab->dob)); }}
                        ( {{ $age = date("Y") - $yearBirth }} tahun)
                    </td>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">No. K/P </label></td>
                    <td class="px-2 py-2" style="width:40%; border-bottom: 1px dotted black;">{{ $this->record->ahbab->nric  }}</td>
                </tr>
                <tr>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">Pekerjaan</label></td>
                    <td class="px-2 py-2" style="width:40%; border-bottom: 1px dotted black;">{{ $this->record->ahbab->occupation  }}</td>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">Perkahwinan</label></td>
                    <td class="px-2 py-2" style="width:40%; border-bottom: 1px dotted black;">{{ $this->record->ahbab->marriage  }}</td>
                </tr>
                <tr>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">Email</label></td>
                    <td class="px-2 py-2" style="width:40%; border-bottom: 1px dotted black;">{{ $this->record->ahbab->email  }}</td>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">No. H/P</label></td>
                    <td class="px-2 py-2" style="width:40%; border-bottom: 1px dotted black;">{{ $this->record->ahbab->phone  }}</td>
                </tr>
                <tr>
                    <td class="px-2 py-2" style="width:10%"><label class="block text-sm/6 font-medium text-gray-900">Alamat</label></td>
                    <td class="px-2 py-2" style="width:90%; border-bottom: 1px dotted black;" colspan="3">
                        {{ $this->record->ahbab->home_add  }}, 
                        {{ $this->record->ahbab->city->name  }}, 
                        {{ $this->record->ahbab->state->name  }}, 
                        {{ $this->record->ahbab->country->name  }}.
                    </td>
                </tr>
        </table>
    </x-filament::fieldset>

<br/>

    <x-filament::fieldset>
        <x-slot name="label">
            Maqami
        </x-slot>
            <table>
                    <tr>
                        <td class="px-2 py-2"><label class="block text-sm/6 font-medium text-gray-900">Markaz</label></td>
                        <td class="px-2 py-2">
                            <x-filament::input.wrapper>
                                <x-filament::input
                                    type="text"
                                    wire:model="name"
                                    value="{{ $this->record->ahbab->mohallah->halqah->markaz->name  }}"
                                    disabled
                                />
                            </x-filament::input.wrapper>
                        </td>
                        <td class="px-2 py-2"><label class="block text-sm/6 font-medium text-gray-900">Halqah</label></td>
                        <td class="px-2 py-2">
                            <x-filament::input.wrapper>
                                <x-filament::input
                                    type="text"
                                    wire:model="name"
                                    value="{{ $this->record->ahbab->mohallah->halqah->name  }}"
                                    disabled
                                />
                            </x-filament::input.wrapper>                        
                        </td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2"><label class="block text-sm/6 font-medium text-gray-900">Mesyuarat</label></td>
                        <td class="px-2 py-2">{{ date('d F Y', strtotime($this->record->ahbab->dob))  }}</td>
                        <td class="px-2 py-2"><label class="block text-sm/6 font-medium text-gray-900">Taklim </label></td>
                        <td class="px-2 py-2">{{ $this->record->ahbab->nric  }}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2"><label class="block text-sm/6 font-medium text-gray-900">Email</label></td>
                        <td class="px-2 py-2">{{ $this->record->ahbab->email  }}</td>
                        <td class="px-2 py-2"><label class="block text-sm/6 font-medium text-gray-900">No. H/P</label></td>
                        <td class="px-2 py-2">{{ $this->record->ahbab->phone  }}</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2"><label class="block text-sm/6 font-medium text-gray-900">Alamat</label></td>
                        <td class="px-2 py-2" colspan="3">
                            {{ $this->record->ahbab->home_add  }}, 
                            {{ $this->record->ahbab->city->name  }}, 
                            {{ $this->record->ahbab->state->name  }}, 
                            {{ $this->record->ahbab->country->name  }}.
                        </td>
                    </tr>
            </table>
    </x-filament::fieldset>

</x-filament::section>


<x-filament::section> 
    <x-filament::card>
        Card 1
    </x-filament::card>
    <x-filament::card>
        Card 2
    </x-filament::card>
</x-filament::section>




</x-filament-panels::page>
