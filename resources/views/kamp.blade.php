<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind css  --> 
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .kamp {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .kamp h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .kamp p {
            font-size: 18px;
            margin-bottom: 15px;
        }
        .pdf {
                text-align: center;
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
            }
        
        .pdf object {
                width: 100%;
                height: calc(40vw);
        }
        
        
        </style>

</head>
<body>
    @include('./components/header')

    <div class="kamp">
        <h1><b>KAMP 2024:</b></h1>
        <p class="info">Ons KLJ-weekend is net gepasseerd, dus tijd om ons voor te bereiden op het volgende: Ons mega-fantastisch kamp!
                Zoals elk jaar staat dit gepland van <b>{{ $data['datum'] }}</b> voor de mini- en maximin. En van <b>{{ $data['datumOuder'] }}</b> voor  de  +12.
    
        </p>
        <p class= "uitnodiging">
            Iedereen die mee op de 'weekendactiviteit' is geweest, heeft de kampuitnodiging toen mogen ontvangen. 
            De andere leden krijgen het boekje begin mei bezorgd.    
            Wat we al kunnen verklappen is dat ons thema <b>{{ $data['thema'] }}</b> zal zijn, 
            maar als je verder wilt weten wat er gaat gebeuren moet je zeker begin juli vrijhouden.
        </p>
        <p class="digitale">
            Onderstaand vind je de digitale versie terug van de uitnodiging. 
            Zo vergeet je zeker niets mee te nemen als je de papieren versie  toch niet meer terugvindt. :&#41;
        </p>
        <p class="belangrijke-datum">
            <b>{{ $data['datumBekend'] }}</b> moeten de kampinschrijvingen binnen zijn.
        </p>
        <p class="vragen-contact">
            Bij eventuele vragen mag je een van de leiding altijd aanspreken of contacteren.
        </p>
    </div>

    <div class="pdf">
        <iframe src="{{ url('/show-pdf-kamp') }}" width="600" height="600"></iframe>
    </div>

    @include('./components/footer')
</body>
</html>