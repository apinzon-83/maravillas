
function validarNombre(nombre){
  valido = document.getElementById('nombreOK');
  //Creamos un objeto
  object=document.getElementById(nombre);
  valueForm=object.value;

  // Patron para el correo
  var patron=/^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{3,15}$/;
  if(valueForm.search(patron)==0)
  {
    //Mail correcto
    object.style.color="#5cb85c";
    valido.innerText = "Nombre válido";

    return;
  }
    //Mail incorrecto
    object.style.color="#f00";
    valido.innerText = "Ingrese un nombre valido";
    return;

}

function validarapellidoP(apellidoP) {
  valido = document.getElementById('apellidoPOK');
  //Creamos un objeto
  object=document.getElementById(apellidoP);
  valueForm=object.value;

  // Patron para el correo
  var patron=/^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/;
  if(valueForm.search(patron)==0)
  {
    //Mail correcto
    object.style.color="#5cb85c";
    valido.innerText = "Apellido válido";

    return;
  }
    //Mail incorrecto
    object.style.color="#f00";
    valido.innerText = "Ingrese un Apellido válido";
    return;
}

function validarapellidoM(apellidoM) {
  valido = document.getElementById('apellidoMOK');
  //Creamos un objeto
  object=document.getElementById(apellidoM);
  valueForm=object.value;

  // Patron para el correo
  var patron=/^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{4,15}$/;
  if(valueForm.search(patron)==0)
  {
    //Mail correcto
    object.style.color="#5cb85c";
    valido.innerText = "Apellido válido";

    return;
  }
    //Mail incorrecto
    object.style.color="#f00";
    valido.innerText = "Ingrese un Apellido válido";
    return;
}

function validateMail(email){
  valido = document.getElementById('emailOK');
	//Creamos un objeto
	object=document.getElementById(email);
	valueForm=object.value;

	// Patron para el correo
	var patron=/^[a-zA-Z]+([\.]?[a-zA-Z0-9_-]+)*@[a-z0-9]+([\.-]+[a-z0-9]+)*\.[a-z]{2,4}$/;
	if(valueForm.search(patron)==0)
	{
		//Mail correcto
		object.style.color="#5cb85c";
    valido.innerText = "email válido";

		return;
	}
  	//Mail incorrecto
  	object.style.color="#f00";
    valido.innerText = "Ingrese un email válido";
    return;
}


function igualEmail(){
   	email = document.f1.email.value
   	email2 = document.f1.email2.value

   	if (email != email2)
      swal({
        text: "El correo no es el mismo, favor de verificarlo",
        icon: "error",
        button: "Aceptar",
      });

}



function validarusuario(usuario) {
  valido = document.getElementById('usuarioOK');
  //Creamos un objeto
  object=document.getElementById(usuario);
  valueForm=object.value;

  // Patron para el correo
  var patron=/^[a-zA-Z0-9_-]{4,15}$/;
  if(valueForm.search(patron)==0)
  {
    //Mail correcto
    object.style.color="#5cb85c";
    valido.innerText = "Usuario válido";

    return;
  }
    //Mail incorrecto
    object.style.color="#f00";
    valido.innerText = "Ingrese un Usuario válido";
    return;
}


function validarPassword(password) {
  valido = document.getElementById('passwordOK');
  //Creamos un objeto
  object=document.getElementById(password);
  valueForm=object.value;


  var patron=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
  if(valueForm.search(patron)==0)
  {
    //Mail correcto
    object.style.color="#5cb85c";
    valido.innerText = "Password válido";

    return;
  }
    //Mail incorrecto
    object.style.color="#f00";
    valido.innerText = "Ingrese un Password válido";
    return;
}

function igualPass(){
   	password = document.f1.password.value
   	password2 = document.f1.password2.value

   	if (password != password2)
      swal({
        text: "Las contraseñas no coinciden",
        icon: "error",
        button: "Aceptar",
      });

}


function validarTelefono(telefono){
  valido = document.getElementById('telefonoOK');
  var expresionRegular1=/^([0-9]+){9}$/;//<--- con esto vamos a validar el numero
  var expresionRegular2=/\s/;//<--- con esto vamos a validar que no tenga espacios en blanco

  object=document.getElementById(telefono);
  valueForm=object.value;

  if(valueForm.search(expresionRegular1, expresionRegular2)==0){
    //Mail correcto
    object.style.color="#5cb85c";
    valido.innerText = "telefono válido";

    return;
  }
    //Mail incorrecto
    object.style.color="#f00";
    valido.innerText = "Ingrese un telefono válido";
    return;

}

function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function validar(e) {
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8) return true;
    patron =/[A-Za-z\s]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
