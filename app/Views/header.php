<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."/";?>estilos.css">
</head>

<?php 
	$img = base_url()."/img/perfil.png";
	if(isset($_SESSION["usuario"])){
		$usuario = $_SESSION["usuario"];
		$img = $usuario[3];
	}
	
	echo "<img src ='$img'>";		
?>



