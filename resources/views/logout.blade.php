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
        <form action="{{ route('logout') }}" method="POST" class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
            @csrf
        
            <h1 class="text-greenNav font-bold pb-3 text-2xl">Logout</h1>
            <img src="{{ asset('img/logout.png') }}" alt="tets" class="mx-auto mb-4">
            <p class="text-gray-600">Bent u zeker dat u wilt uitloggen ?</p>

            <button type="submit" class="w-full bg-redKLJ hover:bg-greenNav text-white hover:text-redKLJ font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-blue-500">Logout</button>
            <button class="w-full bg-greenNav hover:bg-greenNav text-white hover:text-redKLJ font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-blue-500 mt-3 mb-5" ><a href="../">Neen, surf verder</a></button>
        </form>
    </div>
    
    @include('./components/footer')
</body>
</html>