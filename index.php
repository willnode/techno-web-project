<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
</head>

<body>
    <ul class="menu-atas">
        <li>
            <img src="icon/beranda.png" class="menu-icon">
            <a href="." class="menu-item">Beranda</a>
        </li>
        <li>
            <img src="icon/profil.png" class="menu-icon">
            <a href="index.php?page=profil" class="menu-item">Profil</a>
        </li>
        <li>
            <img src="icon/kategori.png" class="menu-icon">
            <a href="#" class="menu-item">Kategori</a>
            <div class="menu-content">
                <a href="index.php?page=kerajinan">Kerajinan</a>
                <a href="index.php?page=kuliner">Kuliner</a>
                <a href="index.php?page=budaya">Budaya</a>
            </div>
        </li>
        <li>
            <img src="icon/galeri.png" class="menu-icon">
            <a href="index.php?page=galeri" class="menu-item">Galeri</a>
            <!---->
        </li>
        <li>
            <img src="icon/tentang.png" class="menu-icon">
            <a href="index.php?page=tentang" class="menu-item">Tentang</a>
            <!---->
        </li>
    </ul>
    <?php
        if(isset($_GET['page']))
        {
            $page=$_GET['page'];
            include "pages/" . $page . ".php";              
        } else {
            include "pages/beranda.php";
        }
    ?>
    <footer class="footer">
    <p>Copyright © Smart Friends 2018. All Rights Reserved.</p>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>