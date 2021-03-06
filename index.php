<?php require 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>RIT SAULE &mdash; Grāmatvedības pakalpojumi tev</title>
    </head>
    <body class="container">
        <header>
            <nav>
                <div class="main-nav row">
                    <img src="/img/logo-white.png" alt="Omnifood logo" class="logo">
                    <img src="/img/logo.png" alt="Omnifood logo" class="logo-black">
                    <ul class="main-nav__list js--main-nav__list">
                        <li><a href="#apraksts">Apraksts</a></li>
                        <li><a href="#pakalpojumi">Pakalpojumi</a></li>
                        <li><a href="#par-mums">Par mums</a></li>
                        <li><a href="#musu-kontakti">Mūsu kontakti</a></li>
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon">
                        <svg class="menu-icon-open" >
                            <use xlink:href="img/sprite.svg#icon-menu"></use>
                        </svg>

                        <svg class="menu-icon-close" >
                            <use xlink:href="img/sprite.svg#icon-cross"></use>
                        </svg>
                    </a>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>Grāmatvedības pakalpojumi</h1>
                <a class="btn btn-full btn-full-top js--scroll-to-musu-kontakti" href="#">Sazināties</a>
                <a class="btn btn-ghost js--scroll-to-pakalpojumi" href="#">Parādīt vairāk</a>
            </div>

        </header>
        <section class="apraksts js--section-apraksts" id="apraksts">
            <div class="row">
                <h2>Grāmatvedības pakalpojumi visā Latvijā</h2>
                <p class="long-copy">
                    Katra uzņēmuma pienākums ir kārtot grāmatvedību – mēs Jums sakārtosim
                    grāmatvedības uzskaiti savlaicīgi, saprotami un pilnīgi. Kā arī
                    nodrošināsim ieņēmumu un izdevumu norobežošanu pa pārskata periodiem.
                </p>
            </div>
            <div class="apraksts-desc row js--wp-1">
                <div class="apraksts__col">
                    <svg class="apraksts__col__icon">
                        <use xlink:href="img/sprite.svg#icon-books"></use>
                    </svg>
                    <h3>Finanšu grāmatvedība</h3>
                    <p>
                        Nodrošināsim finanšu pārskata lietotājus ar patiesu un pilnīgu informāciju
                        pār uzņēmuma finansu stāvokli, saistībām un  saimnieciskās darbības rezultātiem.
                    </p>
                </div>

                <div class="apraksts__col">
                    <svg class="apraksts__col__icon">
                        <use xlink:href="img/sprite.svg#icon-stats-bars"></use>
                    </svg>
                    <h3>Vadības grāmatvedība</h3>
                    <p>
                        Nodrošināsim uzņēmuma administrāciju ar nepieciešamo informāciju
                        ekonomiski pamatotu lēmumu pieņemšanai. Lēmumu pieņemšana ir vajadzīga
                        problēmu risinājuma izvēlē, kas nodrošina mērķa sasniegšanu.
                    </p>
                </div>

                <div class="apraksts__col">
                    <svg class="apraksts__col__icon">
                        <use xlink:href="img/sprite.svg#icon-user-tie"></use>
                    </svg>
                    <h3>pašnodarbināto grāmatvedība</h3>
                    <p>
                        Nodrošināsim saimnieciskās darbības un pamatlīdzekļu uzskaiti, izdevumu un ieņēmumu atspoguļošanu grāmatvedībā, kā arī aprēķināsim un deklarēsim nodokļus.
                    </p>
                </div>
            </div>
        </section>
        <section class="quote">
            <h1 class="quote__text row">“Grāmatvedība ir biznesa valoda”</h1>
            <p class="quote__author row">– Vorens Bafets</p>
        </section>

        <section class="pakalpojumi js--section-pakalpojumi" id="pakalpojumi">
            <div class="row">
                <h2>Pakalpojumi ko mēs sniedzam</h2>
            </div>
            <div class="row">
                <div class="pakalpojums js--wp-2">
                    <h3 class="pakalpojums__title">Finanšu grāmatvedība</h3>
                    <div class="pakalpojums__points">

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Pirmdokumentu pārbaude un apstrāde atbilstoši LR normatīvo aktu
                                prasībām.
                            </p>
                        </div>

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Visa veida grāmatvedības pārskatu sagatavošana (ilgtermiņa
                                ieguldījumu, krājumu, debitoru, kreditoru, darba algu aprēķini, virsgrāmata, salīdzināšanas akti), tai skaitā gada pārskata sagatavošana (bilance, naudas plūsma, pašu kapitāla pārskats, u.c.).
                            </p>
                        </div>

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Nodokļu pārskatu  (VSAOI, IIN, PVN, MUN, UIN u.c.) sagatavošana
                                un iesniegšana EDS.
                            </p>
                        </div>

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Statistikas pārskatu (par finansiālo stāvokli, 2-darbs u.c.) sagatavošana un iesniegšana CSB.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pakalpojums js--wp-3">
                    <h3 class="pakalpojums__title">Vadības grāmatvedība</h3>
                    <div class="pakalpojums__points">

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Pašizmaksu aprēķini.
                            </p>
                        </div>

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Budžeta plānošana un kontrole.
                            </p>
                        </div>

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Finanšu analīze.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pakalpojums js--wp-4">
                    <h3 class="pakalpojums__title">Pašnodarbināto grāmatvedība</h3>
                    <div class="pakalpojums__points">

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Grāmatvedības kārtošana un organizācija.
                            </p>
                        </div>

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Saimnieciskās darbības ieņēmumu un izdevumu uzskaite
                            </p>
                        </div>

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Nodokļu aprēķināšana un uzskaite
                            </p>
                        </div>

                        <div class="pakalpojums__point">
                            <svg class="pakalpojums__point__icon">
                                <use xlink:href="img/sprite.svg#icon-chevron-thin-right"></use>
                            </svg>
                            <p class="pakalpojums__point__text">
                                Vienkāršā ieraksta grāmatvedības programma
                                <a href="https://www.zutenis.lv/">Zutenis</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="par-mums js--section-par-mums" id="par-mums">
            <div class="row">
                <h2>Kas mēs esam</h2>
                <p class="par-mums_text">
                    SIA RIT SAULE ir ārpakalpojumu grāmatvedības un citu pakalpoju
                    firma, kas savu darbību ir uzsākusi 2016. gadā. Un piedāvā finanšu,
                    vadības un pašnodarbināto grāmatvedības pakalpojumus. Kā arī konsultēšanu
                    nodokļu jautājumos pašnodarbinātajiem, IK, uzņēmumiem un
                    pašvaldībām.
                </p>
            </div>
        </section>

        <section class="musu-kontakti js--section-musu-kontakti" id="musu-kontakti">
            <div class="row" id="form">
                <h2>Ar prieku gaidīsim no Tevis ziņu</h2>
                <p class="musu-kontakti__text">Lai sazinātos ar mums varat nosūtīt mums e-pastu vai piezvanīt,
                    lai sarunātu tikšanos. Mūsu vispārējais atbildes laiks ir viena darba diena.</p>
            </div>
            <div class="musu-kontakti__container row">
                <form method="post" action="" class="contact-form">
                    <div class="contact-form__row">
                        <label for="name">Vārds</label>
                        <input type="text" name="name" id="name" placeholder="Tavs vārds" required>
                    </div>
                    <div class="contact-form__row">
                        <label for="email">E-pasts</label>
                        <input type="email" name="email" id="email" placeholder="Tavs e-pasts" required>
                    </div>
                    <div class="contact-form__row">
                        <label for="find-us">Kā Tu mūs atradi?</label>
                        <select name="find-us" id="find-us">
                            <option value="friends | Draugs" >Draugs</option>
                            <option value="search | Google" selected>Google</option>
                            <option value="ad | Reklāma">Reklāma</option>
                            <option value="other | Cits">Cits</option>
                        </select>
                    </div>
                    <div class="contact-form__row">
                        <label for="message">Padod mums ziņu</label>
                        <textarea name="message" id="message" placeholder="Tava ziņa"></textarea>
                    </div>
                    <div class="contact-form__row">
                        <label>&nbsp</label>
                        <input type="submit" name="submit" value="Nosūtīt!" class="submit-button">

                        <!--alert messages start-->
                        <?php
                            if (isset($_GET['success'])) {
                                if($_GET['success'] == 1){
                                    echo '<div class="form-message success"><p>Ziņa tika nosūtīta!</p></div>';
                                }

                                if($_GET['success'] == -1){
                                    echo '<div class="form-message error"><p>Kaut kas nogāja greizi! Mēģini vēlreiz.</p></div>';
                                }
                            }
                        ?>
                        <!--alert messages end-->
                    </div>
                </form>
            </div>
        </section>


    </body>
    <footer>
        <div class="">
            <ul class="footer-nav">
                <li><a href="https://www.facebook.com/katrina.alksnealksnite">Facebook</a></li>
                <li><a>(+371) 26475683</a></li>
                <li><a>katrina@ritsaule.lv</a></li>
            </ul>
        </div>
        <p>
            Copyright &copy; 2020 by RIT SAULE. All rights reserved.
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.1.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="js/script.js"></script>
</html>