<?php require_once "nav.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/upload/favicon.png">
    <title>ВПШ - Земун</title>
    <!-- Font Awesome 5 | visit: https://fontawesome.com/v5.15/icons?d=gallery&p=2 -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/assets/css/style.css">

</head>
<body>
<!-------- TOP BAR -------->
<section class="top-bar">
    <article class="container">
        <ul>
            <li><i class="fas fa-phone"></i><?php echo TELEFON; ?></li>
            <li><i class="fas fa-map-marker-alt"></i><?php echo ADRESA; ?></li>
            <li><i class="fas fa-clock"></i><?php echo RADNO_VREME; ?></li>
        </ul>
    </article>
</section>
<!-------- NAV -------->
<nav>
    <article class="container-fluid">
        <div class="logo">
            <a href="/">
                <img src="upload/logo-blue.png" alt="logo">
                <span>Висока пословна школа<br>струковних студија</span>
            </a>
        </div>
        <div class="nav-btn">
            <button id="menu-btn"><i class="fas fa-bars"></i></button>
        </div>
        <div class="navbar" id="menu-box">
            <ul>
                <li><a href="/">Почетна</a></li>
                <li class="drop"><span>О нама</span>
                    <ul>
                        <?php foreach ($menu["odbori"] as $item) : ?>
                            <li>
                                <a href="/onama/<?php echo $item["id"]; ?>">
                                    <?php echo $item["caption"]; ?></a>
                            </li>
                        <?php endforeach; ?>
                        <li><a href="/onama/cenovnik">Ценовник</a></li>
                    </ul>
                </li>
                <li><a href="/studije">Студије</a></li>
                <li class="drop"><span>Документа</span>
                    <ul>
                        <?php foreach ($menu["dokumenta"] as $item) : ?>

                            <li>
                                <a href="/dokumenta/<?php echo $item["id"]; ?>">
                                    <?php echo $item["caption"]; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li class="drop"><span>Распоред</span>
                    <ul>
                        <li><a href="/raspored/predavanja">Предавања</a></li>
                        <li><a href="/raspored/ispiti">Испити</a></li>
                    </ul>
                </li>
                <li><a href="/vesti">Вести</a></li>
                <li><a href="/upis">Упис</a></li>
                <li><a href="/kontakt">Контакт</a></li>

            </ul>
        </div>
    </article>
</nav>