<? php
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
        
        public function __construct($fecha,$categoria,$titulo   ) {
            $this->fecha = $modelo;
            $this->categoria = $categoria;
            $this->titulo = $titulo;
            
       }
    }


?>