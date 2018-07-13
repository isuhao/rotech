<?php 

    session_start();

    // jeśli użytkownik nie jest zalogowany, to przekierowanie do strony głównej
	if ((!isset($_SESSION['login_user'])))
		header('Location: index.php');

    require_once "connect.php";

    if(isset($_GET['ID_produktu'])) 
	{
		$ID_produktu = $_GET['ID_produktu'];

		try
        {
            if ($db->query("DELETE FROM products WHERE ID_produktu = '$ID_produktu'"))
            {
                header("Location: admin_product.php");
            }
            else
            {
                throw new Exception($polaczenie->error);
            }
                
            
            $db->close();
        }
        catch(Exception $e)
        {
            echo '<span style="color:red;">B³¹d serwera! Za utrudnienia prepraszamy :(</span>';
            echo "<br />Informacja developerska: ".$e;
        }
		
		
}


?>
