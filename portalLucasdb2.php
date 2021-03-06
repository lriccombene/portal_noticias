<?php
echo "<pre>";

// Abrir la base o crearla si no existe
$db = new SQLite3('portalLucasdb2.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);




// Crear la tabla si no existe
/*fecha
  categoria 
  imagen ; //directoria o ruta de archivo
  descripcion ;
  titulo ;
  subtitulo ;
  copete ;
  autor ;
  id_noticia ;

*/

$db->query('CREATE TABLE IF NOT EXISTS `ultimaNoticiaFrente` (
    `id_ult_noticia` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    `posicion` VARCHAR,
    `id_noticia` INTEGER
)');


// Insertando datos de ejemplo. SQLITE soporta transacciones (y en sqlite es mejor usarlas por
// rendimiento
/*fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 1,
                titulo=> "Informatica de software libre"
*/
$db->exec('BEGIN');
$db->query('INSERT INTO `ultimaNoticiaFrente` ( `posicion`, `id_noticia`) VALUES ("principal","1" )');
// de las operaciones realizadas (sobre todo insert,delete,update) podemos obtener
// el ultimo id generado en (en los inserts) y la cantidad de filas afectadas para las tres operaciones
// no se recomienda usar este enfoque para los SELECT
echo 'último rowid/pk:'.$db->lastInsertRowID()."\n\r";
echo 'número de filas:'.$db->changes()."\n\r";

$db->query('INSERT INTO `ultimaNoticiaFrente` ( `posicion`, `id_noticia`) VALUES ("primera_arriba","2" )');
echo 'último rowid/pk:'.$db->lastInsertRowID()."\n\r";
echo 'número de filas:'.$db->changes()."\n\r";
$db->exec('COMMIT');


// Estrategia para usar bindinng de parámetros, que aporta seguridad a la hora de insgresar
// información a la bd
// Se pueden usar parámetros con nombre

$statement = $db->prepare('INSERT INTO `ultimaNoticiaFrente` (`posicion`, `id_ult_noticia`)
    VALUES (:posicion, :id_ult_noticia)');
$statement->bindValue(':posicion', "segunda_arriba");
$statement->bindValue(':id_noticia', '3');
$statement->execute(); // you can reuse the statement with different values
echo 'último rowid/pk:'.$db->lastInsertRowID()."\n\r";
echo 'número de filas:'.$db->changes()."\n\r";



// Selección de información usando parámetros. Esta vez usando posiciónes

$statement = $db->prepare('SELECT * FROM `ultimaNoticiaFrente` WHERE `id_ult_noticia` = ? ');
$statement->bindValue(1, 1);
$result = $statement->execute();

// se puede establecer el formato de la obtención, en este caso asociativo
// Es decir, si en la consulta existe la columna nombre, en el arreglo va existir
// una clave nombre asociada
echo("Get the 1st row as an associative array:\n");
print_r($result->fetchArray(SQLITE3_ASSOC));
echo("\n");

// también se puede obtener un array indexado, es decir, si el id es la primer columna de la 
// consulta, el valor del id va a estar en la posición 0 del arreglo
echo("Get the next row as a numeric array:\n");
print_r($result->fetchArray(SQLITE3_NUM));
echo("\n");

// Si no hay más datos, fetchArray devuelve falso

// Se puede liberar la memoria

$result->finalize();



// Cerramos la base, esto también se hace automáticamente al finalizar el script

$db->close();
echo "</pre>";
?>