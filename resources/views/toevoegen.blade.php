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
        <h1 class="text-redKLJ text-2xl font-semibold mb-3">Toevoegen van een activiteit</h1>
    <form action="/create-activiteit" method="POST">
        @csrf
        <input type="date"  name="datum"        placeholder="Datum"        class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="time"  name="begin"        placeholder="Beginuur"     class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="time"  name="einde"        placeholder="Einduur"      class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="text"  name="activiteit"   placeholder="Activiteit"   class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <input type="text"  name="locatie"      placeholder="Locatie"      class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4">
        <select name="groep" class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white mb-5 ml-4">
            <option value="Mini-Min">Mini-Min</option>
            <option value="Maxi-Min">Maxi-Min</option>
            <option value="Tussers">Tussers</option>
            <option value="Hoofdleiding">Hoofdleiding</option>
        </select>
        {{-- on:click={() =>addData()} on:click={()=>validateForm()} --}}
        <button  class="w-10/12 border border-redKLJ rounded-md bg-greenNav p-4 hover:border-black mb-5 ml-4">Activiteit Toevoegen</button> <br/>
    </form>
    </div>

    
    @include('./components/footer')
</body>
</html>