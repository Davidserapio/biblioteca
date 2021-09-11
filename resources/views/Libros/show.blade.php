<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Libros</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
               <h1 class="card-title">{{ $libro->nombre }}</h1>
               <h6>Autor: {{ $libro->autor }}</h6>    
               <h6>Genero: {{ $libro->genero }}</h6>
               <h6>Editorial: {{ $libro->editorial }}</h6>
               <p class="card-text"><h6>Descripción: </h6> {{ $libro->descripcion }}</p> 
            </div>
          </div>
    </div>
</body>
</html>