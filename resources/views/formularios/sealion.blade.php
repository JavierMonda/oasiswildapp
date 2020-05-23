@extends('layouts.layout')
@section('content')
<div class="container">
  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <img class="logo" src="../img/logo.jpg">
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
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">NORMAS PARA LA INTERACCIÓN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><b>Hora:</b></p>
        <p>
          Debe presentarse en el punto de encuentro al menos 15 minutos antes de la hora indicada, va a participar en una actividad de contacto directo con los animales por lo que es preciso que lea, comprenda y acepte las normas que rigen esta actividad. Si usted incumple alguna de ellas, podrá no ser admitido o expulsado de la actividad, sin derecho al reintegro del importe de la actividad.
        </p>
        <p><b>Usted no puede realizar la interacción si:</b></p>
        <ul>
          <li>Es menor de 7 años. (Los menores de 12 años deben realizar la actividad acompañados de un adulto)</li>
          <li>Tiene un peso superior a 140Kg.</li>
          <li>No sabe nadar.</li>
          <li>Está embarazada.</li>
          <li>Está bajo los efectos del alcohol o las drogas.</li>
          <li>Padece alguna enfermedad que pueda ser transmitida a los animales.</li>
        </ul>
        <p><b>Está totalmente prohibido:</b></p>
        <ul>
          <li>Llevar cualquier tipo de joya, piercing o pulsera.</li>
          <li>Tocar a los animales sin el permiso del entrenador.</li>
          <li>Saltar, gritar o realizar movimientos bruscos durante la interacción</li>
          <li>Fumar, comer o beber dentro del recinto de la actividad.</li>
          <li>La entrada con cualquier tipo de objeto (Cámaras, gafas, teléfonos...)</li>
        </ul>
        <p><b>Será obligatorio:</b></p>
        <ul>
          <li>Limpiarse los pies usando los pediluvios de la entrada de la piscina e instalaciones.</li>
          <li>Realizar la interacción con bañador o traje de neopreno.</li>
          <li>Seguir las indicaciones del entrenador.</li>
        </ul>
        <p><b>Foto-recuerdo:</b></p>
        <ul>
          <li>Durante la interacción, el equipo de fotógrafos de la empresa realizará fotos a los participantes que, posteriormente, podrá adquirir en la tienda de souvenirs, sección de fotografías.</li>
          <li>las fotografías, tanto las adquiridas como las no adquiridas, serán destruídas y borradas de nuestros ficheros en un plazo máximo de 2 días desde su captación.</li>
        </ul><br>
        <form method="POST" action="" role="form">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="col-sm-12 col-form-label">RELLENE EL SIGUIENTE FORMULARIO</label>
            </div>
            <div class="form-group row">
              <input name="live" type="hidden" value="Sealion">
              <input name="language" type="hidden" value="Spanish">
              <label for="name" class="col-sm-2 col-form-label">Nombre: (*)</label>
              <div class="col-sm-5">
                <input type="name" class="form-control" size="30" required name="name" placeholder="Nombre"/>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-2 col-form-label">Email: (*)</label>
              <div class="col-sm-5">
                <input type="email" class="form-control" size="30" required name="email" placeholder="Email"/>
              </div>
            </div>
            <div class="form-group row">
              <label for="children" class="col-form-label">
                <ul>
                  <li>Niños de 0 a 14 (*)</li>
                  <input type="radio" required name="children" value="Si" onchange="mostrar(this.value)"/>
                  Si
                  <input type="radio" required name="children" value="No" onchange="mostrar(this.value)" checked/>
                  No
                </ul>
              </label>
            </div>
            <div class="form-group" id="age">
              <label for="age" class="col-sm-2 col-form-label">Edad: (*)</label>
              <div class="col-sm-5">
                <input type="number" id="type-number" class="form-control" min="0" max="14" required name="age" />
              </div>
            </div>
            <div class="form-group row" id="conditionChild">
              <label for="conditionChild" class="col-form-label">
                <ul>
                  <li><input type="checkbox" required name="conditionChild" value="Acepto"/> Consiento la captación de imágenes (fotografía) del menor o menores de los que declaro responsablemente disponer de su representación, por Museo del Campo Majorero, S.L. y a su publicación en la tienda de souvenirs el día de la visita para posible compra.</li>
                  
                </ul>
              </label>
            </div>
            <div class="form-group row">
              <label for="condition1" class="col-form-label">
                <ul>
                  <li><input type="checkbox" required name="condition1" value="Acepto"/> Consiento a la captación de mi imagen (fotografía) por Museo del Campo Majorero, S.L. y a su publicación en la tienda de souvenirs el día de mi visita para posible compra.</li>
                </ul>
              </label>
            </div>
            
            <div class="form-group row">
              <label for="condition2" class="col-form-label">
                <ul>
                  <li><input type="checkbox" required name="condition2" value="Acepto"/> Declaro conocer y entender las <a href="#" class="" data-toggle="modal" data-target="#normas">normas,</a> consintiendo al tratamiento de mis datos conforme a la Política de Privacidad de <a href="#" class="" data-toggle="modal" data-target="#informacion">oasiswildlifefuerteventura.com</a>.</li>
                </ul>
              </label>
            </div>
            <p id="p-conditions"><i>IB Protección Datos. Responsable del tratamiento: MUSEO DEL CAMPO MAJORERO, S.L. Finalidad: Gestión, gestión, desarrollo, ejecución y cumplimiento de actuaciones de comunicación y marketing de la empresa, dar testimonio y promocionar a la empresa y actividades organizadas y desarrolladas por esta o en las que participa, material promocional y publicitario. Legitimación: ejecución del contrato y servicios, su consentimiento, obligaciones legales. Destinatarios de datos: terceros obligación legal o derivados de relación o consentimiento y proveedores. Derechos: acceder, rectificar y suprimir datos, otros recogidos en “Información adicional”. Información adicional: Política de Privacidad www.oasiswildlifefuerteventura.com. Este consentimiento es gratuito, sin límite en tiempo ni ámbito geográfico, pudiendo revocarlo en cualquier momento en el parque o en juridico@fuerteventuraoasispark.com. Las fotos-recuerdo se destruirán a los dos días de su visita.</i></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Normas -->
  <div class="modal fade" id="normas" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Normas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4>NORMAS PARA LA INTERACCIÓN</h4>
        <p><b>Hora:</b></p>
        <p>
          Debe presentarse en el punto de encuentro al menos 15 minutos antes de la hora indicada, va a participar en una actividad de contacto directo con los animales por lo que es preciso que lea, comprenda y acepte las normas que rigen esta actividad. Si usted incumple alguna de ellas, podrá no ser admitido o expulsado de la actividad, sin derecho al reintegro del importe de la actividad.
        </p>
        <p><b>Usted no puede realizar la interacción si:</b></p>
        <ul>
          <li>Es menor de 7 años. (Los menores de 12 años deben realizar la actividad acompañados de un adulto)</li>
          <li>Tiene un peso superior a 140Kg.</li>
          <li>No sabe nadar.</li>
          <li>Está embarazada.</li>
          <li>Está bajo los efectos del alcohol o las drogas.</li>
          <li>Padece alguna enfermedad que pueda ser transmitida a los animales.</li>
        </ul>
        <p><b>Está totalmente prohibido:</b></p>
        <ul>
          <li>Llevar cualquier tipo de joya, piercing o pulsera.</li>
          <li>Tocar a los animales sin el permiso del entrenador.</li>
          <li>Saltar, gritar o realizar movimientos bruscos durante la interacción</li>
          <li>Fumar, comer o beber dentro del recinto de la actividad.</li>
          <li>La entrada con cualquier tipo de objeto (Cámaras, gafas, teléfonos...)</li>
        </ul>
        <p><b>Será obligatorio:</b></p>
        <ul>
          <li>Limpiarse los pies usando los pediluvios de la entrada de la piscina e instalaciones.</li>
          <li>Realizar la interacción con bañador o traje de neopreno.</li>
          <li>Seguir las indicaciones del entrenador.</li>
        </ul>
        <p><b>Foto-recuerdo:</b></p>
        <ul>
          <li>Durante la interacción, el equipo de fotógrafos de la empresa realizará fotos a los participantes que, posteriormente, podrá adquirir en la tienda de souvenirs, sección de fotografías.</li>
          <li>las fotografías, tanto las adquiridas como las no adquiridas, serán destrídas y borradas de nuestros ficheros en un plazo máximo de 2 días desde su captación.</li>
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Información Básica -->
  <div class="modal fade" id="informacion" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Información básica y adicional en protección de datos de carácter personal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            En cumplimiento de la normativa vigente en protección de datos de carácetr personal, le informamos que sus datos de carácter personal incorporados en el presente formulario, así como los facilitados en la relación que le une a esta empresa y a la que se refiere este documento, son incorporados a nuestro sistema de tratamiento de datos, siendo responsable del tratamiento MUSEO DEL CAMPO MAJORERO, S.L., con C.I.F. B-35404086, domicilio en Carretera General de Jandía, Km. 17, s/n C.P. 35628 La Lajita - Pájara (Fuerteventura, Islas Canarias, España), teléfono (+34) 928 161102, correo electrónico reservas@fuerteventuraoasispark.com, con las siguientes finalidades:
          </p>
          <ol type="a">
            <li>
              Gestión de clientes y visitantes, ejecución, cumplimiento, mantenimiento de ralación y circunstancias de/para ella necesarias, incluyendo objetos perdidos, libro visitas, fotos recuerdo, servicios de bus, comercio electrónico, envío de comunicaciones comerciales electrónicas, satisfacer objeto contratos y acuerdos, facturación, cobros y contabilidad;
            </li>
            <li>
              GEstión, control, ejecución, desarrollo, cumplimiento y mantenimiento de la administración, facturación, contabilidad, fiscalidad, impuestos e información económico-financiera de la empresa y gestión de pagos y cobros. Únicamente son solicitados datos obligatorios y necesarios para cumplir obligaciones legales y circunstancias derivadas de su relación con la empresa, no proporcionarlos podrá implicar no poder llevar a cabo su correcto desarrollo. La base legal para el tratamiento es la ejecución del contrato y servicios solicitados por su parte, su consentimiento, así como el cumplimiento de obligaciones legales incluidas las de protección de datos de carácter personal.
            </li>
          </ol>
          <p>
            Los destinatarios de sus datos serán el propio responsable del tratamiento y terceros a los que sea necesaria su comunicación en cumplimiento de obligación legal o ser necesaria o derivada de la existencia de su relación, como los siguientes (con finalidad de ejercicio de sus funciones públicas y objetos sociales, pudiendo ejercitar sus derechos ante los mismos):
          </p>
          <ol type="a">
            <li>Administración tributaria;</li>
            <li>Bancos, cajas de ahorro y cajas rurales;</li>
            <li>Administración pública con competencia en la materia;</li>
            <li>Fuerzas y Cuerpos de seguridad del Estado</li>
            <li>Policía Judicial;</li>
            <li>Juzgados y Tribunales;</li>
            <li>Entidades aseguradoras.</li>
          </ol>
          <p>
            
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection