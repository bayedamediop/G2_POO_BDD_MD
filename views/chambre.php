
  <div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-6">
    <form method="POST" action=" ">
    <div class="form-group row">
    <label for="numero_chambre" class="col-sm-2 col-form-label">Numero Chambre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="numero_chambre" id="numero_chambre" placeholder="Numero Chambre">
    </div>
  </div>
   
   
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="bouton" value="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
  </div>
</form>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-8 col-xl-6">
    <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th >Numero Chambre</th>
               
            </tr>

            </thead>
  <tbody>

  <?php foreach($datas as $data) : ?>          
    <tr>
      <th scope="row"><?=$data['id']; ?></th>
      <td ><?=$data['numero_chambre']; ?></td>
     
      
    </tr>
  <?php endforeach ?>
    
  </tbody>
</table>
    </div>
  