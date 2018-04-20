
<? php
    namespace app\clases;
    
    class galeria{
        
        public $id_galeria;
        public $nombre ;
        public $detalle ;
        public $imagen ;

        
        public function __construct($username,$email,$role,$password) {
            $this->username = $username;
            $this->email = $email;
            $this->role = $role;
            $this->password = $password;
        }
    }
?>