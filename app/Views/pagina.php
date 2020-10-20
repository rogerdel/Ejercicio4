<?php
	//session_start();
	if(isset($_SESSION["usuario"])){
		$usuario = $_SESSION["usuario"];
	}
	$nombre = $usuario[4];	
	$color = $usuario[2];
	$foto = $usuario[3];
?>

<body <?php echo "style='background-color:$color'";?> >
<div class="pagina">

<p style="font-weight: bold; font-size: 50px;"> Hola <?php echo $nombre?></p>		


<form method="POST">
<div>
<label style="font-weight: bold; font-size: 25px;">color:</label>
<select name="color" id="colores">
  <option value="#eb4034">Rojo</option> 
  <option value="#0062ff">Azul</option>   
  <option value="#32a852">Verde</option> 
  <option value="#ff5900">Naranja</option>	
</select>	
</div>
 <div>
	 <input type="submit" value = "Cambiar"> 	
 </div>
</div>
</form>
</div>
	
<div class = "logout">
	<form acttion = "" method="POST">
		<input type="submit" name="logout" value="Log out">
	</form>
</div>
</body>