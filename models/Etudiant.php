<?php
 
    class Etudiant extends Users implements IterfaceParrents
    {
        protected  $matricul;       

        public function __construct($datas=[])
        {
            $this->table ="user" ;
            $this->profile = "client" ;
            parent::__construct($datas) ;
        }
        /**
         * GENERE MATRICULE
         */
       public function genererMatricule()
        {
            $this->getConnection();
            $mat="000";
            $date=Date('y');
            $sql=("SELECT MAX(id) AS matricule FROM " . $this->table);
            $query = $this->connexion->prepare($sql) ;
            $req= $query->execute();
            if($req)
            {
                //if(mysqli_num_rows($req)>0)
                //{
                $tab=$req->fetchAll();
                $max_mat=$tab['matricule'];
            }
            else
            {
                $max_mat=1;
            }

           // return $mat."".$date."".($max_mat+1);
            return $date."".$mat.""($max_mat+1);
        }


        /**
         * select max id
         */
        public function maxId()
        {
         $this->getConnection() ;
         $sql=$this->connexion->prepare("SELECT MAX(id) AS max FROM " . $this->table);
         $sql->execute();
         $invNum = $sql->fetch(PDO::FETCH_ASSOC);
         $max_id = $invNum['max'];
           return ($max_id+1);
         }
        public function insert() 
        {      
          $mat=$this->maxId();
        // var_dump($mat);
          
            $date=Date('yy');                    
            if (isset($_POST['bouton']) ) { 
               
                extract($_POST);  
                $nom=$_POST['nom'];
                $cc= strtoupper (substr("$nom",0,2));
                $prenom=$_POST['prenom'];
                $ll=strtoupper(substr("$prenom",-2));
                $telepohne=$_POST['telephone'];
                $email=$_POST['email'];
                $dateNaissance=$_POST['dateNaissance'];
                $type_user=$_POST['type_user'];
                $prix_bourse=$_POST['prix_bourse'];
                $matricule=$date."".$cc."".$ll."".$mat;

                          
                   
                        $this->getConnection() ;
                        $sql = "INSERT INTO " . $this->table . " VALUES 
                        (null,' $matricule ',' $nom ','$prenom','$telepohne','$email','$dateNaissance','$type_user','$prix_bourse')" ;
                          $query = $this->connexion->prepare($sql) ;
                        return $query->execute(array(
                        'matricule' => $this->matricule,
                        'nom' => $this->nom ,
                        'prenom' => $this->prenom  ,
                        'telephone' => $this->telephone  ,
                        'email' => $this->email  ,
                        'dateNaissance' => $this->dateNaissance  ,
                        'type_user' => $this->type_user  ,
                        'prix_bourse' => $this->prix_bourse 
                    
                    ));
                   
                 
                   // var_dump($numero_chambre) ; 
               // }else{
                   // die() ;
               // }  
            }  
        }


        public function getAll()
       {
        if (!(isset($_POST['rechrge'])))
        {
      
           $this->getConnection() ;
           $sql = "SELECT * FROM " . $this->table;
           $query = $this->connexion->prepare($sql) ;
           $query->execute();
           return $query->fetchAll();
        }
         if (isset($_POST['rechrge']))
        {
        $chercher=$_POST['chercher'];
           $this->getConnection() ;
           $sql = "SELECT * FROM " . $this->table." WHERE matricule like '%$chercher%' OR type_user like '%$chercher%'";
           $query = $this->connexion->prepare($sql) ;
           $query->execute();
           return $query->fetchAll();
        }

      

    }
    public function add(){}
}

?>