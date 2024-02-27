<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni in Partenza</title>
</head>
<body>
    <div>
        <h1>Treni in partenza</h2>

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
</body>
</html>