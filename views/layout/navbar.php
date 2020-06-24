 
 


      

 <!doctype html>
 <html lang="en">
   <head>
     <title>Title</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body>
 
         <!-- NAV -->
    <!-- navbar rend flexibl & navbar-expand-md rend responsive avk navbar-nav 
    navbar-light give a gray color  && fixed-top pr ke la barr ne disparait pas quand je descend   -->
    <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">
        <!-- fa-2x pour augmenter la taille 2X  -->
      <a href="#"><i class="fas fa-anchor text-warning fa-2x"></i></a>
      <!-- bouton amburger -->
      <button
        type="button"
        class="navbar-toggler bg-light"
        data-toggle="collapse"
        data-target="#nav"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- collapse pr la disparition des menu navbar colapse est lier a navbar expand  -->
      <div class="collapse navbar-collapse justify-content-between" id="nav">
        <ul class="navbar-nav">
          <li class="nav-item">
              <!-- px-3 = padding 3px-->
            <a
             
              class="nav-link text-light font-weight-bold text-uppercase px-3" 
<<<<<<< HEAD
              href=" <?=BASE_URL?>/views/layout/navbar.php"
=======
              href="#"
>>>>>>> 599fffbb2ff059fbe94e843c39bc78de97493c61
              >Home</a
            >
          </li> 
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link text-light font-weight-bold text-uppercase px-3 dropdown-toggle"
              data-toggle="dropdown"
              href="#"
              >ROOMS</a
            >
            <div class="dropdown-menu">
<<<<<<< HEAD
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/enregistrerchambre.php">Save room</a>
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/listechambres.php">Lists room</a>
               <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/updatechambre.php">Update room</a>
=======
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/enregistrer_chambre.php">Save room</a>
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/listechambre.php">>Lists room</a>
               <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/updatechambre.php">>Update room</a>
>>>>>>> 599fffbb2ff059fbe94e843c39bc78de97493c61
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link text-light font-weight-bold text-uppercase px-3 dropdown-toggle"
              data-toggle="dropdown"
              href="#"
              >STUDENTS</a
            >
            <div class="dropdown-menu">
<<<<<<< HEAD
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/updateetudiant.php">Update student</a>
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/enregistrer_etud.php">Add student</a>
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/enregistrer_chambre.php">List student</a>
=======
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/updateetudiant.php">>Update student</a>
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/enregistrer_etud.php">>Add student</a>
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/enregistrer_chambre.php">>List student</a>
>>>>>>> 599fffbb2ff059fbe94e843c39bc78de97493c61
               
            </div>
          </li> 
          <li class="nav-item">
            <a
              class="nav-link text-light font-weight-bold text-uppercase px-3"
              href="#"
              >Contact</a
            >
          </li>
        </ul>
        <!-- search -->
        <!-- ml-3 =margin-left 3% -->
        <form class="form-inline ml-3">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" />
            <!-- pour coller la zone et button -->
            <div class="input-group-append">
              <button type="button" class="btn bg-light">
                  <!-- text-muted = gris plus clair -->
                <i class="fas fa-search text-muted"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </nav>
    <!-- END OF NAV --> 

          
              <div id="main" class="d-flex justify-content-center align-items-center"style=" Height:320px;width:100%">
                    <!-- Afficher Les Vues du Layout -->
                    <?php echo  $content_for_layout?>
                
           </div> 
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>