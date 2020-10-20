<?php
	/*session_start();		
	if(isset($_SESSION["ci"])){
		header("Location: http://localhost/Examen/Ejercicio%201/pagina.php");
	}*/
?>
<body>
<div class ="divlog">
	<center>
		<p style="color:blue; font-size:50px" >Log in </p>		
	</center>
	<?php
		if(isset($_SESSION["error"])){
			echo "<p style='color:red'>".$_SESSION["error"]."</p>";
			session_destroy();
		}
	?>
	<form action =" <?php echo base_url().'/';?>index.php/login" method="POST"> 
	<div>
		<h1>CI: <input type="ci" name="ci" placeholder="1111"></h1>
	</div>	
	<div>
		<h1>Contraseña: <input type="password" name="password" placeholder=""></h1>
	</div>
	<center>
	<input type="submit" value ="Enviar">	
	</center>
	</form>
</div>

<div>
	<p style="font-size: 45px; color:green">Bienbenido</p>
</div>
<div class ="end">
	<p style="font-size: 45px;color:orange; ">Sistema Sigaf</p>
</div>
</body>	
</html>