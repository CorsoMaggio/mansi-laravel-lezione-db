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
         <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
             @csrf
             <div class="mb-3">
                 <label for="" class="form-label">Titolo Libro</label>
                 <input type="text" value="{{ old('name') }}" class="form-control" name="name">
                 @error('name')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Anno di scrittura</label>
                 <input type="text" value="{{ old('years') }}" class="form-control" id="exampleFormControlInput3"
                     name="years" placeholder="Caio">
                 @error('years')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Pagine</label>
                 <input type="text" value="{{ old('pages') }}" class="form-control" id="exampleFormControlInput3"
                     name="pages" placeholder="Caio">
                 @error('pages')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Prezzo</label>
                 <input type="text" value="{{ old('price') }}" class="form-control" id="exampleFormControlInput3"
                     name="price" placeholder="">
                 @error('price')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput4" class="form-label">Autore</label>
                 <select class="form-control" id="exampleFormControlInput4" name="author_id">
                     @foreach ($authors as $author)
                         <option value="{{ $author->id }}">{{ $author->firstname }}</option>
                     @endforeach
                 </select>
                 @error('author_id')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 @foreach ($categories as $category)
                     <div class="form-check">
                         <input class="form-check-input" name="categories[]" type="checkbox"
                             value="{{ $category->id }}" id="category-{{ $category->id }}">
                         <label class="form-check-label" for="category-{{ $category->id }}">
                             {{ $category->name }}
                         </label>
                     </div>
                 @endforeach
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">Copertina</label>
                 <input type="file" name="image" class="form-control" id="exampleFormControlInput3">
                 @error('image')
                     {{ $message }}
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleFormControlInput3" class="form-label">DOcumento Identita</label>
                 <input type="file" name="document" class="form-control" id="exampleFormControlInput3">
                 @error('document')
                     {{ $message }}
                 @enderror
             </div>
             <div class="col-12">
                 <button type="submit" class="btn btn-primary">Salva</button>
             </div>
         </form>
     </div>
 </x-template>
