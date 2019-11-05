
var btn = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click', function(){
	//Peticion Ajax 
	var peticion =  new XMLHttpRequest();
	//Obtener datos de una API
	//peticion.open('GET', 'http://www.json-generator.com/api/json/get/bVrrKcldwy?indent=2');
	
	//Obtener datos de un archivo PHP que contiene datos JSON
	//peticion.open('GET', 'php/usuarios.php');
	
	peticion.open('GET', 'php/leer_datos.php');

	loader.classList.add('active');

	peticion.onload = function(){
		//Convertir la perticion a objeto JSON para poder trabajarlo
		//console.log(JSON.parse(peticion.responseText)[0].nombre);
		
		var datos = JSON.parse(peticion.responseText);

		// Utilizadon el ciclo forAEach recorre el objeto y lo muestra e la table
		/*
		datos.forEach(personas => {
			//Se crea una nueva linea en la tabla
			var elemento = document.createElement("tr");
			elemento.innerHTML += ("<td>" + personas.id + "</td>");
			elemento.innerHTML += ("<td>" + personas.nombre + "</td>");
			elemento.innerHTML += ("<td>" + personas.edad + "</td>");
			elemento.innerHTML += ("<td>" + personas.pais + "</td>");
			elemento.innerHTML += ("<td>" + personas.correo + "</td>");
			//Se agregan los elementos ala tabla
			document.getElementById('tabla').appendChild(elemento);
		});
		*/
	
		// Utilizando el ciclo FOR
		for(var i = 0; i < datos.length; i++){
			var elemento = document.createElement("tr");
			elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
			elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
			//Se agregan los elementos ala tabla
			document.getElementById('tabla').appendChild(elemento);
		}

	}

	peticion.onreadystatechange = function(){
		if(peticion.readyState == 4 && peticion.status == 200){
			loader.classList.remove('active');
		}
	}	

	peticion.send();
});
