function valida(){
	tipo = document.getElementById('Tipo_usuario').value;
	nombre = document.getElementById('Nombre').value;
	apellido = document.getElementById('Apellido').value;
	clave = document.getElementById('Clave').value;
	email = document.getElementById('Email').value;
	telefono = document.getElementById('Telefono').value;
	expresion = /\w+@\w+\.+[a-z]/;

	if (tipo === "" && nombre ==="" && apellido ===""  && clave ==="" && email ===""  && telefono ==="") {
		swal("Todos los campos son obligatorios")
		return false;
	}
	else if (tipo === ""){
		swal("El campo tipo de usuario es obligatorio");
		document.getElementById('Tipo_usuario').focus();
		return false;
	}
	else if (tipo.length>50){
		swal("El campo tipo de usuario no puede contener mas de 30 caracteres");
		document.getElementById('Nombre').focus();
		return false;
	}
	else if (nombre === ""){
		swal({
			title: "",
			text:"El campo nombre es obligatorio",
			type: "info",
		});
		document.getElementById('Nombre').focus();
		return false;
	}
	else if (nombre.length>30){
		swal("El campo nombre no puede contener mas de 30 caracteres");
		document.getElementById('Nombre').focus();
		return false;
	}
	else if (nombre.length<3){
		swal("El campo nombre no puede contener menos de 3 caracteres");
		document.getElementById('Nombre').focus();
		return false;
	}
	else if (apellido === ""){
		swal("El campo apellido es obligatorio");
		document.getElementById('Apellido').focus();
		return false;
	}
	else if (apellido.length>20){
		swal("El campo apellido no puede contener mas de 20 caracteres");
		document.getElementById('Apellido').focus();
		return false;
	}
	else if (apellido.length<3){
		swal("El campo apellido no puede contener menos de 3 caracteres");
		document.getElementById('Apellido').focus();
		return false;
	}
	else if (clave === ""){
		swal("El campo contraseña es obligatorio");
		document.getElementById('Clave').focus();
		return false;
	}
	else if (clave.length>30){
		swal("El campo contraseña no puede contener mas de 30 caracteres");
		document.getElementById('Clave').focus();
		return false;
	}
	else if (clave.length<8){
		swal("El campo contraseña debe contener almenos 8 caracteres");
		document.getElementById('Clave').focus();
		return false;
	}
	else if (email === ""){
		swal("El campo email es obligatorio");
		document.getElementById('Email').focus();
		return false;
	}
	else if (!expresion.test(email)){
		swal("Por favor ingrese un correo valido");
		document.getElementById('Email').focus();
		return false;
	}
	else if (telefono === ""){
		swal("El campo telefono es obligatorio");
		document.getElementById('Telefono').focus();
		return false;
	}
	else if (telefono.length>20){
		swal("El campo telefono no puede contener mas de 20 caracteres");
		document.getElementById('Telefono').focus();
		return false;
	}
	else if (telefono.length<7){
		swal("El campo telefono no puede contener menos de 7 caracteres");
		document.getElementById('Telefono').focus();
		return false;
	}
	else if(isNaN(telefono)){
		swal('El telefono ingresado no es un numero')
		return false;
	}
}
