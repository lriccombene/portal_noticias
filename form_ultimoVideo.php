<?php
    require_once 'header.php';
    require_once 'clases/video.php';
 
	$obj_video = new app\clases\video; // 

    
?>


<form id="form_ultimaNoticia" method="post" action="">
	    <div>
			<h2>Carga de Ubicacion de Videos</h2>
			<p>Aca se cargan las ubicaciones de videos Ultimas videos</p>
		</div>	
        <label >Descripcion </label>
		<div>
			<input id="descripcion" name="descripcion" type="text" maxlength="255" value="<?php echo $_POST["titulo"];?>"> 
		</div> 
    <input id="btn_buscar" type="submit" name="btn_buscar" value="Buscar">
</form>
<div>
    <table border="1">
        <tr>
            <td>Fecha</td>
            <td>Descripcion</td>
            <td>Link</td>
            <td>id_video</td>
            <td>Posicion</td>
        </tr>
 <?php
                foreach ($obj_video::get_videos() as $value) {
                    if(!(array_key_exists('btn_buscar', $_POST)) ||
                        empty($_POST["descripcion"])  ||
                        isset($_POST["descripcion"]) && $_POST["descripcion"]==$value["descripcion"]){
                    echo "<tr><td>{$value["fecha"]}</td>
                             <td>{$value["descripcion"]}</td>
                             <td>{$value["link"]}</td>
                             <td>{$value["id_video"]}</td>
                             
                        </tr>";
                }
                    
                }
         ?>
    </table>
</div>
 <form id="form_ultima_noticias" method="$_POST" action="">
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
