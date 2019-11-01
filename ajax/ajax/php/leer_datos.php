<?php

$conexion = new mysqli('localhost', 'root', '', 'curso_php_ajax');

if($conexion->connect_errno){
	$conexion = false;
   
}