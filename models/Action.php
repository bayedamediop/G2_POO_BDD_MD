<?php
    
    class Action extends ModelParrents 
    {
        
        public function __construct($datas=[])
        {
            $this->table ="chambre" ;
            // $this->id = $datas['id'] ;
            // $this->numero_chambre = $datas['numero_chambre'] ;
        }

        public function action(){
if(isset($_POST["action"])) //Check value of $_POST["action"] variable value is set to not
{
 //For Load All Data
 if($_POST["action"] == "Load") 
 {
  $statement = $this->connexion->query("SELECT * FROM " . $this->table . "  ORDER BY id ASC");
  $statement->execute();   
  $result = $statement->fetchAll();
  $output = '';
  $output .= '
   <table class="table table-bordered">
    <tr>
        <th width="20%">ID</th>
        <th width="20%">First Name</th>
       
        <th width="25%">Update</th>
        <th width="25%">Delete</th>
    </tr>
  ';
  if($statement->rowCount() > 0)
  {
   foreach($result as $row)
   {
    $output .= '
    <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["numero_chambre"].'</td>
       
        <td><button type="button" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button></td>
        <td><button type="button" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
    </tr>
    ';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td align="center">Data not Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 //This code for Create new Records
 if($_POST["action"] == "Create")
 {
  $statement = $this->connexion->prepare("
   INSERT INTO " . $this->table . " (first_name, last_name) 
   VALUES (:first_name, :last_name)
  ");
  $result = $statement->execute(
   array(
    ':first_name' => $_POST["firstName"],
    ':last_name' => $_POST["lastName"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }

 //This Code is for fetch single customer data for display on Modal
 if($_POST["action"] == "Select")
 {
  $output = array();
  $statement = $this->connexion->prepare(
   "SELECT * FROM " . $this->table . " 
   WHERE id = '".$_POST["id"]."' 
   LIMIT 1"
  );
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $output["first_name"] = $row["first_name"];
   $output["last_name"] = $row["last_name"];
  }
  echo json_encode($output);
 }

 if($_POST["action"] == "Update")
 {
  $statement =$this->connexion->prepare(
   "UPDATE " . $this->table . " 
   SET first_name = :first_name, last_name = :last_name 
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':first_name' => $_POST["firstName"],
    ':last_name' => $_POST["lastName"],
    ':id'   => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }

 if($_POST["action"] == "Delete")
 {
  $statement =$this->connexion->prepare(
   "DELETE FROM " . $this->table . " WHERE id = :id"
  );
  $result = $statement->execute(
   array(
    ':id' => $_POST["id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Deleted';
  }
 }

}
}
}

?>
 