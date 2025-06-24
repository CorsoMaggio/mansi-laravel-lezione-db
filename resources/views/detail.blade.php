<x-template>
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3"> <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);"
                width="100" height="100" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg>

            <h1 class="text-body-emphasis">{{ $book->name }}</h1>
            <div class="d-inline-flex gap-2 mb-5">

                Prezzo: {{ $book->price }}
                Pagine: {{ $book->pages }}
                Anno: {{ $book->years }}

            </div>

        </div>
    </div>

</x-template>
