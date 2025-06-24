<x-template>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container w-50 mt-5">
        <div class="d-flex justify-content-between">
            <h2>Lista Autori</h2>
            <a class="btn btn-success" href="{{ route('authors.create') }}">Crea Autore</a>
        </div>
        <div class="table-responsive small ">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Nome Cognome</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <td>{{ $author->id }}</td>
                            <td>{{ $author->firstname . ' ' . $author->lastname }}</td>

                            <td>
                                <a class="btn btn-info" href="{{ route('authors.show', ['author' => $author]) }}">Vedi
                                    Dettagli</a>
                                <a class="btn btn-warning" href="{{ route('authors.edit', ['author' => $author]) }}">
                                    Modifica</a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#{{ $author->id }}">
                                    Elimina
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $author->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form class="modal-content"
                                            action="{{ route('authors.destroy', ['author' => $author]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sei Sicuro?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                Stai per cancellare l'autore:
                                                {{ $author->firstname . ' ' . $author->lastname }}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Annulla</button>
                                                <button type="submit" class="btn btn-danger">Si, sono sicuro</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-template>
