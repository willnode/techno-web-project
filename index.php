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