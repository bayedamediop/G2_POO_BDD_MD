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

        public function add() 
        {
            echo "insertion";
            die();
            $this->getConnection() ;
            $sql = "INSERT INTO " . $this->table . " VALUES (null,:prenomEtNom,:profile,:log,:pwd)" ;
            $query = $this->connexion->prepare($sql) ;
            return $query->execute(array(
                'prenomEtNom' => $this->prenomEtNom,
                'profile' => $this->profile,
                'log' => $this->log,
                'pwd' => $this->pwd
            ));
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
?>