@extends('layout.index')
@section('content')
<h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Entrez une nouvelle équipe !</h1>
    <form action="/equipes/create" method="post" class="p-4 m-4 text-center rounded-lg">
        @csrf
        <input class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" type="text" name="nom" placeholder="nom">
        <input class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" type="text" name="ville" placeholder="ville">
        <input class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md" type="text" name="pays" placeholder="pays">
        <select name="continents_id" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md " id="continents">
            @foreach ($allcontinents as $continent)
            <option value="{{$continent->id}}">{{$continent->nom}}</option>
            @endforeach
        </select>
        <br/>
        <button type="submit" class="m-4 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Enregistrer</button>
    </form>
@endsection
