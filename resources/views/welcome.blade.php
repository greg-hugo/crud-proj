<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Video Games List</title>
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

         <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body class="p-3 mb-2 bg-dark text-white">
        <div id="app">
            <nav class="navbar navbar-expand navbar-light bg-light shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Home
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
    
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <!-- Scripts -->
        <script src="/js/app.js"></script>
        @if(Session::has('alert'))
        <p class="alert {{ Session::get('alert-class', 'alert alert-danger') }}">{{ Session::get('alert') }}</p>
        @endif
    <div>
        <h2>Welcome!</h2>
        <div>
            <a href="{{route('genre.id')}}">Genre</a>
        </div>
    <table class="table table-dark table-striped table-hover">
     <thead>
         <tr>
            <th scope="col">Title</th>
            <th scope="col">Developer</th>
            <th scope="col">Genre</th>
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
                <td>{{($game->genre->tag)}}</td>
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
