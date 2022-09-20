@extends('layout.index')
@section('content')
<section class="sectionIndexEquipes">
    <h1
    class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">
        Toutes les équipes</h1>
    <div class="m-4 p-4 flex flex-wrap justify-evenly">
        @foreach ($allequipes as $equipe)
        <div class="flex flex-col block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
            <form method="post" action="/equipes/{{ $equipe->id }}/delete">
                @csrf
                @method('DELETE')
            <button type="submit" style="color:red;" class="float-right block" ><i class="block text-right fa-solid fa-xmark"></i></button>
            </form>
            <a href="/equipes/{{ $equipe->id }}/show">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Équipe :
                    {{ $equipe->nom }}</h5>
                <ul class="text-black">
                    <li>>{{ $equipe->ville }}</li>
                    <li>>{{ $equipe->pays }}</li>
                    <li>>{{ $equipe->continent->nom }}</li>
                    <button class="block my-5 m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Voir l'équipe</button>
                </ul>
            </a>
        </div>
        @endforeach
    </div>

    <a href="{{Route('equipescreate')}}"><button type="button"
        class="block m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Créer une équipe</button></a>

</section>
@endsection
