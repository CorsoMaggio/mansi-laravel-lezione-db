  <x-template>
      <ul>
          @foreach ($books as $book)
              <li>{{ $book->name }} {{ $book->years }}</li>
          @endforeach
      </ul>
  </x-template>


  </html>
