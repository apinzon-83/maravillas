<!DOCTYPE html>
<html lang="en" >

<head>
<title>Maravillas del Eden/Registro</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="conextium">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/select2.css" rel="stylesheet">
<link href="css/smoothness/jquery-ui-1.10.0.custom.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/superfish.js"></script>

<script src="js/select2.js"></script>

<script src="js/jquery.parallax-1.1.3.resize.js"></script>

<script src="js/SmoothScroll.js"></script>

<script src="js/jquery.appear.js"></script>

<script src="js/jquery.caroufredsel.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>

<script src="js/jquery.ui.totop.js"></script>

<script src="js/script.js"></script>

<!-- archivos de login -->
<link href="css/style2.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-social.html" rel="stylesheet" media="screen">
<script type="text/javascript" src="js/jquery.validate.js"></script>
<!-- fin de login -->

<script type="text/javascript" src="js/validadorFormulario.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <!-- inject: js globals -->

</head>
<body>
  <?php
          require_once 'app/modelo/conexion.php';
          require 'app/modelo/usuario.php';
          require 'app/controlador/validadorFormularios.php';


          // Inicializamos las varibles que se usaran para los campos de texto del formulario.
          $nombre="";
          $apellidoP="";
          $apellidoM="";
          $email="";
          $email2="";
          $usuario="";
          $password="";
          $password2="";
          $telefono="";
          $genero="";
          $enteraste="";
          $quiero="";

          if(isset($_POST['registrar'])){
              $conexion = new mysqli($servidor, $usuarioBD, $passwordBD, $baseDatos);
              $nuevoUsuario = new Usuario($_POST['nombre'],$_POST['apellidoP'],$_POST['apellidoM'],$_POST['email'],$_POST['email2'],$_POST['$usuario'],$_POST['password'],$_POST['password2'],$_POST['telefono'],$_POST['genero'],$_POST['enteraste'],$_POST['quiero']);
              $gestor = new GestorUsuarios($conexion);

              // Si todos los campos del usuario son correctos y se realiza la insercion del usuario con exito
              // se redireciona a la pagina correspondiente.
              if (($gestor->validarUsuario($nuevoUsuario)) && ($gestor->insertarUsuario($nuevoUsuario))) {
                  $conexion->close();
                  header("Location:formulario_login.php");
              }
              else{
                  // Si algo falla se recuperan los datos introducidos por el usuario
                  // para que no tenga que reescribir los que estuviesen correctos.
                  $nombre=$_POST['nombre'];
                  $apellidoP=$_POST['apellidoP'];
                  $apellidoM=$_POST['apellidoM'];
                  $email=$_POST['email'];
                  $email2=$_POST['email2'];
                  $usuario=$_POST['usuario'];
                  $password=$_POST['password'];
                  $password2=$_POST['password2'];
                  $telefono=$_POST['telefono'];
                  $genero=$_POST['genero'];
                  $enteraste=$_POST['enteraste'];
                  $quiero=$_POST['quiero'];
              }
          }
      ?>

<div id="main">

<div class="top1_wrapper">
  <div class="container">
    <div class="top1 clearfix">
      <div class="email1"><a href="mailto:ventas@maravillasdeleden.com">ventas@maravillasdeleden.com</a></div>
      <div class="phone1">(414) 2730959</div>
      <div class="social_wrapper">
        <ul>

        </ul>
        <ul class="social clearfix">
          <li style="cursor:pointer;" type="button" class="fa fa-sign-in" aria-hidden="false" data-toggle="modal" data-target="#mylog">  Ingresa</li>
          <li class="fa fa-sign-out">Registrate</li>
          <li><a href="https://www.facebook.com/maravillasdeleden/"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/maravillas_eden"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCCBXBbXfMHm71qW4MfnsmNQ"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://www.instagram.com/maravillasdeleden/"><i class="fa fa-instagram"></i></a></li>
          <!-- <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li> -->
        </ul>
      </div>

    </div>
  </div>
</div>

<div class="top2_wrapper">
  <div class="container">
    <div class="top2 clearfix">
      <header>
        <!-- <div class="logo_wrapper col-md-2">
          <a href="index.html" class="logo">
            <img src="images/logox.png" alt="" class="img-responsive">
          </a>
        </div> -->
      </header>
      <div class="navbar navbar_ navbar-default">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-collapse navbar-collapse_ collapse">
          <ul class="nav navbar-nav sf-menu clearfix">
            <li class="active"><a href="index.html">Inicio</a></li>
            <li><a href="about.html">Nosotros</a></li>
            <li><a href="gallery.html">Gallería</a></li>
            <li><a href="flights.html">Viajes</a></li>


            <li><a href="left-blog.html">Blog</a>
              <ul>

              </ul>
            </li>
            <li><a href="contacts.html">Contacto</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- contenido login -->
<div class="container">
  <form class="form-inline" style="width:90%;" id="register_form" name="f1" method="post" action="#">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Registro</h2>
        </div>
    </div>
    <div class="line" style="width:90%;"></div>
    <div class="row">

      <div class="col-md-6">
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
          <span id="nombreOK"></span>
          <div class="col-md-12">
            <input type='text' id="nombre" name="nombre" placeholder="Nombre"  maxlength="20" value="<?php echo $nombre ?>" onKeyUp="javascript:validarNombre('nombre')" onkeypress="return validar(event)" required/>
          </div>
        </div>
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
          <span id="apellidoPOK"></span>
          <div class="col-md-12">
            <input type='text' id="apellidoP" name="apellidoP" placeholder="Apellido Paterno" maxlength="15" value="<?php echo $apellidoP ?>" onKeyUp="javascript:validarapellidoP('apellidoP')" onkeypress="return validar(event)" required/>
          </div>
        </div>
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
          <span id="apellidoMOK"></span>
          <div class="col-md-12">
            <input type='text' id="apellidoM" name="apellidoM" placeholder="Apellido Materno" maxlength="15" value="<?php echo $apellidoM ?>" onKeyUp="javascript:validarapellidoM('apellidoM')" onkeypress="return validar(event)" required/>

          </div>
        </div>
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
          <span id="emailOK"></span>
          <div class="col-md-12">
            <input type='text' id="email" name="email" placeholder="email" maxlength="30" value="<?php echo $email ?>"  onKeyUp="javascript:validateMail('email')" required/>

          </div>
        </div>
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope bigicon"></i></span>
          <div class="col-md-12">
              <input type='text' id="email2" name="email2" placeholder="confirma tu email" maxlength="30" value="<?php echo $email2 ?>"  onmouseout="igualEmail()" required/>
          </div>
        </div>
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
          <span id="usuarioOK"></span>
          <div class="col-md-12">
            <input type='text' id="usuario" placeholder="usuario" name="usuario" maxlength="15" value="<?php echo $usuario ?>" onKeyUp="javascript:validarusuario('usuario')" required/>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-key bigicon"></i></span>
          <span id="passwordOK"></span>
          <div class="col-md-12">
            <input type='password' id="password" name="password" placeholder="Password" maxlength="15" value="<?php echo $password ?>" onKeyUp="javascript:validarPassword('password')" required/>

          </div>
        </div>
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-key bigicon"></i></span>
          <div class="col-md-12">
            <input type='password' id="password2" name="password2"  placeholder="Repite tu Password" maxlength="15" value="<?php echo $password2 ?>" onmouseout="igualPass()" required/>
          </div>
        </div>
        <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone bigicon"></i></span>
          <span id="telefonoOK"></span>
          <div class="col-md-12">
            <input type='text' id="telefono" name="telefono" placeholder="Telefono" maxlength="10" value="<?php echo $telefono ?>" onKeyUp="javascript:validarTelefono('telefono')" onkeypress="return valida(event)"/>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-md-1 col-md-offset-2 text-center">Genero</label>
          <div class="col-md-12 col-md-offset-2">
            <select id="genero" name="genero" class="form-control">
              <option selected value="Hombre">Hombre</option>
              <option value="Mujer">Mujer</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-8 col-md-offset-0  text-center" for="entreraste">Como te enteraste de nosotros</label>
          <div class="col-md-12 col-md-offset-1">
            <select id="enteraste" name="enteraste" class="form-control">
              <option selected value="Facebook">Facebook</option>
              <option value="Recomendacion">Recomendación</option>
              <option value="Amigos">Amigos</option>
              <option value="Publicidad">Publicidad</option>
              <option value="Promotor">Promotor</option>
              <option value="Internet">Internet</option>
              <option value="Pagina_web">Pagina Web</option>
            </select>
          </div>
        </div>
        <!-- <div class="form-group" >
          <label class="col-md-8 col-md-offset-1 control-label" for="radios">¿Quiero?</label>
          <div class="col-md-12 col-md-offset-1">
          <div class="radio">
            <label for="radios-0">
              <input type="radio" name="idrol" id="radios-0" value="usuario" checked="checked" disabled >
              Reservar
            </label>
        	</div>
          <div class="radio">
            <label for="radios-1">
              <input type="radio" name="idrol" id="radios-1" value="admin" disabled>
              Subir Alojamientos
            </label>
        	</div>
          </div>
        </div> -->


      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-md-offset-5">
        <br>
        <button type="submit"
            class="btn btn-lg btn-primary btn-sign-in" data-loading-text="Loading...">
            Registrarse
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
          <a class="noline" href="login.php">
            Iniciar sesión
          </a>
      </div>
      <div class="col-md-4 col-md-offset-2">
          <a class="noline" href="partner.php">
            ¿Deseas ser nuestro partner?
          </a>
      </div>
    </div>
    <div class="messagebox">
        <div id="alert-message"></div>
    </div>
    <br>
</form>

</div>



<script>
    $(document).ready(function() {

jQuery.validator.addMethod("noSpace", function(value, element) {
 return value.indexOf(" ") < 0 && value != "";
}, "Spaces are not allowed");
/*jQuery.validator.addMethod("maxlength", function (value, element, param) {
console.log('element= ' + $(element).attr('name') + ' param= ' + param )
if ($(element).val().length > param) {
    return false;
} else {
console.log($(element).val().length);
    return true;
}
}, "You have reached the maximum number of characters allowed for this field.");
*/

$("#register_form").submit(function() {

            $("#register_form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    username: {
                        required: true,
          noSpace: true
                    },
                    password: {
                        required: true,
                        minlength: 6
          //maxlength: 8
                    },
                    retype_password: {
                        required: true,
                        equalTo: "#inputPassword"
                    },
                },
                messages: {
                    email: {
                        required: "Enter your email address",
                        email: "Enter valid email address"
                    },
                    username: {
                        required: "Enter Username",

                    },
                    password: {
                        required: "Enter your password",
                        minlength: "Password must be minimum 6 characters"
          //maxlength: "Password must be maximum 8 characters"

                    },
                    retype_password: {
                        required: "Enter confirm password",
                        equalTo: "Passwords must match"
                    },
                },



                errorPlacement: function(error, element) {
                    error.hide();
                    $('.messagebox').hide();
                    error.appendTo($('#alert-message'));
                    $('.messagebox').slideDown('slow');



                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parents('.form-group').addClass('has-error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents('.form-group').removeClass('has-error');
                    $(element).parents('.form-group').addClass('has-success');
                }
            });

            if ($("#register_form").valid()) {
                var data1 = $('#register_form').serialize();
                $.ajax({
                    type: "POST",
                    url: "registerUser.php",
                    data: data1,
                    success: function(msg) {
                        console.log(msg);
                        $('.messagebox').hide();
          $('#alert-message').html(msg);
           $('.messagebox').slideDown('slow');
                    }
                });
            }
            return false;
        });
    });
</script>
<!-- fin de contenido login -->

<div class="bot1_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="logo2_wrapper">
          <a href="index-2.html" class="logo2">
            <img src="images/logox.png" alt="" class="img-responsive">
          </a>
        </div>

      </div>
      <div class="col-sm-3 ">
        <div class="bot1_title">¡Siguenos en nuestras redes sociales!</div>
        <div class="social2_wrapper ">
          <ul class="social2 clearfix ">
            <li class="nav1"><a href="https://www.facebook.com/maravillasdeleden/"></a></li>
            <li class="nav5"><a href="https://twitter.com/maravillas_eden"></a></li>
            <li class="nav6"><a href="https://www.youtube.com/channel/UCCBXBbXfMHm71qW4MfnsmNQ"></a></li>
            <li class="nav3"><a href="https://www.instagram.com/maravillasdeleden/"></a></li>
            <!-- <li class="nav2"><a href="#"></a></li>
            <li class="nav4"><a href="#"></a></li>
          </ul> -->
        </div>

      </div>
      <div class="col-sm-3" style=" height: 260px; overflow-y: auto;">

      <a class="twitter-timeline" href="https://twitter.com/maravillas_eden?ref_src=twsrc%5Etfw">Tweets by maravillas_eden</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>

      <div class="col-sm-3 ">
        <div class="bot1_title">Noticias</div>
        <div class="newsletter_block">
          <div class="txt1">Suscribete a nuestras noticias para tener ofertas.</div>
          <div class="newsletter-wrapper clearfix">
          <form class="newsletter" action="javascript:;">
            <input type="text" name="s" placeholder='Email' onBlur="if(this.value=='')
             this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''">
            <a href="#" class="btn-default btn3">SUSCRIBIRTE</a>
          </form>
        </div>
        </div>
        <div class="phone2">(414) 27-309-59</div>
        <div class="support1"><a href="mailto:ventas@maravillasdeleden.com">ventas@maravillas.com</a></div>
      </div>
    </div>
  </div>
</div>

<div class="bot2_wrapper">
  <div class="container">
    <div class="left_side">
      Derechos Reservados © 2017
      <span>|</span>
      <a type="button"  data-toggle="modal" data-target="#myModal">Política de Privacidad</a>
      <span>|</span>

        <a href="about.html">Nosotros</a>   <span>|</span>

    </div>
    <div class="right_side">Designed by <strong><a href="http://conextium.com/">CONEXTIUM  </a></strong></div>
  </div>
</div>
</div>
<div class="row">
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 90%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Política de privacidad de Maravillas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p >A continuación encontrarás la Política de privacidad de los datos personales recopilados a través de www.maravillasdeleden.com</p>
        <p class="text-justify">
         En Maravillas del edén  entendemos que reservar en línea requiere de mucha confianza de tu parte. Valoramos tu confianza, por lo que una de nuestras prioridades más altas consiste en garantizar la seguridad y confidencialidad de la información personal que nos proporciones. Por favor, lee cuidadosamente estas políticas para conocer nuestras prácticas en materia de privacidad. Al visitar este sitio web, aceptas las prácticas que aquí se describen.
        </p>
        <p class="text-justify">
          &bull; Qué información recopilamos acerca ti <br>
          &bull; Cómo utilizamos tu información <br>
          &bull; Con quiénes compartimos información <br>
          &bull; Cómo puedes tener acceso a tu información <br>
          &bull; Las opciones respecto a la recopilación y uso de tu información <br>
          &bull; Cookies y otras tecnologías <br>
          &bull; Exhibición de publicidad/Tus opciones <br>
          &bull; Cómo protegemos tu información <br>
          &bull; Privacidad a menores <br>
          &bull; Vínculos externos <br>
          &bull; Cambios a la Política de privacidad <br>
          &bull; Cómo comunicarse con nosotro
        </p>
        <p class="text-justify">
          <strong>Qué información recopilamos acerca de ti</strong>
        </p>
        <p class="text-justify">
          En general: Recibimos y almacenamos toda la información que ingreses en nuestro sitio web o que de cualquier otra forma nos proporciones. Esta incluye información que te pueda identificar (͞personal͟), incluyendo tu nombre y apellido, número telefónico, dirección postal y correo electrónico, número de fax y datos de pago (como número de tarjeta de crédito, nombre del tarjetahabiente y fecha de vencimiento). También podremos solicitarte información de tus preferencias de habitación de hotel e información de tu programa de lealtad de aerolínea o de renta de automóviles. Puedes elegir no proporcionarnos información, aunque en general, se requiere cierta información sobre ti para que puedas ser socio; hacer reservaciones de viajes; llenar un perfil de viajero; participar en encuestas,  sorteos o concursos; hacernos una pregunta; o realizar otras operaciones en nuestro sitio.
        </p>
        <p class="text-justify">
         Información de acompañantes: Cuando hagas una reservación para otras personas a través de este sitio web, te solicitaremos tus datos personales y preferencias de viaje. Debes obtener el consentimiento de otras personas antes de proporcionar tus datos personales y preferencias de viaje en este sitio web, ya que el acceso para visualizar o modificar la información solo estará disponible a través de tu cuenta.
        </p>
        <p class="text-justify">
          Información de otras fuentes: asimismo, de manera periódica podemos obtener información personal y no-personal sobre ti de entidades filiales, socios comerciales y otras fuentes independientes e incluir dicha información en tu cuenta. Algunos ejemplos de la información que podemos recibir incluyen: información actualizada de tu domicilio o lugar de entregas, historial de compras e información de carácter demográfico.
        </p>
        <p class="text-justify">
          Información automática: cuando visitas nuestro sitio, de manera automática recopilamos cierta información de tu computadora. Por ejemplo, recopilaremos tu dirección IP, software de exploración de internet (Chrome, Firefox, Safari o Internet Explorer), así como el sitio que lo remite. Asimismo, podemos recopilar información de tu actividad en línea, como los viajes visualizados y reservaciones realizadas. Las razones por las que recopilamos información de manera automática son para ayudarnos a personalizar tu experiencia como usuario e impedir fraudes. Para mayor información, consulta la sección de Cookies y otras tecnologías.
        </p>
        <p class="text-justify">
          <strong>Cómo utilizamos tu información</strong>
        </p>
        <p class="text-justify">
          Utilizamos información sensible de pagos (como el nombre del tarjetahabiente, número de tarjeta de crédito y fecha de vencimiento) para efectos de completar las reservaciones que haces en nuestro sitio. Utilizamos otra información tuya para los siguientes fines generales: Para proporcionarte los productos y servicios que solicitas; para proporcionarte confirmaciones y actualizaciones de viajes; para administrar tu cuenta, incluyendo notas o recibos y proporcionarte avisos de viajes; para comunicarnos contigo; para responder a tus preguntas y comentarios; para medir tu interés en y mejorar nuestros productos, servicios y sitio; y mejorarlos; para notificarte de productos, servicios y ofertas especiales que pudieran interesarte; para personalizar tu experiencia en este sitio; para recompensarte como parte de cualquier programa de recompensas o de lealtad al que elijas formar parte; para solicitarte información, por ejemplo, a través de encuestas; para resolver disputas o problemas o cobrar contraprestaciones; para prevenir actividades potencialmente ilegales o prohibidas; para hacer efectivos nuestros Términos de uso; y para cualquier otra finalidad que se te informe al momento de solicitarte información.
        </p>
        <p class="text-justify">
          Comunicaciones por correo electrónico: Deseamos facilitarte la posibilidad de beneficiarte con oportunidades de viaje en nuestro sitio. Una de manera de hacerlo consiste en enviarte mensajes de correo electrónico con tus posibles preferencias de viaje. Por ejemplo, si realizas una búsqueda en nuestro sitio de vuelos a Cancún, y guardaste tu itinerario o no has hecho tu reservación, es posible que te enviemos un correo electrónico recordándote de tu itinerario guardado o sobre ofertas especiales de vuelos a Cancún. De la misma manera, si recibes un correo electrónico relacionado con viajes a Cancún y manifiestas un interés en hoteles de Cancún, mediante un vínculo contenido en el correo electrónico, es posible que recibas un correo electrónico relacionado con ofertas especiales de hoteles en Cancún o información de otros destinos. Consideramos que estos correos electrónicos te proporcionarán información útil respecto a ofertas especiales de viajes disponibles en nuestro sitio. Por favor toma en cuenta que en el mensaje que te enviemos, tendrás la oportunidad de solicitar que ya no se te envíen dichos mensajes.
        </p>
        <p class="text-justify">
          Por favor revisa “Tus opciones respecto a la recopilación y uso de tu información”.
        </p>
        <br>
        <p class="text-justify">
          <strong>Con quiénes compartimos tu información</strong>
        </p>
        <p class="text-justify">
            Este sitio puede compartir tu información con las siguientes entidades:
        </p>
        <p class="text-justify">
          Proveedores, tales como hoteles, aerolíneas, arrendadoras de autos y otros prestadores de servicios turísticos, que cumplen con tus reservaciones turísticas. A lo largo de este sitio, todos los servicios que son prestados por un tercero son identificados como tales. No imponemos limitaciones en el uso o divulgación que un proveedor da a tu información personal. Por lo tanto, te instamos a que revises la política de privacidad de cualquier prestador de servicios turísticos cuyos productos sean adquiridos a través de este sitio. Por favor toma en cuenta que es factible que estos proveedores te contacten directamente para obtener mayor información tuya, proporcionarte tu reservación de viaje o responder a una reseña enviada por ti.
          Vendedores independientes que proporcionan servicios o funciones por nuestra cuenta, incluyendo procesamiento de tarjetas de crédito, análisis empresariales, servicios al cliente, mercadotecnia, distribución de encuestas o programas de concursos, así como prevención de fraudes. Asimismo, podemos autorizar a vendedores independientes para que recopilen información por nuestra cuenta, incluyendo aquella que sea necesaria para operar funciones de nuestro sitio o para facilitar el envío de publicidad en línea personalizada a sus intereses. Los terceros solo tendrán acceso a y podrán recopilar información exclusivamente para realizar sus funciones, y no se les permite usar o compartir dicha información para otros fines.
          Socios comerciales con quienes podamos ofrecer conjuntamente productos y servicios, o cuyos productos y servicios puedan ser ofrecidos en nuestro sitio. Te darás cuenta cuando un tercero tenga alguna relación con un producto o servicio solicitado por ti porque tu nombre aparecerá en forma separada o conjunta con el nuestro. Si eliges tener accesos a estos servicios opcionales, es posible que compartamos con esos socios tu información, incluyendo tu información personal. Toma en cuenta que nosotros no controlamos las prácticas en materia de privacidad de los socios comerciales.
          Sitios web remitentes. Si llegaste al sitio desde otro sitio, puede que compartamos parte de tu información con ese sitio web del que vienes. No hemos impuesto limitaciones al uso de tu información para los sitios web desde los que vienes, y te sugerimos que si fuiste referido a nuestro sitio desde otro sitio (por ejemplo, a través de un vínculo en otro sitio en el que hayas hecho clic y que te hubiere direccionado a nuestro sitio), es posible que compartamos con dicho sitio web alguna información tuya. No hemos establecido restricción alguna al sitio web que te refiere o remite a nosotros en relación con el uso de información personal, por lo que te advertimos que revises la política de privacidad de cualquier sitio que te refiera o remita a nuestro sitio.
          Compañías de nuestro grupo corporativo. Es posible que compartamos tu información con nuestras filiales corporativas. Esto nos permite proporcionarte información de productos y servicios, relacionados o no con viajes, que pudieran ser de tu interés. En la medida en que nuestras filiales corporativas tengan acceso a tu información, seguirán prácticas que, como mínimo, sean igual de restrictivas a las contenidas en la presente Política de privacidad. Asimismo, cumplirán con todas las disposiciones legales relacionadas con la transmisión de materiales publicitarios y, como mínimo, te darán la oportunidad en cualquier correo electrónico comercial de optar por dejar de recibir posteriormente materiales publicitarios.
        </p>
        <p class="text-justify">
          <strong>Es posible que también compartamos su información:</strong>
        </p>
        <p class="text-justify">
          En atención o respuesta a órdenes judiciales o derivadas de otros procedimientos legales; para establecer o ejercitar nuestros derechos; para defendernos de reclamaciones legales; o de cualquier otra forma que se requiera conforme a las leyes aplicables. En estos supuestos, nos reservamos el derecho de hacer valer o renunciar cualquier derecho o excepción que nos asista.
            Cuando consideremos que sea conveniente para investigar, prevenir o tomar acciones en relación con actividades ilegales o presumiblemente ilegales; para salvaguardar y defender los derechos, bienes o seguridad de nuestra compañía o este sitio, nuestros clientes o terceros; y en relación con nuestros Términos de servicio y otros contratos.
            En relación con una operación corporativa, como una desinversión, fusión, consolidación, venta de activos o en el eventual supuesto de un procedimiento de bancarrota.

          Salvo por lo dispuesto anteriormente, se te notificará cuando tu información personal vaya a ser compartida con terceros, y tendrás la oportunidad de optar que no compartamos tu información.

          También es posible que compartamos con terceros información general o anónima, incluyendo anunciantes e inversionistas. Por ejemplo, es posible que le demos a conocer a nuestros anunciantes el número de visitantes que el sitio recibe o los hoteles o destinos más populares. Esta información no contiene información personal y es utilizada para desarrollar contenido y servicios que deseamos sean de tu interés.
        </p>
        <p class="text-justify">
          <strong>Cómo puedes tener acceso a tu información</strong>
        </p>
        <p class="text-justify">
          Puedes tener acceso y actualizar tu información personal en la sección "Perfil de usuario" en este sitio. Puedes contactarnos a la dirección de correo electrónico que más adelante se menciona para cancelar tu cuenta. Toma en cuenta que si cancelas tu cuenta, ya no podrás ingresar o tener acceso a tu información personal. Sin embargo, en cualquier momento podrás abrir una nueva cuenta. Asimismo, toma en cuenta que retendremos cierta información relacionada con tu cuenta, para efectos analíticos y para la integridad de nuestros registros.
        </p>
        <p class="text-justify">
          <strong>Las opciones respecto a la recopilación y uso de tu información</strong>
        </p>
        <p class="text-justify">
          Como se mencionó anteriormente, puedes optar por no proporcionarnos información; sin embargo, cierta información pudiere ser necesaria para hacer reservaciones de viajes o para aprovechar ciertas funciones ofrecidas en el sitio.
          Como se mencionó anteriormente, puedes agregar o actualizar información y cancelar tu cuenta.
          Podrás cancelar la suscripción a los correos electrónicos comerciales en cualquiera de los mensajes que te enviemos. Como usuario registrado, en la sección “Mi cuenta” puedes modificar, en cualquier momento, las opciones de suscripción de correo electrónico. Independientemente de que seas un usuario registrado o no del sitio, en los correos que recibas tendrás la oportunidad de cancelar tu suscripción de los mensajes publicitarios. Toma en cuenta que nos reservamos el derecho de enviarte otros mensajes, incluyendo mensajes de nuestros servicios, mensajes administrativos, así como encuestas relacionadas con tu cuenta o con las operaciones que realices en el sitio, sin que se te brinde la opción de dejar de recibirlos.
          Es posible que en el sitio se te brinde la oportunidad de proporcionar un número de teléfono móvil para efectos de recibir alertas del día de vuelo. Podrás suspender, en cualquier momento, estas alertas.
          La sección de Ayuda de la mayoría de los navegadores debe indicarte qué debes hacer para prevenir que el navegador acepte nuevas cookies, para que el navegador te avise cuando recibas una nueva cookie, o bien, para inhabilitar la mayoría de las cookies. Toma en cuenta que si te niegas a recibir cookies, es posible que no tengas acceso a la mayoría de las herramientas de viajes de nuestro sitio.
        </p>
        <p class="text-justify">
          <strong>Cookies y otras tecnologías</strong>
        </p>
        <p class="text-justify">
          Queremos que te sientas seguro al usar este sitio web para hacer reservaciones de hoteles y viajes, de modo que tenemos el compromiso de proteger la información que reunimos. Aunque ningún sitio web puede garantizar la seguridad, hemos implementado procedimientos administrativos, técnicos y de seguridad física adecuados para ayudar a proteger la información personal que nos proporcionas. Por ejemplo, únicamente los empleados autorizados tienen permitido obtener acceso a la información personal y solo pueden hacerlo para funciones comerciales autorizadas. Además, al transmitir tu información personal delicada entre tu sistema y el nuestro utilizamos un método de cifrado, y empleamos firewalls y sistemas de detección de intrusiones como ayuda para prevenir que personas no autorizadas obtengan acceso a tu información.

          Para ayudarnos a reconocer a tu navegador como un visitante previo y para guardar y recordar cualquier preferencia que hubiere sido seleccionada mientras tu navegador nos visitaba. Por ejemplo, si te inscribes en nuestro sitio, podemos usar cookies para recordar tu información de registro, para que no tengas que registrarte en nuestro sitio cada vez que nos visites. Asimismo, podemos almacenar tu contraseña en una cookie, en caso que hayas seleccionado la opción “Mantener la sesión abierta”. Toma en cuenta que por razones de seguridad la identificación de los socios, contraseñas y cualquier otra información almacenada en las cookies se encuentra encriptada. Salvo que te des de alta con nosotros, estas cookies no contendrán información personal.
          Para ayudarnos a personalizar el contenido y publicidad proporcionada en este y otros sitios. Por ejemplo, cuando ingresas a una página en nuestro sitio, automáticamente se establece una cookie, ya sea por nosotros, nuestros proveedores o socios comerciales, para reconocer tu navegador mientras navegas por internet, para presentarte información y publicidad basada en tus intereses aparentes. Para mayor información relacionada con nuestras prácticas de publicidad en línea y tus opciones al respecto, consulta la sección.
        </p>
        <p class="text-justify">
          <strong>Exhibición de publicidad/Tus opciones.</strong>
        </p>
        <p class="text-justify">
          Para investigar y medir la efectividad de funciones, ofrecimientos, publicidad y comunicaciones vía correo electrónico (para saber qué correos son abiertos por ti y qué acciones tomar).

            La sección de Ayuda de la mayoría de los navegadores te indicarán qué debes hacer para prevenir que el navegador acepte nuevas cookies, para que el navegador te avise cuando recibas una nueva cookie, o bien, para inhabilitar las cookies. Toma en cuenta que si te niegas a recibir cookies, es posible que no tengas acceso a la mayoría de las herramientas de viajes de nuestro sitio.

            Además de las cookies, utilizamos en el sitio Objetos locales compartidos (Local shared objects), también conocidos como “flash cookies”. Estos son utilizados para mejorar tu experiencia como usuario, por ejemplo, para almacenar tus preferencias y configuraciones de usuario, tales como tu configuración de volumen/silencio, y en relación con animaciones en nuestro sitio. Los Objetos locales compartidos son similares a las cookies, pero pueden almacenar datos más complejos que el simple texto. Por sí solos, no pueden hacer nada con los datos de tu computadora. Como otras cookies, solo pueden tener acceso a información específica que tú has proporcionado en este sitio, y a la que no pueden tener acceso otros sitios. Para conocer más acerca de las “flash cookies” o como desactivarlas, haz clic en el siguiente vínculo: http://www.adobe.com/mx/#

            Este sitio también puede usar web beacons (también conocidos como gif claros, etiqueta de pixel o web bugs), que son gráficos muy pequeños con un identificado único, con un funcionamiento similar al de las cookies, que son colocados en el código de una página web. Nosotros utilizamos web beacons para monitorear los patrones de tráfico de un usuario de una página a otra dentro de nuestro sitio, para enviar o comunicarse con cookies, para entender si entraste a nuestra página desde un anuncio publicitario en línea exhibido en el sitio de un tercero, así como para mejorar el funcionamiento del sitio. Asimismo, podemos permitir a nuestros proveedores utilizar web beacons para ayudarnos a conocer qué correos electrónicos han sido abiertos, monitorear el número de visitas al sitio y las acciones realizadas en nuestro sitio. Esto nos ayuda a medir la efectividad de nuestro contenido y ofrecimientos.

            Si tienes dudas respecto al uso que le damos a las cookies u otras tecnologías, comunícate con nosotros mediante correo electrónico a la dirección que aparece más adelante.

            Exhibición de publicidad/Tus opciones

            Datos recopilados por socios comerciales y redes de anunciantes para brindarte publicidad relevante.

            Los anuncios publicitarios que ves en este sitio son brindados por nosotros o por nuestros proveedores de servicios. También permitimos que terceros recopilen información de tus actividades en línea a través de cookies y otras tecnologías. Los terceros incluyen (1) nuestra filial corporativa y socia Maravillasdeleden.com ; (2) socios comerciales, que recopilan información cuando visualizas o interactúas con unos de sus anuncios publicitarios en nuestro sitio; y (3) redes de anunciantes que recopilan información relacionada con tus intereses cuando visualizas o interactúas con unos de sus anuncios publicitarios colocados en diversos sitios. La información recopilada por estos terceros es utilizada para hacer predicciones de tus características, intereses o preferencias, así como para exhibir o publicar publicidad hecha a la medida de tus intereses aparentes. Nosotros no permitimos que estos terceros recopilen información personal tuya (como tu dirección de correo electrónico) en nuestro sitio, así como tampoco compartimos tu información personal con dichos terceros.

            Toma en cuenta que nosotros no tenemos acceso ni controlamos las cookies y demás herramientas tecnológicas utilizadas por los terceros para recopilar información de tus intereses. Las prácticas de los terceros en materia de información no están amparadas por la presente Política de privacidad. Algunas de estas empresas son miembros de la Iniciativa de publicidad en red (“Network Advertising Initiative”), que ofrece un sitio único para seleccionar la opción de no recibir publicidad de sus miembros. Para mayor información, puedes consultar el siguiente vínculo: http://www.bluekai.com/registry-es/

            Datos recopilados por empresas que operan intercambios basados en cookies para brindarte publicidad relevante.

            Como otras empresas que operan en línea, maravillasdeleden.com participa en intercambios basados en cookies mediante los cuales se recopila información anónima de tu comportamiento de navegación a través de cookies y otras tecnologías y se segmenta en diferentes temas de interés (como los viajes). Posteriormente, estos temas de interés se comparten con terceros, incluyendo anunciantes y redes de anunciantes, para que puedan desarrollar anuncios a la medida de tus posibles intereses. Nosotros no compartimos con estos terceros información personal de usted (como tu dirección de correo electrónico) y no permitimos que dichos terceros recopilen información personal tuya en nuestro sitio.
        </p>
        <p class="text-justify">
          <strong>Cómo protegemos tu información</strong>
        </p>
        <p class="text-justify">
          Queremos que te sientas seguro de usar este sitio para hacer tus reservaciones de viajes, por lo que estamos comprometidos en salvaguardar la información que recopilamos. Si bien ningún sitio web puede garantizar la seguridad, hemos implementado procedimientos de seguridad de carácter administrativo, técnico y material, necesarios para salvaguardar la información personal que nos proporciones. Por ejemplo, solo los empleados autorizados pueden tener acceso a tu información personal y solo lo pueden hacer por razones específicas dentro sus funciones. Adicionalmente, utilizamos encriptación cuando transmitimos tu información personal entre tu sistema y el nuestro, y utilizamos firewalls y sistemas de detección de intrusos para prevenir que personas no autorizadas tengan acceso a tu información personal.
        </p>
        <p class="text-justify">
          <strong>Privacidad de los menores</strong>
        </p>
        <p class="text-justify">
          Este es un sitio destinado a una audiencia general y no ofrece servicios destinados a menores de edad. En el supuesto que tengamos conocimiento que un menor de 13 años nos envía información personal, utilizaremos esa información exclusivamente para informarle a ese menor que requerimos del consentimiento de sus padres para recibir su información personal.
        </p>
        <p class="text-justify">
          <strong>Vínculos externos</strong>
        </p>
        <p class="text-justify">
          En el supuesto que este sitio contenga un vínculo a otros sitios, estos no operan al amparo de la presente Política de privacidad. Recomendamos que revises las normas de privacidad de tales sitios para efectos de conocer cuáles son sus procedimientos para recopilar, usar y divulgar información personal.
        </p>
        <p class="text-justify">
          <strong>Visitar nuestro sitio desde fuera de lo México</strong>
        </p>
        <p class="text-justify">
          Considera que si visitas nuestro sitio desde fuera de México, es posible que tu información sea transferida, almacenada y procesada en México, lugar en el que se encuentran ubicados nuestros servidores y opera nuestra base de datos principal. Es posible que las leyes de México y otros países en materia de protección de datos y otras materias, no sean tan completas como las de tu país; sin embargo, de cualquier forma ten la certeza que nosotros adoptamos las medidas para salvaguardar tu privacidad. Por el hecho de usar nuestros servicios, estás consciente que tu información puede ser transferida a nuestras instalaciones y a la de aquellos terceros con los que compartimos información en los términos de las presentes Políticas.
        </p>
        <p class="text-justify">
          <strong>Cambios a la Política de privacidad</strong>
        </p>
        <p class="text-justify">
          En el futuro, podremos actualizar esta Política de privacidad. Te notificaremos respecto a modificaciones sustanciales de la Política de privacidad, ya sea mediante un correo electrónico a la dirección que nos hayas proporcionado o a través de un aviso en un lugar visible en nuestro sitio.
        </p>
        <p class="text-justify">
          <strong>Cómo comunicarse con nosotros</strong>
        </p>
        <p class="text-justify">
          Si tienes dudas respecto a la Política de privacidad (o tus reservaciones o compras de viajes), contáctanos en ventas@maravillasdeleden.com
          Esta Política de privacidad está en vigor desde el 04/11/2017.
        </p>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

  <!-- Angular Material Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
</body>

</html>
