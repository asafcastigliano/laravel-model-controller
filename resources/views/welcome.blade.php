<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>

    <div class="container">
        <div class="row">
            @foreach ($films as $film)
                <div class="card">
                    <h5>{{ $film->title }}</h5>
                    <p>{{ $film->original_title }}</p>
                    <p>{{ $film->nationality }}</p>
                    <p>{{ $film->date }}</p>
                    <p>{{ $film->vote }}</p>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
