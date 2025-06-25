<x-template>
    <div class="container my-5">

        <div class="p-5 text-center bg-body-tertiary rounded-3"> <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);"
                width="100" height="100" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg>
            @auth
                <h1 class="text-body-emphasis">My Library Dashbaord</h1>
                <div class="d-inline-flex gap-2 mb-5">

                    <a class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill"
                        href="{{ route('index') }}">Lista Libro</a>

                    <a class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill"
                        href="{{ route('authors.index') }}">Lista Autori</a>
                    <a class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill"
                        href="{{ route('categories.index') }}">Lista categorie</a>
                </div>
            @endauth

            @guest
                <h1 class="text-body-emphasis">Negozio di Libri</h1>
            @endguest
        </div>
    </div>
    <div class="container my-5">
        <div class="list-group">
            @foreach ($books as $book)
                <a href="{{ route('detail', ['book' => $book]) }}" class="list-group-item list-group-item-action">
                    {{ $book->name }}
                </a>
            @endforeach
        </div>
    </div>

</x-template>
