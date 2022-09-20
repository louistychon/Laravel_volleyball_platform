@extends('layout.index')
@section('content')

@include('layout.flash')
<section class="bgImage">
    <form action="/joueurs/create" method="post" enctype="multipart/form-data" class="rounded-lg max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md">
        <h1 class="p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">Entrez un nouveau joueur !</h1>
        @csrf
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="text" name="nom" placeholder="nom">
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="text" name="prenom" placeholder="prenom">
        <input type="number"
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
            type="text" name="age" placeholder="age">
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="phone" name="telephone" placeholder="telephone">
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="email" name="email" placeholder="email">
        <input
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring"
            type="phone" name="pays" placeholder="pays">
        <fieldset class="flex justify-center">
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
        <select name="roles_id" id="roles_id" class="block w-full px-4 py-2 my-5 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring">
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->nom }}</option>
            @endforeach
        </select>

        <label for="img" class="text-gray-700 ">Photo de profil :</label>
        <input type="file" id="img" name="img" class="block w-full px-4 py-2 my-5 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring">

        <label for="equipes_id" class="text-gray-700 ">Equipe : </label>
        <select name="equipes_id" id="equipes_id" class="block w-full px-4 py-2 my-5 text-gray-700 bg-white border border-gray-200 rounded-md  focus:outline-none focus:ring">
            <option value={{ null }}>Pas d'équipe</option>
            @foreach ($equipes as $equipe)
                <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
            @endforeach
        </select>

        <button type="submit"
            class="my-4 px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Enregistrer</button>
    </form>
</section>
@endsection
