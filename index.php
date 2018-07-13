<?php
session_start();
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROTECH - Serwis i regeneracja wtryskarek</title>
    <meta name="description" content="ROTECH - Serwis i regeneracja wtryskarek">
    <meta name="keywords" content="wtryskarki, serwis wtryskarek, regeneracja wtryskarek, rotech, rotech wtryskarki, oferta wtryskarek, rotech oferta, Michał Iłenda, Patrycja Chociej, Pracownia Kreatywna, Grabówka, wtryskarki grabówka">
    <meta name="author" content="Michał Iłenda, Patrycja Chociej, Pracownia Kreatywna">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-touch-events/1.0.9/jquery.mobile-events.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=latin-ext" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
    
    <div id="particles-js-2"></div>
    <div id="particles-js"></div>
    <div class="menu-mobile" title="Menu"><img src="img/menu-button.svg"></div>
    
    <header>
        <div class="btn-menu-mobile-close" title="Zamknij"><img src="img/close-button.svg"></div>
        
        <ul class="wrapper">
            <li><a href="http://ro-tech.pl/" title="Rotech - Strona główna"  class="logo"><img src="img/rotech_logo.svg" alt="Rotech logo"></a></li>
            <li class="btn-popup-contact open-contact" title="Skontaktuj się"><a href="#">Kontakt</a></li>
            <li class="do-sprzedazy"><a href="#" title="Sprzedaż">Sprzedaż</a></li>
            <li class="do-relokacji"><a href="#" title="Relokacja">Relokacja</a></li>
            <li class="do-serwisu"><a href="#" title="Serwis">Serwis</a></li>
        </ul>
    </header>

    <main>
        
        <script>
            <?php
                if ((isset($_SESSION["message_sent"])) && ($_SESSION["message_sent"] == "success"))
                {
                    ?>
                    alert('Wiadomość wysłana! Odpowiemy najszybciej jak to możliwe!');
                    <?php
                    unset($_SESSION['message_sent']);
                }
                ?>
                    
        </script>
        
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
                        $ID_produktu = $row['ID_produktu'];
                        $nazwa_1 = $row['nazwa_1'];
                        $nazwa_2 = $row['nazwa_2'];
                        $rok_produkcji = $row['rok_produkcji'];
                        $sila_zamkniecia = $row['sila_zamkniecia'];
                        $srednica_slimaka = $row['srednica_slimaka'];
                        $gramatura_wtrysku = $row['gramatura_wtrysku'];
                        $sterowanie = $row['sterowanie'];
                        ?>
            
                        <figure>
                            <a href="produkt.php?id=<?php echo $ID_produktu; ?>" >
                                <h3><?php echo $nazwa_1.' '.$nazwa_2; ?></h3>
                                    <div class="photo">
                                    <img src="uploads/<?php echo $ID_produktu; ?>_1.jpg" alt="wtryskarka">
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
        
        
        
        <section id="home">
            <img class="swipe-right swipe-home" src="img/arrow.svg">
            <img class="rotech-big-text" src="img/pasek-rotech.svg" alt="Rotech">
            
            <img class="machine" src="img/machine-1.png" alt="Wtryskarka">
            
            <div class="text text-home">
                <h1>Serwis - Relokacja - Sprzedaż</h1>
                <h3>Rotech to prężnie działająca firma, profesjonalnie zajmująca się wtryskarkami. 
                Specjalizujemy się w serwisie, sprzedaży i relokacji tych maszyn. 
                Wieloletnie doświadczenie pozwoliło nam perfekcyjnie poznać urządzenia firmy ENGEL i serwisowanie maszyn tej marki nie ma dla nas żadnych tajemnic, niezależnie od tego czy uwagi wymaga elektronika czy podzespoły mechaniczne.
                </h3>
            </div>
            
        </section>
        
        <div class="wrapper wrapper-btn">
                <div class="message-btn open-contact" title="Skontaktuj się">
                    <img class="message-desktop" src="img/message.svg" alt="Kontakt">
                    <a href="tel:+48698822982"><img class="message-mobile" src="img/phone.svg" alt="Kontakt"></a>
                </div>
            </div>
        
        <section id="serwis">
            <img class="swipe-left swipe-left-home" src="img/arrow.svg">
            <img class="swipe-right swipe-serwis" src="img/arrow.svg">
            <img class="rotech-big-text" src="img/pasek-serwis.svg" alt="Rotech serwis">
            <img class="machine" src="img/machine-2.png" alt="Wtryskarka">
            
            <div class="text text-serwis">
                <h1>Specjalizacja engel</h1>
                <h3>Przez wiele lat praktyki w branży wyspecjalizowaliśmy się w serwisowaniu maszyn firmy ENGEL i  serwisowanie tej marki nie ma dla nas żadnych tajemnic, bez problemu naprawiamy elektronikę, automatykę i podzespoły mechaniczne. 
                Świadczymy nasze usługi na terenie całej Polski. Wiemy doskonale jak ważne jest utrzymanie ciągłości produkcji i w naszej pracy stawiamy na profesjonalizm, perfekcyjną diagnozę usterki i mobilność. Zawsze działamy tak szybko jak to możliwe.  W efekcie naszej pracy pozyskaliśmy wielu stałych klientów, zadowolonych z jakości naszych usług. 
                Będzie nam miło jeśli i Twoja firma nam zaufa.
                </h3>
            </div>
            
        </section>
        
        
        <section id="relokacja">
            <img class="swipe-left swipe-left-serwis" src="img/arrow.svg">
            <img class="swipe-right swipe-relokacja" src="img/arrow.svg">
            <img class="rotech-big-text big-text-relokacja" src="img/pasek-relokacja.svg" alt="Rotech relokacja">
            <img class="machine wozek" src="img/machine-3.png" alt="Wtryskarka">
            
            <div class="text text-relokacja">
                <h1>Zleć to nam</h1>
                <h3>Zmiana lokalizacji dużych, ciężkich maszyn może przysparzać wielu problemów. Przeniesienie do nowej hali, innego zakładu czy transport zakupionego urządzenia to nie jest łatwe zadanie. Takich zadań chętnie się podejmujemy, dysponujemy odpowiednim sprzętem, wiedzą techniczną i logistyczną. Relokacja maszyn jest jedną z naszych mocnych stron.
                Znajomość tematyki pozwala nam przyjmować zlecenia na relokację maszyn na terenie całej Europy.
                </h3>
            </div>
            
        </section>
        
        <section id="oferta">
            <img class="swipe-left swipe-left-oferta" src="img/arrow.svg">
            <img class="rotech-big-text big-text-sprzedaz" src="img/pasek-sprzedaz.svg" alt="Rotech oferta">
            
            <img class="machine" src="img/machine-1.png" alt="Wtryskarka">
            
            <div class="text text-sprzedaz">
                <h1>Sprzedajemy używane wtryskarki</h1>
                <h3>Każda z oferowanych maszyn jest godna uwagi. Wszystkie podlegają drobiazgowemu sprawdzeniu stanu technicznego i są gotowe do podjęcia pracy w Twojej firmie. Zapraszam do zapoznania się z ofertą. Jeśli nie ma w przedstawionej ofercie odpowiedniego urządzenia, zachęcamy do kontaktu bezpośredniego, najprawdopodobniej będziemy mogli pomóc.</h3>
                <button class="btn-popup btn-offer">Zobacz naszą ofertę</button>
            </div>
            
        </section>
        
        
        <section id="contact">
            <div class="btn-popup-contact-close" title="Zamknij"><img src="img/close-button.svg"></div>
            <h4>
                Napisz do nas!
            </h4>
            
            <form class="contact-form" name="contact-form" method="post" action="send_form_email.php" onsubmit="return validateForm()">
                
                <h6>Proszę dokładnie wypełnić dane, żebyśmy mogli odpisać</h6>
                
                <input id="name" class="input-text" type="text" name="fname" placeholder="Imię i nazwisko" >
                
                <input id="email" class="input-text" type="email" name="femail"  placeholder="Adres e-mail">
                
                <textarea id="message" class="input-text-message" name="ftextmessage" type="text" rows="4" placeholder="Wiadomość"></textarea>
                
                <div>
                    <input class="btn-contact" type="submit" value="Wyślij">
                </div>
            </form>
            
            <address class="contact-details">
                <p>
                    <img src="img/phone-white.svg">+48 698 822 982
                </p><br>
                <p>
                    <img src="img/location.svg">ul. Kwiatowa 16<br>
                    15-523 Grabówka
                </p><br>
                <p>
                    <img src="img/mail.svg">
                    biuro@ro-tech.pl
                </p>
                
            </address>
            
        </section>

    </main>
    
    <footer>
        <span>Projekt i wykonanie: <a href="http://www.pracowniakreatywna.pl/">Pracownia Kreatywna</a></span>
    </footer>
    
    <script src="scripts/particles.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="scripts/script.js"></script>
    

</body>
</html>