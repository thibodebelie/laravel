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

    <div class="text-base text-gray-700 leading-normal p-5 text-left">
        <p class="mt-1 mb-1 text-green-600 text-xl font-bold">Hier vind je een aantal belangrijke documenten terug.</p>
        <p>Het is de bedoeling dat alle leden aan het begin van het KLJ-jaar de medische fiche en 
        het inschrijvingsformulier invullen en aan de leiding geven.
        </p>
    </div>
    
    <div class="flex flex-wrap justify-center mt-5 h-4/5">
        <iframe src="{{ url('/show-pdf-inschrijven') }}" class="w-full sm:w-1/2 lg:w-1/3 h-96"></iframe>
        <iframe src="{{ url('/show-pdf-medische') }}" class="w-full sm:w-1/2 lg:w-1/3 h-96 mb-10" ></iframe>
    
    </div>



    
    @include('./components/footer')
</body>
</html>