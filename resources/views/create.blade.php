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
         <form action="{{ route('store') }}" method="POST">
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

             <div class="col-12">
                 <button type="submit" class="btn btn-primary">Salva</button>
             </div>
         </form>
     </div>
 </x-template>
