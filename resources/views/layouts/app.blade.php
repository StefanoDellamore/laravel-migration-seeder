<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title') | Laravel Migration Seeder</title>

        {{-- Stili nell'head --}}
        <link rel="stylesheet" href="css/style.css">

        {{-- <!-- Includiamo gli assets con la direttiva @vite --> --}}
        @vite('resources/js/app.js')

        @yield('head-imports')
    </head>
    <body>
        <div>
            <h2>Treni in partenza</h2>

            <ul>
                @foreach($trains as $train)

                <li>
                    {{ $train->company }} - 
                    Partenza: {{ $train->departure_station }} alle {{ $train->departure_time }} - 
                    Arrivo: {{ $train->arrival_station }} alle {{ $train->arrival_time }} 
                </li>

                @endforeach
            </ul>
        </div>
       
        {{-- JS da importare nel body --}}
        @yield('body-imports')
    </body>
</html>
