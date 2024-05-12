<div class="inline-block relative" x-data="{ open: true }">
    <input @click.outside="open = false; @this.resetIndex();" @click="open = ! open"
        class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-500 px-2 py-1 rounded-full mr-3 w-56"
        placeholder="Rechercher  ..." wire:model.lazy="query" autocomplete="off"
        wire:keydown.arrow-down.prevent="incrementIndex" wire:keydown.arrow-up.prevent="decrementIndex"
        wire:keydown.backspace="resetIndex"
        wire:keydown.enter.prevent="showDonors">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-5 h-5 text-gray-500 absolute top-0 right-0 mr-5 mt-2">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
    </svg>
    <div class="absolute border bg-gray-100 text-md w-56 mt-1" x-show="open">
        @if (strlen($query) > 0)

            @if (count($donors) > 0)
                @foreach ($donors as $index => $donor)
                    <p class="p-1 rounded-full {{ $index === $selectedIndex ? 'text-green-500' : '' }}">
                        {{ $donor->first_name }} / {{ $donor->voluntary_group }}</p>
                @endforeach
            @else
                <span class="text-red-500 p-1 rounded-full">0 résultats pour "{{ $query }}"</span>
            @endif

        @endif
    </div>
</div>
