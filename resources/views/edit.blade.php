 <x-template>
     <div class="container">
         @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
         <form action="{{ route('update', ['book' => $book->id]) }}" method="POST">
             @csrf
             @method('PUT')
             <div class="mb-3">
                 <label for="" class="form-label">Titolo Libro</label>
                 <input type="text" value="{{ $book->name }}" class="form-control" name="name">
                 @error('name')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Anno di scrittura</label>
                 <input type="text" value="{{ $book->years }}" class="form-control" id="exampleFormControlInput3"
                     name="years" placeholder="Caio">
                 @error('years')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Pagine</label>
                 <input type="text" value="{{ $book->pages }}" class="form-control" id="exampleFormControlInput3"
                     name="pages" placeholder="Caio">
                 @error('pages')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Prezzo</label>
                 <input type="text" value="{{ $book->price }}" class="form-control" id="exampleFormControlInput3"
                     name="price" placeholder="">
                 @error('price')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput4" class="form-label">Autore</label>
                 <select class="form-control" id="exampleFormControlInput4" name="author_id">
                     @foreach ($authors as $author)
                         <option @if ($author->id == $book->author_id) selected @endif value="{{ $author->id }}">
                             {{ $author->firstname }}</option>
                         {{-- <option @selected($author->id == $book->author_id) value="{{ $author->id }}">
                             {{ $author->firstname }}</option> --}}
                     @endforeach
                 </select>
                 @error('author_id')
                     {{ $message }}
                 @enderror
             </div>

             <div class="col-12">
                 <button type="submit" class="btn btn-primary">Aggiorna</button>
             </div>
         </form>
     </div>
 </x-template>
