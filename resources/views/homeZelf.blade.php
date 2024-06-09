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

<div class="flex flex-col items-center mb-10 sm:flex-row ">
    <article class="bg-greenNav rounded-l m-4 mr-0 flex-grow h-full relative before:absolute before:inset-0 before:bg-white before:animate-typewriter">
    <h1 class="text-redKLJ text-3xl">Een KLJ waar pit in zit!</h1>
    <p class="text-greenKLJ p-2"><b>Welkom op onze website!</b> <br></p>
    <p class="p-2">Hallo! <br>
        Hier geven we kort, maar krachtig weer hoe ons KLJ-jaar eruit ziet.
        Je kan hier terecht voor onze maanduitnodiging, onze contactgegevens, de jaarplanning en nog zoveel meer!
        Als je nog vragen of opmerkingen hebt, kan je altijd de leiding contacteren. 
        De gegevens zijn ook op de website te vinden. 
    </p>
    </article>    
    <img class="w-1/4 rounded-2xl mr-3" src="{{ asset('img/Groepsfoto.jpg') }}" alt="groepsfoto" style="width: 80%;">
</div>


<div class="bg-greenNav rounded-l m-4 p-3 flex flex-col items-center ">
    <h1 class="text-redKLJ text-3xl pb-2 "> Wie zijn we ?</h1>
    <p class=""> Wij zijn een superleuke en levendige jeugdbeweging voor meisjes vanaf 6 jaar totdat ze oud genoeg zijn om onze leidingsgroep te versterken. 
        De leiding voorziet elke week een activiteit voor haar groep op het jeugdheem. 
        Ons activiteitenaanbod varieert van pleinspelen tot tochten, wandelen, zwemmen, een quiz spelen, kookactiviteiten, ruige spelen, 
        bosspelen, stadsspelen, feestjes, relaxavonden, filmavonden, een leuk kamp en nog zooooo veel meer! 
        Af en toe doen we ook wel eens een vettige activiteit, dus doe zeker <b>niet</b> je beste kleren aan naar de KLJ!
    </p>
    <p class="">
        We hebben verschillende groepen binnen onze KLJ: <br>
        - De mini-min: 1ste tot 3de leerjaar <br>
        - De maxi-min: 4de tot 6de leerjaar <br>
        - De tussers: 1ste en 2de middelbaar <br>
        - De plussers: vanaf het 3de middelbaar <br>
        - Vanaf het 5de middelbaar geven we de mogelijkheid om aspi te worden. 
            Leden kunnen er dan voor kiezen om al een beetje te proeven van het leidingsleven en 
            kunnen ondertussen ook nog meedoen met de activiteiten.
    </p>
    <img class="pt-3 rounded-xl mt-2 w-10/12" src="{{ asset('img/extraInfo_up.jpg') }}" alt="extraFoto" >

</div>

@include('./components/footer')
</body>
</html>