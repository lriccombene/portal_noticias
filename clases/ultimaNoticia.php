<?php
    namespace app\clases;
    
    class ultimaNoticiaFrente{
        
        public $id_noticia;
        public $posicion ;
        public $id_ult_noticia ; //directoria o ruta de archivo
        private static $lista_UltimasNoticias=  [
            [   id_noticia=>"1",
                posicion =>"1",
                id_ult_noticia =>"1"
            ],
            [
               id_noticia=>"10",
               posicion =>"2",
               id_ult_noticia =>"2"
            ]
        ];
        
        /*public function __construct($posicion,$id_noticia ) {
            $this->posicion = $posicion;
        }*/

        public static function get_UltimasNoticias():array
        {
            return self::$lista_UltimasNoticias;  
        }


    }


?>