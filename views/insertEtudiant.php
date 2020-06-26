

  
  <div class="container-fluid">
     <h4>XLarge Grid</h4>
     <form method="POST" action="">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 bg-success">
  <div class="form-group row">
    <label for="Matricule" class="col-sm-2 col-form-label">Matricule</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Matricule" id="Matricule" placeholder="Matricule">
    </div>
  </div>
  <div class="form-group row">
    <label for=" Nom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nom" id="nom" placeholder=" Nom">
    </div>
  </div>
  <div class="form-group row">
    <label for=" Prenom" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prenom" id="prenom" placeholder=" Prenom">
    </div>
  </div>
   <div class="form-group row">
    <label for="Telephoe" class="col-sm-2 col-form-label">Telephoe</label>
    <div class="col-sm-10">
      <input type="telephoe" class="form-control" name="telephoe" id="telephoe" placeholder="telephoe">
    </div>
  </div>
 <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="email" placeholder="email">
    </div>
  </div>
 
  <div class="form-group row">
    <label for="Date de Naissance	" class="col-sm-2 col-form-label">Date de Naissance	</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="Date de Naissance	" id="Date de Naissance"	>
    </div>
  </div>
 
     </div>
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 bg-warning">
      <select name="type" class="custom-select col-md-6" id="type" name="type">
      <option value="">Choix la Type d'Etudiant</option>
        <option value="boursier">choix multiple </option>
        <option value="nonboursier">choix simple </option>
     </div>  
  </select>
  <div class="form-group row">
  <div id="choix" class="form-group">
  </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" id="submit" class="submit btn btn-success">S'Inscrire</button>
    </div>
  </div>
      </div>
    </div>
    <script src="../asset/js/jquery.min.js"></script>
           <script type="text/javascript">
           $(document).ready(function(){
      
        
            var type = $("#type").val();
            
            if(type =="boursier"){
                // alert($("#typ"));
               
                $("#choix").append('<input type="radio" name="2000" value="2000"">',
                    '<input type="radio" name="2000" value="2000"">');
            }
            if(type =="nonboursier"){
                // alert($("#typ"));
              
                $("#choix").append('<input type="text"   name="adresse" placeholder="Réponse">' );
            }
            if(type =="choixtext"){
                // alert($("#typ"));

                $("#choix").append('<textarea name="rep" placeholder="Réponse" style=width:230px; float:left; height: 30px;" name="name[]"></textarea>' );
            }
        
        });
           </script>
     </form>
  </div>
    