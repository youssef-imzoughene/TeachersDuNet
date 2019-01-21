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
            }


        </style>
    </head>
    <body>
        <h1>Events</h1>
        <p>
            @php
                //var_dump($events);
                //dump($events);
            @endphp
        </p>
        //ancienne methode
        <ul>
            @php
                foreach($events as $event):
            @endphp
            <li>
                @php
                    echo $event;
                @endphp
            </li>
            @php
                endforeach;
            @endphp
        </ul>
        //nouveau methode blade
        @foreach($events as $event)
            <li> {{ $event }} </li>
        @endforeach
    </body>
</html>
