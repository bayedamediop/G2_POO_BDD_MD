<?php 
         require_once('controlleurs/Parrent.php');
         require_once('models/InterfaceParrents.php');
         require_once('models/ModelParrents.php');
         require_once('controlleurs/Admin.php');
         require_once('models/Users.php');
        $index= new  Admin() ;
        $index->produit() ;
                // Pos $params[0] => Admin => $controlleur
        // Pos $params[1] => index => $methode 
        define("BASE_URL","http://localhost/g2_poo/G2_POO_BDD_MD");
        if($_GET['url'])
        { 
            require_once('controlleurs/Parrent.php');
            require_once('models/InterfaceParrents.php');
            require_once('models/ModelParrents.php');
            require_once('controlleurs/Admin.php');
            require_once('models/Users.php');
            // recupe les valeur de url dans un tableau $params => arry
            $params = explode('/',$_GET['url']) ;
            // recuper le controlleur et verifier s'il existe
            $controlleur = isset($params[0]) && file_exists('controlleurs/'.$params[0].'.php') ? $params[0] : 'Erreur';
            // inclusion du class demander ou la class Erruer
            require_once('controlleurs/'.$controlleur.'.php') ;
            // recure la methode et verifier si la methode existe
            $methode = isset($params[1]) && method_exists($controlleur,$params[1]) ? $params[1] : "erreurPage";
            // instantiation du class controlleur
            $controlleur = new $controlleur() ;
            // appel d'une methode de se class controlleur
            $controlleur->$methode();
           // require_once("http://localhost/POO_MVC/Security/index");
               

        }
 
?>


