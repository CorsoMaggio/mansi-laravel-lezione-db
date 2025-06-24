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
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nome Autore</label>
                <input type="text" value="{{ old('firstname') }}" class="form-control" name="firstname">
                @error('firstname')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cognome Autore</label>
                <input type="text" value="{{ old('lastname') }}" class="form-control" name="lastname">
                @error('lastname')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>
</x-template>
