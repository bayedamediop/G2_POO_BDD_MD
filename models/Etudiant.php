<?php
<<<<<<< HEAD
 
=======
>>>>>>> 4cb093a41efd57f11e1259ffa2bf4db7c279c4a9
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

        //faire entrer les données de l'inscriiption dans la base de donnée 
        public function add() 
        {
          
            // $this->getConnection() ;
            // $sql = "INSERT INTO " . $this->table . " VALUES (null,:prenomEtNom,:profile,:log,:pwd)" ;
            // $query = $this->connexion->prepare($sql) ;
            // return $query->execute(array(
            //     'prenomEtNom' => $this->prenomEtNom,
            //     'profile' => $this->profile,
            //     'log' => $this->log,
            //     'pwd' => $this->pwd
            // ));

            if (isset($_POST['subscribe']) ) { 
                   
                    $nom=$_POST['nom']; 
                    $prenom=$_POST['prenom'];
                    $telephone=$_POST['telephone'];
                    $email=$_POST['email'];
                   // $matricule=$_POST['matrik'] ; 
  
                     //   extract($_POST) ;  
                    
                   // echo"cool ici";
                  $this->getConnection() ;
                    $sql =  "INSERT INTO " . $this->table . " VALUES (null, '$nom' ,' $prenom ',' $telephone ',' $email  ',null,null,null,null)" ;
                    $query = $this->connexion->prepare($sql) ;
                    return $query->execute(array(     
                    //    'nom' => $this->nom,
                    //    'prenom' => $this->prenom,
                    //   'telephone' => $this->telephone,
                    //    'email' => $this->email
                    ));
                   // var_dump($nom) ; 
                       //yyyy echo"cool" ;
            }   
        }
<<<<<<< HEAD
     
=======
        public function insert() 
        {      
            $mat=0;
            $date=Date('yy');                    
            if (isset($_POST['bouton']) ) { 
               
                $nom=$_POST['nom'];
                $cc= strtoupper (substr("$nom",0,2));
                $prenom=$_POST['prenom'];
                $ll=strtoupper(substr("$prenom",-2));
                $telepohne=$_POST['telephone'];
                $email=$_POST['email'];
                $dateNaissance=$_POST['dateNaissance'];
                $matricule=$date."".$cc."".$ll."".$mat;

                  
                          //var_dump($matricul);
                         
                         // var_dump($ll);
                          extract($_POST);  
                   
                       // $this->getConnection() ;
                        $sql = "INSERT INTO " . $this->table . " VALUES (null,'$matricule','$nom','$prenom','$telepohne','$email','$dateNaissance')" ;
                          $query = $this->connexion->prepare($sql) ;
                        return $query->execute(array(
                        'matricul' => $this->matricule,
                        'nom' => $this->nom  ,
                        'prenom' => $this->prenom  ,
                        'telepohne' => $this->telepohne  ,
                        'email' => $this->email  ,
                        'dateNaissance' => $this->dateNaissance  ,
                    
                    ));
                    $mat=$mat+1;
                   // var_dump($numero_chambre) ; 
               // }else{
                   // die() ;
               // }  
            }  
        }
>>>>>>> 4cb093a41efd57f11e1259ffa2bf4db7c279c4a9

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
           $sql = "SELECT * FROM " . $this->table." WHERE matricule like '%$chercher%' OR nom like '%$chercher%'";
           $query = $this->connexion->prepare($sql) ;
           $query->execute();
           return $query->fetchAll();
        }

        public function delete(){

        }

    }
<<<<<<< HEAD

 
=======
}

>>>>>>> 4cb093a41efd57f11e1259ffa2bf4db7c279c4a9
?>