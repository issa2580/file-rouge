<?php
  function addUser($nom,$prenom,$telephone,$email,$adresse){
   $sql="INSERT INTO users VALUES(null,'$nom','$prenom','$telephone','$email','$adresse')";
   return executeSQL($sql);
  }
  
  function getUsers(){
  $sql="SELECT * FROM users";
  	return executeSQL($sql);
  }

   function getUserById($id){
      $sql = "SELECT * FROM users WHERE id = $id";
      return executeSQL($sql);
   }

   function updateUser($id, $nom, $prenom, $telephone, $email, $adresse) {
      $sql = "UPDATE users SET nom='$nom', prenom='$prenom', telephone='$telephone', email='$email', adresse='$adresse' WHERE id = $id";
      return executeSQL($sql);
  }

   function deleteUser($id){
    $sql= "DELETE FROM users WHERE id = $id";
    return executeSQL($sql);
  }
  