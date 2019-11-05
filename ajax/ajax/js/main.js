//declarar variables a utilizar
var btn_cargar = document.getElementById('btn_cargar_usuarios'),
	error_box = document.getElementById('error_box'),
	tabla = document.getElementById('tabla'),
	Loader = document.getElementById('loader');

var usuario_nombre,
	usuario_edad,
	usuario_pais,
	usuario_correo;




btn_cargar.addEventListener('click', function(){
	cargarUsuario();
});