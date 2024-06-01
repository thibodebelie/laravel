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
        <form class="w-full max-w-md bg-white shadow-md rounded-lg border-2 border-greenNav p-6" action="?/logup" method="POST">
            <h1 class="text-greenNav font-bold pb-3 text-2xl">Singup</h1>
            <div class="mb-4">
                <label for="first_name" class="block text-gray-700 font-semibold mb-2">Voornaam</label>
                <input type="text" id="first_name" name="first_name" placeholder="Voornaam" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav">
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-gray-700 font-semibold mb-2">Achternaam</label>
                <input type="text" id="last_name" name="last_name" placeholder="Achternaam" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">E-mail</label>
                <input type="email" id="email" name="email" placeholder="E-mail" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Wachtwoord</label>
                <input type="password" id="password" name="password" placeholder="Wachtwoord" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-greenNav">
            </div>
            
            <button type="submit" class="w-full bg-greenNav hover:bg-greenNav text-white hover:text-redKLJ font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-greenNav">Submit</button>
        </form>
    </div>
    @include('./components/footer')

</body>
</html>