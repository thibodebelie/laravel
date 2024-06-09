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
        <form action="/update-activiteit" method="POST" id="activiteitForm">
            @csrf
            @method ('PUT')
            <input type="text"  name="id"           placeholder="Id"            class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4" id="id">
            <input type="date"  name="datum"        placeholder="Datum"         class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4" id="datum">
            <input type="time"  name="begin"        placeholder="Beginuur"      class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4" id="begin">
            <input type="time"  name="einde"        placeholder="Einduur"       class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4" id="einde">
            <input type="text"  name="activiteit"   placeholder="Activiteit"    class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4" id="activiteit">
            <input type="text"  name="locatie"      placeholder="Locatie"       class="w-10/12 items-center px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white ml-4" id="locatie">
            <select name="groep" class="w-10/12 px-3 py-2 mt-2 text-white border border-redKLJ rounded-md bg-greenNav placeholder-white mb-5 ml-4" id="groep">
                <option value="Mini-Min">Mini-Min</option>
                <option value="Maxi-Min">Maxi-Min</option>
                <option value="Tussers">Tussers</option>
                <option value="Hoofdleiding">Hoofdleiding</option>
            </select>
            <button class="w-10/12 border border-redKLJ rounded-md bg-greenNav p-4 hover:border-black mb-5 ml-4">Activiteit Updaten</button>
        </form>
        
    </div>

    @include('./components/footer')
    <script type="text/javascript" src="{{ URL::asset('edit.js') }}"></script>
</body>
</html>