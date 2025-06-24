  <x-template>
      <p>Sei dentro autore {{ $author->firstname }}</p>
      <span>Lista Libri scritti</span>
      <ul>
          @foreach ($author->books as $book)
              <li>{{ $book->name }}</li>
          @endforeach
      </ul>
  </x-template>
