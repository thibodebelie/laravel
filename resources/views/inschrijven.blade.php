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

    

    <div class="flex flex-col items-center justify-center">
    <h1 class="text-4xl font-bold text-greenNav text-center m-3 border border-redKLJ rounded-md p-2 "> Inschrijvingsformulier <span class="text-greenKLJ">Kamp 2024</span>!</h1>
    <form action="" onsubmit="validateForm();" class="text-center">
        @csrf
        <input type="text" name="naam" placeholder="Naam" bind:value={naamInput} pattern="[a-zA-Z ]+" class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ">
        <input type="text" name="voornaam"  placeholder="Voornaam" bind:value={voornaamInput} pattern="[a-zA-Z ]+"class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ">
        <input type="text" name="telefoonnummer"  placeholder="Telefoonnummer" bind:value={telefoonnummerInput} pattern="[0-9]+" class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white">
        <select bind:value={groepInput} name="groep" class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white mb-5" >
            <option value="" selected disabled >Selecteer een van de onderstaande: </option>
            <option value="Mini-Min">Mini-Min</option>
            <option value="Maxi-Min">Maxi-Min</option>
            <option value="Tussers">Tussers</option>
            <option value="Hoofdleiding">Hoofdleiding</option>
        </select>

        <button  class="border border-redKLJ rounded-md bg-greenNav p-4 hover:border-black mb-5">
            <span>Inschrijven voor het onvergetelijke kamp</span>
        </button>
    </form>
    </div>

    @if ($errors->any())
    <div class="fixed top-0 left-0 w-full h-full bg-opacity-50 bg-gray-900 flex justify-center items-center z-50">
        <div id="validationAlert" class="bg-white rounded-lg shadow-md px-8 py-6">
          <h5 class="text-xl font-bold leading-tight text-center text-redKLJ">Vul alle velden in:</h5>
          <ul class="mt-3 list-disc ml-4">
            @foreach ($errors->all() as $error)
              <li class="text-redKLJ">{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" id="closeButton" onclick="closeAlert();" class="mt-4 px-4 py-2 rounded-md text-sm font-medium bg-greenNav text-white hover:bg-redKLJ focus:outline-none focus:ring focus:ring-offset-2 focus:ring-redKLJ">Sluiten</button>        
        </div>
      </div>
    @endif

    @include('./components/footer')
    <script type="text/javascript" src="{{ URL::asset('inschrijven.js') }}"></script>

</body>
</html>