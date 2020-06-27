<?php
    
    class Chambres extends ModelParrents 
    {
        private $id ;
        private $numero_chambre ;
        public function __construct($datas=[])
        {
            $this->table ="chambre" ;
            // $this->id = $datas['id'] ;
            // $this->numero_chambre = $datas['numero_chambre'] ;
        }
       
        public function insert() 
        {                                            
            if (isset($_POST['bouton']) ) { 
                $numero_chambre=$_POST['numero_chambre'];
               // if (!empty($numero_chambre )) {
                   
                    //  var_dump($numero_chambre) ;
                    extract($_POST);  
                        //   $prmier= strtoupper (substr("$numero_chambre",0,2));
                        //   $deniere=strtoupper(substr("$numero_chambre",-2));
                        //   var_dump($prmier);
                        //   var_dump($deniere);
                    
                        $this->getConnection() ;
                        $sql = "INSERT INTO " . $this->table . " VALUES (null, ' $numero_chambre ')" ;
                        $query = $this->connexion->prepare($sql) ;
                        return $query->execute(array(
                        'numero_chambre' => $this->numero_chambre  
                    
                    ));
                   // var_dump($numero_chambre) ; 
               // }else{
                   // die() ;
               // }  
            }  
        }

        public function getAll()
        {
           $this->getConnection() ;
           $sql = "SELECT * FROM " . $this->table ;
           $query = $this->connexion->prepare($sql) ;
           $query->execute();
           return $query->fetchAll();
        }
}
   

   
