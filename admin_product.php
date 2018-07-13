<?php 

    session_start();

    // jeśli użytkownik nie jest zalogowany, to przekierowanie do strony głównej
	if ((!isset($_SESSION['login_user'])))
		header('Location: index.php');

    require_once "connect.php";

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTECH - Panel admina - Produkty</title>
    <meta name="robots" content="nofollow" />
    <link rel="stylesheet" href="style_admin.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
    
    <style>
    
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        .btn {
            padding: 12px 24px;
            background-color: #4CAF50;
            margin-right: 20px;
            color: white;
            text-decoration: none;
        }
        .btn:hover {
            background-color: gray;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2;}

        tr:hover {background-color: #ddd;}

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>

<body>

    <a class="btn" href="admin_newproduct.php">Dodaj nowy produkt</a>
    <a class="btn" href="wyloguj.php">Wyloguj się</a>

    <table>
        <thead>
            <th><strong>Nazwa 1</strong></th>
            <th><strong>Nazwa 2</strong></th>
            <th><strong>Rok produkcji</strong></th>
            <th><strong>Siła zamknięcia</strong></th>
            <th><strong>Średnica ślimaka [mm]: </strong></th>
            <th><strong>Gramatura wtrysku:</strong></th>
            <th><strong>Rozstaw kolumn [mm]:</strong></th>
            <th><strong>Sterowanie</strong></th>
            <th><strong>Inne 1</strong></th>
            <th><strong>Inne 2</strong></th>
            <th><strong>Inne 3</strong></th>
            <th><strong>Inne 4</strong></th>
            <th><strong>Inne 5</strong></th>
            <th><strong>Inne 6</strong></th>
            <th><strong>Inne 7</strong></th>
            <th><strong>Inne 8</strong></th>
            <th><strong>Inne 9</strong></th>
            <th><strong>Inne 10</strong></th>
            <th><strong>Edytuj</strong></th>
            <th><strong>Usuń</strong></th>
        </thead>
        <tbody>

            <!-- wyjęcie produktu z bazy i wyświetlenie go -->

            <?php

                $sql = "SELECT * FROM products ORDER BY ID_produktu";
                $result = $db->query($sql);

                if ($result->num_rows > 0)
                {
                    // output data of each row
                    while($row = $result->fetch_assoc())
                    {
                        $ID_produktu = $row['ID_produktu'];
                        $nazwa_1 = $row['nazwa_1'];
                        $nazwa_2 = $row['nazwa_2'];
                        $rok_produkcji = $row['rok_produkcji'];
                        $sila_zamkniecia = $row['sila_zamkniecia'];
                        $srednica_slimaka = $row['srednica_slimaka'];
                        $gramatura_wtrysku = $row['gramatura_wtrysku'];
                        $rozstaw_kolumn = $row['rozstaw_kolumn'];
                        $sterowanie = $row['sterowanie'];
                        $inne_1 = $row['inne_1'];
                        $inne_2 = $row['inne_2'];
                        $inne_3 = $row['inne_3'];
                        $inne_4 = $row['inne_4'];
                        $inne_5 = $row['inne_5'];
                        $inne_6 = $row['inne_6'];
                        $inne_7 = $row['inne_7'];
                        $inne_8 = $row['inne_8'];
                        $inne_9 = $row['inne_9'];
                        $inne_10 = $row['inne_10'];
                        ?>

                <tr>
                    <td><?php echo "<strong>".$nazwa_1."</strong>" ?></td>
                    <td><?php echo "<strong>".$nazwa_2."</strong>" ?></td>
                    <td><?php echo $rok_produkcji ?></td>
                    <td><?php echo $sila_zamkniecia ?></td>
                    <td><?php echo $srednica_slimaka ?></td>
                    <td><?php echo $gramatura_wtrysku ?></td>
                    <td><?php echo $rozstaw_kolumn ?></td>
                    <td><?php echo $sterowanie ?></td>
                    <td><?php echo $inne_1 ?></td>
                    <td><?php echo $inne_2 ?></td>
                    <td><?php echo $inne_3 ?></td>
                    <td><?php echo $inne_4 ?></td>
                    <td><?php echo $inne_5 ?></td>
                    <td><?php echo $inne_6 ?></td>
                    <td><?php echo $inne_7 ?></td>
                    <td><?php echo $inne_8 ?></td>
                    <td><?php echo $inne_9 ?></td>
                    <td><?php echo $inne_10 ?></td>
                    <td>
                        <a href='admin_editproduct.php?ID_produktu=<?php echo $ID_produktu ?>'>Edytuj produkt</a>
                    </td>
                    <td>
                        <a href='admin_deleteproduct.php?ID_produktu=<?php echo $ID_produktu ?>'>Usuń produkt</a>
                    </td>
                </tr>

            <?php
                    }
                }


            $db->close();
            ?>





        </tbody>
    </table>


</body>

</html>