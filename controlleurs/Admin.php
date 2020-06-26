<?php 
     class Admin extends Parrent
     {
          // Les methode de class
         public function defaulte()
         {
             // 1 charge la class client dans models
             // 2 instantantie la class client (Cree objet de type client)
             $this->loadModel("Etudiant") ;
             // 3 apell de la methode getAll()
             $datas = $this->model->getAll() ;
             // 4 Affichage du tableua
             $this->render('listeEtudiant',compact('datas')) ;
         }
          public function index()
          {
               // 1 charge la class client dans models
               // 2 instantantie la class client (Cree objet de type client)
               $this->loadModel("Etudiant") ;
               // 3 apell de la methode getAll() 
               $datas = $this->model->getAll() ;
               // 4 Affichage du tableua
               $this->render('listeEtudiant',compact('datas')) ;
          }
          public function add()
          {
               // 1 charge la class client dans models
               // 2 instantantie la class client (Cree objet de type client)
               $this->loadModel("Etudiant") ;
               // 3 apell de la methode getAll() 
               $datas = $this->model->getAll() ;
               // 4 Affichage du tableua
               $this->render('insertEtudiant',compact('datas')) ;
          }

          public function produit()
          {
               $this->render('tabProduits') ;
          }
                public function insert()
          {
               // 1 charge la class client dans models
               // 2 instantantie la class client (Cree objet de type client)
               $this->loadModel("Etudiant") ;
               // 3 apell de la methode getAll() 
               $datas = $this->model->add() ;
               // 4 Affichage du tableua
               $this->render('insertClients',compact('datas')) ;
          }
          


     }
?>