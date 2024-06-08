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

    <div class="flex flex-col items-center justify-center mb-32 mt-10">
        <h1 class="text-redKLJ text-2xl font-semibold mb-3">Veranderen van een activiteit</h1>
    <form >
        <input type="text" name="id" placeholder="Id" bind:value={idInput} class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="date"  name="datum"        placeholder="Datum"         bind:value={datumInput} class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="time"  name="begin"        placeholder="Beginuur"      bind:value={beginInput} class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="time"  name="einde"        placeholder="Einduur"       bind:value={eindeInput} class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="text"  name="activiteit"   placeholder="Activiteit"    bind:value={activiteitInput} class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="text"  name="locatie"      placeholder="Locatie"       bind:value={locatieInput} class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <select bind:value={groepInput} class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white mb-5 ml-4">
            <option value="Mini-Min">Mini-Min</option>
            <option value="Maxi-Min">Maxi-Min</option>
            <option value="Tussers">Tussers</option>
            <option value="Hoofdleiding">Hoofdleiding</option>
        </select>
        {{-- on:click={()=>updateActiviteit()} on:click={()=>validateForm()}  --}}
        <button  class="w-10/12 border border-redKLJ rounded-md bg-greenNav p-4 hover:border-black mb-5 ml-4">Activiteit Updaten</button> <br/>
    </form>
    </div>
    @include('./components/footer')

</body>
</html>