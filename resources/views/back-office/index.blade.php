@extends('layouts.base')

@section('content')
    <h1 class="text-4xl text-orange-500">Tableau de bord</h1>
    <div class="">
    <div class=" flex-col md:flex-row  flex ">
        <section class="text-sm text-gray-700  w-full mr-4">
            <h2 class="text-xl my-6 p-6"><svg class="w-6 h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path fill="#fff"
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg> Vos propositions ({{ auth()->user()->proposals->count() }})</h2>
            @foreach (auth()->user()->proposals as $proposal)
                <div class="mb-3 {{ $proposal->validated ? 'text-green-400' : '' }}">
                    <span class="block font-semibold items-center">
                        Pour le donneur "{{ $proposal->bloodDonor->first_name }} {{ $proposal->bloodDonor->last_name }}" <p class="text-red-700">({{ $proposal->bloodDonor->voluntary_group }})</p>
                    </span>
                    <span>Message de Demande de sang : <span
                            class="font-semibold">{{ $proposal->coverLetter->content }}</span></span>
                </div>
            @endforeach
        </section>

        <section class="text-sm text-gray-700 w-full mr-4 ">
            <h2 class="text-xl my-6 p-6 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="orange" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="white" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
            </svg>Vos donneur sélèctionné ({{ auth()->user()->likes()->count() }})</h2>
            @foreach (auth()->user()->likes as $like)
                <div class="mb-3">
                    <span class="block font-semibold">
                        {{ $like->first_name }} {{ $like->last_name }} <p class="text-red-700">({{ $like->voluntary_group }})</p>
                    </span>
                </div>
            @endforeach
        </section>


        <section class="text-sm text-gray-700 w-full">
            <h2 class="text-xl my-6 p-6">
                <svg class="w-6 h-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                </svg>
                Vos dons ({{ auth()->user()->bloodDonor()->count() }})
            </h2>
            @foreach (auth()->user()->bloodDonor as $bloodDonor)
                <div class="mb-3">
                    <span class="block font-semibold">
                        {{ $bloodDonor->first_name }} {{ $bloodDonor->last_name }}  ({{ $bloodDonor->proposals->count() }} @choice('proposition|propositions', $bloodDonor->proposals)) :</span>
                    </span>
                    <ul class="list-none ml-4">
                        @foreach ($bloodDonor->proposals as $proposal)
                            <li class="mt-2">• "{{ $proposal->coverLetter->content }}" par
                                <strong>
                                    {{ $proposal->user->name }}
                                </strong>
                            </li>
                            @if ($proposal->validated)
                                <span
                                    class="bg-white border border-green-500 text-xs p-1 my-2 inline-block text-green-500 rounded">Déjà
                                    validé</span>
                            @else
                                <a href="{{ route('user.confirm.proposal', [$proposal->id]) }}"
                                    class="bg-green-500 text-xs py-2 px-2 mt-2 mb-3 inline-block text-white hover:bg-green-200 hover:text-green-500 duration-200 transition rounded">Valider
                                    la proposition</a>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </section>
    </div>
</div>
@endsection
