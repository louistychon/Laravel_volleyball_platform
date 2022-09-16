@extends('layout.index')
@section('content')

<h1
    class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">
        Fiche du joueur </h1>

    <form action="/joueurs/{{ $show->id }}/update" method="post" class="m-4 flex flex-col w-1/2 justify-between p-4 text-2xl tracking-tight leading-none text-black-500">
        @csrf
        @method('PUT')
        <label for="">Nom :</label>
        <input value={{ $show->nom }} name="nom">
        <label for="">Prenom :</label>
        <input value={{ $show->prenom }} name="prenom">
        <label for="">Age : </label>
        <input value={{ $show->age }} name="age">
        <label for="">Téléphone : </label>
        <input value={{ $show->telephone }} name="telephone">
        <label for="">E-mail : </label>
        <input value={{ $show->email }} name="email">
        <label for="">Genre : </label>
        <input value={{ $show->genre }} name="genre">
        <label for="">Pays : </label>
        <input value={{ $show->pays }} name="pays">
        <label for="">Equipe : </label>
        <input value={{ $show->equipes_id }} name="equipes_id">
        <label for="">Role : </label>
        <input value={{ $show->roles_id }} name="roles_id">
        <label for="">Photo : </label>
        <input value={{$show->photos_id}} name="photos_id" hidden>
        <img src="{{asset('storage/img/'.$show->photo->src)}}">
        <label>Nouvelle photo: </label>
        <input type="file" id="src" name="src">
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enregistrer</button>
    </form>
@endsection
