<? php
    namespace app\clases;
    
    class video{
        
        public $id_video;
        public $descripcion ;
        public $link ;
        public $fecha ;

        public function __construct($descripcion,$link,$fecha) {
            $this->descripcion = $descripcion;
            $this->link = $link;
            $this->fecha = $fecha;
        }
    }
?>