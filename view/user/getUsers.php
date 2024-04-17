<!DOCTYPE html>
<html>
<head>
	<title>getuser</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./style/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
   <div class="container col-md-10 col-md-offset-1 spacer">
   	 <div class="panel panel-info">
   	 	<div class="panel-heading" style="text-align: center;">Liste des utilisateurs</div>
   	 	<div class="panel-body">
   	 		<table class="table table-bordered table-striped">
   	 			<tr>
   	 		<th>Id</th>
   	 		<th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Email</th>
   	 		<th>Adresse</th>
            <th>Action1 </th>
			<th>Action2 </th>
   	 			</tr>
   	 			<tr>
   	 				<?php
                         while ($user=mysqli_fetch_row($liste)) {
                             echo "<tr>
                                      <td>$user[0]</td>
                                      <td>$user[1]</td>
                                      <td>$user[2]</td>
                                      <td>$user[3]</td>
                                      <td>$user[4]</td>
                                      <td>$user[5]</td>
									  <td><a href='?page=updateUser' class='btn btn-primary'>Modifier</a></td>
									  <td><a href='./controller/usercontroller.php?action=delete&id=$user[0]' class='btn btn-danger'>Supprimer</a></td>
                                  </tr>";
                         }
   	 				?>
   	 			</tr>
   	 		</table>
   	 	</div>
   	 </div>
   </div>
</body>
</html>