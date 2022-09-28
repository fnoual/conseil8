<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer un compte | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form  class="bg-grey-lighter min-h-screen flex flex-col" action="{{ route('register') }}" method="post">
        @csrf
        <div class="container max-w-md mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow text-black w-full">

                <h1 class="mb-8 text-3xl text-center">{{ __('Inscription') }}</h1>
                @if($errors->any())
                    <div class="bg-red-100 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Il y a des erreurs dans le formulaire</strong><br>
                        @foreach($errors->all() as $error)
                            <span>{{ $error }}</span> <br>
                        @endforeach
                    </div>
                @endif
                <input
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('username') border-red-600 @enderror"
                    name="username"
                    value="{{ old('username') }}"
                    placeholder="Nom d'utilisateur" />

                <input
                    type="email"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('email') border-red-600 @enderror"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Adresse e-mail" />

                <input
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('phone') border-red-600 @enderror"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="Numéro de télephone" />

                <input
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('password') border-red-600 @enderror"
                    name="password"
                    value="{{ old('password') }}"
                    placeholder="Mot de passe" />
                <input
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="password_confirmation"
                    placeholder="Confirmer le mot de passe" />

                <button
                    type="submit"
                    class="transition ease-in delay-150 w-full text-center py-3 rounded bg-green-500 text-white hover:bg-black focus:outline-none my-1"
                >Créer un compte</button>

                <div class="text-center text-sm text-grey-dark mt-4">
                    En vous inscrivant, vous acceptez les
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Conditions d'utilisation
                    </a> and
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Politique de confidentialité
                    </a>
                </div>
            </div>

            <div class="text-grey-dark mt-6">
                Vous avez déjà un compte?
                <a class="no-underline border-b border-blue text-blue" href="{{ route('login') }}">
                    Se connecter
                </a>.
            </div>
        </div>
    </form>

</body>
</html>
