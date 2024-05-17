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
    <div class="flex flex-col items-center justify-center p-4 p"> 
        <p class="pb-3">Verwijder één van de onderstaande activiteiten aan de hand van de id.</p>
        <div class="flex flex-col items-center space-y-4">
            <input type="number" bind:value={providedId} placeholder="Id van de activiteit" 
              class="border border-gray-300 text-white text-center text-sm rounded-lg w-full p-2.5 bg-greenNav placeholder-white" />
            <button class="text-greenNav hover:text-white border border-greenNav hover:bg-greenNav  font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2 dark:border-greenNav dark:text-greenNav dark:hover:text-white dark:hover:bg-greenNav items-center">
                <span>Verwijder</span>
            </button>
        </div>
    </div>

    @foreach ($groupedActiviteits as $groep => $activiteits)
    <h2 class="text-3xl text-redKLJ font-bold ml-4 text-center">{{ $groep }}</h2>
    <ul class="border-4 border-greenKLJ rounded-lg m-4 p-4">
        @foreach ($activiteits as $activiteit)
            <li class="mb-5 p-2 rounded-md flex flex-wrap border-2 border-greenKLJ">
                <p class="m-3 text-base text-black">
                    <span class="text-red-600 font-bold">Datum: </span>
                    <span class="block">{{ $activiteit->datum }}</span>
                </p>
                <p class="m-3 text-base text-black">
                    <span class="text-red-600 font-bold">Begin: </span>
                    <span class="block">{{ $activiteit->begin }}</span>
                </p>
                <p class="m-3 text-base text-black">
                    <span class="text-red-600 font-bold">Einde: </span>
                    <span class="block">{{ $activiteit->einde }}</span>
                </p>
                <p class="m-1 border-2 rounded-md pl-1 p-2  border-greenKLJ">Activiteit: {{ $activiteit->activiteit }}</p>
                <p class="w-full m-3">Locatie: {{ $activiteit->locatie }}</p>
                <p class="w-full ml-3">Id: {{ $activiteit->id }}</p>
            </li>
        @endforeach
    </ul>
    @endforeach


    
    @include('./components/footer')
</body>
</html>