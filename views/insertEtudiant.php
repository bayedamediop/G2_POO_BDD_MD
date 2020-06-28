
<style>
  .error_form{
           display:block;
          margin-top:-15px;
          color:red;
        }
</style>
  
  <div class="container-fluid">
     <h4>XLarge Grid</h4>
     <form method="POST" action="">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 bg-light">
  <div class="form-group row">
    <label for="matricule" class="col-sm-2 col-form-label">Matricule</label>
    <div class="col-sm-10">
<<<<<<< HEAD
      <input type="hidden" class="form-control" name="matricule" id="matricule" value="" placeholder="Matricule"><br>
=======
<<<<<<< HEAD
      <input type="text" class="form-control" name="matrik" id="Matricule" placeholder="Matricule"><br>
=======
      <input type="text" class="form-control" name="matricule" id="matricule" value="" placeholder="Matricule"><br>
>>>>>>> 4cb093a41efd57f11e1259ffa2bf4db7c279c4a9
>>>>>>> baee9d406d16f4ae99260054d8aa76d0bba33ce0
      <span class="error_form" id="mat"> </span>
    </div>
  </div>
  <div class="form-group row">
    <label for=" Nom" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nom" id="nom" placeholder=" Nom"><br>
      <span class="error_form" id="nom_error_message"> </span>
    </div>
  </div>
  <div class="form-group row">
    <label for=" Prenom" class="col-sm-2 col-form-label">Prenom</label>
    
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prenom" id="prenom" placeholder=" Prenom"><br>
      <span class="error_form" id="prenom_error_message"> </span>  
    </div>
  </div>
   <div class="form-group row">
    <label for="Telephoe" class="col-sm-2 col-form-label">Telephoe</label>
    <div class="col-sm-10">
      <input type="telephone" class="form-control" name="telephone" id="telephone" placeholder="telephne"><br>
      <span class="error_form" id="telephone_error_message"> </span>
    </div>
  </div>
 <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="email" placeholder="email"><br>
      <span class="error_form" id="email_error_message"> </span>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="dateNaissance" class="col-sm-2 col-form-label" >Date de Naissance	</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="dateNaissance"  id="dateNaissance">
    </div>
  </div>
 
     </div>
      <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 bg-light">
      <select name="type_user" class="custom-select col-md-6" id="type_user" name="type_user">
      <option value="">Choix la Type d'Etudiant</option>
        <option value="boursier">boursier  </option>
        <option value="nonboursier">nonboursier </option>
       
    
  </select>
 
      <select name="prix_bourse" class="custom-select col-md-6" id="prix" name="prix_bourse">
      <option value="">Choix la Type d'Etudiant</option>
        <option value="2000">2000 FR  </option>
        <option value="'4000'">4000 FR</option>
    
  </select>
 
  <div class="form-group row">
  <div id="choix" class="form-group">
  </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-10">
<<<<<<< HEAD
      <button type="submit" name="subscribe" id="submit" class="submit btn btn-success">S'Inscrire</button>
=======
      <button type="submit" name="bouton" id="submit" class="submit btn btn-success">S'Inscrire</button>
>>>>>>> 4cb093a41efd57f11e1259ffa2bf4db7c279c4a9
    </div>
  </div>
      </div>
    </div>
    </div>  
    <script src="../asset/js/jquery.min.js"></script>
   <!-- <script src="../asset/ajax/valideFormulaire.js"></script> -->
           <script type="text/javascript">
      $(document).ready(function(){
            var type = $("#type").val();
            // alert(type);
            if(type =="boursier"){
                // alert($("#typ"));
               // alert(type);
             echo ($("#choix").append('<input type="radio" name="2000" value="2000"">',
                    '<input type="radio" name="2000" value="2000"">') ) ;
            }
            if(type =="nonboursier"){
                // alert($("#typ"));
              
              echo ($("#choix").append('<input type="text"   name="adresse" placeholder="Réponse">' ));
            }
            if(type =="choixtext"){
                // alert($("#typ"));

                $("#choix").append('<textarea name="rep" placeholder="Réponse" style=width:230px; float:left; height: 30px;" name="name[]"></textarea>' );
            }
        
        });
        </script>  
     </form>
  </div>
    