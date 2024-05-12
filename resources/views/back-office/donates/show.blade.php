@extends('layouts.base')

@section('content')
<div class="App h-screen flex justify-center items-center bg-gradient-to-r ">
    <div class=" hover:scale-105 bg-orange-100 rounded-xl shadow-2xl p-5 flex flex-col items-center">
            <div class="relative">
                @if ($donate->status)
                <div class="activeStatus  h-4 w-4 bg-green-500 absolute top-5 right-0 rounded-full ring-white ring-4"></div>
                @else
                <div class="activeStatus  h-4 w-4 bg-red-500 absolute top-5 right-0 rounded-full ring-white ring-4"></div>
                @endif
                <img src="{{ asset('donor_image') }}\{{ $donate->donor_image }}" alt="avater" class="h-40 ring-2 ring-offset-2 cursor-pointer rounded-full">
            </div>
            <table class="table table-striped mt-6">

                <tbody class="text-sm  text-gray-900">
                    <tr>
                        <th scope="row">Nom</th>
                        <td>:    {{ $donate->first_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Prènom</th>
                        <td>:   {{ $donate->last_name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Naissance</th>
                        <td>:   {{ (new DateTime($donate->birthday))->format(' j F Y') }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Sexe</th>
                        <td>:   {{ $donate->gender }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Body weight</th>
                        <td>:   {{ $donate->body_weight }}</td>
                    </tr>
                    <tr>
                        <th scope="row">E-mail</th>
                        <td>:   {{ $donate->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Adresse</th>
                        <td>:   {{ $donate->address }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Ville</th>
                        <td>:   {{ $donate->country }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Quartier</th>
                        <td>:   {{ $donate->city }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Contact</th>
                        <td>:   {{ $donate->contact }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Group sanguin</th>
                        <td>:   {{ $donate->voluntary_group }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nouveau donneur</th>
                        <td>:   {{ $donate->new_donor }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Date du don</th>
                        <td>:   {{(new DateTime($donate->created_at))->format(' j F Y H:i') }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="stats flex justify-between items-center font-semibold">
                <div class="stat-sub flex flex-col items-center m-4 p-2">
                    <div class="stat-num text-indigo-500 font-bold text-xl">{{ count($posts) }}</div>
                    <div class="stat-type text-indigo-400 text-xs">Posts</div>
                </div>
            </div>

        </div>
    </div>
    @if (auth()->user()->id != $donate->user_id)
    <section x-data="{open: false}" class=" hover:scale-105 justify-center p-10 flex">
        <a href="" class="text-indigo-500 mr-3" @click.prevent="open = !open" >Cliquez ici pour soumettre une demande</a>
        <form method="POST" action="{{ route('user.proposals.store',$donate) }}" class="w-full max-w-md" x-show="open" x-cloak >
            @csrf
            <textarea class="p-3 font-mono border-2" placeholder="Entrez votre demande ici" name="content"></textarea>
            <button class="block focus:ring-2 ring-offset-2 mr-4 bg-indigo-500 text-white p-2 px-4 rounded-md">Envoyer</button>

        </form>
    </section>
    @else
    <section x-data="{open: false}" class=" hover:scale-105 justify-center p-10 flex">
        <a href="" class="text-indigo-500 mr-3" @click.prevent="open = !open" >Cliquez ici pour modifier le status</a>
        <form method="POST" action="{{ route('user.confirm.modify',$donate) }}" class="w-full max-w-md" x-show="open" x-cloak >
            @csrf

            <select name="status" class="relative w-full cursor-default rounded-md bg-white py-1.5 pl-3 pr-10 text-left text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm sm:leading-6" id="exampleSelectd">
                <option value="1">Active</option>
                <option value="0">Désactiver</option>
            </select>
            <button class="block focus:ring-2 ring-offset-2 mr-4 bg-indigo-500 text-white p-2 px-4 rounded-md my-2">Envoyer</button>

        </form>
    </section>
    @endif


@endsection
