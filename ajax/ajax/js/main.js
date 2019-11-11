//declarar variables a utilizar de los objetos DOM
var btn_cargar = document.getElementById('btn_cargar_usuarios'),
	error_box = document.getElementById('error_box'),
	tabla = document.getElementById('tabla'),
	formulario = document.getElementById('formulario'),
	Loader = document.getElementById('loader');


var usuario_nombre,
	usuario_edad,
	usuario_pais,
	usuario_correo;

// Para mostrar informacion de formulario
function cargarUsuarios(){
	// Borrar contenido cuando se da click a boton
	tabla.innerHTML = '<tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Pais</th><th>Correo</th></tr>';

	// peticion AJAX
	var peticion = new XMLHttpRequest();

	// Obtenes los datos del archivo PHP
	peticion.open('GET', 'php/leer_datos.php');

	// Activa una animacion de css
	loader.classList.add('active');


	peticion.onload =  function(){
		var datos = JSON.parse(peticion.responseText);


		 if(datos.error){
		 	error_box.classList.add('active');
		 }else{
		 	for(var i = 0;i < datos.length;i++){
		 		var elemento = document.createElement('tr');
		 		elemento.innerHTML += ('<td>' + datos[i].id + '</td>');
		 		elemento.innerHTML += ('<td>' + datos[i].nombre + '</td>');
		 		elemento.innerHTML += ('<td>' + datos[i].edad + '</td>');
		 		elemento.innerHTML += ('<td>' + datos[i].pais + '</td>');
		 		elemento.innerHTML += ('<td>' + datos[i].correo + '</td>');
		 		tabla.appendChild(elemento);
		 	}
		 }
	}
	// Ejecuta la funcion si hay cambios en el estado de la peticion
	peticion.onreadystatechange = function(){
		if(peticion.readyState == 4 && peticion.status == 200){
			//quita animacion css
			loader.classList.remove('active');

		}
	}
	// Envia la peticion
	peticion.send();
}
// para insertar datos en formulario
// la letra 'e' es de evento
function agregarUsuarios(e){
	e.preventDefault();

	var peticion = new XMLHttpRequest();
	peticion.open('POST', 'php/insertar.php');

	// Validar variables y quitar los espacios//
	usuario_nombre = formulario.nombre.value.trim();
	// Convertir el valor a entero
	usuario_edad = parseInt(formulario.edad.value.trim());
	usuario_pais = formulario.pais.value.trim();
	usuario_correo = formulario.correo.value.trim();

	// si formulario-valido es true envia los datos via ajax a archivo php
	if(formulario_valido()){

		error_box.classList.remove('active');

		var parametros = 'nombre=' + usuario_nombre + '&edad=' + usuario_edad + '&pais=' + usuario_pais + '&correo=' + usuario_correo;
		peticion.setRequestHeader("Content-Type","application/x-www-form-urlencoded")

		loader.classList.add('active');

		peticion.onload = function(){
			//carga el contenido de la base de datos
			cargarUsuarios();
			// Borra contenido de los text
			formulario.nombre.value = '';
			formulario.edad.value = '';
			formulario.pais.value = '';
			formulario.correo.value = '';
		};
		peticion.send(parametros);

		peticion.onreadystatechange = function(){
			if(peticion.readyState == 4 && peticion.status == 200){
				loader.classList.remove('active');
			}
		}

	}else{
		error_box.classList.add('active');
		error_box.innerHTML = 'Por favor complete el formulario correctamente';
	}
}

// Click boton btn_cargar
btn_cargar.addEventListener('click', function(){
	cargarUsuarios();
});
// Click submit de formulario el evento
formulario,addEventListener('submit', function(e){
	agregarUsuarios(e);
});

///////////////////////////////////////////////
function formulario_valido(){

	if (usuario_nombre == ''){
		return false;
	// si usuario_edad no es numero es false
	}else if(isNaN(usuario_edad)){
		return false;
	}else if(usuario_pais == ''){
		return false;
	}else if(usuario_correo == ''){
		return false;
	}

	return true;
}