<?php

	session_start();
/*
	// jeśli użytkownik nie jest zalogowany, to przekierowanie do strony głównej
	if ((!isset($_SESSION['login'])) || (!isset($_SESSION['haslo'])))
		header('Location: index.php');*/

	require_once "connect.php";


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
      $myusername = mysqli_real_escape_string($db,$_POST['login']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM users WHERE login = '$myusername' and haslo = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);


      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: admin_product.php");
      } else {
         echo "Niepoprawny login lub hasło. Spróbuj jeszcze raz <br><br>";
          ?> <a href="admin.php">Wróć do strony logowania...</a> <?php
      }
    }

    $db->close();



?>