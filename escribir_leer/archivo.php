<?php 
/*
$resultado = file_exists('documento.txt');
if($resultado){
	echo "El archivo existe";
}else{
	echo "El archivo no existe";
}
*/
/*** contenido de archivo txt ***/
echo file_get_contents('documento.txt');


 
 /*** agregar  linea a archivo de texto***/
//file_put_contents('documento.txt', "prueba \n",  FILE_APPEND);
/*
file_put_contents("documento.txt","");
for($i=0;$i<10;$i++){
	file_put_contents("documento.txt",$i ."\n",FILE_APPEND);
}

*/

$archivo = file('documento.txt');
print_r($archivo);

?>