  <x-template>
      <!-- Button trigger modal -->



      @if (session('success'))
          <div class="alert alert-success" role="alert" id="pippo">
              {{ session('success') }}
          </div>
      @endif

      <ul>
          @foreach ($books as $book)
              <li>{{ $book->name }} {{ $book->years }}|
                  <a href="{{ route('show', ['book' => $book]) }}">Vedi Dettagli</a>
                  <a href="{{ route('edit', ['book' => $book]) }}">| Modifica</a>

                  <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                      data-bs-target="#{{ $book->id }}">
                      Elimina
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="{{ $book->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                      aria-hidden="true">
                      <div class="modal-dialog">
                          <form class="modal-content" action="{{ route('destroy', ['book' => $book]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Sei Sicuro?</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                                  Stai per cancellare la risorsa: {{ $book->name }}
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary"
                                      data-bs-dismiss="modal">Annulla</button>
                                  <button type="submit" class="btn btn-danger">Si, sono sicuro</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </li>
          @endforeach
      </ul>

  </x-template>
