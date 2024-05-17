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

    <div class=" text-gray-700 ml-24">
        <div class="text-2xl text-redKLJ"><b>CONTACT US</b></div>
        <div class="text-base"> Heb je een vraag? Wil je graag iets weten? Of ben je gewoon nieuwsgierig? <br>
            Stuur dan zeker een berichtje naar ons <a href="mailto:kljmeisjeshamont@gmail.com">e-mailadres</a>!
            Of vul onderstaande form in. 
            <p>Indien je wenst is het mogelijk om telefonisch contact op te nemen met de hoofdleiding.</p>
            <div class="nummers">
                <b>Nele Meurkens</b>: +32 470 27 88 35 <br>
                <b>Jelke Palmans</b>: +32 496 13 20 86
            </div>
        </div>
         
        <form action="/create-question" method="POST" class="flex flex-col space-y-4 w-4/5 mt-12 mb-10"> 
            @csrf
            <label for="naam" class="font-bold">Naam:</label>
            <input type="text" name="name" id="naam" pattern="[a-zA-Z ]+" class="input border-2 border-gray-300 p-2 rounded-md" bind:value={naamInput}>
        
            <label for="voornaam" class="font-bold">Voornaam:</label>
            <input type="text" name="firstname" id="voornaam" pattern="[a-zA-Z ]+" class="input border-2 border-gray-300 p-2 rounded-md" bind:value={voornaamInput}>
        
            <label for="email" class="font-bold">Email:</label>
            <input type="email" name="email" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]" class="input border-2 border-gray-300 p-2 rounded-md" bind:value={emailInput}>
        
            <label for="nummer" class="font-bold">Nummer:</label>
            <input type="text" name="number" id="nummer" pattern="[0-9]+" class="input border-2 border-gray-300 p-2 rounded-md" bind:value={nummerInput}>
        
            <label for="bericht" class="font-bold">Bericht:</label>
            <textarea type="text" name="message" id="bericht" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]" class="input border-2 border-gray-300 p-2 rounded-md" bind:value={berichtInput} cols="30" rows="10"></textarea>
        
            <button  type="submit" class="bg-greenNav text-white hover:text-redKLJ hover:bg-greenKLJ font-bold py-2 px-4 rounded pr-5 group">
                <span class="animate-caret ">Submit</span>
            </button>    
        </form>
    </div>

    
    @include('./components/footer')
</body>
</html>