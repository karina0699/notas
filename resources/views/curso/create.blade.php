<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1 text-white">CREAR CURSO</span>
        </div>
      </nav>   
      
      <a href="{{ route('estudiante.list') }}" class="btn btn-dark" role="button"
      style="margin-top: 50px; margin-left: 50px"> VER ESTUDIANTES</a>

      <a href="{{ route('profesor.create') }}" class="btn btn-dark" role="button"
      style="margin-top: 50px; margin-left: 50px"> CREAR PROFESOR</a>

    <div class="container mt-5">
        <form action="{{ route('curso.store') }}" method="POST">
            @csrf
            <fieldset>
                <legend>Crear curso</legend>
                <div class="mb-3">
                    <label class="form-label">Nombre del curso</label>
                    <input type="text" class="form-control" name="curso" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Profesor del curso</label>
                    <select class="form-select" aria-label="Default select example" name="profesor">
                        @foreach ($listaProfesor as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </fieldset>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $row)
                    <tr>
                        <td>{{ $row->curso }}</td>
                        <td>{{ $row->profesor }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
