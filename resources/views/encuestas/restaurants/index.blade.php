@extends('layouts.layout')
@section('content')
<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <img class="logo" src="img/logo.jpg">
    <h1 class="mb-1">¡Tu opinión nos importa!</h1>
    <h3 class="mb-5">
      <em>Seleccione una opción</em> / <em>Select an option</em>
    </h3>
    <a href="{{ url('/oasis') }}">
      <img class="restaurante" src="img/restauranteOasis.jpg">
    </a>
    <h3 class="mb-5"><em>Restaurante Oasis</em></h3>
    <a href="{{ url('/leones') }}">
      <img class="restaurante" src="img/restauranteLeones.jpg">
    </a>
    <h3 class="mb-5"><em>Restaurante Leones Marinos</em></h3>
    <a href="{{ url('/patio') }}">
      <img class="restaurante" src="img/restaurantePatio.jpg">
    </a>
    <h3 class="mb-5"><em>Restaurante Patio Majorero</em></h3>
  </div>
  <div class="overlay"></div>
</header>
@endsection