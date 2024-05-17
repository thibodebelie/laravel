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

    <input type="text" name="naam" placeholder="Naam" bind:value={naamInput} pattern="[a-zA-Z ]+" class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ">
    <input type="text" name="voornaam"  placeholder="Voornaam" bind:value={voornaamInput} pattern="[a-zA-Z ]+"class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ">
    <input type="text" name="telefoonnummer"  placeholder="Telefoonnummer" bind:value={telefoonnummerInput} pattern="[0-9]+" class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white">
    <select bind:value={groepInput} class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white mb-5" >
        <option value="" selected disabled >Selecteer een van de onderstaande: </option>
        <option value="Mini-Min">Mini-Min</option>
        <option value="Maxi-Min">Maxi-Min</option>
        <option value="Tussers">Tussers</option>
        <option value="Hoofdleiding">Hoofdleiding</option>
    </select>


    <div class="px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white mb-5">
        <input type="file" name="pdf" accept=".pdf" bind:value={pdfInput} id="file-upload" class="hidden">
        <label for="file-upload" class="cursor-pointer">Upload pdf medische fiche</label>
    </div>
{{-- on:click={() => addData()} on:click={()=>validateForm()} --}}
    <button  class="border border-redKLJ rounded-md bg-greenNav p-4 hover:border-black mb-5">
        <span>Inschrijven voor het onvergetelijke kamp</span>
    </button>
    </div>

    @include('./components/footer')
</body>
</html>