<?php

    namespace app\clases;
    
    class video{
        
        public $id_video;
        public $descripcion ;
        public $link;
        public $fecha;
        private static $lista_videos = [
            [   id_video=>"1",
                descripcion =>"Festival de software libre 2017",
                link =>"www.slamcoop.com.ar",
                fecha =>"2017-06-02"
            ],
            [
                id_video=>"1",
                descripcion =>"Festival de software libre 2018",
                link =>"www.slamcoop.com.ar",
                fecha =>"2018-06-02"
            ]
        ];

        /*public function __construct($descripcion,$link,$fecha) {
            $this->descripcion = $descripcion;
            $this->link = $link;
            $this->fecha = $fecha;
        }*/
        public function __construct() {} 
     
        public static function get_videos():array
        {
            return self::$lista_videos;  
        }
        
        
    }
?>