@extends('layout')

@section('contenido')

<div class="card">
  <div class="card-body">
     <h1 class="card-title">{{ $libro->nombre }}</h1>
     <h6>Autor: {{ $libro->autor }}</h6>    
     <h6>Genero: {{ $libro->genero }}</h6>
     <h6>Editorial: {{ $libro->editorial }}</h6>
     <p class="card-text"><h6>Descripción: </h6> {{ $libro->descripcion }}</p> 
  </div>
</div>

@endsection
        