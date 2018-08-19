<?php include('views/front/templates/head.php'); ?>
<div class="container">
<div class="row">
	<div class="colleft">
		
<div class="slider">
		<ul>
			<li>
			  <img src="http://localhost/Diagramacion/public/images/AcuCum Blanca.png" alt="">
			</li>
			<li>
			  <img src="http://localhost/Diagramacion/public/images/persona2.jpg" alt="">
			</li>
			<li>
			  <img src="http://localhost/Diagramacion/public/images/paramo2.jpg" alt="">
			</li>
			<li>
			  <img src="http://localhost/Diagramacion/public/images/Rocas2.jpg" alt="">
			</li>
			<li>
			  <img src="http://localhost/Diagramacion/public/images/cabaña.jpg" alt="">
			</li>
		</ul>
</div>


		
	</div>

	<div class="colright">
		
      <nav>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<select name="menu">
			
			
			<option  value="register">Registrarse</option>
			<option  value="login">Login</option>
			
		</select>
		<input class="botonc" type="submit" name="btn-menu" value="seleccionar">
	</form>
</nav>

	
		<?php

		//validar errores

		if(isset($_GET['error'])){

			include ('views/errors/errors.php');
		}

		//seccion de menu de las vistas 

		if(isset($_POST['btn-menu'])){

			$menu = $_POST['menu'];

			if($menu == 'register'){

				include ('views/admin/forms/register.php');
			}

			elseif ($menu == 'inicio'){

				header('location: http://localhost/Diagramacion/index.php');
			} 

			elseif ($menu == 'login'){

				include ('views/admin/forms/login.php');
			}

			elseif ($menu == 'acerca'){

				include ('views/acerca.php');
			}
		}


		//seccion de Login

		if(isset($_POST['btn-register'])){

			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$password = $_POST['password'];
			$conf_pass = $_POST['conf_pass'];

			if($conf_pass == $password){

				include ('views/admin/forms/login.php');
			}
			
			else{
				//error 1 = "las contraseñas no coinciden!"
				header('location: http://localhost/Diagramacion/index.php?error=1');
			}
		}

		//area de usuarios registrados 

		if(isset($_POST['btn-login'])){

			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$password = $_POST['password'];
			$correo_log = $_POST['correo_log'];
			$pass_log = $_POST['pass_log'];

			if($correo_log == $correo && $pass_log == $password){
		       header('location: http://localhost/Diagramacion/views/admin/index.php');
			}
			else{
				//error 2 = 'los datos de acceso no coinciden!'
				header('location: http://localhost/website/index.php?error=2');
			}
		                              }
				
				?>
		</div>
		

	  <h1>AcunCum</h1>

<?php include('views/front/templates/foot.php'); ?>





