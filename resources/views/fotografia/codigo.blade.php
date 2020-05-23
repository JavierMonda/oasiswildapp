@extends('layouts.layout')
@section('content')
<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <img class="logo" src="../img/logo.jpg">
    <h1 class="mb-1">Oasis WildApp</h1>
    <h3 class="mb-5">
      <em>Descargue sus fotos!!</em>
    </h3>
  </div>
</header>
<div class="container text-center my-auto">
	<form method="POST" action="" role="form">
	    {{ csrf_field() }}
	    <div class="form-group">
		    <label for="codigo" class="col-form-label">
		    	<legend>Introduzca su código aquí:</legend>
		    	<input type="text" required name="codigo" placeholder="XXX-000"/>
		    </label>
	    </div>
	    <button type="submit" class="btn btn-primary">Descargar</button>
	  </div>
	</form>
</div>
@endsection