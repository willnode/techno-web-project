<?php
    session_start();

    $judul="";
    $gambar="";
    $artikel="";
    $lokasi="";
    $id = 0;
    $edit_state = false;

    $db = mysqli_connect('localhost','root','','informasi');

    $results = mysqli_query ($db, "SELECT * FROM budaya");

?>