<?php 
	

		//seccion de Login

		if(isset($_POST['btn-register'])){

			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$password = $_POST['password'];
			$conf_pass = $_POST['conf_pass'];

			if($conf_pass == $password){

			

				
include('../templates/head.php'); ?>

<fieldset>
	<legend>Login</legend>
	<form method="POST" name="" action="http://localhost/Diagramacion/views/admin/index.php">
		<p>
			<input type="email" name="correo_log" placeholder="correo.." required>
		</p>
		<p>
			<input type="password" name="pass_log" placeholder="Contraseña.." required>
		</p>
		<p>
			<input type="hidden" name="nombre" value="<?php echo $nombre;?>">
			<input type="hidden" name="correo" value="<?php echo $correo;?>">
			<input type="hidden" name="password" value="<?php echo $password;?>">

			<input type="submit" name="btn-login" value="Ingresar..">
			<input type="reset" value="cancelar..">		
		</p>
	</form>

	
	
</fieldset>
<?php include('../templates/foot.php'); 

}
			
			else{
				//error 1 = "las contraseñas no coinciden!"
				header('location: http://localhost/Diagramacion/index.php?error=1');
			}
		}?>