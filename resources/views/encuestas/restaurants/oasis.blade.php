@extends('layouts.layout')
@section('content')
<!-- Header -->
<header class="masthead d-flex">
  <div class="container text-center my-auto">
    <img class="logo" src="../../img/logo.jpg">
    <h1 class="mb-1">¡Tu opinión nos importa!<br>
      <small>Restaurante Oasis</small>
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
            <li>Por favor, evalúe su satisfacción general con los servicios del restaurante:</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="restaurant" type="hidden" value="Oasis">
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
            <li>Los empleados fueron amables:</li>
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
            <li>Me sirvieron de manera rápida:</li>
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
            <li>La calidad de la comida fue buena y a buen precio:</li>
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
            <li>Las instalaciones son confortables:</li>
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
        <label for="recipient-name" class="col-form-label">
          <ul>
            <li>Please evaluate your overall satisfaction with the restaurant services:</li>
          </ul>
        </label>
        <div class="form-group">  
          <input name="restaurant" type="hidden" value="Oasis">
          <input name="language" type="hidden" value="English">              
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="recipient-name" class="col-form-label">
          <ul>
            <li>The employees were friendly:</li>
          </ul>
        </label>               
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="recipient-name" class="col-form-label">
          <ul>
            <li>They served me quickly:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="recipient-name" class="col-form-label">
          <ul>
            <li>The quality of the food was good and at a good price:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="recipient-name" class="col-form-label">
          <ul>
            <li>The facilities are comfortable:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="message-text" class="col-form-label">Leave your suggestion or comment:</label>
          <textarea class="form-control" name="comment" id="message-text"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- GermanForm -->
<div class="modal fade" id="german" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deutsch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>Bitte bewerten sie die allgemeine Zufriedenheit mit dem Service des Restaurante:</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="restaurant" type="hidden" value="Oasis">
          <input name="language" type="hidden" value="German">               
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>Die Angestellten waren freundlich:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>Sie haben mich zügig bedient:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>Die Qualität der Speisen war gut und zu einem angemessenen Preis:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>Die Einrichtungen sind komfortabel:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Hinterlassen Sie Ihren Vorschlag oder Kommentar:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
        <button type="submit" class="btn btn-primary">Senden</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- FrenchForm -->
<div class="modal fade" id="french" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Français</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>S'il vous plaît, évaluez votre satisfaction globale avec les services du restaurant:</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="restaurant" type="hidden" value="Oasis">
          <input name="language" type="hidden" value="French">               
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>Les employés ont été sympathiques:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>J'ai été traité rapidement:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>La qualité de la nourriture était bonne et pour un bon prix:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>Les installations sont confortables:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Laissez votre suggestion ou commentaire:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ItalianForm -->
<div class="modal fade" id="italian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Italiano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>Per favore, valuta quanto sei rimasto soddisfatto del ristorante:</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="restaurant" type="hidden" value="Oasis">
          <input name="language" type="hidden" value="Italian">               
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>I dipendenti erano gentili:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>Ti hanno servito rapidamente:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>La qualità del mandiare era buona e a basso prezzo:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>Le strutture sono confortevoli:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Lascia il tuo suggerimento o commento:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Vicino</button>
        <button type="submit" class="btn btn-primary">Inviare</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- PolishForm -->
<div class="modal fade" id="polish" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Polski</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="" role="form">
        {{ csrf_field() }}
        <label for="question1" class="col-form-label">
          <ul>
            <li>Podaj swoja ogolna ocene o uslugach naszej restauracji:</li>
          </ul>
        </label>
        <div class="form-group"> 
          <input name="restaurant" type="hidden" value="Oasis">
          <input name="language" type="hidden" value="Polish">               
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question1" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question2" class="col-form-label">
          <ul>
            <li>Pracownicy byli uprzejmi:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question2" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question3" class="col-form-label">
          <ul>
            <li>Obsluzono nas szybko:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question3" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question4" class="col-form-label">
          <ul>
            <li>Jakosc potraw byla dobra a cena odpowiednia:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question4" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <label for="question5" class="col-form-label">
          <ul>
            <li>Wszelkie udogodnienia sa pozyteczne:</li>
          </ul>
        </label>
        <div class="form-group">                
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryWell"/>
            <img src="../../img/01.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Well"/>
            <img src="../../img/02.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Regular"/>
            <img src="../../img/03.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="Bad"/>
            <img src="../../img/04.png"/>
          </label>
          <label class="checkeable">
            <input type="radio" name="question5" value="VeryBad"/>
            <img src="../../img/05.png"/>
          </label>
        </div>
        <div class="form-group">
          <label for="comment" class="col-form-label">Napisz swoje propozycje lub uwagi:</label>
          <textarea class="form-control" name="comment" id="comment"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <button type="submit" class="btn btn-primary">Wyslij</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection