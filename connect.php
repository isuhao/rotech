<?php
   define('DB_SERVER', 'pracownia.home.pl');
   define('DB_USERNAME', '00934325_rotech');
   define('DB_PASSWORD', 'haslo123');
   define('DB_DATABASE', '00934325_rotech');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    // Check connection
    if($db === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>