<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Video Games List</title>
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="p-3 mb-2 bg-dark text-white">
    <div>
        <h2>Welcome!</h2>
    <table class="table table-dark table-striped table-hover">
     <thead>
         <tr>
            <th scope="col">Title</th>
            <th scope="col">Developer</th>
            <th scope="col">Release Date</th>
            <th scope="col">Price</th>
            <th scope="col">Rating</th>
            <th style="width:  15.33%">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
            <tr>
                <td>
                    <div role="alert">
                        <a href="{{route('game.show', $game->id)}}" class="alert-link">{{$game->title}}</a>
                    </div>
                </td>
                <td>{{$game->dev}}</td>
                <td>{{$game->release}}</td>
                <td>{{$game->price}}</td>
                <td>{{$game->rating}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <form action="{{route('game.edit', $game->id)}}"method="GET">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary" style="width:100%">Edit</button>
                </form>
                <form action="{{route('game.del', $game->id)}}"method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger" style="size:80%">Delete</button>
                </form>
                </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
     <a class="btn btn-secondary btn-lg btn-block" href="{{route('game.create')}}" role="button">Create</a>
    </div>
    </body>
</html>
