<?php
 
    class Etudiant extends Users implements IterfaceParrents
    {

        public function __construct($datas=[])
        {
            $this->table ="user" ;
            $this->profile = "client" ;
            parent::__construct($datas) ;
        }
        /**
         * GENERE MATRICULE
         */
        function genererMatricule()
        {
            $this->getConnection();
            $mat="A/O00";
            $date=Date('y');
            $sql=("SELECT MAX(id) AS matricule FROM " . $this->table);
            $query = $this->connexion->prepare($sql) ;
            $req= $query->execute();
            if($req)
            {
                //if(mysqli_num_rows($req)>0)
                //{
                $tab=$req->fetch();
                $max_mat=$tab['matricule'];
            }
            else
            {
                $max_mat=1;
            }

            return $mat."".$date."".($max_mat+1);
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
     

        public function getAll()
       {
           $this->getConnection() ;
           $sql = "SELECT * FROM " . $this->table ;
           $query = $this->connexion->prepare($sql) ;
           $query->execute();
           return $query->fetchAll();
        }

        public function delete(){

        }

    }

 
?>