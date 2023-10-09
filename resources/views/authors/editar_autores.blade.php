<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <div>
            <h1>Actualizar autor: </h1>
            <form action="{{ route('authors.update', $author->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Ingrese el nombre del autor: </label>
                <input type="text" name="nameAuthor" id="name" class="form-control mb-3" required value="{{ $author->name }}">
                <button type="submit" class="btn btn-success">Actualizar</button>
            </form>
        </div>
    </div>
</body>
</html>
