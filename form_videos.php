<?php
    require_once 'header.php';
?>

    <form id="form_video" method="get" action="">
	    <div >
			<h2>Carga de Videoss</h2>
			<p>Aca se cargan los videos</p>
		</div>	
		<label>Descripcion </label>
		<div>
			<textarea id="descripcion" name="descripcion" ></textarea> 
		</div> 
		<label >LINK </label>
		<div>
			<input id="link" name="link" type="text" maxlength="255" value=""> 
		</div>
		<label >Fecha </label>
		<div>
			<input id="fecha" name="fecha" type="date" maxlength="255" value=""> 
		</div>
        <input id="boton" type="submit" name="submit" value="GUARDAR">
    </form>

		

<?php
    			require_once 'footer.php';
?>
