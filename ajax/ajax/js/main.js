

var btn  = document.getElementById('btn_cargar_usuarios');
var loader = document.getElementById('loader');

btn.addEventListener('click',function(){
	//Instancia del objeto para trabajar peticiones
	var peticion = new XMLHttpRequest();
	
	peticion.open('GET', 'http://www.json-generator.com/api/json/get/bVrrKcldwy?indent=2');

	peticion.send();
});