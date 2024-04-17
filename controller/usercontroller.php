 <?php
  require_once '../model/db.php';
  require_once '../model/user.php';

 if (isset($_POST['enregistrer'])) {
     extract($_POST);
     addUser($nom,$prenom,$telephone,$email,$adresse);
    header("location:http://localhost/file_rouge/?page=getUsers");
 }

if (isset($_POST['modifier'])) {
   extract($_POST);
   $id = $_POST['id'];
   updateUser($id, $nom, $prenom, $telephone, $email, $adresse);
   header("location: http://localhost/file_rouge/?page=getUsers");
}

if(isset($_GET['id'])){
	deleteUser($_GET['id']);
	header("location:http://localhost/file_rouge/?page=getUsers");
}
?>