@extends('layout.index')
@section('content')
<section class="bgImageeq">
    <h1 class="m-4 p-4 text-2xl text-center text-white font-extrabold tracking-tight leading-none text-black-500">
        Tous les joueurs </h1>
    <div class="m-4 p-4 grid grid-cols-4 gap-3 justify-evenly">
        @foreach ($alljoueurs as $joueur)
            <div
                class="flex flex-col block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                <form method="post" action="/joueurs/{{ $joueur->id }}/delete">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color:red;" class="float-right block" title="Supprimer ce joueur"><i
                            class="block text-right fa-solid fa-xmark"></i></button>
                </form>
                <a href="/joueurs/{{ $joueur->id }}/show" class="">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "> Nom :
                        {{ $joueur->nom }}</h5>
                    <img src={{ asset('storage/img/' . $joueur->photo->src) }} class="rounded-lg">
                    <ul class="text-black mt-2">
                        <li><i class="fa-solid fa-earth-americas mt-2"></i> {{ $joueur->pays }}</li>
                        <li><i class="fa-solid fa-cake-candles mt-2"></i> {{ $joueur->age }} ans </li>
                    </ul>
                </a>
            </div>
        @endforeach
    </div>
    <a href="{{ Route('joueurscreate') }}"><button type="button"
            class="block m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Créer
            un joueur</button></a>
</section>
@endsection
