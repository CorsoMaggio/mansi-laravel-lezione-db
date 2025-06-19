  <x-template>
      @if (session('success'))
          <div class="alert alert-success" role="alert">
              {{ session('success') }}
          </div>
      @endif
      <ul>
          @foreach ($books as $book)
              <li>{{ $book->name }} {{ $book->years }}| <a href="{{ route('show', ['book' => $book]) }}">Vedi
                      Dettagli</a></li>
          @endforeach
      </ul>
  </x-template>
