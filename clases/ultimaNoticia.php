<?php
    namespace app\clases;
    
    class ultimaNoticiaFrente{
        
        public $id_noticia;
        public $posicion ;
        public $id_ult_noticia ; //directoria o ruta de archivo
        
        private static $lista_UltimasNoticias=  [
            [   id_noticia=>"1",
                //posicion =>$obj_posiciones->$principal,
                posicion =>Posiciones::principal,
                id_ult_noticia =>"1"
            ],
            [
               id_noticia=>"2",
               posicion =>Posiciones::primera_arriba,
               id_ult_noticia =>"2"
            ],
            [
               id_noticia=>"3",
               posicion =>Posiciones::segunda_arriba,
               id_ult_noticia =>"3"
            ],
            [
               id_noticia=>"4",
               posicion =>Posiciones::tercera_arriba,
               id_ult_noticia =>"4"
            ],
            [
               id_noticia=>"5",
               posicion =>Posiciones::primera_abajo,
               id_ult_noticia =>"5"
            ],
            [
               id_noticia=>"6",
               posicion =>Posiciones::segunda_abajo,
               id_ult_noticia =>"6"
            ],
            [
               id_noticia=>"7",
               posicion =>Posiciones::tercera_abajo,
               id_ult_noticia =>"7"
            ],
            [
               id_noticia=>"8",
               posicion =>Posiciones::primera_noti,
               id_ult_noticia =>"8"
            ],
            [
               id_noticia=>"9",
               posicion =>Posiciones::segunda_noti,
               id_ult_noticia =>"9"
            ],
            [
               id_noticia=>"10",
               posicion =>Posiciones::tercera_noti,
               id_ult_noticia =>"10"
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