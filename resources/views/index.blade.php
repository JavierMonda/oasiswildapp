@extends('layouts.layout')
@section('content')
<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <img class="logo" src="img/logo.jpg">
    <h1 class="mb-1">Oasis WildApp</h1>
    <h3 class="mb-5">
      <em>Elija una de las siguientes aplicaciones:</em>
    </h3>
  </div>
</header>
<div class="container-fluid">
  <div class="card-deck">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
          Panel de Administración
        </h5>
        <!-- <p class="card-text">Configuración, estadísticas y administración de datos y aplicaciones.</p>-->
        <a href="{{ url('/admin/index') }}">
          <p class="card-text">
            <small class="text-muted"><i class="fas fa-arrow-circle-right"></i> Ir a Administración</small>
          </p>
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Portal del Empleado</h5>
        <a href="{{ url('/empleados/index') }}">
          <p class="card-text">
            <small class="text-muted"><i class="fas fa-arrow-circle-right"></i> Ir al portal</small>
          </p>
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Encuestas</h5>
        <a href="{{ url('/admin') }}">
          <p class="card-text">
            <small class="text-muted"><i class="fas fa-arrow-circle-right"></i> Ir a Encuestas</small>
          </p>
        </a>
      </div>
    </div>
  </div>
  <div class="card-deck">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Fotografía</h5>
        <a href="{{ url('/fotografia') }}">
          <p class="card-text">
            <small class="text-muted"><i class="fas fa-arrow-circle-right"></i> Ir a Fotografía</small>
          </p>
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Formulario Interacciones</h5>
        <a href="{{ url('/formularios') }}">
          <p class="card-text">
            <small class="text-muted"><i class="fas fa-arrow-circle-right"></i> Ir a Formularios</small>
          </p>
        </a>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Recursos Humanos</h5>
        <a href="{{ url('http://rrhh.lajitaoasispark.corp') }}" target="_blank">
          <p class="card-text">
            <small class="text-muted"><i class="fas fa-arrow-circle-right"></i> Ir a Recursos Humanos</small>
          </p>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection