<? php
    namespace app\clases;
    
    class Contacto{
        
        public $id_contacto;
        public $nombre ;
        public $email;
        public $descripcion;
    
        public function __construct($nombre,$email,$descripcion) {
                $this->descripcion = $descripcion;
                $this->nombre = $nombre;
                $this->email = $email;
            }
        
    
        public function get_Lista_unidad_negocio()
        {
            $lista_unidades_negocio = ["SLAM","Ejezeta","Redlam"];
            return $lista_unidades_negocio;
        }
    }
?>