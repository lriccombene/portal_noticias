<? php
    namespace app\clases;
    
    class video{
        
        public $id_video;
        public $nombre ;
        public $descripcion ; //directoria o ruta de archivo
        public $link ;
        public $fecha ;
        
        
        
        public function __construct($nombre, $descripcion,$link,$fecha) {
            $this->nombre = $nombre;
            $this->escripcion = $descripcion;
            $this->link = $link;
            $this->fecha = $fecha;
        }

    }


?>
