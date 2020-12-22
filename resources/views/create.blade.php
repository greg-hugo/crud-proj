<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Video Game</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-dark text-white">
    @if(Session::has('alert'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('alert') }}</p>
    @endif
<div>
    <a href="{{route('index')}}">Back</a>
</div>
<div class="d-flex justify-content-center align-items-center" style="min-height: 18vh">
    <h2>Add New Video Game</h2>
</div>
<div class="container" >
        <div class="d-flex justify-content-center align-items-center" style="min-height: 65vh">
        <form class="col-lg6" action="/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Title</label>
            <input class="form-control" name="title" type="text" placeholder="Title">
            @error('title') <span>{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Developer</label>
            <input class="form-control" name="dev" type="text" placeholder="Dev">
            @error('dev') <span>{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <div>
                <label for="" class="form-label">Genre</label>
            </div>
            <select name="genre_id" id="genre_id">
                @foreach ($genres as $genre)
                    <option value="{{($genre->id)}}">{{$genre->tag}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Release Date</label>
            <input class="form-control" name="release" type="date" placeholder="Release">
            @error('release') <span>{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input class="form-control" name="price" type="number" step="0.01" min="0" max="99.99" placeholder="USD">
            @error('price') <span>{{$message}}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Rating</label>
            <input class="form-control" name="rating" type="number" step="0.1" min="1" max="5">
            @error('rating') <span>{{$message}}</span> @enderror
        </div>
        <button type="submit" class="btn btn-outline-light">Submit</button>
        </form>
        </div>
</div>
</body>
</html>