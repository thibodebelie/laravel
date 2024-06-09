<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind css  --> 
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">
    @include('./components/header')

    <div class="flex items-center justify-center h-screen">
        <form class="w-full max-w-md bg-white shadow-md rounded-lg border-2 border-greenNav p-6" action="{{ route('register') }}" method="POST">
            @csrf
            <h1 class="text-blue font-bold pb-3 text-2xl">{{ __('Register') }}</h1>

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">{{ __('Name') }}</label>
                <input type="text" id="name" name="name" placeholder="Voornaam" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">{{ __('Email Address') }}</label>
                <input type="email" id="email" name="email" placeholder="E-mail" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">{{ __('Password') }}</label>
                <input type="password" id="password" name="password" placeholder="Wachtwoord" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav @error('password') is-invalid @enderror" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700 font-semibold mb-2">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <button type="submit" class="w-full bg-greenNav hover:bg-greenNav text-white hover:text-redKLJ font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-greenNav">{{ __('Register') }}</button>
        </form>
    </div>
    @include('./components/footer')

</body>
</html>
