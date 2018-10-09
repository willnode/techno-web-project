<?php
$myObj = new stdClass();
$myObj->judul = "Sistem Informasi Perkonomian Bangkalan";
$myObj->kategori = array("Kerajinan", "Kuliner", "Budaya");

$myJSON = json_encode($myObj);

echo $myJSON;
?>