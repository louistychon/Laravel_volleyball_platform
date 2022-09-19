@extends('layout.index')
@section('content')
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Entrez un nouveau joueur !</h1>
    <form action="/joueurs/create" method="post" enctype="multipart/form-data" class="p-4 m-4 rounded-lg max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md">
        @csrf
        <label class="text-gray-700 ">Nom : </label>
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="text" name="nom" placeholder="nom">
        <label class="text-gray-700 ">Prenom : </label>
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="text" name="prenom" placeholder="prenom">
        <label class="text-gray-700 ">Age : </label>
        <input type="number"
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
            type="text" name="age" placeholder="age">
        <label class="text-gray-700 ">Tel : </label>
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="phone" name="telephone" placeholder="telephone">
        <label class="text-gray-700 ">email : </label>
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="email" name="email" placeholder="email">
        <label class="text-gray-700 ">pays : </label>
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="phone" name="pays" placeholder="pays">
        <fieldset class="flex justify-center">
            <legend class="text-gray-700 ">Genre :</legend>
            <div>
                <input type="radio" id="homme" value="0" name="genre" class="m-5" checked>
                <label for="homme" class="text-black">Homme</label>
            </div>
            <div>
                <input type="radio" id="femme" value="1" name="genre" class="m-5">
                <label for="femme" class="text-black">Femme</label>
            </div>
        </fieldset>

        <label for="roles_id" class="text-gray-700 ">Role : </label>
        <select name="roles_id" id="roles_id" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->nom }}</option>
            @endforeach
        </select>

        <label for="img" class="text-gray-700 ">Image</label>
        <input type="file" id="img" name="img" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring">

        <label for="equipes_id" class="text-gray-700 ">Equipe : </label>
        <select name="equipes_id" id="equipes_id" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring">
            <option value={{ null }}>Select</option>
            @foreach ($equipes as $equipe)
                <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
            @endforeach
        </select>

        <button type="submit"
            class="my-4 px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Enregistrer</button>
    </form>

@endsection
