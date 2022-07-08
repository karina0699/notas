
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

<!-- As a heading -->
<nav class="navbar bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-white">ESTUDIANTES</span>
    </div>
  </nav>   
  
  <a href="{{ route('curso.create') }}" class="btn btn-dark" role="button"
  style="margin-top: 50px; margin-left: 50px"> CREAR CURSO</a>

  <a href="{{ route('profesor.create') }}" class="btn btn-dark" role="button"
  style="margin-top: 50px; margin-left: 50px"> CREAR PROFESOR</a>



  <div class="container" style="margin-top: 120px"> 

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Estudiante</th>
            <th scope="col">Profesor</th>
            <th scope="col">Curso</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $row)
          <tr>
            <td>{{$row->estudiante}}</td>
            <td>{{$row->profesor}}</td>
            <td>{{$row->curso}}</td>

            <td>
                <a href="{{ route('estudiante.edit', $row->id) }}" class="btn btn-success mx-1" role="button">Ver</a>
            </td>

          </tr>
          @endforeach

        </tbody>
      </table>



  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>



