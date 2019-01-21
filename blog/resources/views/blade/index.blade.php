<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 5%;
                padding: 5%;
            }


        </style>
    </head>
    <body>
        <h1>Blade</h1>
        <p>{{ $name }}</p>
        <p>
        @if($isWeekend)
            {{  "Va t'amuser"  }}
        @else
            {{  "Va travailler"  }}
        @endif
        </p>
        <p>
            @if(2==6)
                {{ 'bome' }}
            @elseif(9==4)
                {{ 'bang' }}
            @elseif(4==4)
                {{ 'bang bommmmmmm' }}
            @else
                {{ 'wwwawww' }}
            @endif
        </p>
        <ul>
            @forelse($events as $event)
                <li>{{ $event }}</li>
            @empty
                {{ "Pas d'evenements" }}
            @endforelse
        </ul>
    </body>
</html>
