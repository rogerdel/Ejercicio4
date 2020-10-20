<?php namespace App\Controllers;

class login extends BaseController
{
	public function index()
	{
		session_start();
		if(isset($_SESSION["usuarios"])){
			$usuarios = $_SESSION["usuarios"];
		}
		else{
			$usuarios = [
		[1, "contraseña1","#eb4034",base_url()."/img/user1.jpg","Clark Kent Allen"],
		[2, "contraseña2","#0062ff",base_url()."/img/user2.jpg","Bruce Wayne Banner"],
		[3, "contraseña3","#32a852",base_url()."/img/user3.jpg","Dayana Prince Gadot"],
		[4, "contraseña4","#ff5900",base_url()."/img/user4.jpg","Natasha Romanoff Jhoanson"]];
			$_SESSION["usuarios"] = $usuarios;			
		}

		
		if(isset($_POST["ci"])){
			$ci = $_POST["ci"];
			$password = $_POST["password"];
			$b = false;
			foreach ($usuarios as $row) {
			if($row[0] == $ci && $row[1]== $password){
				$b = true;
				$_SESSION["usuario"] = $row;
				}
			}
			if($b){
			return view('header').view('pagina');
			}
			else{
			$_SESSION["error"] ="CI o contraseña incorrecto";
			return redirect()->to(base_url()); 	
		}
	}

		if(isset($_POST["color"])){
			$users = $_SESSION["usuarios"];
			$usuario = $_SESSION["usuario"];
			$ci = $usuario[0];
			$color = $_POST["color"];
			$usuario[2] = $color;
			for($i = 0; $i < sizeof($users); $i++){
				if($ci == $users[$i][0]){
					$users[$i][2] = $color;
				}
			}
			$_SESSION["usuario"] = $usuario;
			$_SESSION["usuarios"] = $users;
			return view('header').view('pagina');
		}
		if(isset($_POST["logout"])){
			$users = $_SESSION["usuarios"];
			session_destroy();
			session_start();
			$_SESSION["usuarios"] = $users;
			return redirect()->to(base_url()); 

		}
	}
}
