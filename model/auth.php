<?php 
	function checkAdmin($login, $pwd)
	{
		$sql = "SELECT * FROM administrateur WHERE login = '$login' AND password = '$pwd'";

		return executeSql($sql);
	}
 ?>