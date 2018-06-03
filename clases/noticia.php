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
        public $id_noticia ;
        private static $lista_noticias = [
            
            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 1,
                titulo=> "Informatica de software libre"
            ],
            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 2,
                titulo=> "Informatica de software libre"
            ],
            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 3,
                titulo=> "Informatica de software libre"
            ],
            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 4,
                titulo=> "Informatica de software libre"
            ],
            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 5,
                titulo=> "Informatica de software libre"
            ],
                        [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 6,
                titulo=> "Informatica de software libre"
            ],
            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 7,
                titulo=> "Informatica de software libre"
            ],
            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 8,
                titulo=> "Informatica de software libre"
            ],            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 9,
                titulo=> "Informatica de software libre"
            ],            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 10,
                titulo=> "Informatica de software libre"
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
        public static function get_noticia($_param):array
        {   $_param=1;
        
            $lista_noticia = 
            [
                fecha =>"2017-06-02",
                descripcion => "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.",
                categoria => "Informatica",
                autor => "Telesur",
                id_noticia => 1,
                titulo=> "Informatica de software libre"
            ];
            return $lista_noticia;  
        }
        
        public function obtenerImagenBase64():string
        {
            $archivoImg = dirname(__FILE__).DIRECTORY_SEPARATOR.'imgs'.DIRECTORY_SEPARATOR.$this->url;
            $imagedata = file_get_contents($archivoImg);
            $base64 = base64_encode($imagedata);
            return '<img src="data:image/png;base64,'.$base64.'">';
        }
        
        public static function listaNoticias(): array
        {
            $archivoBD = dirname(__FILE__).DIRECTORY_SEPARATOR.'bd'.DIRECTORY_SEPARATOR.'bd.sqlite';
            $db = new \PDO('sqlite:'.$archivoBD);
            // traigo todos porque son pocos
            $todasLasNoticias = $db->query('select * from noticias')->fetchAll();
            $resultado = [];
            foreach($todasLasNoticias as $noticia)
            {
                 $noticia = new Noticia($noticia['fecha'], $noticia['descripcion'], $noticia['categoria'], $noticia['autor'], $noticia['id_noticia'],$noticia['titulo'],$noticia['titulo']);
                 $resultado[] = $noticia;
            }
            return $resultado;
        }
        
    }


?>