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
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nome Categoria</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>
</x-template>
