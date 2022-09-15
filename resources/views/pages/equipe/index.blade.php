@extends('layout.index')
@section('content')
    <h1
    class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">
        Toutes les équipes</h1>
    <div class="m-4 p-4 flex flex-wrap justify-evenly">
        @foreach ($allequipes as $equipe)
        <div class="flex">
            <a href="/equipes/{{ $equipe->id }}/show"
                class="block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Équipe :
                    {{ $equipe->nom }}</h5>
                <ul class="text-white">
                    <li>->{{ $equipe->ville }}</li>
                    <li>->{{ $equipe->pays }}</li>
                    <li>->{{ $equipe->continent->nom }}</li>
                </ul>
            </a>
        </div>
        @endforeach
    </div>

    <a href="{{Route('equipescreate')}}"><button type="button"
        class="block m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Créer une équipe</button></a>
@endsection
