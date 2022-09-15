@extends('layout.index')
@section('content')

<h1
    class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">
        Fiche du joueur </h1>

    <form action="/joueurs/{{ $show->id }}/update" method="post" class="m-4 p-4 text-2xl tracking-tight leading-none text-black-500">
        @csrf
        @method('PUT')
        <input value={{ $show->nom }} name="nom">
        <input value={{ $show->ville }} name="ville">
        <input value={{ $show->pays }} name="pays">
        <input value={{ $show->continent->id}} name="continents_id" hidden>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enregistrer</button>
    </form>
@endsection
