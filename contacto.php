<?php
    require_once 'header.php';
    require_once 'contacto.php'
    $obj_contacto = new  app\clase\Contacto();
?>


    <form id="form_contacto" method="get" action="">
	    <div >
			<h2>Carga de Contacto</h2>
			<p>Aca se cargan los Contactos</p>
		</div>	
		<label >Nombre </label>
		<div>
			<input id="nombre" name="nombre" type="text" maxlength="255" value=""> 
		</div> 
	    <label >Email </label>
		<div>
			<input id="email" name="email" type="text" maxlength="255" value=""> 
		</div>
		
		<label>Aquin de nosotros </label>
		<div>
		    <select id="unidadNegocio" name="unidadNegocio"> 
		       <? php foreach($obj_contacto -> get_Lista_unidad_negocio() as $unid_negocio):
		                     {
		                        echo "<option> $unid_negocio</option>";
		                      }
		       ?>

            </select>
		</div> 
		<label >Mensaje </label>
		<div>
			<input id="mensaje" name="mensaje" type="text" maxlength="255" value=""> 
		</div>
        <input id="boton" type="submit" name="submit" value="Enviar">
    </form>

		





<?php
    require_once 'header.php';
?>