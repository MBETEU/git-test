@extends('layouts.base')

@section('content')
    <h1 class="text-3xl text-orange-500 mb-3">Mes dernières dons</h1>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Mes Dons / {{ auth()->user()->name }} </h2>

            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                @foreach ($donates as $donate)
                    <li>
                        <div class=" hover:scale-105 flex items-center gap-x-6">
                            <a href="{{ route('user.donate.show', ['id' => $donate->id]) }}">
                            <img class="h-16 w-16 rounded-full" src="{{ asset('donor_image') }}\{{ $donate->donor_image }}"
                                alt="">
                                <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">
                                        {{ $donate->first_name }} {{ $donate->last_name }}</h3>
                                        <a href="{{ route('user.donate.show', ['id' => $donate->id]) }}">
                                    <p class="text-sm font-semibold leading-6 text-red-600">Group Sanguin /
                                        {{ $donate->voluntary_group }}</p></a>
                                </div>


                        </div>
                    </li>
                @endforeach
                <!-- More people... -->
            </ul>
        </div>
    </div>
@endsection
