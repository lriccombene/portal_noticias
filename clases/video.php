<?php
    namespace app\clases;
    
    class video{
        
        public $id_video;
        public $descripcion ;
        public $link ;
        public $fecha ;

        /*public function __construct($descripcion,$link,$fecha) {
            $this->descripcion = $descripcion;
            $this->link = $link;
            $this->fecha = $fecha;
        }*/
        public function __construct() {} 
        public function get_video()
        {
            $lista_noticias = ["2018-04-02","Festibal de software libre","www.Informatica.com",1];
                           //["2018-04-02","Festibal de software libre","Informatica","Pagina12",1]];
            return $lista_noticias;  
        }
        
    }
?>