<?php
session_start();
require_once "connect.php";
$ID_produktu = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTECH - Serwis i regeneracja wtryskarek</title>
    <meta name="description" content="ROTECH - Serwis i regeneracja wtryskarek">
    <meta name="keywords" content="wtryskarki, serwis wtryskarek, regenracja wtryskarek, rotech, rotech wtryskarki, oferta wtryskarek, rotech oferta, Michał Iłenda, Patrycja Chociej">
    <meta name="author" content="Michał Iłenda, Patrycja Chociej">
    <link rel="stylesheet" href="style.min.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=latin-ext" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>

    <a href="http://ro-tech.pl/" title="Rotech - Strona główna"  class="logo logo-produkt">
        <img src="img/rotech_logo.svg" alt="Rotech logo">
    </a>
    
    <div class="popup">
            <div class="btn-popup-close" title="Zamknij"><img src="img/close-button.svg"></div>
            
            <?php

                $sql = "SELECT ID_produktu, nazwa_1, nazwa_2, rok_produkcji, gramatura_wtrysku, sila_zamkniecia, srednica_slimaka, sterowanie FROM products ORDER BY ID_produktu";
                $result = $db->query($sql);

                if ($result->num_rows > 0)
                {
                    // output data of each row
                    while($row = $result->fetch_assoc())
                    {
                        $ID_produktu_p = $row['ID_produktu'];
                        $nazwa_1 = $row['nazwa_1'];
                        $nazwa_2 = $row['nazwa_2'];
                        $rok_produkcji = $row['rok_produkcji'];
                        $sila_zamkniecia = $row['sila_zamkniecia'];
                        $srednica_slimaka = $row['srednica_slimaka'];
                        $gramatura_wtrysku = $row['gramatura_wtrysku'];
                        $sterowanie = $row['sterowanie'];
                        ?>
            
                        <figure>
                            <a href="produkt.php?id=<?php echo $ID_produktu_p; ?>" >
                                <h3><?php echo $nazwa_1.' '.$nazwa_2; ?></h3>
                                    <div class="photo">
                                    <img src="uploads/<?php echo $ID_produktu_p; ?>_1.jpg" alt="wtryskarka">
                                    <div class="overlay"></div>
                                    <div class="btn-photo">Zobacz więcej</div>
                                </div>
                                <figcaption>
                                    <p>Rok produkcji: <?php echo $rok_produkcji; ?></p>
                                    <p>Gramatura wtrysku [g]: <?php echo $gramatura_wtrysku; ?></p>
                                    <p>Siła zamknięcia [kN]: <?php echo $sila_zamkniecia; ?></p>
                                    <p>Średnica ślimaka [mm]: <?php echo $srednica_slimaka; ?></p>
                                    <p>Sterowanie: <?php echo $sterowanie; ?></p>
                                </figcaption>
                            </a>
                        </figure>
                        
            
                        <?php
                    }
                }
            ?>
            
        </div>
        
        <div class="product">
    
            <?php

                $sql = "SELECT * FROM products WHERE ID_produktu='$ID_produktu'";
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
                    }
                }
                $licznik = 0;
                if (file_exists('uploads/'.$ID_produktu.'_1.jpg')) {
                    $licznik++;
                }
                if (file_exists('uploads/'.$ID_produktu.'_2.jpg')) {
                    $licznik++;
                }
                if (file_exists('uploads/'.$ID_produktu.'_3.jpg')) {
                    $licznik++;
                }
                if (file_exists('uploads/'.$ID_produktu.'_4.jpg')) {
                    $licznik++;
                }
                if (file_exists('uploads/'.$ID_produktu.'_5.jpg')) {
                    $licznik++;
                }
                if (file_exists('uploads/'.$ID_produktu.'_6.jpg')) {
                    $licznik++;
                }
            ?>
            
            <div class="divider-mobile">
                <a href="http://ro-tech.pl/">
                    <img src="img/arrow-left.svg" class="product-arrow-left" alt="arrow left" title="Wróć do strony głównej">
                </a>
                <a href="#" class="return-to-list">
                    <img src="img/menu.svg" class="menu-icon" alt="menu icon" title="Pokaż ofertę">
                </a>
            </div>
            
            <div class="product-main">
                <img src="uploads/<?php echo $ID_produktu.'_1.jpg'; ?>" alt="<?php echo $nazwa_1.' '.$nazwa_2; ?>" class="product-mainphoto">
                <h2><?php echo $nazwa_1; ?></h2>
                <h3><?php echo $nazwa_2; ?></h3>
                <img src="img/arrow.svg" class="product-arrow arrow-left arr" alt="arrow left" title="Poprzednie zdjęcie">
                <img src="img/arrow.svg" class="product-arrow arrow-right" alt="arrow right" title="Następne zdjęcie">
            </div>
            
            <div class="divider">
                <a href="http://ro-tech.pl/">
                    <img src="img/arrow-left.svg" class="product-arrow-left" alt="arrow left" title="Wróć do strony głównej">
                </a>
                <a href="#" class="return-to-list">
                    <img src="img/menu.svg" class="menu-icon" alt="menu icon" title="Pokaż ofertę">
                </a>
            </div>

            <div class="product-description">
                <h4>Rok produkcji<span><?php echo $rok_produkcji; ?></span></h4>
                <h4>Dane techniczne</h4>
                <ul class="product-list">
                    <li>Siła zamknięcia: <span><?php echo $sila_zamkniecia; ?></span></li>
                    <li>Średnica ślimaka [mm]: <span><?php echo $srednica_slimaka; ?></span></li>
                    <li>Gramatura wtrysku: <span><?php echo $gramatura_wtrysku; ?></span></li>
                    <li>Rozstaw kolumn [mm]: <span><?php echo $rozstaw_kolumn; ?></span></li>
                </ul>
                <h4>Sterowanie<span><?php echo $sterowanie; ?></span></h4>
                <h4>Inne</h4>
                <ul class="product-list-inne">
                    <li><?php echo $inne_1; ?></li>
                    <li><?php echo $inne_2; ?></li>
                    <li><?php echo $inne_3; ?></li>
                    <li><?php echo $inne_4; ?></li>
                    <li><?php echo $inne_5; ?></li>
                    <li><?php echo $inne_6; ?></li>
                    <li><?php echo $inne_7; ?></li>
                    <li><?php echo $inne_8; ?></li>
                    <li><?php echo $inne_9; ?></li>
                    <li><?php echo $inne_10; ?></li>
                </ul>
                
                <div class="product-gallery">
                    <?php
                     if (file_exists('uploads/'.$ID_produktu.'_1.jpg')) { ?>
                        <img class="product-photo photo1" src="uploads/<?php echo $ID_produktu.'_1.jpg'; ?>" alt="<?php echo $nazwa_1.' '.$nazwa_2; ?>" >
                    <?php } ?>
                    <?php
                     if (file_exists('uploads/'.$ID_produktu.'_2.jpg')) { ?>
                        <img class="product-photo photo2" src="uploads/<?php echo $ID_produktu.'_2.jpg'; ?>" alt="<?php echo $nazwa_1.' '.$nazwa_2; ?>" >
                    <?php } ?>
                    <?php
                     if (file_exists('uploads/'.$ID_produktu.'_3.jpg')) { ?>
                        <img class="product-photo photo3" src="uploads/<?php echo $ID_produktu.'_3.jpg'; ?>" alt="<?php echo $nazwa_1.' '.$nazwa_2; ?>" >
                    <?php } ?>
                    <?php
                     if (file_exists('uploads/'.$ID_produktu.'_4.jpg')) { ?>
                        <img class="product-photo photo4" src="uploads/<?php echo $ID_produktu.'_4.jpg'; ?>" alt="<?php echo $nazwa_1.' '.$nazwa_2; ?>" >
                    <?php } ?>
                    <?php
                     if (file_exists('uploads/'.$ID_produktu.'_5.jpg')) { ?>
                        <img class="product-photo photo5" src="uploads/<?php echo $ID_produktu.'_5.jpg'; ?>" alt="<?php echo $nazwa_1.' '.$nazwa_2; ?>" >
                    <?php } ?>
                    <?php
                     if (file_exists('uploads/'.$ID_produktu.'_6.jpg')) { ?>
                        <img class="product-photo photo6" src="uploads/<?php echo $ID_produktu.'_6.jpg'; ?>" alt="<?php echo $nazwa_1.' '.$nazwa_2; ?>" >
                    <?php } ?>
                </div>
                
                <a href="uploads/<?php echo $ID_produktu.'_katalog.pdf'; ?>" title="Pobierz kartę katalogową" download>
                    <button class="btn-offer btn-download">
                        Karta katalogowa
                    </button>
                </a>
                
            </div>
            
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/script.min.js"></script>
    <script>
        $('.return-to-list').on('click', function() {
            $('.popup').css({'z-index': 100});
                $('.popup').fadeIn();
        });
        
        $('.btn-popup-close').on('click', function() {
            $('.popup').fadeOut();
        });
        
        
        var p = 1;
        
        $('.arrow-right').on('click', function() {
            p++;
            if ((p > 0) && (p <= <?php echo $licznik; ?>))
            {
                var str1 = 'uploads/';
                var str2 = '<?php echo $ID_produktu; ?>';
                var str3 = '_';
                var str4 = p;
                var str5 = '.jpg';

                $('.product-mainphoto').attr('src', str1.concat(str2, str3, str4, str5));
            }
        });
        $('.arrow-left').on('click', function() {
            p--;
            if ((p > 0) && (p <= <?php echo $licznik; ?>))
            {
                var str1 = 'uploads/';
                var str2 = '<?php echo $ID_produktu; ?>';
                var str3 = '_';
                var str4 = p;
                var str5 = '.jpg';

                $('.product-mainphoto').attr('src', str1.concat(str2, str3, str4, str5));
                
            }
        });
        
        $('.photo2').on('click', function() {
            $('.product-mainphoto').attr('src', 'uploads/<?php echo $ID_produktu; ?>_2.jpg');
        });
        $('.photo3').on('click', function() {
            $('.product-mainphoto').attr('src', 'uploads/<?php echo $ID_produktu; ?>_3.jpg');
        });
        $('.photo4').on('click', function() {
            $('.product-mainphoto').attr('src', 'uploads/<?php echo $ID_produktu; ?>_4.jpg');
        });
        $('.photo5').on('click', function() {
            $('.product-mainphoto').attr('src', 'uploads/<?php echo $ID_produktu; ?>_5.jpg');
        });
        $('.photo6').on('click', function() {
            $('.product-mainphoto').attr('src', 'uploads/<?php echo $ID_produktu; ?>_6.jpg');
        });
        $('.photo1').on('click', function() {
            $('.product-mainphoto').attr('src', 'uploads/<?php echo $ID_produktu; ?>_1.jpg');
        });
                    

    </script>
</body>
</html>