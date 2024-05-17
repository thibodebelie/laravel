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

    <h1 class="text-4xl font-bold text-center mb-6">Log in</h1>
<form method="POST" action="?/login" use:enhance class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
	<div class="mb-4">
		<label class="block text-gray-700 text-sm font-bold mb-2" for="email">
			E-mail
		</label>
		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" />
	</div>
	<div class="mb-6">
		<label class="block text-gray-700 text-sm font-bold mb-2" for="password">
			Password
		</label>
		<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" />
	</div>
	<div class="flex items-center justify-between">
		<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
			Login
		</button>
	</div>
</form>


    @include('./components/footer')
</body>
</html>