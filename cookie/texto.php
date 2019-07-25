<?php 

// comprobar si esta setiada una cookie
if (isset($_COOKIE['font-size'])){
	$tamano = htmlspecialchars($_COOKIE['font-size']);
}else{
	$tamano = '15px';
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Texto</title>
</head>
<style>
	p{
		font-size: <?php echo $tamano; ?>;
	}
</style>
<body>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam a est, pariatur odio. Porro reiciendis fuga id tempore, adipisci totam. Molestiae omnis odit voluptatum fugiat. Possimus eligendi temporibus sed inventore!</p>
</body>
</html>
