<?php 

	require_once('../model/db.php');
	require_once('../model/auth.php');

	if (isset($_POST['valider'])) {
		extract($_POST);

			$administrateur = checkAdmin($login, $password);

			$administrateur = mysqli_fetch_row($administrateur);
			print_r($administrateur);

		if (!empty($administrateur[1])) {
			header('Location: http://localhost/file_rouge/?page=""');
		}else{
			echo "<div class='alert alert-danger text-center'>
				Echec d'authentification
			</div>";
			header('Location:http://localhost/file_rouge/?ok=false');
			exit();
		}
	}

 ?>