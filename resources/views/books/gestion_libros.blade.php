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
            <h1>Crear libro: </h1>
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <label for="nameBook">Ingrese el nombre del libro: </label>
                <input type="text" name="nameBook" id="nameBook" class="form-control mb-3" required>
                <label for="idAuthor">Ingrese el autor del libro: </label>
                <select name="idAuthor" id="idAuthor" class="form-control mb-3" required>
                    <option>Seleccione un autor</option>
                    @foreach ($authors as $author)
                        <option value={{$author->id}}>{{$author->name}}</option>
                    @endforeach
                </select>
                <label for="editorial">Ingrese la editorial del libro: </label>
                <input type="text" name="editorial" id="editorial" class="form-control mb-3" required>
                <label for="edition">Ingrese la edición del libro: </label>
                <input type="text" name="edition" id="edition" class="form-control mb-3" required>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
        <table class="table table-sm mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->name }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
