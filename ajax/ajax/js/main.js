//declarar variables a utilizar
var btn_cargar = document.getElementById('btn_cargar_usuarios'),
	error_box = document.getElementById('error_box'),
	tabla = document.getElementById('tabla'),
	Loader = document.getElementById('loader');


var usuario_nombre,
	usuario_edad,
	usuario_pais,
	usuario_correo;


function cargarUsuarios(){
	tabla.innerHTML = '<tr><th>ID</td><th>Nombre</td><th>Edad</td><th>Pais</td><th>Correo</td></tr>';

	var peticion = new XMLHttpRequest();
	peticion.open('GET', 'php/leer_datos.php');

	loader.classList.add('active');

	peticion.onload =  function(){
		var datos = JSON.parse(peticion.responseText);
		
		 if(datos.error){
		 	error_box.classList.add('active');
		 }
	}

	peticion.onreadystatechange = function(){
		if(peticion.readyState == 4 && peticion.status == 200){
			loader.classList.remove('active');

		}
	}

	peticion.send();

}


btn_cargar.addEventListener('click', function(){
	cargarUsuarios();
});