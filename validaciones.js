   
function valida_envia(){
   	//valido el nombre
   	if (document.fvalida.nombre.value.length==0){
      		alert("Tiene que escribir su nombre")
      		document.fvalida.nombre.focus()
      		return 0;
   	}

   	//valido el telefono
   	if (document.fvalida.telefono.value.length==0){
      		alert("Tiene que escribir su telefono")
      		document.fvalida.telefono.focus()
      		return 0;
   	}

   	//valido el correo
   	if (document.fvalida.correo.value.length==0){
      		alert("Tiene que escribir su correo")
      		document.fvalida.correo.focus()
      		return 0;
   	}

   	//valido contrasena
   	if (document.fvalida.password.value.length==0){
      		alert("Tiene que escribir su contraseña")
      		document.fvalida.password.focus()
      		return 0;
   	}

   	//valido repite contrasena
   	if (document.fvalida.password1.value.length==0){
      		alert("Tiene que escribir su contraseña")
      		document.fvalida.password1.focus()
      		return 0;
   	}

	
   	
	
   	//validor aceptar terminos y condiciones
   	var isChecked = document.getElementById('terminos').checked;
		if(!isChecked){
		  alert('Aceptar terminos y condiciones');
		  return 0;
	}

	//validar si las dos comprasenas coinciden
	pass1 = document.getElementById('password');
	pass2 = document.getElementById('password1');

	// Verificamos si las constraseñas no coinciden 
    if (pass1.value != pass2.value) {
 
        alert('Las contraseñas no coinciden');
        document.fvalida.password.focus()
        return false;
    } 
    

	
   	//el formulario se envia
   	alert("Muchas gracias por enviar el formulario");
   	document.fvalida.submit();
}
