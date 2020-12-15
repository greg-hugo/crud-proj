<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Video Game</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="p-3 mb-2 bg-dark text-white">
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
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Developer</label>
            <input class="form-control" name="dev" type="text" placeholder="Dev">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Release Date</label>
            <input class="form-control" name="release" type="date" placeholder="Release">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Price</label>
            <input class="form-control" name="price" type="number" step="0.01" min="0" max="99.99" placeholder="USD">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Rating</label>
            <input class="form-control" name="rating" type="number" step="0.1" min="1" max="5">
        </div>
        <button type="submit" class="btn btn-outline-light">Submit</button>
        </form>
        </div>
</div>
</body>
</html>