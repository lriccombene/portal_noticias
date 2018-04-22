<?php
    require_once 'header.php';
?>
    <form id="form_login" method="get" action="">
	    <div >
			<h2>Login de usuarios</h2>
			<p>Aca se logean los usuarios</p>
		</div>	
		<label >Username </label>
		<div>
			<input id="user" name="user" type="text" maxlength="255" value=""> 
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
