@extends('layout.index')
@section('content')
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">
        Fiche de l'équipe </h1>

    <form action="/equipes/{{ $show->id }}/update" method="post"
        class="m-4 p-4 text-2xl tracking-tight leading-none text-black-500">
        @csrf
        @method('PUT')
        <input class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" value={{ $show->nom }} name="nom">
        <input class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" value={{ $show->ville }} name="ville">
        <input class="block w-full px-4 py-2 my-2 text-gray-700 bg-white border border-gray-200 rounded-md" value={{ $show->pays }} name="pays">
        <input class="none w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" value={{ $show->continent->id }} name="continents_id" hidden>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Enregistrer</button>
    </form>

    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">
        Joueurs de l'équipe : </h1>

    <div class="m-4 p-4 grid gap-5 grid-cols-5 ">
        @foreach ($joueurs as $joueur)
            <div class="mb-4">
                <a
                    class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                        {{ $joueur->nom }} {{ $joueur->prenom }}, {{ $joueur->age }} ans</h5>
                    <ul class="text-black">
                        <img src="{{ asset('storage/img/' . $joueur->photo->src) }}" class="rounded-lg">
                        <li>Role ->{{ $joueur->role->nom }}</li>
                        <li>Pays ->{{ $joueur->pays }}</li>
                        <li>Genre ->
                            @if ($joueur->genre === 1)
                                Femme
                            @endif
                            @if ($joueur->genre === 0)
                                Homme
                            @endif
                        </li>
                    </ul>
                </a>
            </div>
        @endforeach
        </div>
    @endsection
