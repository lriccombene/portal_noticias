<?php
    require_once 'header.php';
    require_once 'clases/user.php';
    use app\clases\user;
    
	$obj_user = new user;
?>

    <form id="form_user" method="post" action="">
	    <div >
			<h2>Carga de Usuarios</h2>
			<p>Aca se cargan los usuarios</p>
		</div>	
		<label >Username </label>
		<div>
			<input id="user" name="user" type="text" maxlength="255" value=""> 
		</div> 
	    <label >Email </label>
		<div>
			<input id="email" name="email" type="text" maxlength="255" value=""> 
		</div>
		
		<label>Role </label>
		<div>
			<select id="tipoUser" name="tipoUser"> 
					      
		      <?php 
					foreach ($obj_user->get_Lista_tipo_usu() as $value) {
					   echo "<option> $value </option>";
					}
			  ?>
				
			</select>
		</div> 
		  
		<label >Password </label>
		<div>
			<input id="password" name="password" type="password" maxlength="255" value=""> 
		</div>
        <input id="boton" type="submit" name="submit" value="GUARDAR">
    </form>

		
		

<?php
    			require_once 'footer.php';
?>


		    