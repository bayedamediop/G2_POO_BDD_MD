<?php
    
    class ModelParrents  
    {
        private $host = "localhost" ;
        private $db_name = "gestion_students" ;
        private $username = "root" ;
        private $password = "" ;

        protected $connexion ;
        protected $table ;
        // Methode pour getter pour la connexion
        public function getConnection(){
            $this->connexion = null;
            try{
                $this->connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->connexion->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Erreur de connexion : " . $exception->getMessage();
            }
        } 
        
    }


?>