<?php
class SecurityController extends Controller{

   public  function __construct(){
      $this->folder="security";
      $this->layout="navbar";
      $this->validator=new Validator();
    
   }

   // method home page called
    public function index(){
        $this->view="connexion";
         $this->render(
        
<<<<<<< HEAD
       );

    }
     
    //methode pour inscription etudiant
=======
       ); 
    }
     
    //methode s'inscrire 
>>>>>>> 599fffbb2ff059fbe94e843c39bc78de97493c61
    public function vinscription(){ 
         $this->view="inscription";
         $this->render();
   }

<<<<<<< HEAD
   //methode pour enregistrer chambre
   public function saveroomn(){ 
      $this->view="enregistrerchambre";
      $this->render();
   }

   //methode lists chambres 
    
     public function listechambre(){ 
      $this->view="enregistrerchambre";
      $this->render();
     }

=======
>>>>>>> 599fffbb2ff059fbe94e843c39bc78de97493c61
    //Use Case
   public function connexion(){

      if(isset($_POST['btn_connexion'])){
         extract($_POST);
         $this->dao=new UserDao();
         //Validation
         $this->validator->isVide($login,"login","Le Login est vide");
         $this->validator->isVide($password,"password","Le Mot de Passe est vide");
         if($this->validator->isValid()){
            $user=$this->dao->findByLoginAndPwd($login,$password);
             if($user!=null){
                //Ajouter dans la session
               if($user->getProfil()==="admin"){
                  $this->data_view["title"]="Pour proposer des quizz";
                  $this->layout="admin";
                  $this->view="inscription";
                  $this->render();    
               }else{
                  echo "Vue Joueur";
               }
             }else{
                //User Not Existe
                $this->data_view["error"]="Login Mot de Passe Incorrect";
                $this->index();
             }
           
         }else{
            $this->data_view["error"]= $this->validator->getErrors();
            $this->index();
         }
         
      }else{
         $this->index();
      }
      
   }

   public function deconnexion(){
       
   }

   public function inscription(){
       
   }



   //ce que faisait admin 
   

      //      public  function __construct(){
      //         $this->folder="security";
      //         $this->layout="default";
      //         $this->validator=new Validator();
            
      //      }
        
      
      //      public function vinscription(){
      //           $this->data_view["title"]="Pour tester votre niveau de culture générale";
      //           $this->view="inscription";
      //           $this->render();
      //  }
      //  public function getEtudiant(){
           
      //      $this->view="listeEtudiant";
      //      $this->render();
      // }
      // public function bloquerJoueur(){
      //      echo "Boquer";
      // }
      
      // public function fixerNbreQuestion(){
          
      // }
      
      // public function modifierAdmin(){
          
      // }
      
      // public function supprimerAdmin(){
          
      // }


      //ce que faisait joueur dans le quizz 
      
     
//       public  function __construct(){
//          $this->folder="security";
//          $this->layout="default";
//          $this->validator=new Validator();
       
//       }
   
 
//       public function vi(){
          
//            $this->view="moifier";
//            $this->render();
//   }


       
}