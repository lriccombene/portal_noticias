<?php
    namespace app\clases;

    class noticia{
        
        public $fecha;
        public $categoria ;
        public $imagen ; //directoria o ruta de archivo
        public $descripcion ;
        public $titulo ;
        public $subtitulo ;
        public $copete ;
        public $autor ;
        public $idnoticia ;
        private static $lista_noticias = [
            [   fecha=>"2018-04-02",
                descripcion =>"Festival de software libre",
                categoria =>"Informatica",
                autor =>"Pagina12",
                idnoticia => 10
            ],
            [
                fecha =>"2017-06-02",
                descripcion =>"PyDay",
                categoria =>"Informatica",
                autor =>"Telesur",
                idnoticia => 1
            ]
        ];
                           //["2018-04-02","Festibal de software libre","Informatica","Pagina12",1]];
            
        
        
        
        public function __construct() {} 
     
        public function get_Lista_categorias()
        {
            $lista_categorias =  array("Hardware","Programacion","Arte digital","Internacional"); 
            return $lista_categorias;
        }
        
        public static function get_noticias():array
        {
            return self::$lista_noticias;  
        }
        
    }


?>