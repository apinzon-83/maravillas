function validateMail(email){
  valido = document.getElementById('emailOK');
	//Creamos un objeto
	object=document.getElementById(email);
	valueForm=object.value;

	// Patron para el correo
	var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	if(valueForm.search(patron)==0)
	{
		//Mail correcto
		object.style.color="#5cb85c";
    valido.innerText = "email válido";

		return;
	}
  	//Mail incorrecto
  	object.style.color="#f00";
    valido.innerText = "email incorrecto";
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
    valido.innerText = "telefono incorrecto";
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
