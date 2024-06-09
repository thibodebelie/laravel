<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind css  --> 
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('./components/header')

	<body class="bg-gray-100">
		<div class="flex items-center justify-center h-screen">
			<form class="w-full max-w-md bg-white shadow-md rounded-lg border-2 border-greenNav p-6" action="{{ route('login') }}" method="POST">
				@csrf
				<h1 class="text-greenNav font-bold pb-3 text-2xl">Log in</h1>
				<div class="mb-4">
					<label for="email" class="block text-gray-700 font-semibold mb-2">E-mail</label>
					<input type="email" id="email" name="email" placeholder="E-mail" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="mb-4">
					<label for="password" class="block text-gray-700 font-semibold mb-2">Wachtwoord</label>
					<input type="password" id="password" name="password" placeholder="Wachtwoord" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav @error('password') is-invalid @enderror" required autocomplete="current-password">
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<button type="submit" class="w-full bg-greenNav hover:bg-greenNav text-white hover:text-redKLJ font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-greenNav">Login</button>
			</form>
		</div>

	</body>

    @include('./components/footer')
</body>
</html>
