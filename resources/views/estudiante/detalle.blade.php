<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <!-- As a heading -->
    <nav class="navbar bg-dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1 text-white">ESTUDIANTE/<small>DETALLE</small></span>
        </div>
      </nav>   
      
      <a href="{{ route('estudiante.list') }}" class="btn btn-dark" role="button"
      style="margin-top: 50px; margin-left: 50px"> VOLVER</a>

    <div class="container">

        <h1>Estudiante {{ $data[0]->nombre }}</h1>
        <h6>Notas</h6>

        <ul class="list-group">
            @foreach ($notas as $item)
                <li class="list-group-item">{{ $item->nota }}</li>
            @endforeach
        </ul>

        <h6 class="pt-5">Promedio: {{ $promedio }}</h6>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
