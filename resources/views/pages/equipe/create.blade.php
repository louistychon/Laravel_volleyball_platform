@extends('layout.index')
@section('content')
    <section class="bgImageeq">
        <form action="/equipes/create" method="post" class="p-4 m-4 rounded-lg max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md">
        <h1 class="p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Entrez une nouvelle équipe !</h1>
            @csrf
            <input class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" type="text"
                name="nom" placeholder="nom">
            <input class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md"
                type="text" name="ville" placeholder="ville">
            <input class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md"
                type="text" name="pays" placeholder="pays">
            <select name="continents_id"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md "
                id="continents">
                @foreach ($allcontinents as $continent)
                    <option value="{{ $continent->id }}">{{ $continent->nom }}</option>
                @endforeach
            </select>
            <br />
            <button type="submit"
                class="m-4 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Enregistrer</button>
        </form>
    </section>
@endsection
