@extends('layout.index')
@section('content')
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Entrez un nouveau joueur !</h1>
    <form action="/joueurs/create" method="post" enctype="multipart/form-data" class="p-4 m-4 text-center rounded-lg">
        @csrf
        <label class="text-black">Nom : </label>
        <input
            class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text" name="nom" placeholder="nom">
        <label class="text-black">Prenom : </label>
        <input
            class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text" name="prenom" placeholder="prenom">
        <label class="text-black">Age : </label>
        <input type="number"
            class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="text" name="age" placeholder="age">
        <label class="text-black">Tel : </label>
        <input
            class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="phone" name="telephone" placeholder="telephone">
        <label class="text-black">email : </label>
        <input
            class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="email" name="email" placeholder="email">
        <label class="text-black">pays : </label>
        <input
            class="block m-auto py-2.5 px-0 text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            type="phone" name="pays" placeholder="pays">
        <fieldset>
            <legend>Genre :</legend>
            <div>
                <input type="radio" id="homme" value="0" name="genre" checked>
                <label for="homme" class="text-black">Homme</label>
            </div>
            <div>
                <input type="radio" id="femme" value="1" name="genre">
                <label for="femme" class="text-black">Femme</label>
            </div>
        </fieldset>

        <label for="roles_id" class="text-white">Role : </label>
        <select name="roles_id" id="roles_id" class="border">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->nom }}</option>
            @endforeach
        </select>

        <label for="img">Image</label>
        <input type="file" id="img" name="img">

        <label for="equipes_id" class="text-white">Equipe : </label>
        <select name="equipes_id" id="equipes_id" class="border">
            <option value={{ null }}>Select</option>
            @foreach ($equipes as $equipe)
                <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
            @endforeach
        </select>

        <button type="submit"
            class="m-4 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Enregistrer</button>
    </form>
@endsection
