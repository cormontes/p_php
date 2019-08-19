<?php 

//echo phpinfo("documento.txt",PATHINFO_BASENAME);
//echo phpinfo("usuario\carpeta\documento.txt",PATHINFO_DIRNAME);
//echo phpinfo("documento.txt",PATHINFO_EXTENSION);
//echo phpinfo("documento.txt",PATHINFO_FILENAME);


/* busca todos los archivos .php que estan en la carpeta*/
//$resultado=glob('*.php');
//print_r($resultado);

/* busca todos los archivos que empiezen con a y sean con extencion .php*/
//$resultado=glob('a*.php');
//print_r($resultado);

/* busca todos los archivos con extenciones que estan dentro de los corchetes*/
//$resultado=glob('*.{php,txt,html}',GLOB_BRACE);
//print_r($resultado);

/* busca todos los archivos con extenciones que estan dentro de los corchetes dentro de la carpeta paginacion*/
//$resultado=glob('paginacion/*.{php,txt,html}',GLOB_BRACE);
//print_r($resultado);

//Esta funcion permite sacar el nombre de archivo con su extencion
//echo basename('carpeta/carpeta2/archivo.php');

//Esta funcion permite sacar el nombre de archivo y quita la extencion
//echo basename('carpeta/carpeta2/archivo.php','.php');

//Muestra las carpetas madres
echo dirname('carpeta/carpeta2/archivo.php');

?>