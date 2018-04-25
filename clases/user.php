<?php
    
    namespace app\clases;
    
    class user{
        
        public $id;
        public $username ;
        public $email ;
        public $role ;
        public $password ;
        
        /*public function __construct($username,$email,$role,$password) {
            $this->username = $username;
            $this->email = $email;
            $this->role = $role;
            $this->password = $password;
        }*/
        
        public function __construct() {} 
     
        public function get_Lista_tipo_usu()
        {
            $Lista_tipo_usu =  array("Administrador","Periodista","Clasico"); 
            return $Lista_tipo_usu;
        }
    }
?>