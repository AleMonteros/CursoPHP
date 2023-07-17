<?php 

    include_once 'db-compras.php';

    class User extends DB_C{

        private $nombre;
        private $username;

        public function userExists($user , $pass){

            $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE User = :user AND Password = :pass');
            $query->execute(['user' => $user, 'pass' => $pass]);

            if($query -> rowCount()){
                return true;
            }else{
                return false;
            }
        }

        public function setUser($user){
            $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE User = :user ');
            $query->execute(['user' => $user]); 

            foreach($query as $currentUser){
                $this->nombre = $currentUser['Nombre'];
                $this->username = $currentUser['User'];
            }
        }

        public function getNombre(){
            return $this->nombre;
        }

    }

?>