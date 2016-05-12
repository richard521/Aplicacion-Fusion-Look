function validar(){
	email = document.getElementById('Email').value;
	clave = document.getElementById('Clave').value;
	expresion = /\w+@\w+\.+[a-z]/;

	if (email === "" && clave === ""){
		alert("Correo y contraseña obligatorios");
		document.getElementById('Email').focus();
		return false;
	}
	else if (email === ""){
		alert("El campo email es obligatorio");
		document.getElementById('Email').focus();
		return false;
	}
	else if (clave === ""){
		alert("La contraseña es obligatoria para iniciar sesion");
		document.getElementById('Clave').focus();
		return false;
	}
	else if (clave.length>30){
		alert("El campo contraseña no puede contener mas de 30 caracteres");
		document.getElementById('Clave').focus();
		return false;
	}
	else if (clave.length<8){
		alert("El campo contraseña debe contener almenos 8 caracteres");
		document.getElementById('Clave').focus();
		return false;
	}
	else if (!expresion.test(email)){
		alert("Por favor ingrese un correo valido");
		document.getElementById('Email').focus();
		return false;
	}
}