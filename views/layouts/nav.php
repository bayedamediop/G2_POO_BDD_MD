
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><strong>HOME</strong></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
      <li class="nav-item">
       
        <a class="dropdown-item" href=" <?=BASE_URL?>/Chambre/add">Chambre</a>
      </li>
      <li class="nav-item">
      
       <!--  <li class="nav-item">
        <a class="nav-link" href=" /Admin/insert">Insert Clients</a>
        
      </li>-->
      <li class="nav-item"> 
          
      </li>
      <li class="nav-item"> 
       
    
     </li>
      <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle "data-toggle="dropdown"
              href="#">STUDENTS</a >
            <div class="dropdown-menu">
            
              
              
              <a class="dropdown-item" href=" <?=BASE_URL?>/views/security/updateetudiant.php">Update student</a>
              <a class="dropdown-item" href=" <?=BASE_URL?>/Admin/add">Add student</a>
              <a class="nav-link" href="<?=BASE_URL?>/Admin/index"> List student </a>
               
            </div>
          </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>