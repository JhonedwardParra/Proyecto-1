
<?php
 

	//area de usuarios registrados 

		if(isset($_POST['btn-login'])){

			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$password = $_POST['password'];
			$correo_log = $_POST['correo_log'];
			$pass_log = $_POST['pass_log'];

			if($correo_log == $correo && $pass_log == $password){
		       


 include('templates/head.php'); ?>	
<div class="row">	
    <aside>
    	<div class="usuario">
    		<img class="usu" src=" http://localhost/Diagramacion/public/images/usuario login.png">
    		<h3>Edward Parra</h3>
    	</div>
    	<h4>Indicadores</h4>
    	<nav>
    		<a href="#">HOME</a><br>
    		<a href="#">HOME</a><br>
    		<a href="#">HOME</a><br>
    		<a href="#">HOME</a><br>
    		<a href="#">HOME</a><br>
    		<a href="#">HOME</a><br>
    	</nav>
    	<div class="usuariofoot"></div>
	</aside>
<section class="col2">
	<h2>Puntuacion</h2>

	    <article class="estad1">
	    	<img class="estad" src=" http://localhost/Diagramacion/public/images/menu.png">
	    </article>
	    <article class="estad2">
	    	<img class="estad" src=" http://localhost/Diagramacion/public/images/signo.png">
	    </article>
	    <article class="estad3">
	    	<img class="estad" src=" http://localhost/Diagramacion/public/images/dialogo.png">
	    	
	    </article>
	    <article class="estad4">
	    	<img class="estad" src=" http://localhost/Diagramacion/public/images/usuario.png">
	    </article>
	    <div class="grafica">
	    <h2>CPU USAGE (%)</h2> 	
	    <img class="imagen" src=" http://localhost/Diagramacion/public/images/grafica.jpg">
	    </div>
	    <article class="caja1">
	    	<img class="imacaja1" src=" http://localhost/Diagramacion/public/images/esdtad.png">
	    </article>
	    <article class="caja2">

    		<a href="#">HOME</a><br>
    		<a href="#">HOME</a><br>
    		<a href="#">HOME</a><br>
    		<a href="#">HOME</a><br>
    		
        	
	    </article>
	    <article class="caja3"></article>
</section>	 
	    
</div>
   
</div>
<?php include('templates/foot.php'); 

}
			else{
				//error 2 = 'los datos de acceso no coinciden!'
				header('location: http://localhost/Diagramacion/index.php?error=2');}
			}
			
?>
