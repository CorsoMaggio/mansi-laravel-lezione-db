<x-template>
    <div class="container">

        <form class="w-50 m-auto mt-5" action="{{ route('register') }}" method="POST">
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
                <label for="" class="form-label">Nome Utente</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name"
                    placeholder="Scrivi il tuo nome">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input class="form-control" value="{{ old('email') }}" type="email" name="email"
                    placeholder="Scrivi la tua email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input class="form-control" placeholder="Inserisci Password" type="password" name="password">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Conferma Password</label>
                <input class="form-control" placeholder="Inserisci Password" type="password_confirmation"
                    name="password">
            </div>

            <button class="btn btn-info" type="submit">Registrati</button>
            <hr>
            <a href="{{ route('login') }}">Sei Registrato? Clicca qui</a>

        </form>
    </div>
</x-template>
