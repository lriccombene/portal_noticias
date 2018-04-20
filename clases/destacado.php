

<? php
    namespace app\clases;
    
    class user{
        
        public $id_destacado;
        public $id_noticia ;
        public $posicion ;
        
        public function __construct($id_noticia,$posicion) {
            $this->id_noticia = $id_noticia;
            $this->posicion = $posicion;
        }
    }
?>