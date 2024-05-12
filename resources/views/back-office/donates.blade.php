@extends('layouts.base')

@section('content')
    <h1 class="text-3xl text-orange-500 mb-3">Dernières dons</h1>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Profile des donneurs de sang </h2>

            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                @foreach ($donates as $donate)
                   <livewire:donate :donate="$donate"></livewire:donate>
                @endforeach
                <!-- More people... -->
            </ul>
        </div>
    </div>
@endsection
