<?php 

    session_start();

    // jeśli użytkownik nie jest zalogowany, to przekierowanie do strony głównej
	if ((!isset($_SESSION['login_user'])))
		header('Location: index.php');

    require_once "connect.php";

    $ID_produktu = $_GET['ID_produktu'];
    
    if ((isset($_POST['nazwa_1'])) && ($_POST['nazwa_1'])!=NULL) {
        $nazwa_1 = $_POST['nazwa_1'];
        
        if ($db->query("UPDATE products SET nazwa_1='$nazwa_1' WHERE ID_produktu='$ID_produktu'")){;}
        else {
            throw new Exception($db->error);
        }
    }
    
    if ((isset($_POST['nazwa_2'])) && ($_POST['nazwa_2'])!=NULL) {
        $nazwa_2 = $_POST['nazwa_2'];
        
        if ($db->query("UPDATE products SET nazwa_2='$nazwa_2' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    
    if ((isset($_POST['rok_produkcji'])) && ($_POST['rok_produkcji'])!=NULL) {
        $rok_produkcji = $_POST['rok_produkcji'];
        
        if ($db->query("UPDATE products SET rok_produkcji='$rok_produkcji' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    
    if ((isset($_POST['sila_zamkniecia'])) && ($_POST['sila_zamkniecia'])!=NULL) {
        $sila_zamkniecia = $_POST['sila_zamkniecia'];
        
        if ($db->query("UPDATE products SET sila_zamkniecia='$sila_zamkniecia' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    
    if ((isset($_POST['srednica_slimaka'])) && ($_POST['srednica_slimaka'])!=NULL) {
        $srednica_slimaka = $_POST['srednica_slimaka'];
        
        if ($db->query("UPDATE products SET srednica_slimaka='$srednica_slimaka' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    
    if ((isset($_POST['gramatura_wtrysku'])) && ($_POST['gramatura_wtrysku'])!=NULL) {
        $gramatura_wtrysku = $_POST['gramatura_wtrysku'];
        
        if ($db->query("UPDATE products SET gramatura_wtrysku='$gramatura_wtrysku' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
        
    if ((isset($_POST['rozstaw_kolumn'])) && ($_POST['rozstaw_kolumn'])!=NULL) {
        $rozstaw_kolumn = $_POST['rozstaw_kolumn'];
        
        if ($db->query("UPDATE products SET rozstaw_kolumn='$rozstaw_kolumn' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    
    if ((isset($_POST['sterowanie'])) && ($_POST['sterowanie'])!=NULL) {
        $sterowanie = $_POST['sterowanie'];
        
        if ($db->query("UPDATE products SET sterowanie='$sterowanie' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    if ((isset($_POST['nazwa_2'])) && ($_POST['nazwa_1'])!=NULL) {
        $inne_1 = $_POST['inne_1'];
        
        if ($db->query("UPDATE products SET inne_1='$inne_1' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
        
    if ((isset($_POST['inne_2'])) && ($_POST['inne_2'])!=NULL) {
        $inne_2 = $_POST['inne_2'];
        
        if ($db->query("UPDATE products SET inne_2='$inne_2' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    if ((isset($_POST['inne_3'])) && ($_POST['inne_3'])!=NULL) {
        $inne_3 = $_POST['inne_3'];
        
        if ($db->query("UPDATE products SET inne_3='$inne_3' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    if ((isset($_POST['inne_4'])) && ($_POST['inne_4'])!=NULL) {
        $inne_4 = $_POST['inne_4'];
        
        if ($db->query("UPDATE products SET inne_4='$inne_4' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    if ((isset($_POST['inne_5'])) && ($_POST['inne_5'])!=NULL) {
        $inne_5 = $_POST['inne_5'];
        
        if ($db->query("UPDATE products SET inne_5='$inne_5' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
        
    if ((isset($_POST['inne_6'])) && ($_POST['inne_6'])!=NULL) {
        $inne_6 = $_POST['inne_6'];
        
        if ($db->query("UPDATE products SET inne_6='$inne_6' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    if ((isset($_POST['inne_7'])) && ($_POST['inne_7'])!=NULL) {
        $inne_7 = $_POST['inne_7'];
        
        if ($db->query("UPDATE products SET inne_7='$inne_7' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    if ((isset($_POST['inne_8'])) && ($_POST['inne_8'])!=NULL) {
        $inne_8 = $_POST['inne_8'];
        
        if ($db->query("UPDATE products SET inne_8='$inne_8' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    if ((isset($_POST['inne_9'])) && ($_POST['inne_9'])!=NULL) {
        $inne_9 = $_POST['inne_9'];
        
        if ($db->query("UPDATE products SET inne_9='$inne_9' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }
    if ((isset($_POST['inne_10'])) && ($_POST['inne_10'])!=NULL) {
        $inne_10 = $_POST['inne_10'];
        
        if ($db->query("UPDATE products SET inne_10='$inne_10' WHERE ID_produktu='$ID_produktu'")){;} 
        else {
            throw new Exception($db->error);
        }
    }

/*
    if ((isset($_POST['zdj_1'])) && ($_POST['zdj_1'])!=NULL) {
        $new_file_name = $ID_produktu."_1";
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["zdj_1"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file = $target_dir . $new_file_name .'.' . $imageFileType;
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["zdj_1"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Plik nie jest obrazem.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Taki plik już istnieje.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["zdj_1"]["size"] > 500000) {
            echo "Zdjęcie 1 ma za duży rozmiar.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg") {
            echo "Tylko pliki JPG są dozwolone.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Plik nie został przesłany.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["zdj_1"]["tmp_name"], $target_file)) {
                //echo "Plik 1 ". basename( $_FILES["zdj_1"]["name"]). " został przesłany.";
            } else {
                echo "Podczas przesyłania pliku 1 wystąpił błąd.";
            }
        }
    }

    if ((isset($_POST['zdj_2'])) && ($_POST['zdj_2'])!=NULL) {
        $new_file_name = $ID_produktu."_2";
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["zdj_2"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file = $target_dir . $new_file_name .'.' . $imageFileType;
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["zdj_2"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Plik nie jest obrazem.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Taki plik już istnieje.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["zdj_2"]["size"] > 500000) {
            echo "Zdjęcie 2 ma za duży rozmiar.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg") {
            echo "Tylko pliki JPG są dozwolone.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Plik nie został przesłany.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["zdj_2"]["tmp_name"], $target_file)) {
                //echo "Plik 2 ". basename( $_FILES["zdj_2"]["name"]). " został przesłany.";
            } else {
                echo "Podczas przesyłania pliku 2 wystąpił błąd.";
            }
        }
    }

    if ((isset($_POST['zdj_3'])) && ($_POST['zdj_3'])!=NULL) {
        $new_file_name = $ID_produktu."_3";
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["zdj_3"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file = $target_dir . $new_file_name .'.' . $imageFileType;
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["zdj_3"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Plik 3 nie jest obrazem.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Taki plik już istnieje.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["zdj_3"]["size"] > 500000) {
            echo "Zdjęcie 3 ma za duży rozmiar.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg") {
            echo "Tylko pliki JPG są dozwolone.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Plik 3 nie został przesłany.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["zdj_3"]["tmp_name"], $target_file)) {
                //echo "Plik 3 ". basename( $_FILES["zdj_3"]["name"]). " został przesłany.";
            } else {
                echo "Podczas przesyłania pliku 3 wystąpił błąd.";
            }
        }
    }

    if ((isset($_POST['zdj_4'])) && ($_POST['zdj_4'])!=NULL) {
        $new_file_name = $ID_produktu."_4";
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["zdj_4"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file = $target_dir . $new_file_name .'.' . $imageFileType;
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["zdj_4"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Plik nie jest obrazem.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Taki plik już istnieje.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["zdj_4"]["size"] > 500000) {
            echo "Zdjęcie 4 ma za duży rozmiar.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg") {
            echo "Tylko pliki JPG są dozwolone.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Plik nie został przesłany.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["zdj_4"]["tmp_name"], $target_file)) {
                //echo "Plik 4 ". basename( $_FILES["zdj_4"]["name"]). " został przesłany.";
            } else {
                echo "Podczas przesyłania pliku 4 wystąpił błąd.";
            }
        }
    }

    if ((isset($_POST['zdj_5'])) && ($_POST['zdj_5'])!=NULL) {
        $new_file_name = $ID_produktu."_5";
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["zdj_5"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file = $target_dir . $new_file_name .'.' . $imageFileType;
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["zdj_5"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Plik nie jest obrazem.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Taki plik już istnieje.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["zdj_5"]["size"] > 500000) {
            echo "Zdjęcie 5 ma za duży rozmiar.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg") {
            echo "Tylko pliki JPG są dozwolone.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Plik 5 nie został przesłany.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["zdj_5"]["tmp_name"], $target_file)) {
                //echo "Plik 5 ". basename( $_FILES["zdj_5"]["name"]). " został przesłany.";
            } else {
                echo "Podczas przesyłania pliku 5 wystąpił błąd.";
            }
        }
    }

    if ((isset($_POST['zdj_6'])) && ($_POST['zdj_6'])!=NULL) {
        $new_file_name = $ID_produktu."_6";
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["zdj_6"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file = $target_dir . $new_file_name .'.' . $imageFileType;
        
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["zdj_6"]["tmp_name"]);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Plik 6 nie jest obrazem.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Taki plik już istnieje.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["zdj_6"]["size"] > 500000) {
            echo "Zdjęcie 6 ma za duży rozmiar.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg") {
            echo "Tylko pliki JPG są dozwolone.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Plik 6 nie został przesłany.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["zdj_6"]["tmp_name"], $target_file)) {
                //echo "Plik 6 ". basename( $_FILES["zdj_6"]["name"]). " został przesłany.";
            } else {
                echo "Podczas przesyłania pliku 6 wystąpił błąd.";
            }
        }
    }

    if ((isset($_POST['zalacznik'])) && ($_POST['zalacznik'])!=NULL) {
        // pdf
        $new_file_name = $ID_produktu."_katalog";
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["zalacznik"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $target_file = $target_dir . $new_file_name .'.' . $imageFileType;
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Taki plik już istnieje.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["zalacznik"]["size"] > 5000000) {
            echo "Załącznik jest za duży.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "pdf") {
            echo "Tylko pliki PDF są dozwolone.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Załącznik nie został przesłany.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["zalacznik"]["tmp_name"], $target_file)) {
                //echo "Załącznik ". basename( $_FILES["zalacznik"]["name"]). " został przesłany.";
            } else {
                echo "Podczas przesyłania załącznika wystąpił błąd.";
            }
        }
    }
*/

        
    $db->close();

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTECH - Panel admina - Edycja produktu</title>
    <meta name="robots" content="nofollow" />
    <link rel="stylesheet" href="style_admin.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>

    <a class="btn" href="admin_product.php">Panel admina</a>
    <a class="btn" href="admin_newproduct.php">Dodaj nowy produkt</a>
    <a class="btn" href="wyloguj.php">Wyloguj się</a>

    
    
    <form method="post" action="" class="form_new_product" enctype="multipart/form-data">
        <h3>Edycja produktu</h3>
        <h3>Wypełnij tylko te pola, które ulegają zmianie</h3>

        <label>Nazwa 1: </label>
        <input type="text" name="nazwa_1" placeholder="Nazwa 1..." />

        <label>Nazwa 2: </label>
        <input type="text" name="nazwa_2" placeholder="Nazwa 2..." />

        <label>Rok produkcji: </label>
        <input type="text" name="rok_produkcji" placeholder="Rok produkcji..." />

        <label>Siła zamknięcia: </label>
        <input type="text" name="sila_zamkniecia" placeholder="Siła zamknięcia..." />

        <label>Średnica ślimaka: </label>
        <input type="text" name="srednica_slimaka" placeholder="Średnica ślimaka..." />

        <label>Gramatura wtrysku: </label>
        <input type="text" name="gramatura_wtrysku" placeholder="Gramatura wtrysku..." />

        <label>Rozstaw kolumn: </label>
        <input type="text" name="rozstaw_kolumn" placeholder="Rozstaw kolumn..." />

        <label>Sterowanie: </label>
        <input type="text" name="sterowanie" placeholder="Sterowanie..." />

        <label>Inne 1: </label>
        <input type="text" name="inne_1" placeholder="Inne 1..."  />

        <label>Inne 2: </label>
        <input type="text" name="inne_2" placeholder="Inne 2..."   />

        <label>Inne 3: </label>
        <input type="text" name="inne_3" placeholder="Inne 3..."   />

        <label>Inne 4: </label>
        <input type="text" name="inne_4" placeholder="Inne 4..."  />

        <label>Inne 5: </label>
        <input type="text" name="inne_5" placeholder="Inne 5..."  />

        <label>Inne 6: </label>
        <input type="text" name="inne_6" placeholder="Inne 6..." />

        <label>Inne 7: </label>
        <input type="text" name="inne_7" placeholder="Inne 7..."  />

        <label>Inne 8: </label>
        <input type="text" name="inne_8" placeholder="Inne 8..." />

        <label>Inne 9: </label>
        <input type="text" name="inne_9" placeholder="Inne 9..."  />

        <label>Inne 10: </label>
        <input type="text" name="inne_10" placeholder="Inne 10..."  />
<!--
        <h4>Pamiętaj o zoptymalizowaniu zdjęć przed uploadem!</h4>
        
        <label>Zdjęcie 1: </label>
        <input type="file" name="zdj_1" placeholder="Zdjęcie 1..." /><br><br>

        <label>Zdjęcie 2: </label>
        <input type="file" name="zdj_2" placeholder="Zdjęcie 2..." /><br><br>

        <label>Zdjęcie 3: </label>
        <input type="file" name="zdj_3" placeholder="Zdjęcie 3..." /><br><br>

        <label>Zdjęcie 4: </label>
        <input type="file" name="zdj_4" placeholder="Zdjęcie 4..." /><br><br>

        <label>Zdjęcie 5: </label>
        <input type="file" name="zdj_5" placeholder="Zdjęcie 5..." /><br><br>

        <label>Zdjęcie 6: </label>
        <input type="file" name="zdj_6" placeholder="Zdjęcie 6..." /><br><br>

        <label>Załącznik [pdf]: </label>
        <input type="file" name="zalacznik" placeholder="Wybierz plik..." /><br><br>-->


        <input type="submit" class="btn" value="Edytuj ten produkt">
    </form>






        </tbody>
    </table>


</body>

</html>