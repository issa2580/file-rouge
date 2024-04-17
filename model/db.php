<?php
  function getConnexion(){

  	$host='localhost';
  	$user='root';
  	$pwd='';
  	$dbname='file_rouge';

  	$connexion=mysqli_connect($host, $user, $pwd, $dbname);
  	return $connexion;
  }

  function executeSQL($sql){
  	$execute=mysqli_query(getConnexion(),$sql);
  	return $execute;
  }
?>