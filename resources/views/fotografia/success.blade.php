@extends('layouts.layout')
@section('content')
<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <img class="logo" src="../img/logo.jpg">
    <h1 class="mb-1">Oasis WildApp</h1>
    <h3 class="mb-5">
      <em>Sus fotos se han descargado con éxito.<br>
      ¿Qué desea hacer ahora?</em>
    </h3>
    <ul>
    	<li><a href="{{ route('fotografia.codigo')}}">Introducir otro código</a></li>
    	<li><a href="{{ url('https://oasiswildlifefuerteventura.com')">Ir a página principal</a></li>
    </ul>
  </div>
</header>
<div class="container text-center my-auto">
	
</div>
@endsection