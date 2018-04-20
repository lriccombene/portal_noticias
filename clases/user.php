<? php
    namespace app\clases;
    
    class user{
        
        public id;
        public username ;
        public email ;
        public role ;
        public password ;
        
        public function __construct($username,$email,$role,$password) {
            $this->username = $username;
            $this->email = $email;
            $this->role = $role;
            $this->password = $password;
        }
    }
?>