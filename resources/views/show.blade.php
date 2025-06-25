  <x-template>
      <p>Sei dentro il libro {{ $book->name }} di Autore <a
              href="{{ route('authors.show', ['author' => $book->author]) }}">{{ $book->author->firstname }}
              {{ $book->author->lastname }}</a>
      </p>
  </x-template>
