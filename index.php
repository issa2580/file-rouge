<?php

 if (isset($_GET['page'])){
  require_once 'menu.php';

   switch ($_GET['page']) {

   	     case 'auth':
   	       require_once 'auth.php';
   		     break;

   case 'addUser':
           require_once 'view/user/addUser.php';
           break;

         case 'getUsers':
           require_once 'model/db.php';
           require_once 'model/user.php';
           $liste=getUsers();
           require_once 'view/user/getUsers.php';
           break;

         case 'updateUser':
           require_once ('model/db.php');
           require_once ('model/user.php');
          //  $liste=getUserById($_GET['id']);
          //  $user=mysqli_fetch_row($liste);
           require_once ('view/user/updateUser.php');
           break;
   }
 }
          else {
 	           require_once 'auth.php';
 }