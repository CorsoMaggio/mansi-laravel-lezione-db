  <x-template>
      @if (session('success'))
          <div class="alert alert-success" role="alert">
              {{ session('success') }}
          </div>
      @endif
      <ul>
          @foreach ($books as $book)
              <li>{{ $book->name }} {{ $book->years }}|
                  <a href="{{ route('show', ['book' => $book]) }}">Vedi Dettagli</a>
                  <a href="{{ route('edit', ['book' => $book]) }}">| Modifica</a>
                  <form action="{{ route('destroy', ['book' => $book]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Elimina</button>
                  </form>

              </li>
          @endforeach
      </ul>
  </x-template>
