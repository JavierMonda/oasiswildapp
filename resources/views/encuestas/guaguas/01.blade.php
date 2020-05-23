@extends('layouts.layout')
@section('content')
<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <img class="logo" src="../../img/logo.jpg">
    <h1 class="mb-1">¡Tu opinión nos importa!<br>
      <small>Guagua Nº 1</small>
    </h1>
    <h3 class="mb-5">
      <em>Elija su idioma</em> / <em>Choose your language</em>
    </h3>
    <a data-toggle="modal" data-target="#spanish">
      <img class="bandera" src="../../img/bandera_spain.png">
    </a>
    <a data-toggle="modal" data-target="#english">
      <img class="bandera" src="../../img/bandera_inglaterra.png">
    </a>
    <a data-toggle="modal" data-target="#german">
      <img class="bandera" src="../../img/bandera_alemania.png">
    </a>
    <a data-toggle="modal" data-target="#french">
      <img class="bandera" src="../../img/bandera_francia.png">
    </a>
    <a data-toggle="modal" data-target="#italian">
      <img class="bandera" src="../../img/bandera_italia.png">
    </a>
    <a data-toggle="modal" data-target="#polish">
      <img class="bandera" src="../../img/bandera_polonia.png">
    </a>
  </div>
  <div class="overlay"></div>
</header>
<!-- SpanishForm -->
<div class="modal fade" id="spanish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Español</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>¿El chófer ha sido amable?</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="guagua" type="hidden" value="01">
          <input name="language" type="hidden" value="Spanish">               
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>¿La recogida ha sido puntual?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>¿El servicio de Free-Bus ha sido de su agrado?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>¿Las instalaciones son confortables?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>¿La accesibilidad al bus ha sido cómoda?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question6" class="col-form-label">
          <ul>
            <li>¿Duración del trayecto?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Deje su sugerencia o comentario:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
<!-- EnglishForm -->
<div class="modal fade" id="english" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">English</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>Was the busdriver friendly?</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="guagua" type="hidden" value="01">
          <input name="language" type="hidden" value="English">               
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>Have you been picked up on time?</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>Did you like the free bus transfer?</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>Do you find the bus facilities convenient?</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>How would you rate the access to the bus?</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question6" class="col-form-label">
          <ul>
            <li>How long did the jouney take?</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Please, leave your suggestion or comment:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- SpanishForm -->
<div class="modal fade" id="spanish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Español</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>¿El chófer ha sido amable?</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="guagua" type="hidden" value="01">
          <input name="language" type="hidden" value="Spanish">               
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>¿La recogida ha sido puntual?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>¿El servicio de Free-Bus ha sido de su agrado?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>¿Las instalaciones son confortables?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>¿La accesibilidad al bus ha sido cómoda?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question6" class="col-form-label">
          <ul>
            <li>¿Duración del trayecto?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Deje su sugerencia o comentario:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- SpanishForm -->
<div class="modal fade" id="spanish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Español</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>¿El chófer ha sido amable?</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="guagua" type="hidden" value="01">
          <input name="language" type="hidden" value="Spanish">               
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>¿La recogida ha sido puntual?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>¿El servicio de Free-Bus ha sido de su agrado?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>¿Las instalaciones son confortables?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>¿La accesibilidad al bus ha sido cómoda?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question6" class="col-form-label">
          <ul>
            <li>¿Duración del trayecto?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Deje su sugerencia o comentario:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- SpanishForm -->
<div class="modal fade" id="spanish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Español</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>¿El chófer ha sido amable?</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="guagua" type="hidden" value="01">
          <input name="language" type="hidden" value="Spanish">               
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>¿La recogida ha sido puntual?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>¿El servicio de Free-Bus ha sido de su agrado?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>¿Las instalaciones son confortables?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>¿La accesibilidad al bus ha sido cómoda?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question6" class="col-form-label">
          <ul>
            <li>¿Duración del trayecto?:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" required name="question6" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Deje su sugerencia o comentario:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection