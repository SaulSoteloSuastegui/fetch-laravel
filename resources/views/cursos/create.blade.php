@extends('layouts.plantilla')
 
@section('title', 'create' )
 
 
@section('content')
 
<div class="container">
<form method="post" action="{{route('cursos.store')}}">
@csrf
<input type="text" name="nombre" placeholder="Nombre" style="border: 2px solid black;"><br>
<br><input type="text" name="edad" placeholder="edad" style="border: 2px solid black;"><br>
 
<br> <button tipe="Submit">Crear</button>
 
</from>
</div>
 
@endsection()



