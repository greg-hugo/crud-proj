<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Genre Details</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-dark text-white">
<div>
    <a href="{{route('genre.id')}}">Back</a>
</div>
<div style="position:relative; left:40px; top:40px">
    <h2 class="font-weight-bold font-italic">{{($genre->tag)}}</h2>
    <ul>
        @foreach ($genre->games as $game)
            <li>{{($game->title)}}</li>
        @endforeach
    </ul>
</div>
</body>
</html>