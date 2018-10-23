
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laman Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css" />
</head>
<body>

<?php
include './login.php';
if ($haslogin) {
	?>

	<div class="admin-menu">
		<ul>
			<li><a href='index.php?page=budaya'><div><span>Budaya</span></div></a></li>
			<li><a href='index.php?page=kerajinan'><div><span>Kerajinan</span></div></a></li>
			<li><a href='index.php?page=kuliner'><div><span>Kuliner</span></div></a></li>
			<li><a href='index.php?logout=ok'><div><span>🔑 Log Out</span></div></a></li>
		</ul>
	</div>
	<?php

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        include "./" . $page . ".php";
    } else {

    }
}

?>
</body>
</html>