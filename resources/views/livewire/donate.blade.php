    <div class=" hover:scale-105 flex items-center gap-x-6">
        <div></div>
        <a href="{{ route('user.donate.show', ['id' => $donate->id]) }}">
            <img class="h-16 w-16 rounded-full" src="{{ asset('donor_image') }}\{{ $donate->donor_image }}" alt="">
        </a>
        <div>
            <div class="flex justify-between items-center ">
                <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">
                    {{ $donate->first_name }} {{ $donate->last_name }}</h3>
                <button class="h-5 w-5 hover:scale-x-125 text-gray-600 ml-4" wire:click="addLike"><svg xmlns="http://www.w3.org/2000/svg" fill="{{ $donate->isLiked() ? 'orange' : '' }}" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="white" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                </button>
            </div>
            <a href="{{ route('user.donate.show', ['id' => $donate->id]) }}">
            <p class="text-sm font-semibold leading-6 text-red-600">Group Sanguin /
                {{ $donate->voluntary_group }}</p></a>
        </div>

    </div>
</li>
