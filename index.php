<!doctype html>
<html lang="en">

<head>
    <title>HOME PAGE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?=BASE_URL?>/public/css/classe.css"> 


</head>
<?php
 
//Chargement dynamique  des classes=> AutoLoading
  //url dynamik
define("BASE_URL","http://localhost/code/first%20proet%20POO/G2_POO_BDD_MD/");
require_once("./libs/Router.php");
$router=new Router();
$router->route();

 // surchargement d'une methode : ajouter ces fonctionnalités  , équivalent de la function construct ,on creer et on initialise a la fois 

// $user1=new Etudiant([
//     "id"=>1,
//     "nomComplet"=>"Oumar Anne"
// ]
// );
// var_dump($user1);