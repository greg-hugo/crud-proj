<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Games</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-dark text-white">
<div>
    <a href="{{route('index')}}">Back</a>
</div>
<div style="position:relative; left:40px; top:40px">
    <h2 class="font-weight-bold font-italic">{{($game->title)}}</h2>
    <h4>by {{($game->dev)}}</h4>
    <h4>Released on: {{($game->release)}}</h4>
    <h4>Price: ${{($game->price)}}</h4>
    <h4>Rating: {{($game->rating)}}/5.0</h4>
</div>
</body>
</html>