<?php
    require_once 'header.php';
    require_once 'clases/noticia.php';
	
	$obj_noticias = new app\clases\noticia; // 
?>


<form id="form_ultimaNoticia" method="post" action="">
	    <div>
			<h2>Carga de Ubicacion de Noticias</h2>
			<p>Aca se cargan las ubicaciones de noticias Ultimas noticias</p>
		</div>	
        <label >Titulo </label>
		<div>
			<input id="titulo" name="titulo" type="text" maxlength="255" value="<?= isset($_POST["titulo"])?>"> 
		</div> 
    <input id="btn_buscar" type="submit" name="btn_buscar" value="Buscar">
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
                    if(!(array_key_exists('btn_buscar', $_POST)) ||
                        empty($_POST["titulo"])  ||
                        isset($_POST["titulo"]) && $_POST["titulo"]==$value["descripcion"]){
                    echo "<tr><td>{$value["fecha"]}</td>
                             <td>{$value["descripcion"]}</td>
                             <td>{$value["categoria"]}</td>
                             <td>{$value["autor"]}</td>
                             <td>{$value["idnoticia"]}</td>
                        </tr>";
                }
                    
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
