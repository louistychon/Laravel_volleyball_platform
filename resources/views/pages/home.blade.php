@extends('layout.index')
@section('content')
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Équipes remplies
    </h1>
    <div class="grid grid-cols-4 gap-5  gap-5 ">
        @foreach ($allequipes as $equipe)
        @if($equipe->nombre == 10)
            <div class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">
                <a href="/equipes/{{ $equipe->id }}/show">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "> Équipe :
                        {{ $equipe->nom }}</h5>
                    <ul class="text-black">
                        <li>->{{ $equipe->ville }}</li>
                        <li>->{{ $equipe->pays }}</li>
                        <li>->{{ $equipe->continent->nom }}</li>
                        <button
                            class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Voir
                            l'équipe</button>
                    </ul>
                </a>
            </div>
            @endif
        @endforeach
    </div>
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">2 équipes non remplies</h1>
    <div class="grid grid-cols-4 gap-5  ">
        @foreach ($allequipes as $equipe)
            <div class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">
                <a href="/equipes/{{ $equipe->id }}/show">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Équipe :
                        {{ $equipe->nom }}</h5>
                    <ul class="text-black">
                        <li>->{{ $equipe->ville }}</li>
                        <li>->{{ $equipe->pays }}</li>
                        <li>->{{ $equipe->continent->nom }}</li>
                        <button
                            class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 ">Voir
                            l'équipe</button>
                    </ul>
                </a>
            </div>
        @endforeach
    </div>
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">4 joueurs sans équipes au hasard
    </h1>
    <div class="grid grid-cols-4 gap-5 ">
        @foreach ($quatrejoueurssansequipe as $joueur)
            <div class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                <a href="/joueurs/{{ $joueur->id }}/show">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Équipe :
                        {{ $joueur->nom }}</h5>
                    <ul class="text-black">
                        <img class="rounded-lg" src={{asset('storage/img/'. $joueur->photo->src)}}>
                        <li>->{{ $joueur->prenom }}</li>
                        <li>->{{ $joueur->age }}</li>
                        <button
                            class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 ">Voir le joueur</button>
                    </ul>
                </a>
            </div>
        @endforeach
    </div>
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">4 joueurs avec équipe</h1>
    <div class="grid grid-cols-4 gap-5 ">
        @foreach ($quatrejoueursavecequipe as $joueur)
            <div class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">
                <a href="/joueurs/{{ $joueur->id }}/show">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Équipe :
                        {{ $joueur->nom }}</h5>
                    <ul class="text-black">
                        <img class="rounded-lg" src={{asset('storage/img/'. $joueur->photo->src)}}>
                        <li>->{{ $joueur->prenom }}</li>
                        <li>->{{ $joueur->age }}</li>
                        <button
                            class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Voir
                            l'équipe</button>
                    </ul>
                </a>
            </div>
        @endforeach
    </div>
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">les equipes d'europes</h1>
    <div class="grid grid-cols-4 gap-5 ">
        @foreach ($allequipes_europe as $equipe)
            <div class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">
                <a href="/equipes/{{ $equipe->id }}/show">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Équipe :
                        {{ $equipe->nom }}</h5>
                    <ul class="text-black">
                        <li>->{{ $equipe->pays }}</li>
                        <li>->{{ $equipe->continent->nom }}</li>
                        <button
                            class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Voir
                            l'équipe</button>
                    </ul>
                </a>
            </div>
        @endforeach
    </div>
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">les équipes hors europes</h1>
    <div class="grid grid-cols-4 gap-5 ">
        @foreach ($allequipes_hors_europe as $equipe)
            <div class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                <a href="/equipes/{{ $equipe->id }}/show">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Équipe :
                        {{ $equipe->nom }}</h5>
                    <ul class="text-black">
                        <li>->{{ $equipe->pays }}</li>
                        <li>->{{ $equipe->continent->nom }}</li>
                        <button
                            class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 ">Voir
                            l'équipe</button>
                    </ul>
                </a>
            </div>
        @endforeach
    </div>

    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Une section 5 joueuses au hasard
        qui ont une équipe !</h1>
        <div class="grid grid-cols-4 gap-5 ">
            @foreach ($cinq_joueuses_random as $joueur)
                <div class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                    <a href="/joueurs/{{ $joueur->id }}/show">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Joueur :
                            {{ $joueur->nom }}</h5>
                        <ul class="text-black">
                            <img class="rounded-lg" src={{asset('storage/img/'. $joueur->photo->src)}}>
                            <li>->{{ $joueur->prenom }}</li>
                            <li>->{{ $joueur->pays }}</li>
                            <li>->{{ $joueur->age }}</li>
                            <button
                                class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Voir la joueuse</button>
                        </ul>
                    </a>
                </div>
            @endforeach
        </div>
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Une section 5 joueurs homme et
        qui ont une équipe !</h1>
        <div class="grid grid-cols-4 gap-5 ">
            @foreach ($cinq_joueurs_random as $joueur)
                <div class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 ">
                    <a href="/joueurs/{{ $joueur->id }}/show">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Joueur :
                            {{ $joueur->nom }}</h5>
                        <ul class="text-black">
                            <img class="rounded-lg" src={{asset('storage/img/'. $joueur->photo->src)}}>
                            <li>->{{ $joueur->prenom }}</li>
                            <li>->{{ $joueur->pays }}</li>
                            <li>->{{ $joueur->age }}</li>
                            <button
                                class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Voir le joueur</button>
                        </ul>
                    </a>
                </div>
            @endforeach
        </div>



@endsection
