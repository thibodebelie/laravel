<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Tailwind css  --> 
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href={{URL::asset('/leiding.css')}}>

</head>
<body>
    @include('./components/header')

    <div class="container">
        <h1><a href="..\miniMin">Mini-Min</a></h1>
    
        <a class="mini-Min" href="../miniMin">
            <div class ="image-box">
                <img src="{{ asset('img/mini-min_leiding.jpg') }}" alt="mini-Min leiding" >
            </div>
    
            <div class="content">
                <h2> Leiding Mini-Min</h2>
                <p>Kyana, Liese, Nicky & Rune <br>
                    1ste - 3de studiejaar    
                </p>
            </div>
        
        </a>
    
        <h1><a href="..\maxiMin">Maxi-min</a></h1>
        <a class="mini-Min" href="../maxiMin">
            <div class ="image-box">
                <img src="{{ asset('img/maxi-min_leiding.jpg') }}" alt="mini-Min leiding">
            </div>
    
            <div class="content">
                <h2> Leiding Maxi-Min</h2>
                <p>Britt, Kenza, Jinte, Nelle & Amber<br>
                    4de - 6de studiejaar    
                </p>
            </div>
        
        </a>
    
        <h1><a href="..\tussers">Tussers</a></h1>
        <a class="mini-Min" href="../tussers">
            <div class ="image-box">
                <img src="{{ asset('img/tussers_leiding.jpeg') }}" alt="mini-Min leiding">
            </div>
    
            <div class="content">
                <h2> Leiding Tussers</h2>
                <p>Marthe, Linde, Lien <br>
                    1ste - 4de middelbaar    
                </p>
            </div>
        </a>
    
        <h1><a href="..\hoofdleiding" >Hoofdleiding</a></h1>
        <p class="plussers" >Leiding van de Plussers </p> 
        <a class="mini-Min" href="../hoofdleiding">
            <div class ="image-box">
                <img src="{{ asset('img/Hoofdleiding.jpg') }}" alt="mini-Min leiding">
            </div>
    
            <div class="content">
                <h2> Hoofdleiding</h2>
                <p>Jelke, Nele <br>
                </p>
            </div>
        </a>
    
    
    
    </div>
    
    @include('./components/footer')
</body>
</html>