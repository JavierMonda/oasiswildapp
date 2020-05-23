@extends('layouts.layout')
@section('content')
<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <img class="logo" src="../img/logo.jpg">
    <h1 class="mb-1">¡Tu opinión nos importa!</h1>
    <h3 class="mb-5">
      <em>Seleccione un Restaurante</em> / <em>Select a Restaurant</em>
    </h3>    
  </div>

</header>
<div class="boxesContainer">

      <div class="cardBox">
        <div class="card">
          <div class="front">
            <img class="card-img-top" src="../img/restauranteLeones.png" alt="Restaurante Leones Marinos">
          </div>
          <div class="back backLeones">
            <h3 class="h3-card">Restaurante Leones Marinos</h3>
            <p class="p-card">Valora nuestro Servicio</p>
            <a href="{{ url('/encuestas/restaurants/leones') }}">Encuesta</a>
          </div>
        </div>
      </div>

      <div class="cardBox">
        <div class="card">
          <div class="front">
            <img class="card-img-top" src="../img/restauranteOasis.png" alt="Restaurante Oasis">
          </div>
          <div class="back backOasis">
            <h3 class="h3-card">Restaurante Oasis</h3>
            <p class="p-card">Valora nuestro Servicio</p>
            <a href="{{ url('/encuestas/restaurants/oasis') }}">Encuesta</a>
          </div>
        </div>
      </div>

      <div class="cardBox">
        <div class="card">
          <div class="front">
            <img class="card-img-top" src="../img/restaurantePatio.png" alt="Restaurante Patio Majorero">
          </div>
          <div class="back backPatio">
            <h3 class="h3-card">Restaurante Patio Majorero</h3>
            <p class="p-card">Valora nuestro Servicio</p>
            <a href="{{ url('/encuestas/restaurants/patio') }}">Encuesta</a>
          </div>
        </div>
      </div>
      
</div>
<!--.boxesContainer-->



@endsection