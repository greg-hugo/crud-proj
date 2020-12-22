<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-dark text-white">
    @if(Session::has('alert'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('alert') }}</p>
    @endif
<div>
    <a href="{{route('genre.id')}}">Back</a>
</div>
<div class="d-flex justify-content-center align-items-center" style="min-height: 18vh">
    <h2>Update Genre</h2>
</div>
<div class="container" >
        <div class="d-flex justify-content-center align-items-center" style="min-height: 65vh">
        <form class="col-lg6" action="{{route('genre.up', $genre->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="" class="form-label">Genre</label>
            <input class="form-control" name="tag" type="text" value="{{$genre->tag}}">
        </div>
        <button type="submit" class="btn btn-outline-light">Update</button>
        </form>
        </div>
</div>
</body>
</html>