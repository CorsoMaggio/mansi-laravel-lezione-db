  <x-template>
      <p>Sei dentro autore {{ $author->firstname }}</p>
      <span>Lista Libri scritti</span>
      <ul>
          @foreach ($author->books as $book)
              <li><a href="{{ route('show', ['book' => $book]) }}">{{ $book->name }}</a></li>
          @endforeach
      </ul>
  </x-template>
