@extends("layout.index")
@section("content")
<h1
    class="m-4 p-4 text-2xl font-extrabold tracking-tight leading-none text-black-500">
        Tous les joueurs </h1>
    <div class="m-4 p-4 grid grid-cols-4 justify-evenly">
        @foreach ($alljoueurs as $joueur)
        <div class="flex flex-col block mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <form method="post" action="/joueurs/{{ $joueur->id }}/delete">
                @csrf
                @method('DELETE')
            <button type="submit" style="color:red;" class="float-right block" ><i class="block text-right fa-solid fa-xmark"></i></button>
            </form>
            <a href="/joueurs/{{ $joueur->id }}/show"
                class="">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Nom :
                    {{ $joueur->nom }}</h5>
                    <img src={{asset('storage/img/'.$joueur->photo->src)}}>
                <ul class="text-black">
                    <li>->{{ $joueur->pays }}</li>
                    <li>->{{ $joueur->age }}</li>
                </ul>
            </a>
        </div>
        @endforeach
    </div>

    <a href="{{Route('equipescreate')}}"><button type="button"
        class="block m-auto focus:outline-none text-white bg-purple-700 hover:bg-red-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Créer une équipe</button></a>
@endsection
