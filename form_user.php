<?php
    require_once 'header.php';
?>

    <form id="form_user" method="get" action="">
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
		    <select id="categoriaoption" name="categorioselect"> 
		        <option value="" selected="selected"></option>
                <option value="1">Administrador</option>
                <option value="2">Periodista</option>
                <option value="3">Clasico</option>
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
