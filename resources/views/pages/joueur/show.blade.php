@extends('layout.index')
@section('content')
    <h1 class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">
        Fiche du joueur avec l'id : {{ $show->id }}</h1>

    <form action="/joueurs/{{ $show->id }}/update" method="post"
        class="m-4 flex flex-col w-1/2 justify-between p-4 text-2xl tracking-tight leading-none text-black-500">
        @csrf
        @method('PUT')
        <label class="my-4">Nom :</label>
        <input value={{ $show->nom }}
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
            name="nom">
        <label class="my-4">Prenom :</label>
        <input value={{ $show->prenom }}
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
            name="prenom">
        <label class="my-4">Age : </label>
        <input value={{ $show->age }}
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
            name="age">
        <label class="my-4">Téléphone : </label>
        <input value={{ $show->telephone }}
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
            name="telephone">
        <label class="my-4">E-mail : </label>
        <input value={{ $show->email }}
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
            name="email">
        <label class="my-4">Genre : </label>
        <select name="genre">
            <option value={{ $show->genre === 1 ? 0 : 1 }}
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring">{{ $show->genre === 1 ? 'Homme' : 'Femme' }}</option>
            <option value="{{ $show->genre === 1 ? 0 : 1 }}">{{ $show->genre === 1 ? 'Femme' : 'Homme' }}</option>
        </select>
        <label class="my-4">Pays : </label>
        <input value={{ $show->pays }}
            class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
            name="pays">
        <label class="my-4">Equipe : </label>
        <select name="equipes_id">
            <option class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring">
               {{$show->equipe == null ? "Pas d'équipe" : $show->equipe->nom}}
            </option>
            @foreach ($allequipes as $equipe)
                <option value="{{ $equipe->id }}">{{ $equipe->nom }}</option>
            @endforeach
        </select>
        <label class="my-4">Role : </label>
        <select name="roles_id">
            <option value={{ $show->roles_id }}
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring"
                name="roles_id">{{ $show->role->nom }}</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->nom }}</option>
            @endforeach
        </select>
        <label class="my-4">Photo : </label>
        <input value={{ $show->photos_id }} class="rounded-lg" name="photos_id" hidden>
        <img src="{{ asset('storage/img/' . $show->photo->src) }}" class="rounded-lg">
        <label class="my-4">Nouvelle photo: </label>
        <input type="file" id="src" name="src">
        <button type="submit"
            class="my-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Enregistrer</button>
    </form>
@endsection
