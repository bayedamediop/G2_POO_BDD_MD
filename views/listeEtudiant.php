<div class="container">
   
    
    <form class="form-inline" method="POST">
        <input class="form-control mr-sm-2" type="text" name="chercher" placeholder="Search">
        <button class="btn btn-success" type="submit" name="rechrge">RECHERGER</button>
        <h4>LISTES DES ETUDIANTS</h4>
    </form>
    <div class=" ">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Maruicule</th>
                <th>Non</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Date de Naissance</th>
                <th>Boursier</th>
                <th>Montant</th>
                <th style="width: 180px;">Action</th>
            </tr>

            </thead>
  <tbody>

  <?php foreach($datas as $data) : ?>
    <tr>
      <th scope="row"><?=$data['id']; ?></th>
      <td><?=$data['matricule']; ?></td>
      <td><?=$data['prenom']; ?></td>
      <td><?=$data['nom']; ?></td>
      <td><?=$data['Email']; ?></td>
      <td><?=$data['dateNaissance']; ?></td>
      <td><?=$data['type_user']; ?></td>
      <td><?=$data['prix_bourse']; ?></td>
      <td><button type="button" id="'.$data['id'].'" class="btn btn-warning btn-xs update">Update</button>
        <button type="button" id="'.$data['id'].'" class="btn btn-danger btn-xs delete">Delete</button></td>
      
    </tr>
  <?php endforeach ?>
    
  </tbody>
</table>
