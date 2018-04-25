<?php
    require_once 'header.php';
    require_once 'clases/noticia.php';
	
?>
<?php
 //require_once "./clases/noticia.php" ; 
	$obj_noticias = new app\clases\noticia; // 
	//namespace es app/clases
    
?>


<form id="form_ultimaNoticia" method="get" action="">
	    <div>
			<h2>Carga de Ubicacion de Noticias</h2>
			<p>Aca se cargan las ubicaciones de noticias Ultimas noticias</p>
		</div>	
        <label >Titulo </label>
		<div>
			<input id="titulo" name="titulo" type="text" maxlength="255" value="<?php echo $_GET["titulo"];?>"> 
		</div> 
    <input id="btn_buscar" type="submit" name="submit" value="Buscar">
</form>
<div>
    <table border="1">
        <tr>
            <td>Fecha</td>
            <td>Titulo</td>
            <td>Categoria</td>
            <td>Autor</td>
            <td>IdNoticia</td>
            <td>POSICION</td>
        </tr>
         <?php
                foreach ($obj_noticias::get_noticias() as $value) {
                    echo "<tr><td>{$value["fecha"]}</td>
                             <td>{$value["descripcion"]}</td>
                             <td>{$value["categoria"]}</td>
                             <td>{$value["autor"]}</td>
                             <td>{$value["idnoticia"]}</td>
                        </tr>";
                }
         ?>
    </table>
</div>
 <form id="form_ultima_noticias" method="get" action="">
    <div>
         <label >Numero de posicion </label>
    		<div>
    			<input id="posicion" name="posicion" type="text" maxlength="255" value=""> 
    		</div> 
        <input id="boton_GUARDAR" type="submit" name="submit" value="GUARDAR">
    </div>
</form>


<?php
    require_once 'footer.php';
?>
