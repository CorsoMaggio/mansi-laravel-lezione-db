<x-template>
    <div class="container">

        <form action="{{ route('login') }}" method="POST" class="w-50 m-auto mt-5">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input class="form-control" value="{{ old('email') }}" type="email" name="email"
                    placeholder="Scrivi la tua email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input class="form-control" placeholder="Inserisci Password" type="password" name="password">
            </div>
            <button class="btn btn-info" type="submit">Accedi</button>
            <hr>
            <a href="{{ route('register') }}">Non sei Registrato? Clicca qui</a>
        </form>
    </div>
</x-template>
