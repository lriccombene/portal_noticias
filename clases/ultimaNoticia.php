<?php
    namespace app\clases;
    
    class ultimaNoticiaFrente{
        
        public $id_noticia;
        public $posicion ;
        public $id_ult_noticia ; //directoria o ruta de archivo
        
        public function __construct($posicion,$id_noticia ) {
            $this->posicion = $posicion;
        }

    }


?>