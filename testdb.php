<?php
echo "<pre>";

// Abrir la base o crearla si no existe
$db = new SQLite3('testdb.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

$db->query('CREATE TABLE IF NOT EXISTS `noticias` (
    `id_noticia` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    `categoria` VARCHAR,
    `imagen` VARCHAR,
    `fecha` DATETIME,
    `descripcion` VARCHAR,
    `titulo` VARCHAR,
    `subtitulo` VARCHAR,
    `copete` VARCHAR,
    `autor` VARCHAR
)');

?>