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

    <h1 class="self-center text-2xl font-semibold whitespace-nowrap dark:text-greenKLJ text-center mt-5">MiniMin</h1>

    <ul class="list-none p-0  m-5">
      @foreach ($activiteits as $activiteit)
      <li class="mb-5 p-2 rounded flex flex-wrap border-2 border-greenKLJ">
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
        <p class="m-3">Activiteit: {{ $activiteit->activiteit }}</p>
        <p class="w-full ml-3">Locatie: {{ $activiteit->locatie }}</p>
      </li>
      @endforeach
    </ul>

    
    @include('./components/footer')
</body>
</html>