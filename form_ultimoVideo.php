<?php
    require_once 'header.php';
    require_once 'clases/video.php';
	
?>
<?php
 //require_once "./clases/noticia.php" ; 
	$obj_video = new app\clases\video; // 
	//namespace es app/clases
    
?>


<form id="form_ultimaNoticia" method="get" action="">
	    <div>
			<h2>Carga de Ubicacion de Videos</h2>
			<p>Aca se cargan las ubicaciones de videos Ultimas videos</p>
		</div>	
        <label >Descripcion </label>
		<div>
			<input id="descripcion" name="descripcion" type="text" maxlength="255" value="<?php echo $_GET["titulo"];?>"> 
		</div> 
    <input id="btn_buscar" type="submit" name="submit" value="Buscar">
</form>
<div>
    <table border="1">
        <tr>
            <td>Fecha</td>
            <td>Descripcion</td>
            <td>Link</td>
            <td>id_video</td>
            <td>POSICION</td>
        </tr>
          <?php
                echo"<tr>";
          ?>
         <?php
                foreach ($obj_video->get_video() as $value) {
                    
                    echo"<td>$value </td>";
                }
         ?>
         <?php
                echo"</tr>";
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
