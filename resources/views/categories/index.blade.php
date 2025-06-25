<x-template>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container w-50 mt-5">
        <div class="d-flex justify-content-between">
            <h2>Lista Categorie</h2>
            <a class="btn btn-success" href="{{ route('categories.create') }}">Crea Categoria</a>
        </div>
        <div class="table-responsive small ">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>

                            <td>
                                <a class="btn btn-info"
                                    href="{{ route('categories.show', ['category' => $category]) }}">Vedi
                                    Dettagli</a>
                                <a class="btn btn-warning"
                                    href="{{ route('categories.edit', ['category' => $category]) }}">
                                    Modifica</a>

                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#{{ $category->id }}">
                                    Elimina
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{ $category->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form class="modal-content"
                                            action="{{ route('categories.destroy', ['category' => $category]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sei Sicuro?</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                Stai per cancellare la categoria:
                                                {{ $category->name }}
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
