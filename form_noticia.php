<?php
    require_once 'header.php';
    
    require_once 'noticia.php'
    $obj_noticia = new  app\clase\Noticia();
    
?>

    <form id="form_noticias" method="get" action="">
	    <div>
			<h2>Carga de Noticias</h2>
			<p>Aca se cargan las noticias que se utilizaran en para ultimas noticias o la seccion de noticias</p>
		</div>						
		    
		<label >Fecha </label>
		<div>
			<input id="fecha" name="fecha" type="date" maxlength="255" value=""> 
		</div>
    		
		<label>Categoria </label>
			<div>
		      <select id="unidadNegocio" name="unidadNegocio"> 
		       <? php foreach($obj_noticia -> get_Lista_categorias() as $categoria):
		                     {
		                        echo "<option> $categoria</option>";
		                      }
		       ?>

            </select>
		    </div> 

		<label >Imagen </label>
		<div>
			<input id="imagen" name="imagen"  type="file"> 
		</div>  

		<label >Descripcion </label>
		<div>
			<textarea id="descripcion" name="descripcion" ></textarea> 
		</div> 
		<label >Titulo </label>
		<div>
			<input id="titulo" name="titulo" type="text" maxlength="255" value=""> 
		</div> 
		<label>Subtitulo </label>
		<div>
			<input id="subtitulo" name="subtitulo" type="text" maxlength="255" value=""> 
		</div> 
		<label>Copete </label>
		<div>
			<textarea id="copete" name="copete" ></textarea> 
		</div> 
		<label >Autor </label>
		<div>
			<input id="autor" name="autor" type="text" maxlength="255" value=""> 
		</div> 
		    <input id="boton" type="submit" name="submit" value="GUARDAR">
		</form>


<?php
    			require_once 'footer.php';
?>
