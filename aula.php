<html>
    <body>
        
        <h3>form 1</h3>
        <form method="get">
            <h2>nombre</h2>
            <input type="text" name="nombre"  id="nombre" value="<?php 
                if(isset($_GET["nombre"])){
                      echo $_GET["nombre"]; 
                    
                }
            
            ?>" />
            <br>
             <h2>apellido</h2>
            <input type="text" name="apellido"  id="apellido" value="<?php echo $_GET["apellido"]; ?>" />
            <input type="submit" value="Submit"/>
        </form>
    <pre>
        <?php
            var_dump($_GET["apellido"]);
        
        ?>
    </pre>
    </body>
    
    
    <?php
        echo "hola mundo";
    ?>
</html>