@extends('layout.index')
@section('content')
<h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Entrez une nouvelle équipe !</h1>
    <form action="/equipes/create" method="post" class="p-4 m-4 bg-black text-center rounded-lg">
        @csrf
        <input class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="nom" placeholder="nom">
        <input class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="ville" placeholder="ville">
        <input class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" type="text" name="pays" placeholder="pays">
        <label for="continents" class="text-white">Continent :</label>
        <select name="continents_id" id="continents">
            @foreach ($allcontinents as $continent)
            <option value="{{$continent->id}}">{{$continent->nom}}</option>
            @endforeach
        </select>
        <br/>
        <button type="submit" class="m-4 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Enregistrer</button>
    </form>
@endsection
